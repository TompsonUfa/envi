<template>
    <form @submit.prevent="handleSubmit">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" v-model="form.name" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="message">Message:</label>
            <textarea id="message" class="form-control" v-model="form.greeting" required></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</template>

<script>
import axios from "axios";
import {mapActions} from "vuex";

export default {
    name: "FormContact",
    data() {
        return {
            form: {
                name: "",
                greeting: "",
            },
        }
    },
    methods: {
        ...mapActions(['saveMessage']),
        handleSubmit() {
            axios.post('/api/admin/contacts', this.form)
                .then(res => {
                    this.saveMessage(this.form);
                })
                .catch(err => {
                    console.log(err);
                })
        },
    }
}
</script>

<style scoped lang="scss">

</style>
