<template>
    <div>
        <h1>Reuse component</h1>
        <ul>
            <li v-for="item in users" :key="item.name">
                <User :data="item" :getData="getData" />
            </li>
        </ul>
    </div>
</template>
<script>
import User from "@/Components/MyComponents/User.vue";
export default {
    name: "HelloWorld",
    components: {
        User
    },
    data() {
        return {
            users: [
                {
                    name:"Faraz Ali Khan",
                    email: "abc@gmail.com"
                },
                {
                    name:"Insha Gilani",
                    email:"def@gmail.com"
                },
                {
                    name:"Sana Saeed",
                    email:"ghi@gmail.com"
                },
                {
                    name:"Iqra Malik",
                    email:"jkl@gmail.com"
                }
            ]
        }
    },
    props:['msg'],
    methods: {
        getData(name) {
            alert(name)
        },
    }
}
</script>
<style scoped>
h1 {
    color:darkcyan;
}
</style>
