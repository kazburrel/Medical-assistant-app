<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
// import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
defineOptions({ layout: null });

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>

    <Head title="Log in" />

    <div v-if="status" class="mb-4 text-success">
        {{ status }}
    </div>

    <form @submit.prevent="submit">
        <div class="mb-3">
            <InputLabel for="email" value="Email" />

            <TextInput id="email" type="email" class="form-control mt-1" v-model="form.email" required autofocus
                autocomplete="username" />

            <InputError class="mt-2 text-danger" :message="form.errors.email" />
        </div>

        <div class="mb-3">
            <InputLabel for="password" value="Password" />

            <TextInput id="password" type="password" class="form-control mt-1" v-model="form.password" required
                autocomplete="current-password" />

            <InputError class="mt-2 text-danger" :message="form.errors.password" />
        </div>

        <div class="form-check mb-3">
            <label class="form-check-label">
                <Checkbox name="remember" v-model:checked="form.remember" class="form-check-input" />
                <span class="ms-2">Remember me</span>
            </label>
        </div>

        <div class="d-flex justify-content-end">
            <Link v-if="canResetPassword" :href="route('password.request')"
                class="text-decoration-underline text-secondary me-3">
            Forgot your password?
            </Link>

            <PrimaryButton class="btn btn-primary" :class="{ 'disabled': form.processing }" :disabled="form.processing">
                Log in
            </PrimaryButton>
        </div>
    </form>

</template>
