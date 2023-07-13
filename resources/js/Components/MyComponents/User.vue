<template>
    <div>
        <h3>Faraz</h3>
        <h3>Insha</h3>
        <h3 v-bind="$attrs">Sana</h3>
    </div>

</template>

<script>
export default {
    name: 'User',
    props:{
        id:String,
        data:String,
    }
}
</script>

