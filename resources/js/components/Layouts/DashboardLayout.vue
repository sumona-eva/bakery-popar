<script setup lang="ts">
import SideBar from '@/components/Layouts/SideBar.vue';
</script>
<template>

    <div class="bg-primary w-full h-screen flex">
        <aside class="w-44 fixed top-0 left-0 bottom-0 h-screen bg-secondary shadow-2xl">
            <SideBar />
        </aside>
        <main class="ml-44 w-full h-screen bg-slate-100 p-4 pb-10">
            <div class="pb-1">
                <slot />
            </div>
        </main>
    </div>
</template>
 