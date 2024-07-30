
import { ref } from 'vue';
import axios from 'axios';
// import { useAuthStore } from '@/stores/useAuthStore.js';
// const authStore = useAuthStore();
import { toast } from 'vue3-toastify';

const axiosInstance  = axios.create({
    baseURL: 'http://localhost:8000/api', // 'http://localhost:8000/api', https://dashboard.ctpse.info/api
    withCredentials: true,
    xsrfHeaderName: "X-XSRF-TOKEN",


});

export default function useAxios() {
    const loading = ref(false);
    const error = ref(null);

    const sendRequest = async (config) => {
        loading.value = true;
        error.value = null;
        try {
            const response = await axiosInstance(config);
            return response;
        } catch (err) {
            error.value = err.response ? err.response.data : err.message;
            toast.error(error.value.message, {autoClose: 2000});
        } finally {
            loading.value = false;
        }
    };

    return {
        loading,
        error,
        sendRequest,
    };
}
