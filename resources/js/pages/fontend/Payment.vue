
<template>
    <AppLayout>
        <section>
            <div class="flex flex-col lg:flex-row pt-12 font-playfair">
              <div class="w-full lg:w-1/2">
                <div class="flex flex-col items-center justify-center">
                    <h2 class="text-lg font-semibold text-secondary">Select Your Payment Method</h2>
    
                  <div class="w-full lg:w-1/3 text-center">
                    <div class="border bg-gray-200 my-6 rounded-lg h-36">
                      <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mt-10 " width="32" height="32" viewBox="0 0 16 16"><g fill="#888888"><path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8a4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0a5 5 0 0 1 10 0"/><path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207c0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158c0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522c0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569c0 .339-.257.571-.709.614v-1.195z"/><path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/><path d="M9.998 5.083L10 5a2 2 0 1 0-3.132 1.65a6 6 0 0 1 3.13-1.567"/></g></svg>
                      <p class="text-sm font-normal text-primary py-8">Cash On Delivery</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/2">
                <div class="flex flex-col lg:flex-row items-end justify-center lg:m-12 mb-5">
                  <div class="w-full lg:w-2/3">
                    <div class="bg-gray-200 rounded p-5">
                      <ul>
                        <li class="text-lg font-semibold text-secondary">ORDER SUMMARY </li>
                        <li class="text-sm font-normal text-primary py-3 flex justify-between">
                          <span>Subtotal(1items total of Qty and Price)</span>
                          <span>$500 </span>
                        </li>
                        <li class="text-sm font-normal text-primary pb-2 flex justify-between">
                          <span>Included Delivery Charge </span>
                          <span>$50 </span>
                        </li>
                        <li class="text-lg font-semibold text-primary flex justify-between">
                          <span>Total Amount</span>
                          <span>$550 </span>
                        </li>
                      </ul>
    
                        <RouterLink to="/" class="text-xl text-center bg-secondary text-white hover:bg-primary w-full block py-1.5 my-2 mt-6">Confirm Order </RouterLink>
    
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
