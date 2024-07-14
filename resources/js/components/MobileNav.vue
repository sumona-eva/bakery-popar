
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
                         bg-white border-2 border-gray-100 overflow-y-scroll">
                         <div class="flex justify-between py-4 px-3">
                            <button  @click="toggleNav = false">
                                <Icon name="material-symbols:close-small" class=" text-4xl text-secondary" />
                            </button>
                           
                            <span class="flex gap-1 text-lg text-primary font-medium">
                               Login <Icon name="mdi:account-arrow-right-outline" class=" text-2xl text-secondary" />
                            </span>
                         </div>
                        
                         <div class="px-4 py-3 text-gray-600 ">
                            <h2 class="tracking-wider font-playfair font-extrabold text-xl">Top Category</h2>
                            <ul class="py-3 px-2 font-roboto leading-loose font-semibold text-sm tracking-wide">
                                <li class=" uppercase hover:text-secondary">Bread</li>
                                <li class=" uppercase hover:text-secondary">Pasty</li>
                                <li class=" uppercase hover:text-secondary">Drinks</li>
                                <li class=" uppercase hover:text-secondary">Hot-food</li>
                                <li class=" uppercase hover:text-secondary">Cookies</li>
                            </ul>
                
                            <h2 class="tracking-wider font-playfair font-extrabold text-xl">Our Branch</h2>
                            <ul class="py-3 px-2 font-roboto leading-relaxed font-medium text-sm tracking-wide">
                                <li class="">
                                    <span class="text-secondary font-bold">POPLAR - </span> 
                                    <span class="text-primary font-bold text-sm">Jamuna Future Park</span> 
                                </li>
                                <li>Level-5(5A-005), Cinema Next Door</li>
                                <li>Kuril, Dhaka - 1229</li>
                                <li>Hotline: 01847 - 228111</li>
                            </ul>
                             
                            <ul class="py-3 px-2 font-roboto leading-relaxed font-medium text-sm tracking-wider">
                                <li class="py-1">
                                    <span class="text-secondary font-bold">POPLAR - </span> 
                                    <span class="text-primary font-bold text-sm">Uttara</span> 
                                </li>
                                <li>House: #20, (Ground Floor)</li>
                                <li>Lake Drive Road,Sector-7</li>
                                <li>Uttara, Dhaka - 1230</li>
                                <li>Hotline: 01325 - 099390</li>
                            </ul>
                
                            <h2 class="tracking-wider font-playfair font-extrabold text-xl">Contact Us</h2>
                            <ul class="pt-4 px-4 font-playfair leading-relaxed font-medium text-md tracking-wide">
                                <li class="font-roboto text-sm ">Contact +1 473 483 384</li>
                                <li class="font-roboto text-sm ">Office +1 395 393 595</li>
                            </ul>
                    
                            <ul class="flex items-center gap-2 p-5">
                                <li>
                                    <a href="" class="w-8 h-8 flex items-center justify-center  text-white bg-primary hover:bg-secondary p-1">
                                        <Icon name="mdi:twitter" class=" text-2xl" />
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="w-8 h-8 flex items-center justify-center text-white bg-primary hover:bg-secondary p-1">
                                        <Icon name="gg:facebook" class=" text-2xl" />
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="w-8 h-8 flex items-center justify-center text-white bg-primary hover:bg-secondary p-1">
                                        <Icon name="mingcute:whatsapp-line" class=" text-2xl"/>
                                    </a>
                                </li>  
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        
    </nav>
    <!--  phone nav bar end-->
</template>
