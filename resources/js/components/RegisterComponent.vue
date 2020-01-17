<template>
    <div>
        <menu-list></menu-list>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>

                        <div class="card-body">
                            <ValidationObserver v-slot="{ handleSubmit }">
                                <form @submit.prevent="handleSubmit(onSubmit)">
    <!--                                @csrf-->

                                    <ValidationProvider name="Name" :rules="{ required: true, min: 3, max: 10, alpha: true }" v-slot="{ errors }">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" v-model="name" required autocomplete="name">
                                            </div>
                                        </div>
                                        <ul>
                                            <li v-for="error in errors">{{ error }}</li>
                                        </ul>
                                    </ValidationProvider>

                                    <ValidationProvider name="Email" :rules="{ required: true, min: 4, max: 25, email: true }" v-slot="{ errors }">
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" v-model="email" required autocomplete="email">
                                            </div>
                                        </div>
                                        <ul>
                                            <li v-for="error in errors">{{ error }}</li>
                                        </ul>
                                    </ValidationProvider>

                                   <ValidationProvider name="Password" :rules="{ required: true, min: 4, max: 15}" v-slot="{ errors }" vid="password">
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password" v-model="password" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <ul>
                                            <li v-for="error in errors">{{ error }}</li>
                                        </ul>
                                    </ValidationProvider>

                                    <ValidationProvider name="Confirm Password" v-slot="{ errors }" rules="confirmed:password">
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" v-model="confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <ul>
                                            <li v-for="error in errors">{{ error }}</li>
                                        </ul>
                                    </ValidationProvider>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Vue from 'vue';
    import { ValidationProvider, ValidationObserver, localize, extend } from 'vee-validate';
    import en from 'vee-validate/dist/locale/en.json';
    import * as rules from 'vee-validate/dist/rules';
    import routes from "../routes";

    Object.keys(rules).forEach(rule => {
        extend(rule, rules[rule]);
    });

    localize('en', en);

    Vue.component('ValidationProvider', ValidationProvider);
    Vue.component('ValidationObserver', ValidationObserver);

    export default {
        name: "RegisterComponent",
        data: () => ({
            name: '',
            email: '',
            password: '',
            confirmation: '',
        }),
        methods: {
            onSubmit() {
                if (this.password === this.confirmation) {
                    axios.post('api/register', {
                        name: this.name,
                        email: this.email,
                        password: this.password,
                        password_confirmation: this.confirmation,
                    }).then(response => {
                       if (response.data == 'success') {
                           localStorage.isLogin = 1
                           routes.push('/');
                       }
                    }).catch(error => {
                    })
                }
            }
        }
    }
</script>

<style scoped>

</style>
