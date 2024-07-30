
<template>
    <div class="mb-10 shadow border">
          <h3 class="p-3 text-2xl text-black">Recent Order</h3>
          <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-black bg-white">
                      <thead class="text-xs text-white uppercase bg-secondary">
                          <tr>
                                <th scope="col" class="px-6 py-3">
                                  Order Id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                  Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                  Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                  Order Type
                                </th>
                                <th scope="col" class="px-6 py-3">
                                  Payment Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                  Action
                                </th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr v-for="(order, i) in 8" class=" border-b  hover:bg-opacity-100">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                  <Badge>#00099900</Badge>
                                </th>
                                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                      <div class="w-12 h-12 bg-purple-700 rounded-full flex items-center justify-center">
                                        <span class="text-white text-xl">NS</span>
                                      </div>
                                      <div class="ps-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                                      </div>
                                </th>
                                <td class="px-6 py-4">
                                  $500
                                </td>
                                <td class="px-6 py-4">
                                  POS
                                </td>
                                <td class="px-6 py-4">
                                  <div class="flex items-center text-green-500" v-if="i%2 == 0">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>Paid
                                  </div>
                                  <div v-else class="flex items-center text-yellow-400">
                                    <div class="h-2.5 w-2.5 rounded-full bg-yellow-400 me-2"></div>Pending
                                  </div>
                                </td>
                                <td class="px-6 py-4">
                                  $2999
                                </td>
                          </tr>
                      </tbody>
                </table>
          </div>
    </div>
</template>
