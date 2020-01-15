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
                                <ValidationProvider name="email"
                                    rules="required|min:10|max|email"
                                    :bails="false"
                                    v-slot="{ errors }"
                                >
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


                                <ValidationProvider name="Password" :rules="{ required: true,  min: 3, max: 10 }" v-slot="{ errors }">
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

<!--                                    <div class="form-group row">-->
<!--                                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>-->
<!--                                        <div class="col-md-6">-->
<!--                                            <input id="password" type="password" class="form-control" v-model="password" required autocomplete="current-password">-->
<!--                                        </div>-->
<!--                                    </div>-->




                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember">

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

     extend('max', {
         validate(value) {
             if (value.length <=  6) {
                 return value.length
             }
         },
         message: 'Max value 6'
     });

     export default {
         data: () => ({
             email: '',
             password: '',
         }),

         methods: {
             onSubmit() {
                 alert(1);
             }
         }
     };
</script>

<style scoped>

</style>
