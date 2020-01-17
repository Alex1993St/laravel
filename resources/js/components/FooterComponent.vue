<template>
    <div class="menu psb">
        <div class="menu-left psb">
            <router-link to="/">Home</router-link>
            <router-link to="/about">About</router-link>
            <router-link to="/categories">Categories &#8623;</router-link>
            <router-link to="/news">News</router-link>
            <router-link to="/contacts">Contacts</router-link>
        </div>
        <div class="menu-right psb">
            <router-link to="/register">Register</router-link>
            <router-link to="/login" v-if="!isLogin">Login</router-link>
            <form @submit.prevent="logout" v-if="isLogin">
                <button class="btn-form-sub">Logout</button>
            </form>
        </div>
    </div>
</template>

<script>
    import routes from "../routes";

    export default {
        name: "FooterComponent",
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
