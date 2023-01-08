<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link} from '@inertiajs/inertia-vue3';
import {useForm} from '@inertiajs/inertia-vue3'



const props = defineProps({
    clients : Object,
   
}
);
const form = useForm(
    {
        raison_sociale : props.clients.raison_sociale,
        description : props.clients.description,
        statut_juridique : props.clients.statut_juridique,
        capital : props.clients.capital,
        numero_de_siret : props.clients.numero_de_siret,
        codeNAF : props.clients.codeNAF,
        pays : props.clients.pays,
        adresse : props.clients.adresse,
        code_postale : props.clients.code_postale,
        ville : props.clients.ville,
     
    }
)

</script>

<template>
    <Head title="Modifier le client {{ clients.raison_sociale }}"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xxl leading-tight">Modifier le client {{ clients.raison_sociale }} </h2>
            
            
            <Link method="DELETE" :href="route('client.delete', {id: clients.id})" class="ml-4 text-indigo-600 hover:text-indigo-900">Supprimer</Link>

            
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <form class="flex flex-col gap-4" @submit.prevent="form.put(route('client.update', {id: clients.id}))">
                            <label for="description">Description : </label>
                            <input id="description" type="text" v-model="form.description" />
                            <div v-if="form.errors.description">{{ form.errors.description }}</div>
                            <label for="raisonSocial">Raison Sociale</label>
                            <input id="raisonSocial" v-model="form.raison_sociale" />
                            <div v-if="form.errors.raison_sociale">{{ form.errors.raison_sociale }}</div>
                            <label for="status">Statut :</label>
                            <input id="status" type="text" v-model="form.statut_juridique" />
                            <div v-if="form.errors.statut_juridique">{{ form.errors.statut_juridique }}</div>
                            <label for="capital">Capital : </label>
                            <input id="capital" type="number" v-model="form.capital" />
                            <div v-if="form.errors.capital">{{ form.errors.capital }}</div>
                            <label for="numeroDeSiret">Numéro de Siret :</label>
                            <input id="numeroDeSiret" type="text" v-model="form.numeroDeSiret" />
                            <div v-if="form.errors.numeroDeSiret">{{ form.errors.numeroDeSiret }}</div>
                            <label for="codeNAF">Code NAF (APE) :</label>
                            <input id="codeNAF" type="number" v-model="form.codeNAF" />
                            <div v-if="form.errors.codeNAF">{{ form.errors.codeNAF }}</div>
                            <label for="adresseSiegeSocial">Adresse siège social : </label>
                            <input id="adresseSiegeSocial"  v-model="form.adresseSiegeSocial" />
                            <div v-if="form.errors.adresseSiegeSocial">{{ form.errors.adresseSiegeSocial }}</div>
                            <label for="pays">Pays :</label>
                            <input id="pays" type="search" v-model="form.pays" />
                            <div v-if="form.errors.pays">{{ form.errors.pays }}</div>
                            <label for="adresse">Adresse :</label>
                            <input id="adresse" type="text" v-model="form.adresse" />
                            <div v-if="form.errors.adresse">{{ form.errors.adresse }}</div>
                            <label for="codePostale">Code Postal :</label>
                            <input id="codePostale" type="number" v-model="form.codePostale" />
                            <div v-if="form.errors.codePostale">{{ form.errors.codePostale }}</div>
                            <label for="ville">Ville :</label>
                            <input id="ville" type="text" v-model="form.ville" />
                            <div v-if="form.errors.ville">{{ form.errors.ville }}</div>
                           
                            
                            
                            <!-- submit -->
                            <button class="py-2 px-4 bg-green-400 text-white rounded" type="submit"
                                    :disabled="form.processing">Modifier
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
