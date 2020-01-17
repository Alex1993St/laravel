<template>
    <div>
        <router-link to="/">Home</router-link>
        <router-link to="/register">Register</router-link>
        <router-link to="/login" v-if="!isLogin">Login</router-link>
        <form @submit.prevent="logout" v-if="isLogin">
            <button>logout</button>
        </form>
    </div>
</template>

<script>
    import routes from "../routes";

    export default {
        name: "MenuComponent",
        data: () => {
            return {
                isLogin: false,
            }
        },
        methods: {
            logout() {
                axios.post('api/logout').then(response => {
                    if (response.data == 'logout') {
                        routes.push('/login');
                    }
                    localStorage.isLogin = 0;
                    routes.go(-1);
                }).catch(error => {

                })
            }
        },

        created() {
            this.isLogin = localStorage.isLogin == true ? true : false;
        }
    }
</script>

<style scoped>

</style>
