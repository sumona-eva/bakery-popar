<script setup>
    import { defineProps, defineEmits, ref } from "vue";
    import {onClickOutside} from '@vueuse/core'
    const props = defineProps({
        isOpen: Boolean,
    });
    const emit = defineEmits(["modal-close"]);
    const target = ref(null)
    onClickOutside(target, ()=>emit('modal-close'))
</script>

<template>
    <div class="fixed top-0  bottom-0 right-0  h-screen z-50 bg-black/60  transition-all ease-in-out duration-700" 
    :class="{'w-full opacity-100 ': isOpen, 'w-0 opacity-0': !isOpen}"></div>

    <div class=" w-[450px] transition-all ease-in-out duration-1000 h-screen fixed z-50 bg-gray-50 top-0 left-0 bottom-0 overflow-y-scroll hidden lg:block"
            :class="{'translate-x-0': isOpen, '-translate-x-[450px]': !isOpen}" ref="target">
           <div class="flex justify-end p-5">
                <button @click.stop="emit('modal-close')">
                    <Icon name="material-symbols:close" class=" text-5xl text-primary hover:text-secondary p-1"/>
                </button>
           </div>
    
        <div class="px-8 py-5 text-gray-600 ">
            <h2 class="tracking-widest font-playfair font-extrabold text-2xl">Top Category</h2>
            <ul class="py-5 px-4 font-playfair leading-loose font-semibold text-md tracking-widest">
                <li class=" uppercase hover:text-secondary">Bread</li>
                <li class=" uppercase hover:text-secondary">Pasty</li>
                <li class=" uppercase hover:text-secondary">Drinks</li>
                <li class=" uppercase hover:text-secondary">Hot-food</li>
                <li class=" uppercase hover:text-secondary">Cookies</li>
            </ul>

            <h2 class="tracking-widest font-playfair font-extrabold text-2xl">Our Branch</h2>
            <ul class="py-5 px-4 font-playfair leading-relaxed font-medium text-md tracking-wider">
                <li class="">
                    <span class="text-secondary font-bold text-lg">POPLAR - </span> 
                    <span class="text-primary font-bold text-sm">Jamuna Future Park</span> 
                </li>
                <li>Level-5(5A-005), Cinema Next Door</li>
                <li>Kuril, Dhaka - 1229</li>
                <li>Hotline: 01847 - 228111</li>
            </ul>
             
            <ul class="py-5 px-4 font-playfair leading-relaxed font-medium text-md tracking-wider">
                <li class="">
                    <span class="text-secondary font-bold text-lg">POPLAR - </span> 
                    <span class="text-primary font-bold text-sm">Uttara</span> 
                </li>
                <li>House: #20, (Ground Floor)</li>
                <li>Lake Drive Road, Sector - 7</li>
                <li>Uttara, Dhaka - 1230</li>
                <li>Hotline: 01325 - 099390</li>
            </ul>

            <h2 class="tracking-widest font-playfair font-extrabold text-2xl">Contact Us</h2>
            <ul class="pt-4 px-4 font-playfair leading-relaxed font-medium text-md tracking-wider">
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
</template>

<style lang="scss" scoped>

</style>