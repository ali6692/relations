<template>
    <div class="nav">
        <logout></logout>
        <a v-on:click="home" href="#">Home</a>
        <a v-on:click="add" href="#">Add restaurant</a>
        <a v-on:click="update" href="#">Update restaurant</a>
        <a v-on:click="logout" href="#">Logout</a>
    </div>
</template>

<script>

export default {
    name: "WebHeader",
    methods:{
      logout()
      {
          console.warn("Logged out")
      },
        add()
        {
            console.warn("welcome to the add section")
        },
        update()
        {
            console.warn("welcome to the update page")
        },
        home()
        {
            console.warn("welcome to the home page")
        }
    }
}
</script>

<style scoped>
.nav{
    background-color:cadetblue;
    overflow:hidden;
}
.nav a{
    float:left;
    color:#ef4444;
    text-decoration:none;
    margin-right:4px;
    text-align:center;
    padding:10px 14px;
    font-size:16px;
}
.nav a:hover{
    background-color:cadetblue;
    color:darkmagenta;
}
</style>
