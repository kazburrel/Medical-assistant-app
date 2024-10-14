<script setup>
import { ref } from 'vue';
import Sidebar from '../Components/Sidebar.vue';
const containerClass = ref(''); 
</script>

<template>
    <div class="flex min-h-screen">
        <Sidebar />

        <div :class="['flex-1', containerClass]">
            <div class="container-fluid px-4">
                <slot name="header" />
            </div>
            <header class="bg-gray-900 border-b border-gray-700">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <nav class="flex items-center justify-between h-16 lg:h-20">
                    </nav>
                </div>
            </header>


            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
