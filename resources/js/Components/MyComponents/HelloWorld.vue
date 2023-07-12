<template>
    <h1>Form modifiers </h1>
    <input type="text" v-model.number="data"/>
    <h2>Data is :{{typeof(data)}}</h2>
    <h2>Data is :{{data}}</h2>

</template>

<script>
export default {
    name: "HelloWorld",
    data()
    {
        return {
            data:''
        }
    }

}
</script>
<style scoped>
h1 {
    background-color:deepskyblue;
}
</style>

