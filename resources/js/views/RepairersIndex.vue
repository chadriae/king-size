<template>
<div class="w-full mx-auto">
    <div class="loading" v-if="loading">
        Loading...
    </div>

    <div v-if="error" class="error">
        {{ error }}
    </div>

    <!-- Container body layout -->
    <div class="grid grid-rows-6 grid-cols-6">
        <Filter />
        <RepairerCard />
    </div>
</div>
</template>

<script>
import Filter from '../components/Filter.vue';
import RepairerCard from '../components/RepairerCard.vue';

export default {
    name: 'RepairersIndex',
    components: {
        Filter, 
        RepairerCard,
    },
    data() {
    return {
        loading: false,
        error: null,
    };
    },
}
</script>

<style scoped>
</style>
