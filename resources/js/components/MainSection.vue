<template>
   <div class="table">
       <div class="table-head">
          <!-- <h1 v-if="ok">Да</h1>
           <h1 v-else>Нет</h1>
           <h1 v-show="ok">Привет!</h1>

inheritAttrs
model
props/propsData
Локальное состояние (локальные реактивные свойства)

data
computed
События (коллбэки вызываемые реактивными событиями)

watch
События хуков жизненного цикла (в порядке их вызова)
beforeCreate
created
beforeMount
mounted
beforeUpdate
updated
activated
deactivated
beforeDestroy
destroyed




<li v-for="n in even(numbers)">{{ n }}</li>
data: {
  numbers: [ 1, 2, 3, 4, 5 ]
},
methods: {
  even: function (numbers) {
    return numbers.filter(function (number) {
      return number % 2 === 0
    })
  }
}

           -->
           <div class="table-head-col">User ID</div>
           <div class="table-head-col"></div>
           <div class="table-head-col"></div>
           <div class="table-head-col"></div>
       </div>
       <div class="table-body">
           <!--<div class="table-body-row"-->
                <!--v-for="user in users"-->
                <!--v-bind:key="user.id">-->

               <!--<div class="table-body-col">{{user.id}}</div>-->
               <!--<div class="table-body-col"><router-link :to="{ name: 'user.detail', params: { id: user.id }}">{{user.name}}</router-link></div>-->
               <!--<div class="table-body-col"><router-link :to="{ name: 'main-section'}">{{user.name}}</router-link></div>-->
               <!--<router-view></router-view>-->
               <!--&lt;!&ndash;<div class="table-body-col"><a v-on:click="router.push({ path: `admin/user/${user.id}` })">{{user.name}}</a></div>&ndash;&gt;-->

               <!--<div class="table-body-col">{{user.email}}</div>-->
               <!--<div class="table-body-col">{{user.role}}</div>-->
               <!--<div class="table-body-col">{{user.address}}</div>-->

           <!--</div>-->
           <div class="table-body-row">
               <div class="table-body-col"><router-link :to="{ name: 'user.detail', params: { id: user.id }}">{{user.name}}</router-link></div>
               <div class="table-body-col"><router-link :to="{ name: 'main-section'}">{{user.name}}</router-link></div>
               <router-view></router-view>
               <div class="table-body-col"></div>
               <div class="table-body-col"></div>
               <div class="table-body-col"></div>
               <div class="table-body-col"></div>
           </div>
           <div class="table-body-row">
               <div class="table-body-col"></div>
               <div class="table-body-col"></div>
               <div class="table-body-col"></div>
               <div class="table-body-col"></div>
           </div>
           <div class="table-body-row">
               <div class="table-body-col"></div>
               <div class="table-body-col"></div>
               <div class="table-body-col"></div>
               <div class="table-body-col"></div>
           </div>
       </div>
   </div>
</template>

<script>
    export default {
        // routes: [
        //     { path: 'admin/user/', name: 'user', params: { id: user.id}},
        //
        // ],
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
