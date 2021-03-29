<template>
    <div class="m-2 p-2 col-span-5">
        <section v-for="repairer in repairers" class="m-2 font-sans leading-normal flex" >
            <!-- card container -->
            <div class="shadow-lg rounded overflow-hidden m-4 sm:flex w-full border" id="card">
                <div class="h-48 sm:h-auto sm:w-48 md:w-64 flex-none bg-cover bg-center rounded rounded-t sm:rounded sm:rounded-l text-center overflow-hidden" id="image">
                </div>
                <!-- card-content -->
                <div class="px-6 py-4">
                    <h2 class="mb-2 font-black">{{ repairer.firstname }} {{ repairer.lastname }}</h2>
                    <p class="text-gray-500">based in {{ repairer.address.locality }}</p><br>
                    <p class="mb-4">Categories:
                    <span v-for="categorie in repairer.specialties.categories.split(',')" :specialtie="specialtie" class="mr-2 p-1 bg-yellow-200 rounded-lg">#{{ categorie }}</span>
                    </p>
                    <p class="mb-4">Specialties:
                    <span v-for="specialtie in repairer.specialties.specialties.split(',')" :specialtie="specialtie" class="mr-2 p-1 bg-green-200 rounded-lg">#{{ specialtie }}</span>
                    </p>
                    <!-- <Specialties v-for="specialtie in repairer.specialties.specialties.split(',')" :specialtie="specialtie"></Specialties> -->
                    <!-- button -->
                    <button class="py-3 px-6 bg-blue-400 hover:bg-blue-200 text-white font-bold rounded-full mt-1 mb-2">
                    Contact me
                    </button>   
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import axios from 'axios';
// import Specialties from './Specialties.vue';

export default {
    name: 'RepairersIndex',
    // components: Specialties,
    data() {
        return {
            loading: false,
            repairers: null,
            error: null,
        };
    },
    created() {
        this.fetchData();
    },
    methods: {
        fetchData() {
            this.error = this.users = null;
            this.loading = true;
            axios
                .get('/api/repairers')
                .then(response => {
                    this.loading = false;
                    this.repairers = response.data;
                    this.specialties = response.data.specialties;
                });
        }
    }
}
</script>

<style scoped>
</style>
