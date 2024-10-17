<?php

namespace App\Http\Controllers;

use App\Models\Guideline;
use App\Models\Instruction;
use Illuminate\Http\Request;
use Inertia\Inertia;
use OpenAI;

class PromptController extends Controller
{
    public function submit(Request $request)
    {
        // Insert the data into the guidelines table
        $instruction = new \App\Models\Instruction();
        $instruction->query_type = $request->input('query_type');
        $instruction->content = $request->input('content');
        $instruction->created_at = now();
        $instruction->updated_at = now();
        $instruction->save();

        // Debug and display the inserted data
        dd($instruction);

        // Validate the incoming request
        $request->validate([
            'prompt' => 'required|string',
        ]);

        // Return the result to the view
        // return Inertia('Dashboard', ['content' => $content, 'prompt' => $title]);
    }

    public function submitQuery(Request $request)
    {


        // Fetch the guideline for the given query type
        $guideline = Guideline::where('query_type', $request->query_type)->first();

        // Fetch the instruction for handling misspelled queries
        $misspelledInstruction = Instruction::where('query_type', 'Misspelled Queries')->first();

        // Create a new OpenAI client instance
        $client = OpenAI::client(env('OPENAI_API_KEY'));

        $result = $client->chat()->create([
            "model" => "gpt-4-turbo",
            "temperature" => 0.7,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0,
            // 'max_tokens' => 600,
            'messages' => [
                [
                    'role' => 'system',
                    'content' => [[
                        'type' => 'text',
                        'text' => "Provide JSON output without any Markdown formatting or additional text."
                    ]]
                ],
                [
                    'role' => 'user',
                    'content' => [[
                        'type' => 'text',
                        'text' => " Now i want you to rate $request->prompt and the answer $request->result. 
                        The query is a search done on apple music by a user who has an intention. the result is what apple music returned. 
                        I will provide a guideline for you to rate the query in $request->guideline.
                        i want you to rate it either perfect, excellent, good, acceptable, unacceptable off topic, 
                        based on the explanation given in the guideline. Give a simple comment in a simple english of why you gave the rating. Just provide the rating and the comment nothing else!!"
                    ]]
                ]
            ]
        ]);

        // Extract the response content
        $content = trim($result['choices'][0]['message']['content']);
        $response = json_decode($content, true);
        $responseContent = $response['Response'] ?? 'No response found';
        dd($response);
        $prompt = new \App\Models\Prompt();
        $prompt->user_id = $request->user()->id;
        $prompt->prompt = $request->input('prompt');
        $prompt->query_type = $request->query_type;
        $prompt->result = $request->result;
        $prompt->response = $$responseContent;
        $prompt->created_at = now();
        $prompt->updated_at = now();
        $prompt->save();
        // dd($responseContent);
        return Inertia('Dashboard', ['content' => $responseContent, 'prompt' => $title]);
    }
}
