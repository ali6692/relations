<template>
    <h1>{{count}}</h1>
    <button v-on:click="count=count+1">+</button>
    <button v-on:click="count=count-1">-</button>


</template>

<script>

import User from "@/Components/MyComponents/User.vue";
export default {
    name: "HelloWorld",
    data()
    {
        return {
            count:0
        }
    },
    watch:{
        count(val,prev)
        {
            if(val>5 && val>prev)
            {
                this.count=0
            }
        }
    }

}

</script>
<style scoped>
h1 {
    color:lightcoral;
}
</style>

