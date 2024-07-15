<script setup>
import MobileNav from "@/components//MobileNav.vue";
import SideNav from "@/components//SideNav.vue";
import {ref} from 'vue';
import { RouterLink } from "vue-router";
 
const open = ref(false);

const isModalOpened = ref(false);

const openModal = () => {
  isModalOpened.value = true;
};
const closeModal = () => {
  isModalOpened.value = false;
};

</script>

<template>

<!-- Moblile nav  -->
     <MobileNav />
<!-- side nav section  -->
     <SideNav :isOpen="isModalOpened" @modal-close="closeModal"  />
<!--    top header section-->
    <section>
        <div class=" bg-black text-white justify-between items-center font-playfair py-2 px-4 hidden lg:flex">
            <div class="flex items-center">

                <div class=" hover:text-secondary  px-2 text-xs font-normal tracking-widest">
                    <p>P : + 880 138 965 4723</p>
                </div>

                <div class="rounded-full bg-secondary w-1.5 h-1.5"></div>

                <div class=" hover:text-secondary  px-2 text-xs font-normal tracking-widest">
                    <p> E : INFO@MAIL.COM</p>
                </div>

            </div>

            <div class="flex justify-center items-center gap-3 pe-5 ">

                <div class=" hover:text-secondary  px-2 text-xs font-normal tracking-widest">
                    <p>TWITTER </p>
                </div>

                <div class="rounded-full bg-secondary w-1.5 h-1.5"></div>

                <div class=" hover:text-secondary  px-2 text-xs font-normal tracking-widest">
                    <p>FACEBOOK</p>
                </div>
                <div class="rounded-full bg-secondary w-1.5 h-1.5"></div>

                <div class=" hover:text-secondary  px-2 text-xs font-normal tracking-widest">
                    <p>WHATSAPP</p>
                </div>
            </div>
        </div>
    </section>
<!--    top header section end -->


<!-- mid header section -->
 <section>
    <div class="flex items-center justify-center w-full h-full py-8 hidden lg:flex">
        <img class="w-44 h-auto object-cover hover:scale-125 transition-all ease-in-out duration-500"
         src="@/assets/images/logo.png" alt="">
    </div>
 </section>
<!-- mid header section end-->

<!--  header menu section -->
  <section>
    <div class="items-center justify-between px-4 border-y py-4 hidden lg:flex">
        <div class="w-1/6 group">
            <button @click="openModal" >
                <Icon name="ic:baseline-format-list-bulleted" class=" text-4xl hover:text-secondary group-hover:scale-75 transition-all ease-in-out duration-500" />
            </button>
        </div>
        <div class="w-4/6">
            <div class="flex items-center justify-center text-primary font-extralight  gap-10 font-playfair tracking-widest">
                <RouterLink to="/" class=" hover:text-primary transition-all ease-in-out duration-500">HOME</RouterLink>
                <RouterLink to="/all-products" class=" hover:text-secondary transition-all ease-in-out duration-500">All Products</RouterLink>
                <RouterLink to="/" class=" hover:text-secondary transition-all ease-in-out duration-500">SERVICES</RouterLink>
                <RouterLink to="/" class=" hover:text-secondary transition-all ease-in-out duration-500">PRICES</RouterLink>
                <RouterLink to="/" class=" hover:text-secondary transition-all ease-in-out duration-500">SHOP</RouterLink>
                <RouterLink to="/" class=" hover:text-secondary transition-all ease-in-out duration-500">BLOG</RouterLink>
                <RouterLink to="/" class=" hover:text-secondary transition-all ease-in-out duration-500">CONTACT</RouterLink>
            </div>
        </div>
        <div class="w-1/6 flex justify-end group">
            <RouterLink to="/login" class=" px-5 py-2 font-playfair tracking-widest bg-primary hover:bg-secondary transition-all ease-in-out duration-500 text-white">
                <span class="flex items-center hover:scale-110  transition-all ease-in-out duration-500">Login
                    <Icon name="solar:login-bold" class=" text-xl" />
                </span>
            </RouterLink>
        </div>    
        <div class="flex justify-end group px-3">
            <RouterLink to="/add-cart" class="relative flex items-center px-5 py-1 font-playfair tracking-widest bg-white border border-primary group-hover:border-secondary  transition-all ease-in-out duration-500">
                <Icon name="material-symbols-light:shopping-cart-outline-rounded" class=" text-3xl text-primary hover:scale-110 transition-all ease-in-out duration-500" />
                <span class="absolute flex items-center justify-center w-4 h-4 bg-secondary rounded-full top-0 right-3 text-white text-sm">4</span>
            </RouterLink>
        </div>  
    </div>
  </section>
<!-- header menu section end-->
</template>

<style scoped>

</style>
