<template>
    <div v-for="(repairer, index) in filteredData" class="m-4 p-2 col-span-5">
        <section class="font-sans leading-normal flex bg-gray-100" >
            <!-- card container -->
            <div :repairer="repairer" class="overflow-hidden p-4 sm:flex w-full" id="card">
                <div v-if="repairer.profile_pic != null" class="rounded-b-xl md:flex md:items-center" id="image" >
                    <img class="w-48 h-48 rounded-full md:mr-4 ml-4" :src="'/uploads/' + repairer.profile_pic.image_name">
                </div>
                <div v-else class="rounded-b-xl md:flex md:items-center" id="image" >
                    <img class="w-48 h-48 rounded-full md:mr-4 ml-4" src="/img/robot.png">
                </div>
                <!-- card-content -->
                <div class="px-6 py-4">
                    <h2 class="mb-2 font-black">{{  repairer.firstname }} {{ repairer.lastname }}</h2>
                    <p v-if="repairer.address !== null" class="text-gray-500">based in {{ repairer.address.locality }}</p><br>
                    <!-- <p v-else><span></span></p><br> -->
                    <div v-if="repairer.specialties !== null">
                        <p class="mb-4">Categories:
                        <span v-for="categorie in repairer.specialties.categories" :categorie="categorie" class="mr-2 p-1 bg-yellow-200 rounded-lg leading-9">#{{ categorie }}</span>
                        </p>
                        <p class="mb-4">Specialties:
                        <span v-for="specialtie in repairer.specialties.specialties" :specialtie="specialtie" class="mr-2 p-1 bg-green-200 rounded-lg leading-9">#{{ specialtie }}</span>
                        </p>
                    </div>
                    <!-- button -->
                    <button class="py-3 px-6 bg-blue-400 hover:bg-blue-200 text-white font-bold rounded-full mt-1 mb-2">
                        <a :href="'mailto:' + repairer.email">Contact me</a>
                    </button>   
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    props: {
        filteredData: {
            type: Array,
            required: true,
        },
    },
}
</script>

<style scoped>
</style>
