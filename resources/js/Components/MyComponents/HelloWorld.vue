<template>
    <h1>Computed property</h1>
    <h2>{{(dollars*rupeeVal)-discount}}</h2>
    <h2>{{(dollars*rupeeVal)-discount}}</h2>
    <h2>{{getResult}}</h2>
    <h2>{{getResultMethod()}}</h2>


</template>

<script>

import User from "@/Components/MyComponents/User.vue";
export default {
    name: "HelloWorld",
    data() {
        return {
            dollars: 100,
            rupeeVal: 70,
            discount: 10,
        }
    },
    methods:
        {
            getResultMethod() {
                return (this.dollars * this.rupeeVal) - this.discount;
            }
        },
    computed: {
        getResult() {
            return (this.dollars * this.rupeeVal) - this.discount;
        }
    }
}

</script>
<style scoped>
h1 {
    background-color:deepskyblue;
}
</style>

