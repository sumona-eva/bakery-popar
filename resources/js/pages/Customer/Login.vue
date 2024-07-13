<template>
    <AppLayout>
        <section>
            <div class="bg-[url('https://www.nicdarkthemes.com/themes/cake-bakery/wp/demo/bakery-wordpress-theme/wp-content/uploads/sites/5/2023/10/focus-08-1024x683.jpg')]
                        relative bg-cover bg-center bg-no-repeat py-10">
                <span class="absolute w-full h-full top-0 bottom-0 right-0 left-0 bg-black/70"></span>
                <div class="relative z-40 flex justify-center font-playfair">

                    <div class="w-1/2 bg-white rounded-xl ">
                        <div class="flex gap-2 p-3">
                            <div class="w-1/2">
                                <div class="w-full max-w-xs h-full bg-primary/55 rounded-xl shadow-md">
                                    <h3 class="text-center text-white font-bold text-2xl py-5">Login</h3>
                                    <form  action="" class="px-8">
                            
                                    <div class="text-white">
                                        <label for="email" class="block pb-1" >Username</label>
                                        <input type="email" name="email" id="email" class="block w-full border-0 py-2 text-primary shadow-sm ring-1 ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your Username">
                                    </div>
                                    <div class="text-white">
                                        <label for="password" class="block pb-1">Password</label>
                                        <input type="password" name="password"  id="password" class="block w-full border-0 py-2 text-primary shadow-sm ring-1  ring-inset focus:outline-none ring-primary placeholder:text-gray-400 px-3 mb-2" placeholder="Your Password">
                                    </div>
                            
                                    <div class="text-center py-5">
                                        <button class="w-full py-2 bg-secondary hover:bg-white transition-all ease-in-out duration-500 text-white hover:text-secondary font-bold text-center my-2">Log In</button>
                                    </div>
                                    <p class="font-normal text-sm p-3 text-center text-white">Don't Have an Account ?
                                        <RouterLink to="/register" class="flex items-center justify-center hover:text-primary hover:font-bold">Create Account
                                        </RouterLink>
                                    </p>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="w-1/2">
                                <div class="w-full h-full rounded-xl">
                                    <img class="w-full h-full rounded-xl object-cover" src="https://img.freepik.com/premium-photo/fresh-homemade-bread-isolated-white-background_488220-15877.jpg?w=740" alt="">
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