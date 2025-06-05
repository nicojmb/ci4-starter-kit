
<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

interface Props {
    title: boolean;
}

defineProps<Props>();

</script>

<template>

<h1 v-if="title" class="text-4xl font-bold mb-4 text-gray-800">{{ title }}</h1>
    
<div class="flex justify-center space-x-4">

    <a href="/"
        class="px-6 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition"
    >HOME</a>

    <a href="/contact"
        class="px-6 py-2 bg-gray-300 text-gray-800 rounded-xl hover:bg-gray-400 transition"
    >CONTACT</a>
    
</div>

</template>

