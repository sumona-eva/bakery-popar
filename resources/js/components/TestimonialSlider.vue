<template>
    <swiper 
    :navigation="true"
     :modules="modules" 
    :autoplay="{
        delay: 2000,
        disableOnInteraction: false,
      }"
       class="mySwiper">
        <swiper-slide>
            <div class="flex flex-col  items-center justify-center lg:px-28">
                <h3 class="text-white text-md lg:text-xl font-roboto font-normal tracking-wider text-center italic">
                    " I am thoroughly impressed with the exceptional service I received, from start to finish! "
                </h3>
                <div class="flex gap-10 items-center justify-center pt-5">
                    <div>
                        <img class="lg:w-24 lg:h-24 w-16 h-16 rounded-full lg:my-8" src="https://www.nicdarkthemes.com/themes/cake-bakery/wp/demo/bakery-wordpress-theme/wp-content/uploads/sites/5/2023/10/avatar-01.jpg" alt="">
                    </div>
                    <div>
                        <h3 class="font-roboto font-medium text-md text-white">Sarah Johnson </h3>
                        <p class="font-roboto font-light text-sm text-white">Secretary</p>
                    </div>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="flex flex-col items-center justify-center lg:px-28">
                <h3 class="text-white text-md lg:text-xl font-roboto font-normal tracking-wider text-center italic">
                    " What an incredible experience it has been! The product not only met but exceeded my needs. "
                </h3>
                <div class="flex gap-10 items-center justify-center pt-5">
                    <div>
                        <img class="lg:w-24 lg:h-24 w-16 h-16 rounded-full lg:my-8" src="https://www.nicdarkthemes.com/themes/cake-bakery/wp/demo/bakery-wordpress-theme/wp-content/uploads/sites/5/2023/10/avatar-02.jpg" alt="">
                    </div>
                    <div>
                        <h3 class="font-roboto font-medium text-md text-white">Michael Smith </h3>
                        <p class="font-roboto font-light text-sm text-white">Employee</p>
                    </div>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="flex flex-col items-center justify-center lg:px-28">
                <h3 class="text-white text-md lg:text-xl font-roboto font-normal tracking-wider text-center italic">
                    " I wanted to take a moment to express my gratitude for the outstanding job they did."
                </h3>
                <div class="flex gap-10 items-center justify-center pt-5">
                    <div>
                        <img class="lg:w-24 lg:h-24 w-16 h-16 rounded-full lg:my-8" src="https://www.nicdarkthemes.com/themes/cake-bakery/wp/demo/bakery-wordpress-theme/wp-content/uploads/sites/5/2023/10/avatar-03.jpg" alt="">
                    </div>
                    <div>
                        <h3 class="font-roboto font-medium text-md text-white">Emily Davis </h3>
                        <p class="font-roboto font-light text-sm text-white">Accountant</p>
                    </div>
                </div>
            </div>
        </swiper-slide>
    </swiper>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';

import 'swiper/css/navigation';

// import required modules
import { Navigation,Autoplay } from 'swiper/modules';

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            modules: [Navigation,Autoplay],
        };
    },
};
</script>
<style scoped>

</style>
