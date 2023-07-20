<template>
    <img class="logo" src="project-assets/1.png">
    <h1>Sign Up</h1>
    <div class="register">
        <input type="text" placeholder="Enter your name"/>
        <input type="text" placeholder="Enter your email"/>
        <input type="password" placeholder="Enter your password"/>
        <button>Sign Up</button>
    </div>
</template>

<script>
export default {
    name: "SignUp"
}
</script>

<style scoped>
.logo{
    width:300px;
}
.register input{
    width:300px;
    height:40px;
    padding-left:20px;
    display:block;
    margin-bottom:30px;
    margin-left:auto;
    margin-right:auto;
    border:1px solid deepskyblue;
}
.register button{
    width:320px;
    height:40px;
    border:1px solid deepskyblue;
    color:#fff;
    background-color:deepskyblue;
    cursor:pointer;
}
</style>
