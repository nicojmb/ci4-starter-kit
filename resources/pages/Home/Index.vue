<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

interface Props {
    title: boolean;
    description?: string;
}

defineProps<Props>();

</script>

<template>

<h1 v-if="title" class="text-4xl font-bold mb-4 text-gray-800">{{ title }}</h1>
    
<p v-if="description" class="mt-4 text-green-600 font-medium">{{ description }}</p>

<div class="flex justify-center space-x-4">

    <a href="/about-us"
        class="px-6 py-2 bg-gray-300 text-gray-800 rounded-xl hover:bg-gray-400 transition"
    >ABOUT US</a>

    <a href="/contact"
        class="px-6 py-2 bg-gray-300 text-gray-800 rounded-xl hover:bg-gray-400 transition"
    >CONTACT</a>
    
</div>

</template>