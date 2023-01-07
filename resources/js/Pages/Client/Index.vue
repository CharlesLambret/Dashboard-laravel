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
                    <div class="flex justify-around bg-gray-100 flex-nowrap ">
                        <p>Raison sociale</p>
                        <p>Description</p>
                        <p>Project</p>
                        <p>Action</p>
                    </div>
                    <tr v-for="client in clients" :key="client" class="flex justify-around flex-nowrap">

                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ client.client_raison_sociale }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ client.description }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <Link :href="route('client.edit', {id: client.id})" class="text-indigo-600 hover:text-indigo-900">Editer</Link>
                        </td>
                    </tr>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>