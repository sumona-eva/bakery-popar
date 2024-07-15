<template>
    <DashboardLayout>
        <div class="w-1/2 py-2 mx-auto">
            <div class="p-4 bg-white shadow-md me-4">
                <h1 class="text-xl font-semibold py-3 text-secondary">Add New Order Area</h1>
                <div class="flex space-x-8">
                    <div class="w-full flex flex-col gap-3">
                        <div class="w-full flex flex-col items-start space-y-3">
                            <div class="w-full">
                                <label for="price" class="text-sm">Area Name</label>
                                <input type="text" class="border border-secondary focus:ring-secondary focus:border-secondary p-2 rounded-md w-full">
                            </div>
                            <div class="w-full">
                                <label for="discount" class="text-sm">Area Code</label>
                                <input type="text" class="border border-secondary focus:ring-secondary focus:border-secondary p-2 rounded-md w-full">
                            </div>
                            <div class="w-full">
                                <label for="price" class="text-sm">Delivery Charge</label>
                                <input type="text" class="border border-secondary focus:ring-secondary focus:border-secondary p-2 rounded-md w-full">
                            </div>
                            <div class="w-full">
                                <label for="discount" class="text-sm">Charge Condition</label>
                                <input type="text" class="border border-secondary focus:ring-secondary focus:border-secondary p-2 rounded-md w-full">
                            </div>
                            <div class="w-full">
                                <label for="price" class="text-sm"> Condition price</label>
                                <input type="text" class="border border-secondary focus:ring-secondary focus:border-secondary p-2 rounded-md w-full">
                            </div>
                        </div> 
                    </div>
                    
                </div>
            </div>
    
            <div class="w-full py-2 mx-auto text-center bg-secondary text-xl font-semibold text-white my-8">
                <button>Save New Area</button>
            </div>
        </div>
       
    </DashboardLayout>
</template>