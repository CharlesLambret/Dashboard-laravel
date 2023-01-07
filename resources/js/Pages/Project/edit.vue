<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/inertia-vue3';
import {useForm} from '@inertiajs/inertia-vue3'

const props = defineProps({
    projects : Object
}
)
const form = useForm(
    {
        nom_responsable : props.projects.nom_responsable,
        prenom_responsable : props.projects.prenom_responsable,
        email_responsable : props.projects.email_responsable,
        telephone_responsable : props.projects.telephone_responsable,
        titre_projet : props.projects.titre_projet,
        description : props.projects.description,
        debut : props.projects.debut,
        fin : props.projects.fin,
        statut : props.projects.statut,
        jours_vendus : props.projects.jours_vendus,
        client_id : props.projects.client_id,
     
    }
)

</script>

<template>
    <Head title="Ajouter un projet"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Modifier le projet {{ projects.titre_projet }} </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <form class="flex flex-col gap-4" @submit.prevent="form.put(route('projets.update', {id: projects.id}))">
                            <!-- email -->
                            <select v-model="form.client_id" placeholder="Client">
                                <option v-for="client in clients" :value="client.id">{{client.raison_sociale}}</option>
                            </select>
                            <input placeholder="titre_projet" type="text" v-model="form.titre_projet">
                            <div v-if="form.errors.titre_projet">{{ form.errors.titre_projet }}</div>

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
                                    :disabled="form.processing">Modify
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
