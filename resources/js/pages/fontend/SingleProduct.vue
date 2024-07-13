<template>
    <AppLayout>
        <div class="flex flex-col lg:flex-row">
            <div class="w-full lg:w-1/2">
                <div class="lg:p-20">
                    <Gallary />
                </div>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="lg:p-20">
                    <h2 class="font-playfair font-medium text-2xl lg:text-4xl p-10 tracking-widest">TOPAZ</h2>
                    <h1 class="font-playfair font-medium text-2xl lg:text-4xl text-secondary px-10 pb-10">$59.00</h1>
                    <p class="font-roboto text-sm font-normal pl-10 tracking-wide text-gray-500">Borem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu dictum metus, maximus egestas magna.
                         Sed pellentesque nec nunc in suscipit. Quisque rutrum ullamcorper cursus. Vestibulum pellentesque commodo sem,
                          quis finibus tellus consequat vitae. Proin tempus nisi magna, iaculis molestie eros suscipit eu.</p>

                    <div class="px-10 flex gap-5 mt-16 ">
                        <input class="w-16" type="number">
                        <RouterLink to="/add-cart" class="w-56 px-5 py-3 font-playfair lg:tracking-widest bg-primary hover:bg-secondary text-white transition-all ease-in-out duration-500">ADD TO CART</RouterLink>
                    </div>
                    <div class="my-12 px-10">
                        <p class="font-playfair font-medium text-lg text-secondary">share Via</p>
                        <ul class="text-primary">
                            <li class="flex justify-center lg:justify-start gap-4 pt-5">
                                <Icon name="mdi:twitter" class=" text-lg hover:border-2 hover:border-secondary hover:rounded-full"/>
                                <Icon name="gg:facebook" class=" text-lg hover:border-2 hover:border-secondary hover:rounded-full"/>
                                <Icon name="bi:whatsapp" class=" text-lg hover:border-2 hover:border-secondary hover:rounded-full"/>
                            </li>
                        </ul>
                        <p class="font-playfair font-medium text-lg text-secondary py-3">Customer Review</p>
                        <div class="flex items-center">
                            <Icon name="material-symbols:star-rounded" class=" text-2xl text-red-500"/>
                            <Icon name="material-symbols:star-rounded" class=" text-2xl text-red-500"/>
                            <Icon name="material-symbols:star-rounded" class=" text-2xl text-red-500"/>
                            <Icon name="material-symbols:star-rounded" class=" text-2xl text-red-500"/>
                            <Icon name="material-symbols:star-rounded" class=" text-2xl text-red-500"/>
                            <p class="font-roboto text-sm font-normal tracking-wide text-gray-500">( 1 ) Ratings</p>
                        </div>
                    </div>
                    <p class="font-roboto text-sm font-normal pl-10 tracking-wide text-gray-500">Category Shop Tag Product</p>      
                </div>
            </div>
        </div> 
        <div>
            <h2 class="font-playfair font-medium text-2xl lg:text-4xl p-10 tracking-widest">Description</h2>
            <p class="font-roboto text-sm font-normal pl-10 tracking-wide text-gray-500 pb-8">Aorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu dictum metus, maximus egestas magna.
                 Sed pellentesque nec nunc in suscipit. Quisque rutrum ullamcorper cursus. Vestibulum pellentesque commodo
                  sem, quis finibus tellus consequat vitae. Proin tempus nisi magna, iaculis molestie eros suscipit eu.
                   Aorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu dictum metus, maximus egestas magna. 
                   Sed pellentesque nec nunc in suscipit. Quisque rutrum ullamcorper cursus. Vestibulum pellentesque commodo
                    sem, quis finibus tellus consequat vitae.
            </p>
            <h2 class="font-playfair font-medium text-2xl lg:text-4xl p-10 tracking-widest">Related products</h2>
            <div class="flex flex-col flex-wrap lg:flex-row items-center justify-center pb-20">
                <div class="w-full lg:w-1/6" v-for="item in 6">
                    <ProductCard />
                </div>
            </div>
            
        </div>
    </AppLayout>
</template>

<script setup>
    import AppLayout from "@/components/Layouts/AppLayout.vue";
    import Gallary from "@/components/Gallary.vue";
    import ProductCard from "@/components/ProductCard.vue";
</script>

<style lang="scss" scoped>

</style>