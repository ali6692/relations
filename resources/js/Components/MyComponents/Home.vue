<template>
    <h1 ref="count">{{counter}}</h1>
    <button v-on:click="counter=counter+1">Update count</button>
</template>

<script>
export default {
    name: "Home",
    data() {
        return {
            counter:0
        }
    },
    beforeUpdate()
    {
        console.log("beforeUpdate",this.$refs['count'].textContent);
    },
    updated()
    {
        console.log("updated",this.$refs['count'].textContent);
    }

}
</script>

<style scoped>
h1{
    color:orange;
}
</style>
