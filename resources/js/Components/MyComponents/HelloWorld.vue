<template>
    <h1>Props in Vue js 3</h1>
    <Student :name="name"/>
    <Teacher :name="name"/>


</template>

<script>

import Student from "@/Components/MyComponents/Student.vue";
import Teacher from "@/Components/MyComponents/Teacher.vue";
export default {
    name: "HelloWorld",
    data() {
        return {
            name:"Insha"
        }

    },
    components:{
        Student,
        Teacher
    }

}
</script>
<style scoped>
h1 {
    color:brown;
}
</style>

