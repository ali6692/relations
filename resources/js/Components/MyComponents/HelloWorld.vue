<template>
<h1 v-on:mousemove="getConsole()">Home Component</h1>
<button v-on:click="getData('Button 1 clicked')">Click me</button>
<button v-on:dblclick="getData('Button 2 clicked')">Click Me</button>
</template>

<script>
export default {
    name:"HelloWorld",
    methods:{
        getData(data)
        {
            this.count=10;
        },
        getConsole()
        {
            console.warn("function called")
        }
    }
}
</script>
<style scoped>
h1 {
    color:darkcyan;
}
</style>
