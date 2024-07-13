<template>
    <AppLayout>
        <section>
            <div class="bg-[url('https://www.nicdarkthemes.com/themes/cake-bakery/wp/demo/bakery-wordpress-theme/wp-content/uploads/sites/5/2023/10/focus-06-1024x683.jpg')]
                        relative bg-cover bg-center bg-no-repeat py-10">
                <span class="absolute w-full h-full top-0 bottom-0 right-0 left-0 bg-black/70"></span>>
                <div class="relative z-40 flex justify-center font-playfair">
                    
                    <div class="w-7/12 bg-white rounded-xl ">
                        <div class="flex gap-2 p-3">

                            <div class="w-7/12">
                                <div class="w-full h-full rounded-xl">
                                    <img class="w-full h-[550px] rounded-xl object-cover" 
                                    src="https://img.freepik.com/free-photo/basket-with-assortment-bread-pastry_23-2148359141.jpg?t=st=1720700540~exp=1720704140~hmac=268f4943bb490c0cd552133bc0f4b14bbed5f6bb65234651edc1547c48c9ffba&w=360" alt="">
                                </div>
                            </div>

                            <div class="w-5/12">
                                <div class="w-full max-w-xs h-full bg-primary/55 rounded-xl shadow-md">
                                    <h3 class="text-center text-white font-bold text-2xl py-5">Registration</h3>
                                    <form  action="" class="px-8">
            
                                        <div class="text-white">
                                            <label for="name" class="block pb-1" >Name</label>
                                            <input type="text" name="name" id="name" class="block w-full border-0 py-2 text-primary shadow-sm ring-1
                                             ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your Name">
                                        </div>
                                        <div class="text-white">
                                            <label for="email" class="block pb-1" >Email</label>
                                            <input type="email" name="email" id="email" class="block w-full border-0 py-2 text-primary shadow-sm ring-1
                                             ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your Email">
                                        </div>
                                        <div class="text-white">
                                            <label for="number" class="block pb-1" >Phone Number</label>
                                            <input type="number" name="number" id="number" class="block w-full border-0 py-2 text-primary shadow-sm ring-1 
                                            ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your Phone Number">
                                        </div>
                                        <div class="text-white">
                                            <label for="password" class="block pb-1">Password</label>
                                            <input type="password" name="password"  id="password" class="block w-full border-0 py-2 text-primary shadow-sm ring-1
                                              ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your Password">
                                        </div>
                            
                                        <div class="text-center py-5">
                                            <button class="w-full py-2 bg-secondary hover:bg-white transition-all ease-in-out duration-500
                                             text-white hover:text-secondary font-bold text-center my-2">Register</button>
                                        </div>
                                        <p class="font-normal text-sm p-3 text-center text-white">Already Have an Account?
                                            <RouterLink to="/login" class="flex items-center justify-center hover:text-primary hover:font-bold">Login
                                            </RouterLink>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
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