<template>
    <span v-for="specialtie in repairer.specialties.specialties.split(',')" :specialtie="specialtie" class="mr-2 p-1 bg-green-200 rounded-lg">#{{ specialtie }}</span>
</template>

<script>
export default {
    name: 'Specialties',
}
</script>

<style scoped>
</style>
