
<script setup lang="ts">
import {ref} from 'vue'
const toggleNav = ref(false);
</script>

<template>
    <!--  phone nav bar-->

    <nav class="lg:hidden px-5 z-50 fixed top-0 left-0 right-0 w-full bg-white shadow-xl" >

            <!--        menu & logo  -->
            <div class="flex items-center justify-between">

                <div>
                    <RouterLink to="/" class="">
                        <img class="w-24 h-auto p-2" src="@/assets/images/logo.png"  alt="Logo" >
                    </RouterLink>
                </div>

                <div>
                    <!--            menu bar-->
                    <div class="flex gap-3">
                        <div class="relative">
                            <Icon name="material-symbols-light:shopping-cart-outline-rounded" class=" text-3xl text-primary" />
                            <span class="absolute flex items-center justify-center w-4 h-4 bg-secondary rounded-full -top-1 -right-1 text-white text-sm">4</span>
                         </div>           
                        <div class="elegance-hamburger-menu" @click="toggleNav = !toggleNav">
                            <div class="elegance-hamburger-menu__btn" :class="{'elegance-hamburger-menu__btn--active' : toggleNav}">
                                <span></span>
                            </div>
                        </div>
                    </div>
                     

                    <div :class="{'translate-x-0': toggleNav, 'translate-x-80': !toggleNav}" class="fixed top-0 right-0 bottom-0 w-64 h-full z-50 lg:hidden transition-all ease-in-out duration-500
                         bg-white border-2 border-gray-100">
                         <div class="flex justify-between p-5">
                            <button  @click="toggleNav = false">
                                <Icon name="material-symbols:close-small" class=" text-4xl text-secondary" />
                            </button>
                           
                            <span class="flex gap-1 text-lg text-primary font-medium">
                               Login <Icon name="mdi:account-arrow-right-outline" class=" text-2xl text-secondary" />
                            </span>
                         </div>
                        
                        <ul class="px-5 font-bold font-playfair text-xl bg-gradient-to-r from-primary to-secondary inline-block text-transparent bg-clip-text">
                            <li class="pt-2">
                                <RouterLink to="/">Home</RouterLink>
                            </li>
                            <li class="pt-2">
                                <RouterLink to="/all-products">All Products</RouterLink>
                            </li>
                            <li class="pt-2">
                                <RouterLink to="/">Package</RouterLink>
                            </li>
                            <li class="pt-2">
                                <RouterLink to="/">Portfolio</RouterLink>
                            </li>
                            <li class="pt-2">
                                <RouterLink to="/">About Us</RouterLink>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        
    </nav>
    <!--  phone nav bar end-->
</template>
