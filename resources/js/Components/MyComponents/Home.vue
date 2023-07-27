<template>
    <logout></logout>
</template>

<script>

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
