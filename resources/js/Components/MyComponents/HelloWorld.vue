<template>
    <h1>{{text}}</h1>
    <div v-html="tag"></div>
    <div v-html="tag2"></div>

</template>
<script>
export default {
    name:"HelloWorld",
    data()
    {
        return {
            text:"Faraz ALi Khan",
            tag:"<h1>Faraz Ali Khan</h1>",
            tag2:"<h1>abc@gmail.com</h1>"
        }
    }
}
</script>
<style scoped>
h1 {
    color:darkcyan;
}
</style>
