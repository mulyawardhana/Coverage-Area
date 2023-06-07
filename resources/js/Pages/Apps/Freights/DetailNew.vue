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
                   <div class="btn-group mb-1">
                    <button class="btn btn-primary rounded-buttons"><strong>Biaya Air Freight</strong></button>
                    <button class="btn btn-danger rounded-buttons"><i>Dokumen Baru</i></button>
                  </div>
                    <table class="table text-center">
                      <thead class="bg-secondary">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nomor Dokumen</th>
                          <th scope="col">Tanggal Buat</th>
                          <th scope="col">Tanggal Terbit</th>
                          <th scope="col">Tanggal Pemutakhiran</th>
                          <th scope="col">Jumlah Baris</th>
                          <th scope="col">Diterbitkan Oleh</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>AF-0423-00-ABC</td>
                          <td>09-11-2022</td>
                          <td>10-11-2022</td>
                          <td>10-11-2022</td>
                          <td>90</td>
                          <td>Dep. Freight</td>
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
                        <h5 class="card-title">{{show_detail_air_freight.NoDokumen}}</h5>
                        <span>Tanggal Buat</span><br>
                        <span class="card-text mt-1"><strong>{{show_detail_air_freight.TglBuat}}</strong></span><br><br>
                        <span>Tanggal Terbit</span><br>
                        <span class="card-text"><strong>{{show_detail_air_freight.TglTerbit}}</strong></span><br><br>
                        <span>Tanggal Pemutakhiran</span><br>
                        <span class="card-text"><strong>{{show_detail_air_freight.TglPemutakhiran}}</strong></span><br><br>
                        <span>Jumlah Baris</span><br>
                        <span class="card-text"><strong>{{show_detail_air_freight.JumlahBaris}}</strong></span><br><br>
                        <span>Diterbitkan Oleh</span><br>
                        <span class="card-text"><strong>{{show_detail_air_freight.Diterbitkan}}</strong></span><br><br>
                          <Link href="/apps/air-freight/create">
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

//import inerita adapter
import { Inertia } from '@inertiajs/inertia';

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
    show_detail_air_freight: Object,
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