<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link} from '@inertiajs/inertia-vue3';
import {useForm} from '@inertiajs/inertia-vue3'



const props = defineProps({
    projects : Object,
    clients : Array,
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
            <div class="w-full customheader height50vh flex justify-around align-center pt-10">
                <h2 class="pt-10 font-semibold text-xxl leading-tight mx-auto w-full text-center">Modifier le projet {{ projects.titre_projet }}</h2>
                <Link method="DELETE" :href="route('project.delete', {id: projects.id})" class="ml-4 text-indigo-600 hover:text-indigo-900">Supprimer</Link>
            </div>  
            
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="content-div">
                    <div class="p-6">
                        <form class="flex flex-col gap-4" @submit.prevent="form.put(route('project.update', {id: projects.id}))">
                            <label>Client</label>
                            <select v-model="form.client_id" placeholder="Client">
                                <option v-for="client in clients" :value="client.id">{{client.raison_sociale}}</option>
                            </select>
                            <label>Titre du projet</label>
                            <input placeholder="titre_projet" type="text" v-model="form.titre_projet">
                            <div v-if="form.errors.titre_projet">{{ form.errors.titre_projet }}</div>

                      
                            <label>Nom du responsable</label>
                            <input placeholder="Nom du responsable" type="text" v-model="form.nom_responsable">
                            <div v-if="form.errors.nom_responsable">{{ form.errors.nom_responsable }}</div>
                            
                            <label>Pr??nom du responsable</label>
                            <input placeholder="Pr??nom du responsable" type="text" v-model="form.prenom_responsable">
                            <div v-if="form.errors.prenom_responsable">{{ form.errors.prenom_responsable }}</div>

                            <label>Email du responsable</label>
                            <input placeholder="Email du responsable" type="text" v-model="form.email_responsable">
                            <div v-if="form.errors.email_responsable">{{ form.errors.email_responsable }}</div>

                            <label>T??l??phone du responsable</label>
                            <input placeholder="T??l??phone du responsable" type="text" v-model="form.telephone_responsable">
                            <div v-if="form.errors.telephone_responsable">{{ form.errors.telephone_responsable }}</div>

                            <label>Description</label>
                            <input placeholder="Description" type="text" v-model="form.description">
                            <div v-if="form.errors.description">{{ form.errors.description }}</div>

                            <label>Date de commencements</label>
                            <input placeholder="Date de commencement" type="text" v-model="form.debut">
                            <div v-if="form.errors.debut">{{ form.errors.debut }}</div>

                            <label>Date de fin</label>
                            <input placeholder="Date de fin" type="text" v-model="form.fin">
                            <div v-if="form.errors.fin">{{ form.errors.fin }}</div>

                            <label>Statut</label>
                            <select v-model="form.statut" placeholder="Statut">
                                <option value="non demarre">Non d??marr??</option>
                                <option value="en cours">En cours</option>
                                <option value="termine">Termin??</option>
                            </select>
                            <div v-if="form.errors.statut">{{ form.errors.statut }}</div>

                            <label>Jours vendus</label>
                            <input placeholder="Jours vendus" type="number" v-model="form.jours_vendus">
                            <div v-if="form.errors.jours_vendus">{{ form.errors.jours_vendus }}</div>

                            <!-- submit -->
                            <button class="py-2 px-4 bg-indigo-400 text-white rounded" type="submit"
                                    :disabled="form.processing">Modifier
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
