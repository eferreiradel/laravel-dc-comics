<template>
    <div class="container-fluid py-2 px-0 shadow-sm">
        <div class="container navbar">
            <div class="navbar-brand p-0">
                <img
                    src="../../../../public/images/dc-logo.png"
                    alt=""
                    class="img-fluid"
                />
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
