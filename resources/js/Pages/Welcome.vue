<template>
    <Head title="Welcome" />
    <navbar></navbar>
    <jumbotron></jumbotron>
</template>

<script setup>
import { Head, Link } from "@inertiajs/vue3";
import navbar from "./components/Navbar.vue";
import jumbotron from "./components/jumbotron.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<style></style>
