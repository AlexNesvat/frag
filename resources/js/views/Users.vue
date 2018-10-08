<template>
    <div class="table-body">
        <div class="table-body-row"
        v-for="user in users"
        v-bind:key="user.id">

        <div class="table-body-col">{{user.id}}</div>
        <div class="table-body-col"><router-link :to="{ name: 'user.detail', params: { id: user.id }}">{{user.name}}</router-link></div>
        <div class="table-body-col"><router-link :to="{ name: 'main-section'}">{{user.name}}</router-link></div>
        <router-view></router-view>
        <!--<div class="table-body-col"><a v-on:click="router.push({ path: `admin/user/${user.id}` })">{{user.name}}</a></div>-->

        <div class="table-body-col">{{user.email}}</div>
        <div class="table-body-col">{{user.role}}</div>
        <div class="table-body-col">{{user.address}}</div>

        </div>
    </div>
</template>

<script>
    export default {
        name: "Users",
        data() {
            return {
                users: []
            };
        },
        created(){
            var vm = this
            fetch('admin/users')
                .then(function (response) {
                    return response.json()
                })
                .then(function (data) {
                    vm.users = data
                })
        },
        mounted() {

        },
    }
</script>

<style scoped>

</style>
