<template>
  <Head>
    <title>Users - Aplikasi Kasir</title>
  </Head>
  <main class="c-main">
    <div class="container-fluid">
      <div class="fade-in">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-9">
                <div
                  class="card border-0 rounded-3 shadow border-top-purple mb-4"
                >
                  <!-- <div class="card-header">
                                <span class="font-weight-bold"><i class="fa fa-users"></i> USERS</span>
                            </div> -->
                  <div class="card-body">
                    <button @click="goBack" class="btn-warning rounded-buttons mb-2 mr-1">
                      <i class="fa fa-arrow-circle-left"></i> Back
                    </button>
                    <button class="btn-primary rounded-buttons mb-2">
                      <strong>Biaya Air Freight Detail</strong>
                    </button>
                    <table class="table text-center table-responsive">
                      <thead class="bg-secondary">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Asal</th>
                          <th scope="col">TLC</th>
                          <th scope="col">Airline</th>
                          <th scope="col">ID</th>
                          <th scope="col">Berat</th>
                          <th scope="col">Tarif SMU</th>
                          <th scope="col">PPN</th>
                          <th scope="col">Handling Fee</th>
                          <th scope="col">Biaya Admin</th>
                          <th scope="col">Surchage</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="item in detail_air_freight" :key="item.id">
                          <td>1</td>
                          <td>{{item.CityId}}</td>
                          <td></td>
                          <td>{{item.Airline}}</td>
                          <td></td>
                          <td>{{item.Berat}}</td>
                          <td>{{item.TarifSMU}}</td>
                          <td>{{item.PPN}}</td>
                          <td>{{item.HandlingFee}}</td>
                          <td>{{item.BiayaAdmin}}</td>
                          <td>{{item.Surchage}}</td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- <Pagination :links="users.links" align="end"/> -->
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card bg-primarys text-white">
                  <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title">{{show_air_freights.NoDokumen}}</h5>
                        <span>Tanggal Buat</span><br>
                       <span class="card-text mt-1"><strong>{{show_air_freights.TglBuat}}</strong></span><br><br>
                        <span>Tanggal Terbit</span><br>
                        <span class="card-text"><strong>{{show_air_freights.TglTerbit}}</strong></span><br><br>
                        <span>Tanggal Pemutakhiran</span><br>
                        <span class="card-text"><strong>{{show_air_freights.TglPemutakhiran}}</strong></span><br><br>
                        <span>Jumlah Baris</span><br>
                        <span class="card-text"><strong>{{show_air_freights.JumlahBaris}}</strong></span><br><br>
                        <span>Diterbitkan Oleh</span><br>
                        <span class="card-text"><strong>{{show_air_freights.Diterbitkan}}</strong></span><br><br>
                        <Link :href="`/apps/air-freight-detail/${show_air_freights.NoDokumen}/create`">
                        <span class="btn btn-danger rounded-buttons mb-2 p-2">
                        <strong><i class="fa fa-plus-circle">‌</i> Tambah</strong>
                        </span>
                          </Link>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
//import layout
import LayoutApp from "../../../Layouts/App.vue";

// //import component pagination
// import Pagination from '../../../Components/Pagination.vue';

//import Heade and Link from Inertia
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
  //layout
  layout: LayoutApp,

  //register component
  components: {
    Head,
    Link,
  },

  methods: {
    goBack() {
      // Logika atau perintah yang ingin Anda jalankan saat tombol diklik
      // Misalnya, Anda dapat menggunakan window.history.back() untuk kembali ke halaman sebelumnya
      window.history.back();
    }
  },

  //props
  props: {
    detail_air_freight: Object,
    show_air_freights: Object,
  },
};
</script>

<style>
.circle {
  width: 30px;
  height: 30px;
  margin-left: 10px;
  border-radius: 90%;
  background-color: rgb(250, 246, 246); /* Ganti dengan warna latar belakang yang Anda inginkan */
}
</style>