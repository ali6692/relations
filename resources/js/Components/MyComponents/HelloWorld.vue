<template>
    <h1>Slots in Vue js 3</h1>
    <Child><h1>Code step by step</h1></Child>
    <Child><a href="#">Code step by step</a></Child>
    <div class="row">
        <img width="100px" v-for="img in images" v-bind:src="img"/>
    </div>
    <Child><img src="/project-assets/images/20230603_131444.jpg"/></Child>
</template>

<script>
import Child from "@/Components/MyComponents/Child.vue";
export default {
    name: "HelloWorld",
    components: {
        Child,
        data()
        {
            return {
                images:["/project-assets/images/20230603_131444.jpg"]
            }
        }
    }
}
</script>
<style scoped>
h1 {
    color:lightcoral;
}
</style>

