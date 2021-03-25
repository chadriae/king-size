<template>
<div class="users">
    <div class="loading" v-if="loading">
        Loading...
    </div>

    <div v-if="error" class="error">
        {{ error }}
    </div>

    <ul class="text-white" v-if="repairers">
        <li v-for="{ name, email, specialties, categories } in repairers">
            <strong>Name:</strong> {{ name }},
            <strong>Email:</strong> {{ email }},<br>
            <strong>categories:</strong> {{ categories }},
            <strong>specialties:</strong> {{ specialties }},
        </li>
        <br>
    </ul>

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
        }
    }
}
</script>

<style>
.text-white{
    color:white;
}
</style>
