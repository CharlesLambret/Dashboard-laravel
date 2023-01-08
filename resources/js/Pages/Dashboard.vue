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
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <div class="w-full customheader height50vh">
                <h2 class="pt-10 font-semibold text-xxl leading-tight mx-auto w-full text-center">Dashboard</h2>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="content-div">
                    <h3 text-gray-bold>Statistiques</h3>
                    <div class="flex w-full flex-row justify-between">
                        <div class="flex flex-col items-start p-0 statdiv shadow">
                            <div class="flex flex-row items-start justify-center">
                                <img src="images/client.png"/>
                                <div class="flex flex-col items-start justify-start ml-2">
                                    <p class="text-gray-bold ">Nombre de clients</p>
                                    {{ clients.length}}
                                </div>
                            </div>
                        <Link class="text-bold mt-3" :href="route('client.index')">Voir tous les clients</Link>
                        </div>
                        <div class="flex flex-col items-start p-0 statdiv shadow">
                            <div class="flex flex-row items-start justify-center">
                                <img src="images/projet.png"/>
                                <div class="flex flex-col items-start justify-start ml-2">
                                    <p class="text-gray-bold ">Nombre de projets</p>
                                    <h3>{{ projects.length}}</h3>
                                </div>
                            </div>
                        <Link class="text-indigo text-bold mt-3" :href="route('project.index')">Voir tous les projets</Link>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
