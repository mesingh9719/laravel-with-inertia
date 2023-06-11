<template>
    <Head title="Home">

    </Head>
    <MonitorList :monitors="monitors"/>
</template>
<script setup>
import {Head} from "@inertiajs/vue3";
import MonitorList from "../Components/home/MonitorList.vue";
defineProps(['monitors'])
</script>
