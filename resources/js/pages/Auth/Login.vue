<script setup lang="ts">

import { ref } from 'vue';
import { useAuthStore } from '@/stores/useAuthStore.js';
import { useRouter } from 'vue-router'
import {toast} from "vue3-toastify";


const authStore = useAuthStore();
const router = useRouter()



//Login
const loginCredential = ref({
    email: 'tushar@admin.com',
    password: 'tushar',
});

const handleLogin = async () => {
    try {
        const loginResponse = await authStore.login(loginCredential.value);
        console.log(loginResponse);
        if (loginResponse) {
            toast.success('Login successful!', { autoClose: 1000 });
            router.push({ name: "Dashboard" });
        }
    } catch (error) {
        toast.error(error.response?.data?.message || 'Login failed. Please try again.', { autoClose: 1000 });
    }
}

</script>

<template>
    login
</template>
