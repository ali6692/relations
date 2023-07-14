<template>
    <h1>Dynamic components</h1>
    <button @click="tab='Java'">Load Java</button>
    <button @click="tab='Php'">Load Php</button>
    <button @click="tab='Node'">Load Node</button>
    <component :is="tab"/>
</template>

<script>
import Php from "@/Components/MyComponents/Php.vue";
import Node from "@/Components/MyComponents/Node.vue";
import Java from "@/Components/MyComponents/Java.vue";
export default {
    name: "HelloWorld",
    components: {
        Php,Node,Java
    },
    data()
    {
        return {
            tab:'Java'
        }
    }
}

</script>
<style scoped>
h1 {
    color:lightcoral;
}
</style>

