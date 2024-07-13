<template>
    <AppLayout>
      <section>
          <div class="flex flex-wrap p-8">
            <div class="w-full lg:w-2/3 font-playfair">
              <h2 class="text-2xl font-bold text-center text-primary py-5">Checkout</h2>
              <div class="flex flex-col lg:flex-row lg:gap-4">
                   <div class="w-full lg:w-1/2 h-full border-4 p-5 shadow-lg">
                        <p class="text-2xl font-medium text-secondary">Address</p>
                        <ul class="text-roboto text-md font-normal py-5">
                            <li>mirpur, dhaka</li>
                            <li>sum@sum.com</li>
                            <li>1997743456</li>
                            <li>Area: Dhaka & Delivery Charge: 120 BDT</li>
                        </ul>
                   </div>
              </div>
            </div>

            <div class="w-full lg:w-1/3 font-playfair">
              <h2 class="text-2xl font-bold text-primary py-5 px-5">Review Order Details</h2>
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
                   <RouterLink to="/payment" class="text-xl text-center bg-secondary text-white  hover:bg-primary w-full block py-1.5 my-2">Checkout</RouterLink>
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