  <script setup>
    import { ref } from 'vue'

 //handle cover image
 const coverImg = ref(null);
    const coverImage = (image) => {
        const file = image.target.files[0];
        // form.value.cover_image = file;
        coverImg.value = URL.createObjectURL(file);
    }
 
  </script>
<template>
    <DashboardLayout>
        <div class="w-1/2 py-2 mx-auto">
            <div class="p-4 bg-white  shadow-md me-4">
                <h1 class="text-xl font-semibold py-3 text-secondary">Add New Category</h1>
                <div class="flex">
                    <div class="w-full flex flex-col gap-3">
                       
                        <div class="w-full flex items-center">
                            <div class="w-full">
                                <label for="category" class="text-sm">Category</label>
                                <Select
                                    label="name"
                                    
                                    searchable
                                ></Select>
                            </div>
                    
                        </div>   
                        <div class="w-1/2 pr-2 py-3">
                            <label for="image" class="text-sm block mb-1">Image</label>
                            <label for="cover_image" class="w-full max-w-80 h-56 flex items-center
                            justify-center gap-3 p-2 border border-dashed border-secondary rounded-md text-secondary cursor-pointer overflow-hidden">
                                <input type="file" id="cover_image" hidden @change="coverImage">
                                <img class="rounded-md" v-if="coverImg" :src="coverImg" alt="">
                                <div v-else>
                                    <p>Upload Product Cover Image</p>
                                </div>
                            </label>
                        </div>
    
                    </div>
                </div>
            </div>
    
            <div class="w-1/2 py-2 mx-auto text-center bg-secondary text-xl font-semibold text-white my-8">
                <button>Save Category</button>
            </div>
        </div>
        
    </DashboardLayout>
</template>+