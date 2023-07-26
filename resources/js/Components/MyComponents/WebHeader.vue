<template>
    <div class="nav">
        <a href="home">Home</a>
        <a href="home">Add restaurant</a>
        <a href="home">Update restaurant</a>
        <a href="home">Logout</a>
    </div>
</template>

<script>
export default {
    name: "WebHeader"
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
