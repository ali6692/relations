<template>
    <logout></logout>
</template>
<script>

import axios from "axios";

export default {
    name: "Home",
    methods:{
        logout()
        {
            console.warn("Logged out successfully")
        }
    }
}
</script>

<style scoped>
h1{
    color:orange;
}
</style>
