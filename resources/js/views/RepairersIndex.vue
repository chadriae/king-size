<template>
<div>
    <div class="loading" v-if="loading">
        Loading...
    </div>

    <div v-if="error" class="error">
        {{ error }}
    </div>

    <div class="h-80 border overflow-hidden flex items-center justify-center" id="cards" v-for="repairer in repairers">
        <div class="row">
            <dialog open class="rounded-2xlop-0 w-auto shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <div class="relative h-64 sm:h-80 w-full lg:h-auto lg:w-1/3 xl:w-2/5 flex-none">
                        <img src="" class="absolute inset-0 h-full w-full object-cover" />
                        <span class="absolute block inset-x-0 bottom-0 lg:hidden lg:inset-y-0 lg:right-auto bg-gradient-to-t lg:bg-gradient-to-r from-white to-transparent w-full h-16 lg:h-full lg:w-16"></span>
                    </div>
                        <div class="w-full">
                        <div class="p-8">
                            <div class="flex justify-between items-start">
                                <h3 class="text-xl font-bold mb-8">
                                    {{ repairer.name }}
                                </h3>
                            </div>
                        </div>
                        <!-- tabs -->
                        <div class="relative m-2">
                            <header class="flex items-end text-sm">
                                <button class="border border-b-0 px-3 py-1 text-sm focus:outline-none rounded-tl-md">
                                About me
                                </button>
                            </header>
                            <div class="border p-2 h-48 overflow-y-auto rounded-b-xl rounded-tr-xl" id="tabs-contents">
                                <div>
                                    <p class="text-xs text-gray-500 line-clamp-3">
                                        Hi there! <br>
                                        My categories are: {{ repairer.categories }}.<br>
                                        I'm specialiased in: {{ repairer.specialties }}<br>{{ repairer.image_name }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- action buttons -->
                        <div class="flex justify-end items-center text-sm font-bold mt-8 gap-4">
                            <div class="text-blue-500 font-normal text-xs px-4 py-1 rounded">
                            Contact
                            </div>
                        </div>
                    </div>
                </div>
            </dialog>
        </div>
    </div>


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

<style scoped>
#cards{
    display:flex;
}
.row{
    width: 100%
}
</style>
