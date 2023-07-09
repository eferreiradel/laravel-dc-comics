<template>
    <div class="container-fluid bg-light py-2">
        <div
            class="container d-flex justify-content-between align-items-center"
        >
            <div class="navbar-brand">
                <img src="../../../../public/images/dc-logo.png" alt="" />
            </div>
            <nav class="d-flex gap-2">
                <a href="">HOME</a>
                <a href="">COIMCS</a>
            </nav>
        </div>
    </div>
</template>
<script>
export default {
    name: "navbar",
    data() {
        return {
            home: "",
            comics: "",
        };
    },
};
</script>
<style></style>
