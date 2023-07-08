<template>
<h1>Pass Data to child component</h1>
<Child name="Kashaf Khan" :user="user" :getData="getData"/>

</template>
<script>
import Child from "@/Components/MyComponents/Child.vue";
export default {
    name:"HelloWorld",
    components: {
        Child
    },
    data() {
        return {
            user: {
                name: "Saquib",
                email:"abc@gmail.com"
            }
        }
    },
    methods: {
        getData() {
            console.warn("parent function called")
            alert("Hello")
        }
    }
}
</script>

<style scoped>
h1 {
    color:darkcyan;
}
</style>
