<template>

<h1 v-if="show">If condition</h1>
<h1 v-else>Else condition</h1>

<button v-on:click="show=!show">Toggle</button>
</template>

<script>
export default {
    name:"HelloWorld",
    data()
    {
        return {
            show: true
        }
    }
}

</script>
<style scoped>
h1 {
    color:darkcyan;
}
</style>
