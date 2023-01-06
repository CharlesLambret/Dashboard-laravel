<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/inertia-vue3';
import {useForm} from '@inertiajs/inertia-vue3'

const form = useForm({
    description: null,
    raisonSocial: null,
    statusJuridique: null,
    capital: null,
    numeroDeSiret: null,
    codeNAF:null,
    adresseSiegeSocial:null,
    pays:null,
    adresse:null,
    codePostale:null,
    ville:null,


})

</script>

<template>
    <AuthenticatedLayout>
        <Head title="Ajouter un client" />
        <h2>Information société</h2>
        <p>Information légales de l'entreprise</p>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <form class="flex flex-col gap-4" @submit.prevent="form.post(route('client.store'))">
                            <label for="description">Description : </label>
                            <input id="description" type="text" v-model="form.description" />
                            <label for="raisonSocial">Raison Social</label>
                            <input id="raisonSocial" v-model="form.raisonSocial" />
                            <label for="status">Status :</label>
                            <input id="status" type="text" v-model="form.statusJuridique" />
                            <label for="capital">Capital : </label>
                            <input id="capital" type="number" v-model="form.capital" />
                            <label for="numeroDeSiret">Numéro de Siret :</label>
                            <input id="numeroDeSiret" type="text" v-model="form.numeroDeSiret" />
                            <label for="codeNAF">Code NAF (APE) :</label>
                            <input id="codeNAF" type="number" v-model="form.codeNAF" />
                            <label for="adresseSiegeSocial">Adresse siège social : </label>
                            <input id="adresseSiegeSocial"  v-model="form.adresseSiegeSocial" />
                            <label for="pays">Pays :</label>
                            <input id="pays" type="search" v-model="form.pays" />
                            <label for="adresse">Adresse :</label>
                            <input id="adresse" type="text" v-model="form.adresse" />
                            <label for="codePostale">Code Postale :</label>
                            <input id="codePostale" type="number" v-model="form.codePostale" />
                            <label for="ville">Ville :</label>
                            <input id="ville" type="text" v-model="form.ville" />

                            <button type="reset">Annuler</button>
                            <button class="py-2 px-4 bg-green-400 text-white rounded" type="submit">Sauvegarder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
