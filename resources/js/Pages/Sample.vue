<template>
    <router-link to="/footer">Home</router-link><br/>
    <router-link to="/login">Login</router-link><br/>
    <router-link to="/profile">Profile</router-link><br/>
    <router-view></router-view>
</template>

<script>
//import HelloWorld from "@/Components/MyComponents/HelloWorld.vue";
import Home from "@/Components/MyComponents/Home.vue";
import Login from "@/Components/MyComponents/Login.vue";
import Profile from "@/Components/MyComponents/Profile.vue";
//import Footer from "@/Components/MyComponents/Footer.vue";
//import Php from "@/Components/MyComponents/Php.vue";
//import Node from "@/Components/MyComponents/Node.vue";
//import Java from "@/Components/MyComponents/Java.vue";
//import Child from "@/Components/MyComponents/Child.vue";
//import User from "@/Components/MyComponents/User.vue";
//import Student from "@/Components/MyComponents/Student.vue";
//import Teacher from "@/Components/MyComponents/Teacher.vue";*/
export default {
    name: "Sample",
    components:{
            Home,Login,Profile
    }
}
</script>

<style scoped>

</style>
