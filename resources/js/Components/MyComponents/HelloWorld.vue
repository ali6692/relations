<template>
<h1>Get checkbox & radio button value</h1>
<h3>Technology</h3>

<label for ="java">Java</label>
<input type="checkbox" value="java" v-model="technology" id="java">

<label for="php">Php</label>
<input type="checkbox" value="php" v-model="technology" id="php">

<label for="Node">Node</label>
<input type="checkbox" value="node" v-model="technology" id="node">

<br /><br />
<h3>Who am I</h3>
<label for="student">Student</label>
<input type="radio" value="student" v-model="who" name="who" id="student">

<label for="developer">Developer</label>
<input type="radio" value="php" v-model="who" name="who" id="developer">

<br /><br />
<h4>Selected Technology: {{technology}}</h4>
<h4>I am a: {{who}}</h4>

</template>

<script>
export default {
    name:"HelloWorld",
    data()
    {
        return {
            technology:[],
            who:null
        }
    }
}

</script>
<style scoped>
h1 {
    color:darkcyan;
}
</style>
