<template>
  <div class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed" :class="{ 'c-sidebar-lg-show': !$page.url.startsWith('/apps/transactions') }" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none" style="background: #321fdb;">
        <img src="/images/235861.png" class="bg-light rounded shadow-sm p-1" width="40"> <span class="ml-2 font-weight-bold">GEO APPS</span>
      </div>

      <!-- sidebar -->
      <Sidebar />
      <!-- end sidebar -->

    </div>
    <div class="c-wrapper c-fixed-components">
      
      <!-- header -->
      <Header />
      <!-- end header -->

      <div class="c-body">

        <!-- content -->
        <slot />
        <!-- end content -->

        <footer class="c-footer">
          <div><strong>APLIKASI COVERAGE AREA</strong> &copy; 2023 </div>
        </footer>
      </div>
    </div>
  </div>
</template>

<script>

  import Header from '../Components/Header.vue'
  import Sidebar from '../Components/Sidebar.vue'

  export default {

    //register components
    components: {
      Header,
      Sidebar
    }

  }
</script>
<style>
.bg-primarys {
    background:#321fdb;
      color: #ffffff;

  border: 0px;
  -moz-border-radius: 20px; /*rounded untuk mozilla*/
  -webkit-border-radius: 20px; /*rounded untuk selain mozilla (chrome dll)*/
  padding: 2px 10px;
}

.bg-dangers {
    background:#ff0303;
      color: #ffffff;

  border: 0px;
  -moz-border-radius: 20px; /*rounded untuk mozilla*/
  -webkit-border-radius: 20px; /*rounded untuk selain mozilla (chrome dll)*/
  padding: 2px 10px;
}

.rounded-buttons {

  color: #ffffff;

  border: 0px;
  -moz-border-radius: 20px; /*rounded untuk mozilla*/
  -webkit-border-radius: 20px; /*rounded untuk selain mozilla (chrome dll)*/
  padding: 2px 10px;
}
</style>