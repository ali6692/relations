<template>
<h1>Email: {{email}}</h1>
<h1>Name: {{getName("Inshu")}}</h1>
</template>
<script>
export default {
    name: 'HelloWorld',
    data()
    {
        return {
            email:"abc@gmail.com",
        }
    },
    methods: {
        getName(name)
        {
            return name;
        }
    }
}
</script>
<style scoped>
h1{
    color:magenta;
}
</style>

