<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/inertia-vue3';
import {useForm} from '@inertiajs/inertia-vue3'

const form = useForm({
    
    nom_responsable: null,
    prenom_responsable: null,
    email_responsable: null,
    telephone_responsable: null,
    titre: null,
    description: null,
    debut: null,
    fin: null,
    statut: null,
    jours_vendus: null,
    slug: null,

})

</script>

<template>
    <Head title="Ajouter un projet"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Ajouter un projet</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <form class="flex flex-col gap-4" @submit.prevent="form.post(route('project.store'))">
                            <!-- email -->
                            <input placeholder="Titre" type="text" v-model="form.titre">
                            <div v-if="form.errors.titre">{{ form.errors.titre }}</div>
                            <!-- password -->
                            <input placeholder="Nom du responsable" type="text" v-model="form.nom_responsable">
                            <div v-if="form.errors.nom_responsable">{{ form.errors.nom_responsable }}</div>

                            <textarea placeholder="Prénom du responsable" v-model="form.prenom_responsable"></textarea>
                            <div v-if="form.errors.prenom_responsable">{{ form.errors.prenom_responsable }}</div>

                            <input placeholder="Email du responsable" type="text" v-model="form.email_responsable">
                            <div v-if="form.errors.email_responsable">{{ form.errors.email_responsable }}</div>

                            <input placeholder="Téléphone du responsable" type="text" v-model="form.telephone_responsable">
                            <div v-if="form.errors.telephone_responsable">{{ form.errors.telephone_responsable }}</div>

                            <input placeholder="Description" type="text" v-model="form.description">
                            <div v-if="form.errors.description">{{ form.errors.description }}</div>

                            <input placeholder="Date de commencement" type="text" v-model="form.debut">
                            <div v-if="form.errors.debut">{{ form.errors.debut }}</div>

                            <input placeholder="Date de fin" type="text" v-model="form.fin">
                            <div v-if="form.errors.fin">{{ form.errors.fin }}</div>

                            <input placeholder="Statut" type="text" v-model="form.statut">
                            <div v-if="form.errors.statut">{{ form.errors.statut }}</div>

                            <input placeholder="Jours vendus" type="number" v-model="form.jours_vendus">
                            <div v-if="form.errors.jours_vendus">{{ form.errors.jours_vendus }}</div>

                            <!-- submit -->
                            <button class="py-2 px-4 bg-green-400 text-white rounded" type="submit"
                                    :disabled="form.processing">Sauvegarder
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
