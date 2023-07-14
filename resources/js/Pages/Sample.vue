<template>
    <div>
        <hello-world msg="Welcome to your Vue.js App"></hello-world>
    </div>
</template>

<script>

import HelloWorld from "@/Components/MyComponents/HelloWorld.vue";
import Php from "@/Components/MyComponents/Php.vue";
import Node from "@/Components/MyComponents/Node.vue";
import Java from "@/Components/MyComponents/Java.vue";
/*import Child from "@/Components/MyComponents/Child.vue";
import User from "@/Components/MyComponents/User.vue";
import Student from "@/Components/MyComponents/Student.vue";
import Teacher from "@/Components/MyComponents/Teacher.vue";*/
export default {
    name: "Sample",
    components: {HelloWorld,Php,Node,Java}
}
</script>

<style scoped>

</style>
