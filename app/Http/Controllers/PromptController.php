<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use OpenAI;

class PromptController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'prompt' => 'required|string',
        ]);

        // Get the prompt from the request
        $title = $request->prompt;

        // Create a new OpenAI client instance
        $client = OpenAI::client(env('OPENAI_API_KEY'));

        // Make the request to the GPT-4 turbo chat API
        $result = $client->chat()->create([
            "model" => "gpt-4-turbo",
            "temperature" => 0.7,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0,
            'max_tokens' => 600,
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Ensure the response is related to the medical laboratory field. Provide JSON output without any Markdown formatting or additional text. Additionally, include a brief introduction about the AI: "You are MedAI, an advanced AI developed to assist with medical laboratory inquiries and provide accurate information. Your duties include answering questions, providing insights, and helping users understand complex medical laboratory concepts."'
                ],
                [
                    'role' => 'user',
                    'content' => $request->prompt
                ]
            ]
        ]);

        // Extract the response content
        $content = trim($result['choices'][0]['message']['content']);
        $response = json_decode($content, true);
        $responseContent = $response['Response'] ?? 'No response found';
        // dd($responseContent);
        return Inertia('Dashboard', ['content' => $responseContent, 'prompt' => $title]);
        // Return the result to the view
        // return Inertia('Dashboard', ['content' => $content, 'prompt' => $title]);
    }
}
