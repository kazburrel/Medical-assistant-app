<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { inject } from 'vue';

defineOptions({ layout: AuthenticatedLayout });

const form = useForm({
    prompt: '',
});

const submitPrompt = () => {
    form.post(route('submit.prompt'), {
        onFinish: () => form.reset('prompt'),
    });
};

// Inject the isDarkMode state from the layout
const isDarkMode = inject('isDarkMode');
</script>

<template>

    <Head title="Dashboard" />

    <template>
        <h2 :class="['fw-semibold fs-4', isDarkMode ? 'text-white' : 'text-dark']">Dashboard</h2>
    </template>

    <div class="py-5">
        <div class="container mx-auto px-3 px-lg-4">
            <div
                :class="['overflow-hidden shadow-sm rounded', isDarkMode ? 'bg-dark text-white' : 'bg-white text-dark']">
                <div class="p-3">
                    <h3 :class="['fw-bold fs-5 mb-4', isDarkMode ? 'text-white' : 'text-dark']">AI Chat Dashboard</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div :class="['p-3 rounded shadow-sm', isDarkMode ? 'bg-secondary' : 'bg-light']">
                                <h4 class="fs-6">Today</h4>
                                <div class="chat-history" :style="{
                                    height: '500px',
                                    overflowY: 'scroll',
                                    background: isDarkMode ? '#343a40' : '#f8f9fa',
                                    padding: '1rem',
                                    borderRadius: '0.25rem'
                                }">
                                    <button class="btn btn-outline-primary w-100 text-truncate"
                                        @click="displayChatHistory">
                                        Hello, how can I help you? AI: I need assistance with my account...
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div :class="['p-3 rounded shadow-sm', isDarkMode ? 'bg-secondary' : 'bg-light']">
                                <div class="chat-box" :style="{
                                    height: '500px',
                                    overflowY: 'scroll',
                                    background: isDarkMode ? '#343a40' : '#f8f9fa',
                                    padding: '1rem',
                                    borderRadius: '0.25rem'
                                }">
                                    <div class="chat-message mb-2 d-flex justify-content-end">
                                        <div
                                            :class="['p-2 rounded', isDarkMode ? 'bg-primary text-white' : 'bg-primary text-white']">
                                            Hello, how can I help you?
                                        </div>
                                    </div>
                                    <div class="chat-message mb-2 d-flex justify-content-start align-items-center">
                                        <img src="main_assets/images/Logo.png" alt="Project Logo" class="me-2"
                                            style="height: 1.5rem;">
                                        <div
                                            :class="['p-2 rounded', isDarkMode ? 'bg-secondary text-white' : 'bg-secondary text-white']">
                                            <span>I need assistance with my account.</span>
                                        </div>
                                    </div>
                                    <!-- More chat messages can be added here -->
                                </div>
                                <form @submit.prevent="submitPrompt" class="mt-3 d-flex">
                                    <input type="text" v-model="form.prompt" class="form-control me-2"
                                        :class="isDarkMode ? 'bg-dark text-white' : ''"
                                        placeholder="Type your message here..." required />
                                    <button type="submit" class="btn btn-primary" :disabled="!form.prompt">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>