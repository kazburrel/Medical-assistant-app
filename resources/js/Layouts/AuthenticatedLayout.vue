<script setup>
import { ref, computed, provide } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
const isDarkMode = ref(false);

const toggleDarkMode = () => {
    isDarkMode.value = !isDarkMode.value;
};

const containerClass = computed(() => isDarkMode.value ? 'bg-dark text-white' : 'bg-light');
const navClass = computed(() => isDarkMode.value ? 'bg-secondary border-bottom border-dark' : 'bg-white border-bottom border-light');
const textClass = computed(() => isDarkMode.value ? 'text-white' : 'text-dark');
const secondaryTextClass = computed(() => isDarkMode.value ? 'text-light' : 'text-secondary');

provide('isDarkMode', isDarkMode);
</script>

<template>
    <div>
        <div :class="['min-vh-100', containerClass]">
            <nav :class="navClass">
                <!-- Primary Navigation Menu -->
                <div class="container-fluid px-4">
                    <div class="d-flex justify-content-between align-items-center" style="height: 4rem;">
                        <div class="d-flex">
                            <!-- Logo -->
                            <div class="d-flex align-items-center">
                                <Link :href="route('dashboard')">
                                <ApplicationLogo class="d-block"
                                    style="height: 2.25rem; width: auto; color: #343a40;" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="d-none d-sm-flex ms-3">
                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')"
                                    :class="textClass">
                                    Dashboard
                                </NavLink>
                            </div>
                        </div>

                        <!-- Dark Mode Toggle and Settings Dropdown -->
                        <div class="d-flex align-items-center ms-3">
                            <!-- Dark Mode Toggle -->
                            <button @click="toggleDarkMode"
                                :class="['btn me-2', isDarkMode ? 'btn-outline-light' : 'btn-outline-secondary']">
                                <i :class="isDarkMode ? 'fa-solid fa-sun text-white' : 'fa-solid fa-moon'"></i>
                            </button>

                            <!-- Settings Dropdown -->
                            <div class="position-relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="d-inline-flex rounded">
                                            <button type="button"
                                                class="d-inline-flex align-items-center px-3 py-2 border-0 text-sm font-medium rounded"
                                                :class="[textClass, 'bg-white hover-text-dark focus-outline-none transition']">
                                                {{ $page.props.auth.user.name }}

                                                <svg class="ms-2 me-0" style="height: 1rem; width: 1rem;"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('profile.edit')" :class="textClass"> Profile
                                        </DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button"
                                            :class="textClass">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="d-flex align-items-center d-sm-none">
                            <button @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="d-inline-flex align-items-center justify-center p-2 rounded text-secondary bg-light hover-text-dark focus-outline-none transition">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{
                                        'd-none': showingNavigationDropdown,
                                        'd-inline-flex': !showingNavigationDropdown,
                                    }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{
                                        'd-none': !showingNavigationDropdown,
                                        'd-inline-flex': showingNavigationDropdown,
                                    }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{ 'd-block': showingNavigationDropdown, 'd-none': !showingNavigationDropdown }"
                    class="d-sm-none">
                    <div class="pt-2 pb-3">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')"
                            :class="textClass">
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-top ">
                        <div class="px-4">
                            <div :class="['font-weight-medium', textClass]">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div :class="['font-weight-medium', secondaryTextClass]">{{ $page.props.auth.user.email }}
                            </div>
                        </div>

                        <div class="mt-3">
                            <ResponsiveNavLink :href="route('profile.edit')" :class="textClass"> Profile
                            </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button" :class="textClass">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow-sm" v-if="$slots.header">
                <div class="container-fluid py-3 px-4">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
