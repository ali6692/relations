<template>
    <h2>User Component</h2>
    <button v-on:click="getUser(userName)">Send User Name</button>
</template>

<script>
export default {
    name: "User",
    data()
    {
        return {
            userName:"Faraz"
        }
    },
    props: {
        getUser: Function
    }




}
</script>

<style>

</style>
