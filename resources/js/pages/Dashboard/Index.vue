<script setup> 
 import BarChart from '@/components/BarChart.vue';
 import RecentOrder from '@/components/RecentOrder.vue';
</script>
<template>
  <DashboardLayout>
        
    <div class="flex mb-5 -mx-3">

      <div class="w-1/4 px-3">
            <div
                class="h-full p-4 overlay shadow
                 bg-[url('https://img.freepik.com/free-photo/shopping-cart-with-presents_658428-64.jpg?t=st=1717409303~exp=1717412903~hmac=ef1e57a02078b8fd2419ceb6514a406d53a22fc5221264e8849fce08970214db&w=1060')]
                  w-full bg-cover bg-no-repeat bg-center">
                  <div class="relative z-10 flex flex-col justify-between h-full">
                        <div class="flex items-center gap-4">
                              <div class="w-12 h-12 rounded-2xl bg-slate-400/50 border border-gray-100 flex items-center justify-center">
                                <Icon name="carbon:settings-services"  class="text-gray-100 text-3xl" />
                              </div>
                              <h3 class="text-end text-3xl font-medium text-white">$5000</h3>
                        </div>
                        <div>
                          <p class=" text-gray-200 text-xl text-end">Services</p>
                          <p class="text-end font-light text-sm text-gray-200">Compared Last Year</p>
                        </div>
                  </div>
            </div>
      </div>
      <div class="w-1/4 px-3">
            <div class="h-full p-4 overlay shadow
                   bg-[url('https://img.freepik.com/free-photo/shopping-cart-with-presents_658428-64.jpg?t=st=1717409303~exp=1717412903~hmac=ef1e57a02078b8fd2419ceb6514a406d53a22fc5221264e8849fce08970214db&w=1060')]
                   w-full bg-cover bg-no-repeat bg-center">
                  <div class="relative z-10 flex flex-col justify-between h-full">
                        <div class="flex items-center gap-4">
                              <div class="w-12 h-12 rounded-2xl bg-slate-400/50 border border-gray-100 flex items-center justify-center">
                                    <Icon name="material-symbols:package-outline-rounded" class="text-gray-100 text-3xl" />
                              </div>
                              <h3 class="text-end text-3xl font-medium text-white">$89</h3>
                        </div>
                        <p class="text-gray-200 text-xl text-end">Recent Packages</p>
                  </div>
            </div>
      </div>
      <div class="w-1/4 px-3">
            <div class="h-full p-4 overlay shadow
                   bg-[url('https://img.freepik.com/free-photo/shopping-cart-with-presents_658428-64.jpg?t=st=1717409303~exp=1717412903~hmac=ef1e57a02078b8fd2419ceb6514a406d53a22fc5221264e8849fce08970214db&w=1060')]
                   w-full bg-cover bg-no-repeat bg-center">
                  <div class="relative z-10 flex flex-col justify-between h-full">
                        <div class="flex items-center gap-4">
                              <div class="w-12 h-12 rounded-2xl bg-slate-400/50 border border-gray-100 flex items-center justify-center">
                                    <Icon name="clarity:employee-group-solid" class="text-gray-100 text-2xl" />
                              </div>
                              <h3 class="text-end text-3xl font-medium text-white">15</h3>
                        </div>
                        <div>
                              <p class="text-white text-xl text-end">Total Employee</p>
                        </div>
                  </div>
            </div>
      </div>
      <div class="w-1/4 px-3">
        <div
            class="h-full p-4 overlay shadow
               bg-[url('https://img.freepik.com/free-photo/shopping-cart-with-presents_658428-64.jpg?t=st=1717409303~exp=1717412903~hmac=ef1e57a02078b8fd2419ceb6514a406d53a22fc5221264e8849fce08970214db&w=1060')]
                 w-full bg-cover bg-no-repeat bg-center">
          <div class="relative z-10 flex flex-col justify-between h-full">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 rounded-2xl bg-slate-400/50 border border-gray-100 flex items-center justify-center">
                <Icon name="tabler:shopping-cart-up" class="text-gray-100 text-2xl" />
              </div>
              <h3 class="text-end text-3xl font-medium text-white">25</h3>
            </div>
            <p class="text-white text-xl text-end">Pending Order</p>
          </div>
        </div>
      </div>

    </div>

    <div class="flex -mx-2" >
        <div class="w-full px-2">
            <div class="p-4 shado">
                <!-- <BarChart /> -->
                <BarChart />
            </div>
        </div>
    </div>

    <div class="mt-5 mx-4 bg-white">
            <RecentOrder />
     </div>
  </DashboardLayout>  
</template>