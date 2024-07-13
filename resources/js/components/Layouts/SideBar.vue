<script setup>
const props = defineProps({
        text:{
            type: Boolean,
            default: true
        }
    });
</script>

<template>
    <div class="mx-auto">
        <div>
            <div class="bg-white/65">
                <img class="p-2" src="@/assets/images/logo.png" alt="">
            </div>
            <ul class="flex flex-col gap-5 p-5 ">
                <li>
                    <RouterLink to="/dashboard" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="ic:twotone-dashboard-customize" size="20" class="text-white" />
                        </div>
                        <p class="text-white">Dashboard</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink to="/dashboard/products" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="material-symbols:service-toolbox-sharp" size="20" class="text-white" />
                        </div>
                        <p class="text-white">Products</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink  to="/dashboard/category" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="carbon:category-new-each" size="20" class="text-white" />
                        </div>
                        <p class="text-white">Category</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink  to="/dashboard/order" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="material-symbols:shopping-cart-outline-sharp" size="20" class="text-white" />
                        </div>
                        <p class="text-white">Order</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink  to="/dashboard/order-area" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="ph:map-pin-area-fill" size="20" class="text-white" />
                        </div>
                        <p class="text-white">Order Area</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink  to="/dashboard/customer" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="carbon:customer" size="20" class="text-white" />
                        </div>
                        <p class="text-white">Customer</p>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink  to="/dashboard/settings" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-slate-400/50 border border-gray-100/50 rounded-full flex items-center justify-center">
                            <Icon name="material-symbols:settings-outline-rounded" size="20" class="text-white" />
                        </div>
                        <p class="text-white">Settings</p>
                    </RouterLink>
                </li>
            </ul>
            
        </div>
    </div>


</template>