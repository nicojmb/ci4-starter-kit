<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

interface Props {
    title: boolean;
    description?: string;
}

defineProps<Props>();

</script>

<template>
   <h1>TITLE: {{ title  }}</h1>
   <p>DESCRIPTION: {{ description }}</p>

   <hr>

    Go to: <a href="/contact" class="btn btn-success">CONTACT</a>
</template>
