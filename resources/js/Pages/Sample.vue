<template>
    <div>
        <hello-world msg="Welcome to your Vue.js App"></hello-world>
        <Home/>
    </div>
</template>

<script>

//import HelloWorld from "@/Components/MyComponents/HelloWorld.vue";
import Home from "@/Components/MyComponents/Home.vue";
//import Footer from "@/Components/MyComponents/Footer.vue";
//import Php from "@/Components/MyComponents/Php.vue";
//import Node from "@/Components/MyComponents/Node.vue";
//import Java from "@/Components/MyComponents/Java.vue";
//import Child from "@/Components/MyComponents/Child.vue";
import User from "@/Components/MyComponents/User.vue";
//import Student from "@/Components/MyComponents/Student.vue";
//import Teacher from "@/Components/MyComponents/Teacher.vue";*/
export default {
    name: "Sample",
    components: {Home,User}
}
</script>

<style scoped>

</style>
