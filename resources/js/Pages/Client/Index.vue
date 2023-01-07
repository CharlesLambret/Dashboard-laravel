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
            <div class="bg-gray-800 flex flex-row">
                <h2 class="font-semibold text-xl text-gray-800  leading-tight">Client</h2>
            <Link class="text-white py-2 px-4 bg-green-500 rounded" :href="route('client.create')">Ajouter un client</Link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Raison sociale
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Projets
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Editer</span>
                            </th>
                        </tr>
                        </thead>
                    </table>
                    <tr v-for="client in clients" :key="client">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ client.description.substring(0,20) }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ client.capital.toString().substring(0,20) }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <Link :href="route('client.edit', {id: client.id})" class="text-indigo-600 hover:text-indigo-900">Editer</Link>
                        </td>
                    </tr>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
