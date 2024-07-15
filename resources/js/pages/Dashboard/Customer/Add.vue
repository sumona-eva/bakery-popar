<template>
    <DashboardLayout>
        <div class="w-1/2 py-2 mx-auto">
            <div class="p-4 bg-white shadow-md me-4">
                <h1 class="text-xl font-semibold py-3 text-secondary">Add New Customer</h1>
                <div class="flex space-x-8">
                    <div class="w-full flex flex-col gap-3">
                       
                        <div class="w-full flex flex-col items-start space-y-3">
                            <div class="w-full">
                                <label for="price" class="text-sm">Customer Name</label>
                                <input type="text" class="border border-secondary focus:ring-secondary focus:border-secondary p-2 rounded-md w-full">
                            </div>
                            <div class="w-full">
                                <label for="discount" class="text-sm">Phone</label>
                                <input type="text" class="border border-secondary focus:ring-secondary focus:border-secondary p-2 rounded-md w-full">
                            </div>
                            <div class="w-full">
                                <label for="price" class="text-sm">Email</label>
                                <input type="text" class="border border-secondary focus:ring-secondary focus:border-secondary p-2 rounded-md w-full">
                            </div>
                            <div class="w-full">
                                <label for="discount" class="text-sm">Address</label>
                                <input type="text" class="border border-secondary focus:ring-secondary focus:border-secondary p-2 rounded-md w-full">
                            </div>
                        </div> 
                    </div>
                    
                </div>
            </div>
    
            <div class="w-full py-2 mx-auto text-center bg-secondary text-xl font-semibold text-white my-8">
                <button>Save Customer</button>
            </div>
        </div>
       
    </DashboardLayout>
</template>