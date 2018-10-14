<template>
    <div>
        <h1>Vue Router Demo App</h1>

        <p>
            <router-link :to="{ name: 'users' }">Users</router-link> |
            <router-link :to="{ name: 'user-detail' }">User detail</router-link>
        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    export default {
        name: "App"
    }
</script>

<style scoped>
    .table-body-row{
        display: flex;
        flex-wrap: nowrap;
        justify-content: flex-start;
        align-content: center;
        width: 100%;
        border-top: 1px solid grey;
    }
    .table-body-col{
        padding: 5px;
        align-self: stretch;

    }
    .table{
        background: white;
    }
    .table-body {
        display: flex;
        flex-wrap: wrap;
    }
</style>
