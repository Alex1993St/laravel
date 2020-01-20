<template>
    <div>
        Category Admin
        <div>
            <ValidationObserver v-slot="{ handleSubmit }">
                <form @submit.prevent="handleSubmit(save)" ref="forms">
                    <div>
                        <ValidationProvider rules="alpha|min:3" v-slot="{ errors }" name="Category">
                            <label for="category">Category</label>
                            <input id="category" type="text" v-model="category">
                            <ul>
                                <li v-for="error in errors">{{ error }}</li>
                            </ul>
                        </ValidationProvider>
                        <select v-model="parent_id">
                            <option value="">No</option>
                            <option v-for="parent in parents" :value="parent.id">{{ parent.category }}</option>
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-success">Submit</button>
                    </div>
                    <div v-if="category_save">
                        <span class="alert-success">Save</span>
                    </div>
                    <div v-if="category_error">
                        <span class="alert-danger">Error</span>
                    </div>
                </form>
            </ValidationObserver>
        </div>
        <div>
            <div> Category list</div>
            <ul>
                <li v-for="parent in parents">
                    {{ parent.category }}
                    | <span class="alert-info" @click="change(parent.id)">Change</span>
                    | <span class="alert-info" @click="remove(parent.id)">Delete</span>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CategoryAdminComponent",
        data: () => {
            return {
                category: '',
                parent_id: '',
                parents: '',
                category_save: false,
                category_error: false,
            }
        },
        created() {
            this.getParent();
        },

        methods: {
            getParent() {
                axios.get('api/category').then(response => {
                   this.parents = response.data;
                }).catch(error => {});
            },

            save() {
                axios.post('api/category', {
                    'category': this.category,
                    'parent_id': this.parent_id,
                }).then(response => {
                    this.category_save = true;
                    // need push to parents
                }).catch(error => {
                    this.category_error = true;
                });
                this.category = this.parent_id = '';
                this.$refs.forms.reset();
            },

            change(id) {
                alert(id);
            },

            remove(id) {
                axios.delete('api/category/' + id).then(response => {
                    // need remove from parents
                }).catch(error => {

                })
            }
        }
    }
</script>

<style scoped>

</style>
