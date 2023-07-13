<template>
    <h1>Non props data</h1>
    <User data="some data" id="user-cmp"/>

</template>

<script>

import User from "@/Components/MyComponents/User.vue";
export default {
    name: "HelloWorld",
    components: {
        User
    }


}
</script>
<style scoped>
h1 {
    background-color:deepskyblue;
}
</style>

