<template>
    <nav class="py-4 flex justify-between items-center">
        <div>
            <p class="text-gray-500">Short description about the current page</p>
        </div>
        <div>
            <button @click="createSite" class="bg-blue-500 text-white px-4 py-2 rounded-md">Create</button>
        </div>
    </nav>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-medium mb-4">User List</h2>
            <table class="min-w-full border border-gray-300">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                    <tr>
                        <th class="py-3 px-4 bg-gray-100 font-medium text-gray-700 uppercase border-b">Site Name</th>
                        <th class="py-3 px-4 bg-gray-100 font-medium text-gray-700 uppercase border-b">URL</th>
                        <th class="py-3 px-4 bg-gray-100 font-medium text-gray-700 uppercase border-b">Created At</th>
                        <th class="py-3 px-4 bg-gray-100 font-medium text-gray-700 uppercase border-b">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="user in monitors.data" :key="monitors.id">
                        <td class="py-3 px-4 border-b">{{ user.site_name }}</td>
                        <td class="py-3 px-4 border-b">{{ user.site_url }}</td>
                        <td class="py-3 px-4 border-b">{{ user.created_at }}</td>
                        <td class="py-3 px-4 border-b">
                            <span class="bg-green-500 text-white px-2 py-1 rounded-full">Active</span>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </table>
            <Paginate :path="monitors.path" :next="monitors.next_page_url" :prev="monitors.prev_page_url" :currentPage="monitors.current_page" :lastPage="monitors.last_page"/>
        </div>
</template>
<script setup>
import {router} from "@inertiajs/vue3";
import Paginate from "./Paginate.vue";

defineProps(["monitors"])

function createSite(){
    router.visit('/site/create')
}
</script>
