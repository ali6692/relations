<template>
    <h1>Home</h1>
    <Home><h1>Code step by step</h1></Home>
    <Home><a href="#">Code step by step</a></Home>
    <Login><a href="#">Login page</a></Login>
    <Profile><a href="#">Profile page</a></Profile>

</template>

<script>
import Login from "@/Components/MyComponents/Login.vue";
import Profile from "@/Components/MyComponents/Profile.vue";

export default {
    name: "Home",
    components:{
        Login,Profile
    }
}
</script>

<style scoped>
h1{
    color:orange;
}
</style>
