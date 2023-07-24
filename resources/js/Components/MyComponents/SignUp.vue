<template>
    <img class="logo mx-auto text-center" src="project-assets/1.png">
    <div class="register mt-4 text-center">
        <input type="text" v-model="name" placeholder="Name"/>
        <input type="text" v-model="email" placeholder="Email"/>
        <input type="password" v-model="password" placeholder="Password"/>
        <input type="text" v-model="country" placeholder="Country"/>
        <input type="text" v-model="city" placeholder="City"/>
        <input type="number" v-model="pincode" placeholder="Pincode"/>
        <input type="number" v-model="mobile_no" placeholder="Mobile No."/>
        <button v-on:click="signUp">Sign Up</button>

    </div>
</template>

<script>
import axios from "axios";
export default {
    name: "SignUp",
    data()
    {
        return {
            name:'',
            email:'',
            password:'',
            country:'',
            city:'',
            pincode:'',
            mobile_no:''
        }
    },
    methods:{
        async signUp()
        {
            console.warn("signUp",this.name,this.email,this.password,this.country,this.city,this.pincode,this.mobile_no)
            let result=await axios.get("http://127.0.0.1:8000/sample",{
                email:this.email,
                name:this.name,
                password:this.password,
                country:this.country,
                city:this.city,
                pincode:this.pincode,
                mobile_no:this.mobile_no
            });
            console.warn(result);
            if(result.status===200)
            {
                alert("Sign Up done");
            }
            localStorage.setItem("user-info",JSON.stringify(result.data))
        }
    }
}
</script>

<style scoped>
.logo{
    width:250px;
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
    width:325px;
    height:40px;
    border:1px solid deepskyblue;
    color:#fff;
    background-color:deepskyblue;
    cursor:pointer;
}
</style>
