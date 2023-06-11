<template>
    <Link
        :class="[
            $page.component == component
            ? 'bg-gray-900 text-white'
            : 'text-gray-300 hover:bg-gray-700 hover:text-white',
            'rounded-md px-3 py-2 text-sm font-medium',
            ]"
          :href="href">
        {{ name }}
    </Link>
</template>
<script setup>
import {Link} from "@inertiajs/vue3";
defineProps(['name', 'component', 'href'])
</script>
