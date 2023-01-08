<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link} from '@inertiajs/inertia-vue3';

const props = defineProps({
    'clients' : Array,
    'pageTitle': String,
    'projects' : Array,
})

</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex flex-space-around">
            <h2 class="font-semibold text-xxl leading-tight">Clients</h2>
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
                        <tbody>
                        <!-- Odd row -->
                        <tr v-for="client in clients" :key="client">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ client.raison_sociale.substring(0,20) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ client.description.substring(0,20) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">                
                                        {{ projects.filter(project => project.client_id === client.id).length  }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <Link :href="route('client.edit', {id: client.id})" class="text-indigo-600 hover:text-indigo-900">Editer</Link>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
