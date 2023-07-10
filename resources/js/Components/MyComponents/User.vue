<template>
<div class="user">
<h2>{{data.name}}</h2>
<h2>{{data.email}}</h2>
<button v-on:click="getData(data.name)">Alert Name</button>
</div>
</template>

<script>
export default {
    name: "User",
    props: {
        data:Object,
        getData:Function
    },




}
</script>

<style>
.user{
    background-color: skyblue;
    padding: 10px;
    border-bottom: 1px solid;
    margin-bottom: 20px
}

</style>
