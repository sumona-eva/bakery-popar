<script setup>

import Header from "@/components/Header.vue";
import Footer from "@/components/Footer.vue";
import PreLoader from "@/components/PreLoader.vue";
import { onMounted, ref} from 'vue';

const show = ref(true)
onMounted(()=>{
    setTimeout(()=>{
        show.value = false
    }, 2500)
})

</script>

<template>
    <PreLoader v-if="show"/>
    <div class="">
        <header>
            <Header />
        </header>
      
        <main>
            <slot />
        </main>
        <footer>
            <Footer />
        </footer>

    </div>
</template>

<style scoped>

</style>
