<template>
<h2>{{name}}</h2>
<h2>{{user.name}}</h2>
<button v-on:click="getData()">Call Function</button>
</template>

<script>
export default {
    name: "Child",
    props:{
        name:String,
        user:Object,
        getData:Function
    }
}
</script>

<style scoped>

</style>
