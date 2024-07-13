
<template>
    <div>
      <Swiper
          :style="{
                '--swiper-navigation-color': '#000',
                '--swiper-pagination-color': '#000',
              }"
          :loop="true"
          :spaceBetween="10"
          :navigation="true"
          :thumbs="{ swiper: thumbsSwiper }"
          :modules="modules"
          class="mySwiper2"
      >
        <SwiperSlide v-for="slide in 5">
          <InnerImageZoom class="w-full h-auto  " src="https://www.nicdarkthemes.com/themes/cake-bakery/wp/demo/bakery-wordpress-theme/wp-content/uploads/sites/5/2023/10/product-01.jpg" zoomType="hover"/>
        </SwiperSlide>
      </Swiper>
      <Swiper
          @swiper="setThumbsSwiper"
          :loop="true"
          :spaceBetween="10"
          :slidesPerView="4"
          :freeMode="true"
          :watchSlidesProgress="true"
          :modules="modules"
          class="mySwiper"
      >
        <SwiperSlide v-for="slide in 5">
          <img src="https://www.nicdarkthemes.com/themes/cake-bakery/wp/demo/bakery-wordpress-theme/wp-content/uploads/sites/5/2023/10/product-06.jpg">
        </SwiperSlide>
      </Swiper>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue'
  // import '@websitebeaver/vue-magnifier/styles.css'
  import 'vue-inner-image-zoom/lib/vue-inner-image-zoom.css';
  import InnerImageZoom from 'vue-inner-image-zoom';
  
  import { Swiper, SwiperSlide } from 'swiper/vue';
  import { FreeMode, Navigation, Thumbs } from 'swiper/modules';
  import 'swiper/css';
  import 'swiper/css/free-mode';
  import 'swiper/css/navigation';
  import 'swiper/css/thumbs';
  
  const modules  = [FreeMode, Navigation, Thumbs];
  const thumbsSwiper = ref(null);
  const setThumbsSwiper = (swiper) => {
    thumbsSwiper.value = swiper;
  };
  
  
  
  
  
  
  defineProps({
    images:{
      type:Array,
      required:true
    }
  })
  // const currentSlide = ref(0)
  // const slideTo = (val)=> {
  //     currentSlide.value = val
  // }
  
  </script>
  