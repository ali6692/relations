<template>
    <h1>Ref in Vue js 3</h1>
    <input type="text" ref="input"/>
    <button v-on:click="getData">Click Me</button>
</template>

<script>

export default {
    name: "HelloWorld",
    methods:{
        getData()
        {
            this.$refs.input.focus();
            let val=this.$refs.input.value;
            console.warn(val);
            this.$refs.input.style.color="red"
        }
    }

}
</script>
<style scoped>
h1 {
    color:brown;
}
</style>

