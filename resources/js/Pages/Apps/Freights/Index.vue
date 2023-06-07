<template>
  <Head>
    <title>Freight - Biaya Air Freight</title>
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
                    <button class="btn-primary rounded-buttons mb-2">
                      <strong>Biaya Air Freight</strong>
                    </button>
                    <table class="table text-center table-sm table-responsive">
                      <thead class="bg-secondary">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">No Dokumen</th>
                          <th scope="col">Tanggal Buat</th>
                          <th scope="col">Tanggal Terbit</th>
                          <th scope="col">Tanggal Pemutakhiran</th>
                          <th scope="col">Jumlah Baris</th>
                          <th scope="col">Diterbitkan Oleh</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="item in items" :key="item.id">
                          <td>{{item.id}}</td>
                          <td><button class="btn btn-secondary btn-sm me-2"  @click="submitDetail(item.NoDokumen)">{{item.NoDokumen}}</button></td>
                          <td>{{item.TglBuat}}</td>
                          <td>{{item.TglTerbit}}</td>
                          <td>{{item.TglPemutakhiran}}</td>
                          <td>{{item.JumlahBaris}}</td>
                          <td>{{item.Diterbitkan}}</td>
                        </tr>
                      </tbody>
                    </table>
                    <Pagination :links="items.links" align="end"/>
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
                         <Link href="/apps/air-freight-detail">
                        <span class="btn btn-dark rounded-buttons mb-2 p-2">
                       <strong><i class="fa fa-file-invoice">‌</i>  <Link :href="`/apps/air-freight-detail/${show_detail_air_freight.NoDokumen}`" class="btn btn-dark btn-sm me-2"><i class="fa fa-pencil-alt me-1"></i> <strong>Lihat Detail</strong></Link></strong>
                        </span>
                        </Link>
                    </div>
                  </div>
                </div>

                 <div class="card bg-dangers text-white">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-2">
                              <i class="fa fa-folder-open fa-2x mt-2">‌</i>
                          </div>
                          <div class="col-md-10">
                            <form @submit.prevent="submit">
                              <input type="hidden" v-model="form.jenis_freight" id="">
                              <button class="btn" type="submit">
                              <div class="text-center text-white" style="font-size:15px; margin-top:3px;">
                              <strong>Buat Dokumen Baru</strong><br>
                              <span><i>(tekan tombol ini)</i></span>
                              </div>
                              </button>
                            </form>
                          </div>
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

//import component pagination
import Pagination from '../../../Components/Pagination.vue';

//import reactive from vue
import { reactive } from 'vue';

//import Heade and Link from Inertia
import { Head, Link } from "@inertiajs/inertia-vue3";

//import inerita adapter
import { Inertia } from '@inertiajs/inertia';

//import sweet alert2
import Swal from 'sweetalert2';

export default {
  //layout
  layout: LayoutApp,

  //register component
  components: {
    Head,
    Link,
    Pagination
  },

  //props
  props: {
    items: Object,
      show_detail_air_freight: {
      type: Object,
      default: () => ({}) // Nilai default berupa objek kosong
    }
  },

   //composition API
        setup(props) {

            //define form with reactive
            const form = reactive({
                jenis_freight: 'AF'
            });

           

            //method "submit"
            const submit = () => {

                //send data to server
                Inertia.post('/apps/air-freight', {
                    //data
                    jenis_freight: form.jenis_freight,
                }, {
                    onSuccess: () => {
                        //show success alert
                        Swal.fire({
                            title: 'Success!',
                            text: 'Air Freight saved successfully.',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 2000
                        });
                    },
                });

            }

            const submitDetail = (NoDokumen) => {

                //send data to server
                Inertia.post('/apps/air-freight/detail-freight', {
                    //data
                    no_dokumen: NoDokumen,
                
                });

            }

            return {
                form,
                submit,
                submitDetail,
              
            }

        }
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