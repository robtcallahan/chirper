<script setup>

import DropdownLink from "@/Components/DropdownLink.vue";
import InputError from "@/Components/InputError.vue";
import Dropdown from "@/Components/Dropdown.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const props = defineProps(['column']);

</script>

<template>
    <tr>
        <td>{{ column.name }}</td>
        <td>{{ column.color }}</td>
        <td>{{ column.letter }}</td>
    </tr>
</template>
