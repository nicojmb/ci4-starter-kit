<script setup lang="ts" >

interface Props {
    title: boolean;
    description?: string;
    user:any;
}

defineProps<Props>();

</script>

<template>

<h1 v-if="title" class="text-4xl font-bold mb-4 text-gray-800">{{ title }}</h1>
    
<p v-if="description" class="mt-4 text-green-600 font-medium">{{ description }}</p>

<p v-if="user" class="mt-4 text-green-600 font-medium">{{ user.name }}</p>

<div class="flex justify-center space-x-4">

    <a href="/"
        class="px-6 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition"
    >HOME</a>

    <a href="/about-us"
        class="px-6 py-2 bg-gray-300 text-gray-800 rounded-xl hover:bg-gray-400 transition"
    >ABOUT US</a>
    
</div>

 </template>
