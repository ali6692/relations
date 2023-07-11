<template>
    <h1>{{childUser}}</h1>
    <User :getUser="getUserName"/>
</template>

<script>
import User from "@/Components/MyComponents/User.vue";
export default {
    name: "HelloWorld",
    data()
    {
        return {
            childUser:""
        }

    },
    components: {
        User
    },
    methods:{
        getUserName(name){
            this.childUser=name

        }
    }
}
</script>
<style scoped>
h1 {
    color:brown;
}
</style>

