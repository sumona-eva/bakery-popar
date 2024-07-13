<template>
    <AppLayout> 
        <section>
            <div class="flex justify-between px-5 py-2 text-primary text-lg font-semibold font-playfair lg:hidden
                        transition-all ease-in-out duration-1000">
                <h2>All products</h2>
                <button @click="filter = !filter" >
                    <Icon name="material-symbols:filter-alt-outline" class="text-secondary text-2xl"  />
                </button>
            </div>

            <div class="container flex">
                <div class="fixed z-10 top-0 left-0 bottom-0 w-52 lg:relative lg:w-3/12 lg:block lg:translate-x-0 overflow-scroll  bg-white transition-all ease-in-out duration-700"
                :class="{'translate-x-0' : filter, '-translate-x-60' : !filter}">
                    <div class="border-r px-5 py-12 w-full">
                        <div>
                            <ul>
                                <li>
                                    <div class="group flex items-center gap-3 py-[6px] px-4 rounded-lg transition-all ease-in-out duration-300 cursor-pointer relative" @click="isCetagoryLinks = !isCetagoryLinks">
                                      <span class="font-playfair tracking-widest  group-hover:text-secondary text-lg font-medium transition-all ease-in-out duration-300">Cetagory</span>
                                      <div class="absolute top-1/2 -translate-y-1/2 right-2 transition-all  ease-in-out duration-300" :class="{'rotate-90 ' : isCetagoryLinks}">
                                        <Icon name="ic:twotone-keyboard-arrow-right" size="20" class="group-hover:text-secondary  transition-all ease-in-out duration-300"  />
                                      </div>
                                    </div>

                                    <div class="overflow-hidden">
                                      <ul class="cetagory-links flex flex-col gap-3 text-sm font-playfair pl-8 py-4" :class="{'cetagory-links--active' : isCetagoryLinks}">
                                        <li class="category-filter">
                                            <input type="checkbox" id="category-1" class="hidden">
                                            <label for="category-1" class="flex items-center gap-2">
                                                <span class="border-2 border-secondary w-5 h-5 rounded-full flex items-center justify-center ">
                                                    <span class="icon w-3 h-3 rounded-full block"></span>
                                                </span>
                                                <p>Topaz</p>
                                            </label>
                                        </li>
                                        <li class="category-filter">
                                            <input type="checkbox" id="category-2" class="hidden">
                                            <label for="category-2" class="flex items-center gap-2">
                                                <span class="border-2 border-secondary w-5 h-5 rounded-full flex items-center justify-center ">
                                                    <span class="icon w-3 h-3 rounded-full block"></span>
                                                </span>
                                                <p>Jade</p>
                                            </label>
                                        </li>
                                        <li class="category-filter">
                                            <input type="checkbox" id="category-3" class="hidden">
                                            <label for="category-3" class="flex items-center gap-2">
                                                <span class="border-2 border-secondary w-5 h-5 rounded-full flex items-center justify-center ">
                                                    <span class="icon w-3 h-3 rounded-full block"></span>
                                                </span>
                                                <p>Pearl</p>
                                            </label>
                                        </li>
                                        <li class="category-filter ">
                                            <input type="checkbox" id="category-4" class="hidden">
                                            <label for="category-4" class="flex items-center gap-2">
                                                <span class="border-2 border-secondary w-5 h-5 rounded-full flex items-center justify-center ">
                                                    <span class="icon w-3 h-3 rounded-full block"></span>
                                                </span>
                                                <p>Emerald</p>
                                            </label>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                  <li>
                                    <div class=" group flex items-center gap-3  py-[6px] px-4 rounded-lg transition-all ease-in-out duration-300 cursor-pointer relative" @click="isPriceLinks = !isPriceLinks">
                                     
                                      <span class="font-playfair tracking-widest  group-hover:text-secondary text-lg font-medium transition-all ease-in-out duration-300">Price</span>
                                      <div class="absolute top-1/2 -translate-y-1/2 right-2 transition-all  ease-in-out duration-300" :class="{'rotate-90 ' : isPriceLinks}">
                                        <Icon name="ic:twotone-keyboard-arrow-right" size="20" class="group-hover:text-secondary  transition-all ease-in-out duration-300"  />
                                      </div>
                                    </div>

                                    <div class="overflow-hidden">
                                      <ul class="price-links flex flex-col  gap-3 text-sm font-playfair pl-8 py-4" :class="{'price-links--active' : isPriceLinks}">
                                        <li class="category-filter">
                                            <input type="checkbox" id="price-1" class="hidden">
                                            <label for="price-1" class="flex items-center gap-2">
                                                <span class="border-2 border-secondary w-5 h-5 rounded-full flex items-center justify-center ">
                                                    <span class="icon w-3 h-3 rounded-full block"></span>
                                                </span>
                                                <p>0 - 500</p>
                                            </label>
                                        </li>
                                        <li class="category-filter">
                                            <input type="checkbox" id="price-2" class="hidden">
                                            <label for="price-2" class="flex items-center gap-2">
                                                <span class="border-2 border-secondary w-5 h-5 rounded-full flex items-center justify-center ">
                                                    <span class="icon w-3 h-3 rounded-full block"></span>
                                                </span>
                                                <p>500 - 800</p>
                                            </label>
                                        </li>
                                        <li class="category-filter">
                                            <input type="checkbox" id="price-3" class="hidden">
                                            <label for="price-3" class="flex items-center gap-2">
                                                <span class="border-2 border-secondary w-5 h-5 rounded-full flex items-center justify-center ">
                                                    <span class="icon w-3 h-3 rounded-full block"></span>
                                                </span>
                                                <p>800 - 1000</p>
                                            </label>
                                        </li>
                                        <li class="category-filter ">
                                            <input type="checkbox" id="price-4" class="hidden">
                                            <label for="price-4" class="flex items-center gap-2">
                                                <span class="border-2 border-secondary w-5 h-5 rounded-full flex items-center justify-center ">
                                                    <span class="icon w-3 h-3 rounded-full block"></span>
                                                </span>
                                                <p>1000- more</p>
                                            </label>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                  <li>
                                    <div class=" group flex items-center gap-3  py-[6px] px-4 rounded-lg transition-all ease-in-out duration-300 cursor-pointer relative" @click="isLocationLinks = !isLocationLinks">
                                     
                                      <span class="font-playfair tracking-widest  group-hover:text-secondary text-lg font-medium transition-all ease-in-out duration-300">Location</span>
                                      <div class="absolute top-1/2 -translate-y-1/2 right-2 transition-all  ease-in-out duration-300" :class="{'rotate-90 ' : isLocationLinks}">
                                        <Icon name="ic:twotone-keyboard-arrow-right" size="20" class="group-hover:text-secondary  transition-all ease-in-out duration-300"  />
                                      </div>
                                    </div>

                                    <div class="overflow-hidden">
                                      <ul class="location-links flex flex-col gap-3 text-sm font-playfair pl-8 py-4" :class="{'location-links--active' : isLocationLinks}">
                                        <li class="category-filter">
                                            <input type="checkbox" id="location-1" class="hidden">
                                            <label for="location-1" class="flex items-center gap-2">
                                                <span class="border-2 border-secondary w-5 h-5 rounded-full flex items-center justify-center ">
                                                    <span class="icon w-3 h-3 rounded-full block"></span>
                                                </span>
                                                <p>Gulshan - 1 </p>
                                            </label>
                                        </li>
                                        <li class="category-filter">
                                            <input type="checkbox" id="location-2" class="hidden">
                                            <label for="location-2" class="flex items-center gap-2">
                                                <span class="border-2 border-secondary w-5 h-5 rounded-full flex items-center justify-center ">
                                                    <span class="icon w-3 h-3 rounded-full block"></span>
                                                </span>
                                                <p>Gulshan - 2</p>
                                            </label>
                                        </li>
                                        <li class="category-filter">
                                            <input type="checkbox" id="location-3" class="hidden">
                                            <label for="location-3" class="flex items-center gap-2">
                                                <span class="border-2 border-secondary w-5 h-5 rounded-full flex items-center justify-center ">
                                                    <span class="icon w-3 h-3 rounded-full block"></span>
                                                </span>
                                                <p>Rampura</p>
                                            </label>
                                        </li>
                                        <li class="category-filter ">
                                            <input type="checkbox" id="location-4" class="hidden">
                                            <label for="location-4" class="flex items-center gap-2">
                                                <span class="border-2 border-secondary w-5 h-5 rounded-full flex items-center justify-center ">
                                                    <span class="icon w-3 h-3 rounded-full block"></span>
                                                </span>
                                                <p>Merul Badda</p>
                                            </label>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="-full lg:w-9/12 ">
                    <div class="flex flex-wrap pb-8">
                        <div class="w-full lg:w-1/3 py-4 px-3"  v-for="item in 9">
                            <ProductCard />
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </AppLayout>
</template>
<script setup>
import AppLayout from "@/components/Layouts/AppLayout.vue";
import ProductCard from "@/components/ProductCard.vue";
import {ref} from 'vue';
const isCetagoryLinks = ref(true);
const isPriceLinks = ref(true);
const isLocationLinks = ref(true);
const filter = ref(false);
</script>