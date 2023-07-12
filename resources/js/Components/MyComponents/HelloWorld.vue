<template>
    <h1>Simple form</h1>
    <form>
        <label>Email :</label>
        <input type="text" placeholder="Enter your email" v-model="form.email"/>
        <br/><br/>

        <label>Password :</label>
        <input type="password" placeholder="Enter your password" v-model="form.password"/>
        <br/><br/>
        <button v-on:click="login" type="button">Login</button>
    </form>

</template>

<script>
export default {
    name: "HelloWorld",
    data()
    {
        return {
            form:{
                email:'',
                password:''
            }
        }
    },
    methods:{
        login() {
            console.warn("login data",this.form)
        }
    }
}
</script>
<style scoped>
h1 {
    background-color:deepskyblue;
}
</style>

