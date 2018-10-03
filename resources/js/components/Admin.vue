<template>
    <div id="app">
        <div class="wrapper">

                <!--<div class="sidebar">-->
                <!--</div>-->
                <left-sidebar></left-sidebar>

            <!--<div class="main">-->
                <!--<div class="dashboard">-->
                    <!--<div class="head-section">-->

                    <!--</div>-->
                    <!--<div class="details">-->

                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
            <main-section></main-section>

        </div>




        <div class="container-fluid no-padding">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>


    </div>
</template>

<!--<LeftSidebar></LeftSidebar>-->




<script>
    import LeftSidebar from './LeftSidebar.vue'
    import MainSection from './MainSection.vue'

    export default {
        components: {
            LeftSidebar,
            MainSection
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>


<style>
    *{
        box-sizing: border-box;
    }
    body {
        overflow-y: scroll;
    }
    body, html {
        height: 100%;
    }

    body {
        background-color: #f0f0f0;
        color: #495057;
        font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;
        font-size: .875rem;
        font-weight: 400;
        line-height: 1.5;
        margin: 0;
        text-align: left;
    }

    .no-padding{
        padding: 0;
    }
    .main{
        display: flex;
    }
    .wrapper{
        display: flex;
    }


</style>
