<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link} from '@inertiajs/inertia-vue3';

const props = defineProps({
    'clients' : Array,
    'pageTitle': String
})
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Client</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in client!</div>
                    <Link class="text-white py-2 px-4 bg-green-500 rounded" :href="route('client.create')">Ajouter un client</Link>
                    <tr v-for="client in clients" :key="client">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ client.description.substring(0,20) }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ client.capital.toString().substring(0,20) }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        </td>
                    </tr>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
