<template>
    <div class="cart">
    <header>
        <slot name="header"></slot>
    </header>
    <content>
        <slot name="main"></slot>
    </content>
    <footer>
        <slot name="footer"></slot>
    </footer>
    </div>
</template>

<script>
export default {
    name: "Child",
}
</script>

<style scoped>
.cart{
    border:1px;
    width:150px;
    text-align:center;
    padding:20px;
}


</style>
