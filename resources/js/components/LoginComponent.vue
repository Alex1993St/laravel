<template>
    <div>
        <div>
            <menu-list></menu-list>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Login</div>

                        <div class="card-body">
                            <ValidationObserver v-slot="{ handleSubmit }">
                                <form method="POST" action="login" @submit.prevent="handleSubmit(onSubmit)">
                                    <!-- csrf-->
                                    <ValidationProvider name="Email"  rules="required|min:4|maxletter|email"  :bails="false"  v-slot="{ errors }">
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" v-model="email" class="form-control"  name="email" required autocomplete="email">
                                            </div>
                                        </div>
                                        <ul>
                                            <li v-for="error in errors">{{ error }}</li>
                                        </ul>
                                    </ValidationProvider>

                                    <ValidationProvider name="Password" :rules="{ required: true,  min: 3, max: 15 }" v-slot="{ errors }">
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" v-model="password" required autocomplete="current-password">
                                            </div>
                                        </div>
                                        <ul>
                                            <li v-for="error in errors">{{ error }}</li>
                                        </ul>
                                    </ValidationProvider>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" v-model="remember" name="remember" id="remember">

                                                <label class="form-check-label" for="remember">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                               Login
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
     import { ValidationObserver, ValidationProvider, extend, localize } from 'vee-validate';
     //import { email , min } from 'vee-validate/dist/rules';
     import en from 'vee-validate/dist/locale/en.json';
     import * as rules from 'vee-validate/dist/rules';
     import routes from "../routes";

     Vue.component('ValidationProvider', ValidationProvider);
     Vue.component('ValidationObserver', ValidationObserver);

     localize('en', en);

     // install rules and localization
     Object.keys(rules).forEach(rule => {
         extend(rule, rules[rule]);
     });

     // extend('min', min);
     // extend('email', email);

     extend('required', {
         validate(value) {
             return {
                 required: true,
                 valid: ['', null, undefined].indexOf(value) === -1
             };
         },
         computesRequired: true,
         message: 'required'
     });

     extend('maxletter', email => {
         if (email.length <= 25) {
             return true;
         }
         return 'Max length 25 letters';
     });

     export default {
         data: () => ({
             email: '',
             password: '',
             remember: ''
         }),

         methods: {
             onSubmit() {
                 axios.post('api/login', {
                     email: this.email,
                     password: this.password,
                     remember: this.remember
                 }).then(response => {
                     if (response.data.login) {
                         localStorage.isLogin = 1;
                         routes.push('/admin')
                     } else {
                         alert('login or password put wrong')
                     }
                 }).catch(error => {

                 })
             }
         }
     };
</script>

<style scoped>

</style>
