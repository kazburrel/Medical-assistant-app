<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
defineOptions({ layout: AuthenticatedLayout });
</script>

<template>

    <Head title="Dashboard" />

    <template>
        <h2 class="fw-semibold fs-4 text-dark">Dashboard</h2>
    </template>

    <div class="py-5">
        <div class="container mx-auto px-3 px-lg-4">
            <div class="bg-white overflow-hidden shadow-sm rounded">
                <div class="p-3 text-dark">
                    <h3 class="fw-bold fs-5 mb-4">AI Chat Dashboard</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="bg-light p-3 rounded shadow-sm">
                                <h4 class="fs-6">Today
                                </h4>
                                <div class="chat-history"
                                    style="height: 500px; overflow-y: scroll; background: #f8f9fa; padding: 1rem; border-radius: 0.25rem;">
                                    <button class="btn btn-outline-primary w-100 text-truncate"
                                        @click="displayChatHistory">
                                        Hello, how can I help you? AI: I need assistance with my account...
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="bg-light p-3 rounded shadow-sm">
                                <div class="chat-box"
                                    style="height: 500px; overflow-y: scroll; background: #f8f9fa; padding: 1rem; border-radius: 0.25rem;">
                                    <div class="chat-message mb-2 d-flex justify-content-end">
                                        <div class="p-2 bg-primary text-white rounded">
                                            <strong>User:</strong> Hello, how can I help you?
                                        </div>
                                    </div>
                                    <div class="chat-message mb-2 d-flex justify-content-start align-items-center">
                                        <img src="main_assets/images/Logo.png" alt="Project Logo" class="me-2"
                                            style="height: 1.5rem;">
                                        <div class="p-2 bg-secondary text-white rounded">
                                            <span>I need assistance with my account.</span>
                                        </div>
                                    </div>
                                    <!-- More chat messages can be added here -->
                                </div>
                                <div class="mt-3 d-flex">
                                    <input type="text" class="form-control me-2"
                                        placeholder="Type your message here..." />
                                    <button class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
