<template>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Обращение</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(message, index) in messages" :key="index">
            <td>
                {{ index + 1 }}
            </td>
            <td>
                {{ message.name }}
            </td>
            <td>
                {{ message.greeting }}
            </td>
        </tr>
        </tbody>
    </table>
</template>

<script>
import {mapGetters} from "vuex";

export default {
    name: "FormListView",
    computed: {
        ...mapGetters(['messages']),
    },
}
</script>

<style scoped lang="scss">

</style>
