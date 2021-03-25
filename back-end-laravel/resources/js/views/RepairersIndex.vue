<template>
<div class="users">
    <div class="loading" v-if="loading">
        Loading...
    </div>

    <div v-if="error" class="error">
        {{ error }}
    </div>

    <ul v-if="repairers, specialties">
        <li v-for="{ name, email, id } in repairers">
            <strong>Name:</strong> {{ name }},
            <strong>categories:</strong> {{ specialties.categories }},
            <strong>Email:</strong> {{ email }}
        </li>
    </ul>

    <!-- <ul v-if="specialties">
        <li v-for="{ specialties, categories } in specialties">
            <strong>categories:</strong> {{ categories }},
            <strong>specialties:</strong> {{ specialties }}
        </li>
    </ul> -->

</div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'RepairersIndex',
    data() {
        return {
            loading: false,
            repairers: null,
            specialties: null,
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
                    console.log(response);

                    this.loading = false;
                    this.repairers = response.data;
                });
            axios
                .get('/api/specialties')
                .then(response => {
                    console.log(response);
                    this.specialties = response.data;
                });
        }
    }
}
</script>

<style>

</style>
