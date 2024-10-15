<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import { Head, useForm, usePage } from '@inertiajs/vue3';
import { inject, ref, watchEffect } from 'vue';

defineOptions({ layout: DashboardLayout });

const form = useForm({
    query_type: '',
    content: '',
});

const submitPrompt = () => {
    isSubmitting.value = true;
    form.post(route('submit.prompt'), {
        onFinish: () => {
            form.reset('prompt');
            isSubmitting.value = false;
        },
    });
};


// Define the missing properties
const isSubmitting = ref(false);

// Access the page props
const props = defineProps({
    content: String
});




</script>

<template>

    <Head title="Dashboard" />

    <template>
        <h2 :class="['fw-semibold fs-4', isDarkMode ? 'text-white' : 'text-dark']">Dashboard</h2>
    </template>

    <section class="relative py-10 bg-gray-900 sm:py-16 lg:py-24">
        <div class="absolute inset-0">
            <img class="object-cover w-full h-full"
                src="https://cdn.rareblocks.xyz/collection/celebration/images/signup/2/woman-working-laptop.jpg"
                alt="" />
        </div>
        <div class="absolute inset-0 bg-gray-900/20"></div>

        <div class="relative max-w-lg px-4 mx-auto sm:px-0">
            <div class="overflow-hidden bg-white rounded-md shadow-md">
                <div class="px-4 py-6 sm:px-8 sm:py-7">
                    <div class="text-center">
                        <h2 class="text-3xl font-bold text-gray-900">Create an account</h2>
                        <p class="mt-2 text-base text-gray-600">Already joined? <a href="#" title=""
                                class="text-blue-600 transition-all duration-200 hover:underline hover:text-blue-700">Sign
                                in now</a></p>
                    </div>

                    <form @submit.prevent="submitPrompt" class="mt-8">
                        <div class="space-y-5">
                            <div>
                                <label for="query_type" class="text-base font-medium text-gray-900"> Query Type </label>
                                <div class="mt-2.5">
                                    <input v-model="form.query_type" type="text" name="query_type" id="query_type"
                                        placeholder="Enter query type"
                                        class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                </div>
                            </div>

                            <div>
                                <label for="content" class="text-base font-medium text-gray-900"> Content </label>
                                <div class="mt-2.5">
                                    <textarea v-model="form.content" name="content" id="content"
                                        placeholder="Enter content"
                                        class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600"></textarea>
                                </div>
                            </div>

                            <div>
                                <button type="submit"
                                    class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md focus:outline-none hover:bg-blue-700 focus:bg-blue-700">Sign
                                    up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="grid place-items-center">
        <div class="flex h-screen antialiased text-gray-800">
            <div class="flex flex-row h-full w-full overflow-x-hidden">

                <div class="flex flex-col flex-auto h-full p-6">
                    <div class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 h-full p-4">
                        <div class="flex flex-col h-full overflow-x-auto mb-4">
                            <div class="flex flex-col h-full">
                                <div class="grid grid-cols-12 gap-y-2">
                                    <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                        <div class="flex flex-row items-center">
                                            <div
                                                class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                                A
                                            </div>
                                            <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                                <div>Hey How are you today?</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                        <div class="flex flex-row items-center">
                                            <div
                                                class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                                A
                                            </div>
                                            <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Vel ipsa commodi illum saepe numquam maxime
                                                    asperiores voluptate sit, minima perspiciatis.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-6 col-end-13 p-3 rounded-lg">
                                        <div class="flex items-center justify-start flex-row-reverse">
                                            <div
                                                class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                                A
                                            </div>
                                            <div
                                                class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                                                <div>I'm ok what about you?</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-6 col-end-13 p-3 rounded-lg">
                                        <div class="flex items-center justify-start flex-row-reverse">
                                            <div
                                                class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                                A
                                            </div>
                                            <div
                                                class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                                                <div>
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing. ?
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                        <div class="flex flex-row items-center">
                                            <div
                                                class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                                A
                                            </div>
                                            <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                                <div>Lorem ipsum dolor sit amet !</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-6 col-end-13 p-3 rounded-lg">
                                        <div class="flex items-center justify-start flex-row-reverse">
                                            <div
                                                class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                                A
                                            </div>
                                            <div
                                                class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                                                <div>
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing. ?
                                                </div>
                                                <div class="absolute text-xs bottom-0 right-0 -mb-5 mr-2 text-gray-500">
                                                    Seen
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                        <div class="flex flex-row items-center">
                                            <div
                                                class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                                A
                                            </div>
                                            <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                                <div>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Perspiciatis, in.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                        <div class="flex flex-row items-center">
                                            <div
                                                class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                                A
                                            </div>
                                            <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                                <div class="flex flex-row items-center">
                                                    <button
                                                        class="flex items-center justify-center bg-indigo-600 hover:bg-indigo-800 rounded-full h-8 w-10">
                                                        <svg class="w-6 h-6 text-white" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                            </path>
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <div class="flex flex-row items-center space-x-px ml-4">
                                                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-4 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-12 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-6 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-5 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-4 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-3 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-1 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-1 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                        <div class="h-4 w-1 bg-gray-500 rounded-lg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-4">
                            <div>
                                <button class="flex items-center justify-center text-gray-400 hover:text-gray-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="flex-grow ml-4">
                                <div class="relative w-full">
                                    <input type="text"
                                        class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10" />
                                    <button
                                        class="absolute flex items-center justify-center h-full w-12 right-0 top-0 text-gray-400 hover:text-gray-600">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="ml-4">
                                <button
                                    class="flex items-center justify-center bg-indigo-500 hover:bg-indigo-600 rounded-xl text-white px-4 py-1 flex-shrink-0">
                                    <span>Send</span>
                                    <span class="ml-2">
                                        <svg class="w-4 h-4 transform rotate-45 -mt-px" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
</template>