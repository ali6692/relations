<template>
    <h1>CSS binding</h1>
    <h2 :class="applyStyle">Home Component</h2>
    <button v-on:click="colorfull=!colorfull">Apply style</button>


</template>
<script>
export default {
    name: "HelloWorld",
    data() {
        return {
            colorfull: true
        }
    },
    computed:
        {
            applyStyle() {
                return {
                    skyblue: this.colorfull,
                    err: true,
                    other: true
                }
            }
        }
}
</script>
<style scoped>
h1 {
    color:brown;
}
.skyblue{
    background-color: skyblue;
    width:250px;
    padding:20px;
}
.err{
    color:red;
}
.other{
    font-size: 50px;
}
</style>

