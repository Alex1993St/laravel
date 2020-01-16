<template>
    <div>
        <router-link to="/">Home</router-link>
        <router-link to="/register">Register</router-link>
        <router-link to="/login">Login</router-link>
        <form @submit.prevent="logout">
            <button>logout</button>
        </form>
    </div>
</template>

<script>
    import routes from "../routes";

    export default {
        name: "MenuComponent",
        methods: {
            logout() {
                axios.post('api/logout').then(response => {
                    if (response.data == 'logout') {
                        routes.push('/login');
                    } else {
                        alert('You are not login');
                    }
                    routes.go(-1);
                }).catch(error => {

                })
            }
        }
    }
</script>

<style scoped>

</style>
