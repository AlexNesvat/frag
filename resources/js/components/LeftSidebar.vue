<template>
    <div class="sidebar">
        <a href="" class="sidebar-brand"></a>

        <ul class="sidebar-nav">
            <li class="sidebar-item"><a href="" class="sidebar-link"><span class="align-middle">Dashboard</span></a></li>
            <li class="sidebar-item"><a href="" class="sidebar-link"><span class="align-middle">Products</span></a></li>
            <li class="sidebar-item"><a href="" class="sidebar-link"><span class="align-middle">Orders</span></a></li>
            <li class="sidebar-item"><a href="" class="sidebar-link"><span class="align-middle">Subscriptions</span></a></li>
            <li class="sidebar-item"><a href="" class="sidebar-link"><span class="align-middle">Customers</span></a></li>
            <li class="sidebar-item"><a href="" class="sidebar-link"><span class="align-middle">Pages</span></a></li>
            <li class="sidebar-item"><a href="" class="sidebar-link"><span class="align-middle">Settings</span></a></li>
        </ul>

    </div>
</template>





<script>
    export default {
        mounted() {
            console.log('Component left.dasd')
        }
    }
</script>

<style>

    .sidebar {
        background: #2e3e4e;
        max-width: 220px;
        min-height: 100vh;
        min-width: 220px;
        transition: margin .4s ease-in-out;
        z-index: 1;
    }
    .sidebar-brand {
        color: #f8f9fa;
        display: block;
        font-size: 1.15rem;
        font-weight: 500;
        padding: 1.15rem 1.25rem;
    }
    .sidebar-nav {
        list-style: none;
        padding-bottom: 2rem;
        padding-left: 0;
    }
    .sidebar-link, a.sidebar-link {
        background: #2e3e4e;
        color: #ced4da;
        display: block;
        padding: .75rem 1.25rem;
        position: relative;
        text-decoration: none;
        transition: background .1s ease-in-out,color .1s ease-in-out;
    }
    .align-middle {
        vertical-align: middle!important;
    }
    .sidebar-link, a.sidebar-link {
        background: #2e3e4e;
        color: #ced4da;
        display: block;
        padding: .75rem 1.25rem;
        position: relative;
        text-decoration: none;
        transition: background .1s ease-in-out,color .1s ease-in-out;
    }

</style>
