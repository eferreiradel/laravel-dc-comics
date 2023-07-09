<template>
    <h1>
        {{ name }}
    </h1>
    <navbar></navbar>
</template>

<script>
import { Head, Link } from "@inertiajs/vue3";
import axios from "axios";
import navbar from "./components/Navbar.vue";

export default {
    data() {
        return {
            apiURL: "",
        };
    },
    props: {
        name: {
            type: String,
            required: true,
        },
        age: {
            type: Number,
            required: true,
        },
    },
    components: {
        navbar: navbar,
    },
};
</script>

<style></style>
