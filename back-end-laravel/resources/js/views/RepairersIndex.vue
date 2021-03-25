<template>
<div class="users">
    <div class="loading" v-if="loading">
        Loading...
    </div>

    <div v-if="error" class="error">
        {{ error }}
    </div>

    <ul v-if="repairers">
        <li v-for="{ name, email } in repairers">
            <strong>Name:</strong> {{ name }},
            <strong>Email:</strong> {{ email }}
        </li>
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
            users: null,
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
                    console.log(response);
                });
        }
    }
}
</script>

<style>

</style>
