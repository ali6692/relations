<template>
    <Child>
        <template v-slot:header>
            <h1>Faraz</h1>
        </template>
        <template v-slot:main>
            <p>A vue js product</p>
        </template>
        <button>Buy now</button>
        <template v-slot:footer>
            <button>Buy now</button>
        </template>
    </Child>
</template>


<script>
import Child from "@/Components/MyComponents/Child.vue";
export default {
    name: "HelloWorld",
    components: {
        Child
    }
}

</script>
<style scoped>
h1 {
    color:lightcoral;
}
</style>

