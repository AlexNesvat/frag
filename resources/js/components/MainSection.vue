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
           <div class="table-body-row"
                v-for="post in posts"
                v-bind:key="post.id">

               <div class="table-body-col">{{post.id}}<a href="">{{post.title}}</a></div>

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
        data() {
            return {
                posts: []
            };
        },
        mounted() {
            var vm = this
            fetch('https://jsonplaceholder.typicode.com/posts')
                .then(function (response) {
                    return response.json()
                })
                .then(function (data) {
                    vm.posts = data
                })
        },
    }
</script>

<style scoped>

</style>
