<template>
    <h1>beforeCreated and created {{name}}</h1>
</template>

<script>
export default {
    name: "Home",
    data()
    {
        console.warn("created");
        return{
            name:"Insha",
        }
    },
    beforeCreate()
    {
        alert("beforeCreated");
    },
    created()
    {
        this.name="Faraz";
        alert("created");
    }
}
</script>

<style scoped>
h1{
    color:orange;
}
</style>
