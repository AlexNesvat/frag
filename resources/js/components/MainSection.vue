<template>
    <div class="main">
        <nav class="navbar navbar-expand navbar-light bg-white">
            <a href="" class="sidebar-toggle d-flex mr-2"></a>
            <form action="" class="form-inline d-none d-sm-inline-block">
                <input class="form-control mr-sm-2" type="text" placeholder="Search projects" aria-label="Search">
            </form>
        </nav>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted. main')
        }
    }
</script>

<style>
    .main {
        width: 100%;
    }

    .navbar {
        border-bottom: 1px solid #dee2e6;
        box-shadow: 0 0.05rem 0.2rem rgba(0,0,0,.05);
    }

    .bg-white {
        background-color: #fff!important;
    }
    .navbar-expand {
        -ms-flex-flow: row nowrap;
        -ms-flex-pack: start;
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbar, .navbar>.container, .navbar>.container-fluid {
        -ms-flex-align: center;
        -ms-flex-pack: justify;
        -ms-flex-wrap: wrap;
        align-items: center;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .navbar {
        padding: .75rem 1.25rem;
        position: relative;
        max-height: 50px;
        /* max-width: 100%; */
        width: 100%;
    }
    .sidebar-toggle {
        cursor: pointer;
        height: 26px;
        width: 26px;
    }

    .mr-2, .mx-2 {
        margin-right: .5rem!important;
    }
    .d-flex {
        display: -ms-flexbox!important;
        display: flex!important;
    }
    a {
        -webkit-text-decoration-skip: objects;
        background-color: transparent;
        color: #0cc2aa;
        text-decoration: none;
    }
    .d-none {
        display: none!important;
    }

    .form-inline {
        -ms-flex-align: center;
        -ms-flex-flow: row wrap;
        align-items: center;
        display: -ms-flexbox;
        display: flex;
        flex-flow: row wrap;
    }
    @media (min-width: 576px) {
        .form-inline .form-control {
            display: inline-block;
            vertical-align: middle;
            width: auto;
        }
    }
    @media (min-width: 576px) {
        .d-sm-inline-block {
            display: inline-block !important;
        }
    }

        @media (min-width: 576px) {
            .mr-sm-2, .mx-sm-2 {
                margin-right: .5rem !important;
            }

            .form-control {
                background-clip: padding-box;
                background-color: #fff;
                border: 1px solid #ced4da;
                border-radius: .2rem;
                color: #495057;
                display: block;
                font-size: .875rem;
                height: calc(1.8125rem + 2px);
                line-height: 1.5;
                padding: .25rem .7rem;
                transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
                width: 100%;
            }
        }

</style>
