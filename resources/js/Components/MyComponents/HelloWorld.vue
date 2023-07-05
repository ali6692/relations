<template>
    <div class="Hello">
        <h1>Email: {{email}}</h1>
        <h1>Mobile: {{mobile}}</h1>
        <h1>Name: {{getName("ABC")}}</h1>
    </div>

</template>

<script>
export default {
    name: 'HelloWorld',
    data()
    {
        return {
            email:'abc@gmail.com',
            mobile:123456789,
            getName:function(a)
            {
                return a;
            }
        }
    }
}
</script>
<style scoped>
h1{
    color:darkmagenta;
}
</style>
