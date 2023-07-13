<template>
    <div>
        <hello-world msg="Welcome to your Vue.js App"></hello-world>
    </div>
</template>

<script>

import HelloWorld from "@/Components/MyComponents/HelloWorld.vue";
import Child from "@/Components/MyComponents/Child.vue";
/*import User from "@/Components/MyComponents/User.vue";
import Student from "@/Components/MyComponents/Student.vue";
import Teacher from "@/Components/MyComponents/Teacher.vue";*/
export default {
    name: "Sample",
    components: {HelloWorld,Child}
}
</script>

<style scoped>

</style>
