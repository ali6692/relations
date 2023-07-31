<template>
    <WebHeader/>
    <h1>Welcome on add restaurant page</h1>
    <img class="logo mx-auto mt-4 text-center" src="project-assets/images/3.jpeg">

    <div class="register mt-4 text-center">
    <form class="add">
        <input type="text" placeholder="Enter your name" v-model="restaurant.name" name="name"/>
        <input type="text" placeholder="Enter your address" v-model="restaurant.address" name="address"/>
        <input type="text" placeholder="Enter your contact" v-model="restaurant.contact" name="contact"/>
        <button type="button" v-on:click="addRestaurant">Add restaurant</button>
        <button v-on:click="deleteRestaurant(item.id)">Delete restaurant</button>
    </form>
    </div>
</template>

<script>
import WebHeader from "@/Components/MyComponents/WebHeader.vue";
export default {
    name: "Add",
    components: {WebHeader},
    data()
    {
        return {
            restaurant:{
                name:'',
                address:'',
                contact:''
            }
        }
    },
    methods:{
        addRestaurant()
        {
            console.warn("this.restaurant")
        },
        deleteRestaurant(id)
        {
            console.warn(id)
        }
    }
}
</script>

<style scoped>
.add input{
    width:300px;
    height:40px;
    padding-left:20px;
    display:block;
    margin-bottom:30px;
    margin-left:auto;
    margin-right:auto;
    border:1px solid deepskyblue;
}
.add button{
    width:325px;
    height:40px;
    border:1px solid deepskyblue;
    color:#fff;
    background-color:deepskyblue;
    cursor:pointer;
}
</style>
