<script setup >
import { RouterLink } from 'vue-router';


</script>

<template>
    <div class="flex flex-col rounded-t-xl overflow-hidden shadow-gray-400 shadow-2xl">
       <div>
            <img class="rounded-t-lg w-full h-48 object-cover" src="https://www.nicdarkthemes.com/themes/cake-bakery/wp/demo/bakery-wordpress-theme/wp-content/uploads/sites/5/2023/10/product-05.jpg" alt="">
       </div>
       <div class="bg-white rounded-xl p-3 ">
            <div class="flex justify-between pt-2">
                <p class="text-gray-600 font-roboto text-xs font-medium">Limited Stock</p>
                <p class="text-gray-400 font-roboto text-xs font-medium">available upon request</p> 
            </div>
           
            <div class="flex justify-between pt-6">
                <h2 class="font-playfair font-bold text-xl text-gray-600 ">Bread</h2>
                <h3 class="font-playfair font-bold text-lg text-primary ">৳ 220</h3>
            </div>

            <div class="flex items-center space-x-3 pt-6">
                <button class="bg-primary  hover:bg-secondary w-1/2 flex items-center gap-2  text-white font-base px-3 py-1
                                    transition-all ease-in-out duration-500">
                    Add Cart
                    <Icon name="lets-icons:basket-alt-3" class=" text-xl"  />
                </button>
                <button class="bg-secondary hover:bg-primary text-white w-1/2 flex items-center gap-2 font-base px-3 py-1 
                                    transition-all ease-in-out duration-500">
                     Buy Now
                     <Icon name="icon-park-twotone:buy" class=" text-xl"  />
                </button>
            </div>
       </div>
    </div>   
</template>
<style scoped>

</style>
