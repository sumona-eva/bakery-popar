<template>
    <AppLayout>
      <section>
          <div class="flex flex-wrap p-8">
            <div class="w-full lg:w-2/3 font-playfair">
              <h2 class="text-2xl font-bold text-primary py-5">Cart</h2>
              <div class="flex flex-col lg:flex-row lg:gap-4">
                <div class="w-full lg:w-1/4 px-5">
                  <div class="w-full h-auto py-4">
                    <img class="w-48 h-36 rounded-lg" src="https://www.nicdarkthemes.com/themes/cake-bakery/wp/demo/bakery-wordpress-theme/wp-content/uploads/sites/5/2023/10/product-01.jpg" alt="">
                  </div>
                </div>

                <div class="w-full lg:w-3/4 px-5 ">
                  <div class="flex flex-col lg:flex-row justify-between">
                    <div>
                      <h2 class="text-xl font-semibold text-primary py-5">Topaz</h2>
                      <p class="font-normal text-md pt-3">Starting from $ 0.83</p>
                      <p class="font-normal text-md pb-3 text-gray-500">24 November 2024 , 1AM</p>
                    </div>
                    <div class="flex items-center gap-6 text-gray-500 lg:pr-16">

                        <p class="font-normal text-md">$ 59.83</p>
                    
                      <button class="flex gap-2 items-center justify-center ">
                        <span class="font-normal text-md text-gray-500">Remove</span>
                      </button>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="w-full lg:w-1/3 font-playfair pt-20">
              
              <div>
                <div class="flex gap-20 p-5 border bg-gray-200 rounded-lg m-2">
                  <div>
                    <h2 class="text-xlfont-semibold text-primary ">Topaz</h2>
                    <p class="text-md">2 pis * $64 </p>
                  </div>
                  <div>
                    <span> = $125</span>
                  </div>
                </div>
              </div>

              <div class="p-5 bg-gray-200  rounded-lg m-2">
                    <ul>
                        <li class="flex items-center justify-between text-md text-gray-500">
                            <p>Booking Fee </p> 
                            <p>$ 50.00</p>           
                        </li>
                        <li class="flex items-center justify-between text-md text-gray-500">
                            <p>Sub Total </p>
                            <p>$ 125.00</p>
                        </li>
                        <li class="flex items-center justify-between  text-xl py-3 font-semibold">
                            <p>Grant Total </p>
                            <p>$ 170.00</p>
                        </li>
                    </ul>
                   <RouterLink to="/checkout" class="text-xl text-center bg-secondary text-white  hover:bg-primary w-full block py-1.5 my-2">Proccess to Checkout</RouterLink>
              </div>
            </div>
          </div>
          
      </section>
    </AppLayout>
  </template>

<script setup>

import AppLayout from "@/components/Layouts/AppLayout.vue";
</script>

<style scoped>

</style>