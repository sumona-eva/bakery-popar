
import { defineStore } from 'pinia';
import { ref, computed } from 'vue';
import useAxios from '@/composables/useAxios';
import { useRouter } from 'vue-router';

export const useAuthStore = defineStore('auth', () => {
    const router = useRouter();
    const user = ref(JSON.parse(localStorage.getItem('user')) ?? null);
    const isLoggedIn = computed(() => !!user.value);

    const { loading, error, sendRequest } = useAxios();

    async function fetchUser() {
        const storedUser = JSON.parse(await getLocalStorage());

        if (storedUser) {
            try {
                const { data } = await sendRequest({
                    method: 'get',
                    url: '/user',
                    headers: {
                        "Authorization": `Bearer ${storedUser?.token}`
                    }
                });

                if (data) {
                    user.value = data;
                    tokenStore.setAuthUser(data);
                } else {
                    await clearLocalStorage();
                }
            } catch (err) {
                await clearLocalStorage();
            }
        } else {
            await clearLocalStorage();
        }
    }

    async function login(credential) {
        try {
            await sendRequest({
                method: 'get',
                url: "/sanctum/csrf-cookie",
            });

            const loginResponse = await sendRequest({
                method: "POST",
                url: "/admin/login",
                data: credential
            });
            if (loginResponse.data) {
                await setLocalStorage(loginResponse.data);
                user.value = loginResponse.data;
                return loginResponse;
            }
        } catch (err) {
            throw err;
        }
    }

    async function signup(signupData) {
        try {
            const signupResponse = await sendRequest({
                method: "POST",
                url: "/api/register",
                data: signupData
            });
            if (signupResponse.data?.data) {
                await setLocalStorage(signupResponse.data.data);
                user.value = signupResponse.data.data;

                return signupResponse;
            }
        } catch (err) {
            throw err;
        }
    }

    async function logout() {
        try {
            await sendRequest({
                url: "/api/logout",
                method: "GET"
            });
            user.value = null;
            await clearLocalStorage();
            router.push({ name: "home" });
        } catch (err) {
            console.error("Logout failed", error.value);
        }
    }

    async function setLocalStorage(user) {
        localStorage.setItem('user', JSON.stringify(user));
    }

    async function clearLocalStorage() {
        localStorage.removeItem('user');
    }

    async function getLocalStorage() {
        return localStorage.getItem('user');
    }

    function getToken() {
        return JSON.parse(localStorage.getItem("user"))?.token;
    }

    return { user, login, signup, isLoggedIn, fetchUser, logout, loading, error }
});
