<script setup >

import AppLayout from "@/components/Layouts/AppLayout.vue";
import Slider from "@/components/Slider.vue";
import TestimonialSlider from "@/components/TestimonialSlider.vue";
import ProductCard from "@/components/ProductCard.vue";
import { RouterLink } from "vue-router";
</script>

<template>
    <AppLayout>
        <Slider />
<!--hero section-->
        <section class="relative z-40 -mt-20 hidden lg:block">
            <div class="flex flex-wrap px-4 -mx-3">
               <div class="w-full lg:w-1/3 px-3">
                    <div class="border-t border-white ">
                        <p class="font-playfair py-8 pl-8 tracking-widest text-white text-md font-normal">Info@gmail.com </p>
                    </div>
               </div>
               <div class="w-full lg:w-1/3 px-3">
                    <div class="border-t border-white ">
                        <p class="font-playfair py-8 tracking-widest text-white text-md font-normal text-center"> 0199 9944 7744</p>
                    </div>
               </div>
               <div class="w-full lg:w-1/3 px-3">
                    <div class="border-t border-white ">
                        <p class="font-playfair py-8 pr-8 tracking-widest text-white text-md font-normal text-right">901 Ave Mary - Miami</p>
                    </div>
               </div>
            </div>
        </section>

<!-- product section -->
        <section>
            <div class="text-center">
                <h2 class="tracking-widest py-20 font-playfair font-extrabold 
                text-3xl lg:text-4xl pb-20 uppercase">Recommended </h2>
            </div>
            

            <div class="container flex flex-wrap pb-8">
                <div class="w-full lg:w-1/4 p-3"  v-for="item in 8">
                    <ProductCard />
                </div>
            </div>
            <div class="text-center">
                <h2 class="tracking-widest py-10 font-playfair font-extrabold text-3xl lg:text-4xl pb-20 uppercase">All Items</h2>
            </div>                
            <div class="container">
                <h2 class="tracking-widest py-10 px-5 font-playfair font-extrabold text-3xl uppercase">Bread</h2>
                <div class="flex flex-wrap pb-8">
                    <div class="w-full lg:w-1/4 p-3" v-for="item in 4">
                        <ProductCard />
                    </div>
                </div>
            </div>
               
            <div class="container">
                <h2 class="tracking-widest py-10 px-5 font-playfair font-extrabold text-3xl uppercase">Pasty</h2>
                <div class="flex flex-wrap pb-8">
                    <div class="w-full lg:w-1/4 p-3" v-for="item in 4">
                        <ProductCard />
                    </div>
                </div>
            </div>
               
            
        </section>
<!-- testimonial section  -->
        <section class="bg-[url('https://www.nicdarkthemes.com/themes/cake-bakery/wp/demo/bakery-wordpress-theme/wp-content/uploads/sites/5/2023/10/parallax-01.jpg')]
                       relative bg-cover bg-center bg-no-repeat py-24 my-20">
           <span class="absolute w-full h-full top-0 bottom-0 right-0 left-0 bg-black/50"></span>
            <div class="flex flex-col lg:flex-row items-center px-4 relative z-40">
                <div class="w-full lg:w-1/2 pb-8 lg:pb-0">
                    <div>
                        <p class="text-white tracking-widest font-roboto text-md font-normal py-5">VOICES OF DELIGHT</p>
                        <h2 class="text-white tracking-widest font-playfair font-medium text-2xl lg:text-4xl leading-normal pb-5">ECHOES OF EXCELLENCE: IMMERSIVE TESTIMONIALS</h2>
                        <a href="" class="text-lg font-normal text-gray-400 underline">Customer Experiences</a>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 ">
                    <div>
                        <TestimonialSlider />
                    </div>
                </div>
            </div>
        </section>
<!--  statistis section-->
        <section>
           <div class="bg-[url('https://www.nicdarkthemes.com/themes/cake-bakery/wp/demo/bakery-wordpress-theme/wp-content/uploads/sites/5/2023/10/parallax-02.jpg')]
                        relative bg-cover bg-center bg-no-repeat py-20 mb-20">
              <span class="absolute w-full h-full top-0 bottom-0 right-0 left-0 bg-black/50"></span>

              <div class="relative z-30 flex flex-col lg:flex-row gap-3 items-center justify-center">
                    <div class="w-full lg:w-1/4">
                        <div class="flex gap-5 items-center justify-center text-white tracking-widest">
                            <p class="text-6xl font-playfair font-normal">84</p>
                            <ul class="font-playfair font-normal">
                                <li class="text-xs leading-loose">New</li>
                                <li> Projects</li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/4">
                        <div class="flex gap-5 items-center justify-center text-white tracking-widest">
                            <p class="text-6xl font-playfair font-normal">12</p>
                            <ul class="font-playfair font-normal">
                                <li class="text-xs leading-loose">Good</li>
                                <li> Collaborators</li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/4">
                        <div class="flex gap-5 items-center justify-center text-white tracking-widest">
                            <p class="text-6xl font-playfair font-normal">67</p>
                            <ul class="font-playfair font-normal">
                                <li class="text-xs leading-loose">Goal</li>
                                <li> Achieved</li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/4">
                        <div class="flex gap-5 items-center justify-center text-white tracking-widest">
                            <p class="text-6xl font-playfair font-normal">12</p>
                            <ul class="font-playfair font-normal">
                                <li class="text-xs leading-loose">Deep</li>
                                <li> Analysis</li>
                            </ul>
                        </div>
                    </div>
              </div>
           </div>
        </section>

    </AppLayout>
</template>
<style scoped>

</style>
