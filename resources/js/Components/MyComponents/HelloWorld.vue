<template>
<h1>Get input field value</h1>
<input type="text" placeholder="Enter your email" v-model="email"/>
<br />
<br />
<input type="password" placeholder="Enter your password" v-model="password"/>
<br /><br />
<button v-on:click="getData()" type="button">Get values</button>
</template>

<script>
export default {
    name:"HelloWorld",
    data()
    {
        return {
            email:null,
            password:null
        }
    },
    methods: {
        getData()
        {
            console.warn("values :",this.email,this.password)
        }
    }

}

</script>
<style scoped>
h1 {
    color:darkcyan;
}
</style>
