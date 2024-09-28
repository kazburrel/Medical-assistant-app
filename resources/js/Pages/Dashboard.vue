<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm, usePage } from '@inertiajs/vue3';
import { inject, ref, watchEffect } from 'vue';

defineOptions({ layout: AuthenticatedLayout });

const form = useForm({
    prompt: '',
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

// Inject the isDarkMode state from the layout
const isDarkMode = inject('isDarkMode');

// Define the missing properties
const isSubmitting = ref(false);

// Access the page props
const props = defineProps({
    content: String
});

// Typing effect for content
const displayedContent = ref('');
let typingIndex = 0;

watchEffect(() => {
    if (props.content) {
        displayedContent.value = '';
        typingIndex = 0;
        typeContent();
    }
});

const typeContent = () => {
    if (typingIndex < props.content.length) {
        displayedContent.value += props.content.charAt(typingIndex);
        typingIndex++;
        setTimeout(typeContent, 50); // Adjust typing speed here
    }
};

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
                                    <div v-if="form.prompt">
                                        <div class="chat-message mb-2 d-flex justify-content-end">
                                            <div
                                                :class="['p-2 rounded', isDarkMode ? 'bg-primary text-white' : 'bg-primary text-white']">
                                                {{ form.prompt }}
                                            </div>
                                        </div>
                                        <div v-if="displayedContent"
                                            class="chat-message mb-2 d-flex justify-content-start align-items-center">
                                            <img src="main_assets/images/Logo.png" alt="Project Logo" class="me-2"
                                                style="height: 1.5rem;">
                                            <div
                                                :class="['p-2 rounded', isDarkMode ? 'bg-secondary text-white' : 'bg-secondary text-white']">
                                                <span>{{ displayedContent }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form @submit.prevent="submitPrompt" class="mt-3 d-flex">
                                    <input type="text" v-model="form.prompt" class="form-control me-2"
                                        :class="isDarkMode ? 'bg-dark text-white' : ''"
                                        placeholder="Type your message here..." required :disabled="isSubmitting"
                                        @keyup.enter="isSubmitting ? $event.preventDefault() : submitPrompt()" />
                                    <button type="submit" class="btn btn-primary"
                                        :disabled="!form.prompt || isSubmitting">
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