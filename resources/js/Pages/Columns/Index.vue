<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Column from '@/Components/Column.vue';
import { Head } from '@inertiajs/vue3';
import Chirp from "@/Components/Chirp.vue";

defineProps(['columns']);

</script>

<template>
    <AuthenticatedLayout>
        <div>
            <b-table striped hover :items="items"></b-table>
        </div>
<!--        <table>-->
<!--            <thead>-->
<!--                <tr>-->
<!--                    <th>Name</th>-->
<!--                    <th>Color</th>-->
<!--                    <th>Letter</th>-->
<!--                </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--                <Column-->
<!--                    v-for="column in columns"-->
<!--                    :key="column.id"-->
<!--                    :column="column"-->
<!--                />-->
<!--            </tbody>-->
<!--        </table>-->
    </AuthenticatedLayout>
</template>

<script>
export default {
    data() {
        return {
            items: this.columns
        }
    }
}
</script>
