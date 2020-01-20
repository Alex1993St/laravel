<template>
    <div>
        <router-link to="/admin">Admin</router-link>
        <router-link to="/admin/news">News</router-link>
        <router-link to="/admin/category">Category</router-link>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: "HeaderComponent"
    }
</script>

<style scoped>

</style>
