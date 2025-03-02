<script setup lang="ts" >

interface Props {
    title: boolean;
    description?: string;
    user:any;
}

defineProps<Props>();

</script>

<template>
    <h1>TITLE: {{ title  }}</h1>
    <p>DESCRIPTION: {{ description }}</p>
 
    <hr>
 
     Go to: <a href="/" class="btn btn-success">HOME</a>

     <hr>
     Shared data: {{ user.name }}
 </template>
