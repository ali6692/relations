<template>
    <h1>Simple form</h1>
    <ul>
    <li v-for="item in error" v-bind:key="item">
        {{item}} not valid
    </li>
    </ul>
    <form>

        <label>Email :</label>
        <input type="text" placeholder="Enter your email" v-model="form.email"/>
        <br/><br/>

        <label>Password :</label>
        <input type="password" placeholder="Enter your password" v-model="form.password"/>
        <br/><br/>
        <select v-model="form.country">
            <option>India</option>
            <option>USA</option>
            <option>UK</option>
        </select>

        <h3>Technology</h3>
        <label>Java :</label>
        <input type="checkbox" value="java"   v-model="form.technology"/>
        <br/><br/>
        <label>.Net :</label>
        <input type="checkbox" value=".net" v-model="form.technology"/>
        <br/><br/>
        <label>PHP :</label>
        <input type="checkbox" value="php"  v-model="form.technology"/>
        <br/><br/>

        <h3>Gender</h3>
        <label>Male</label>
        <input type="radio" value="male" name="gender" v-model="form.gender"/>
        <br/><br/>
        <label>Female</label>
        <input type="radio" value="female" name="gender" v-model="form.gender"/>
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
                password:'',
                country:'',
                technology:[],
                gender:'',
            },
            error:[],
        }
    },
    methods:{
        login() {
            this.error=[];
            for(const item in this.form)
            {
                if(this.form[item]=="" || this.form[item].length===0)
                {
                    this.error.push(item)
                }
                if(this.error.length===0)
                {
                    alert("Data has been submitted");
                }
            }
            console.warn(this.form,this.error)
        }
    }
}
</script>
<style scoped>
h1 {
    background-color:deepskyblue;
}
</style>

