<template>
    <p>{{ room }}</p>
</template>

<script>
    export default {
        props: ['room'],
        mounted() {
            console.log('Room ' + this.room + ' mounted.')
        }
    }
</script>
