<template>
    <WebHeader/>
    <h1>Welcome on update page</h1>
    <img class="logo mx-auto mt-4 text-center" src="project-assets/images/3.jpeg">

    <div class="register mt-4 text-center">
    <form class="update">
        <input type="text" placeholder="Enter your name" v-model="restaurant.name" name="name"/>
        <input type="text" placeholder="Enter your address" v-model="restaurant.address" name="address"/>
        <input type="text" placeholder="Enter your contact" v-model="restaurant.contact" name="contact"/>
        <button type="button" v-on:click="updateRestaurant">Update restaurant</button>
</form>
    </div>
</template>

<script>
import WebHeader from "@/Components/MyComponents/WebHeader.vue";
export default {
    name: "Update",
    components: {WebHeader},
    data()
    {
        return {
            restaurant: {
                name: '',
                address: '',
                contact: ''
            }
        }
    },
    methods:{
        updateRestaurant()
        {
            console.warn("this.restaurant")
        }
    }
}

</script>

<style scoped>
.update input{
    width:300px;
    height:40px;
    padding-left:20px;
    display:block;
    margin-bottom:30px;
    margin-left:auto;
    margin-right:auto;
    border:1px solid deepskyblue;
}
.update button{
    width:325px;
    height:40px;
    border:1px solid deepskyblue;
    color:#fff;
    background-color:deepskyblue;
    cursor:pointer;
}
</style>
