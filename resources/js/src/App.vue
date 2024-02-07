<template>
    <main class="main">
        <div class="container">
            <app-header></app-header>
            <router-view></router-view>
        </div>
    </main>
</template>

<script>
import AppHeader from "./components/AppHeader.vue";

export default {
    components: {
        AppHeader,
    }
}
</script>

<style lang="scss">

</style>
