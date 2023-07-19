<template>
    <button v-on:click="show=!show">Toggle</button>
    <User v-if="show"/>
</template>

<script>
import User from "@/Components/MyComponents/User.vue";
export default {
    name: "Home",
    data()
    {
      return {
          show:true
      }
    },
    components:{
        User
    }
}
</script>

<style scoped>
h1{
    color:orange;
}
</style>
