<template>

    <Head>
        <title>Dashboard - Aplikasi COG</title>
    </Head>

    <main class="c-main">
        <div class="container-fluid">
            <div class="fade-in">

                <h1>Selamat Datang di Dashboard Coverage Area</h1>

            </div>
        </div>
    </main>
</template>

<script>
    //import layout
    import LayoutApp from '../../../Layouts/App.vue';

    //import Heade and useForm from Inertia
    import { Head } from '@inertiajs/inertia-vue3';

    export default {

        //layout
        layout: LayoutApp,

        //register component
        components: {
            Head,
        },
    }
</script>

<style>

</style>