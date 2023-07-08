<template>
<h1>For loop in Vue Js</h1>
<ul>
    <li v-for="item in technology" :key="item">
        {{item}}
    </li>
</ul>
<br />
<br />
<ul>
    <li v-for="item in user" :key="item.email">
    Name is : {{item.name}} and Email is : {{item.email}}
    </li>
</ul>
</template>
<script>
export default {
    name: "HelloWorld",
    data() {
        return {
            technology: ['java','php','node','html'],
            user: [{
                name: "Faraz",
                email: "abc@gmail.com"
            },
                {
                    name:"Insha",
                    email:"def@gmail.com"
                },
                {
                    name:"Sana",
                    email:"ghi@gmail.com"
                },
                {
                    name:"Iqra",
                    email:"jkl@gmail.com"
                },
                ]
        }
    }
}
</script>






<style scoped>
h1 {
    color:darkcyan;
}
</style>
