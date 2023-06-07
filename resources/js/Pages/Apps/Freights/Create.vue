<template>
  <Head>
    <title>Users - Aplikasi Kasir</title>
  </Head>
  <main class="c-main">
    <div class="container-fluid">
      <div class="fade-in">
        <div class="row">
          <div class="col-md-12">
            <div class="card border-0 rounded-3 shadow border-top-purple mb-4">
              <!-- <div class="card-header">
                                <span class="font-weight-bold"><i class="fa fa-users"></i> USERS</span>
                            </div> -->
              <form @submit.prevent="submit">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-9">
                      <button class="btn-primary rounded-buttons mb-2" disabled>
                        <strong>Biaya Air Freight</strong>
                      </button>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-6 col-form-label"
                              >Tanggal Buat</label
                            >
                            <div class="col-sm-6">
                              <input
                                type="date"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.tanggal_buat"
                              />
                            </div>
                              <!-- <div v-if="errors.tanggal_buat" class="alert alert-danger">
                                  {{ errors.tanggal_buat }}
                              </div> -->
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-8 col-form-label"
                              >Sewa Gudang</label
                            >
                            <div class="col-sm-4">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.sewa_gudang"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-6 col-form-label"
                              >Asal</label
                            >
                            <div class="col-sm-6">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.asal"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-8 col-form-label"
                              >Other Charge / Fuel Charge</label
                            >
                            <div class="col-sm-4">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.other_charge"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-6 col-form-label"
                              >Airline</label
                            >
                            <div class="col-sm-6">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.airline"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-8 col-form-label"
                              >Regulated Agent</label
                            >
                            <div class="col-sm-4">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.regulated_agent"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-6 col-form-label"
                              >Nama Vendor</label
                            >
                            <div class="col-sm-6">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.nama_vendor"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-8 col-form-label"
                              >Cargo Cash / MSC</label
                            >
                            <div class="col-sm-4">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                 v-model="form.msc"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-6 col-form-label"
                              >Berat (Kg)</label
                            >
                            <div class="col-sm-6">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.berat"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-8 col-form-label"
                              >Basic Store / ZBC</label
                            >
                            <div class="col-sm-4">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.basic_store"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-6 col-form-label"
                              >Tarif SMU</label
                            >
                            <div class="col-sm-6">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.tarif_smu"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-8 col-form-label"
                              >Total</label
                            >
                            <div class="col-sm-4">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.total"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-6 col-form-label"
                              >PPN</label
                            >
                            <div class="col-sm-6">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                               v-model="form.ppn"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-8 col-form-label"
                              >Tarif SMU +</label
                            >
                            <div class="col-sm-4">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                               v-model="form.smu_plus"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-6 col-form-label"
                              >Handling Fee</label
                            >
                            <div class="col-sm-6">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.handling_fee"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-8 col-form-label"
                              >PPN +</label
                            >
                            <div class="col-sm-4">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.ppn_plus"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-6 col-form-label"
                              >Biaya Admin</label
                            >
                            <div class="col-sm-6">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                              v-model="form.biaya_admin"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-8 col-form-label"
                              >Total +</label
                            >
                            <div class="col-sm-4">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                              v-model="form.total_plus"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-6 col-form-label"
                              >Surchage/Airport Contribution</label
                            >
                            <div class="col-sm-6">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                              v-model="form.shurchage"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-8 col-form-label"
                              >Keterangan</label
                            >
                            <div class="col-sm-4">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.keterangan"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label
                              for="inputEmail3"
                              class="col-sm-6 col-form-label"
                              >Service Fee</label
                            >
                            <div class="col-sm-6">
                              <input
                                type="text"
                                class="form-control"
                                id="inputEmail3"
                                v-model="form.service_fee"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                        
                        </div>
                      </div>

                    </div>
                    <div class="col-md-3">
                      <div class="card bg-primarys text-white">
                        <div class="card-body">
                          <div class="text-center">
                            <h5 class="card-title">{{form.no_dokumen}}</h5>
                            <span>Tanggal Buat</span><br />
                            <span class="card-text mt-1"
                              ><strong>11-April-2023</strong></span
                            ><br /><br />
                            <span>Tanggal Terbit</span><br />
                            <span class="card-text"
                              ><strong>11-April-2023</strong></span
                            ><br /><br />
                            <span>Tanggal Pemutakhiran</span><br />
                            <span class="card-text"
                              ><strong>11-April-2023</strong></span
                            ><br /><br />
                            <span>Jumlah Baris</span><br />
                            <span class="card-text"><strong>90</strong></span
                            ><br /><br />
                            <span>Diterbitkan Oleh</span><br />
                            <span class="card-text"
                              ><strong>Departemen Freight</strong></span
                            ><br /><br />
                         
                              <button class="btn btn-success rounded-buttons mb-2 p-2">
                                <strong
                                  ><i class="fa fa-save">‌</i> Simpan </strong>
                              </button>
                      
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- <Pagination :links="users.links" align="end"/> -->
                </div>
              </form>
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

  //import reactive from vue
  import { reactive } from 'vue';
  
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
    },

    
    //props
    props: {
      no_dokumen_air_freight: Object,
    },

    //composition API
    setup(props){
       //define form with reactive
       const form = reactive({
          tanggal_buat    : '',
          sewa_gudang     : '',
          asal            : '',
          other_charge    : '',
          airline         : '',
          regulated_agent : '',
          nama_vendor     : '',
          msc             : '',
          berat           : '',
          basic_store     : '',
          tarif_smu       : '',
          total           : '',
          ppn             : '',
          smu_plus        : '',
          handling_fee    : '',
          ppn_plus        : '',
          biaya_admin     : '',
          total_plus      : '',
          surchage        : '',
          keterangan      : '',
          service_fee     : '',
          no_dokumen      : props.no_dokumen_air_freight.NoDokumen
       });
      
       //method "submit"
       const submit = () => {
         
         
          //send data to server
          Inertia.post('/apps/air-freight-detail/create', {
              //data
              tanggal_buat    : form.tanggal_buat,
              sewa_gudang     : form.sewa_gudang,
              asal            : form.asal,
              other_charge    : form.other_charge,
              airline         : form.airline,
              regulated_agent : form.regulated_agent,
              nama_vendor     : form.nama_vendor,
              msc             : form.msc,
              berat           : form.berat,
              basic_store     : form.basic_store,
              tarif_smu       : form.tarif_smu,
              total           : form.total,
              ppn             : form.ppn,
              smu_plus        : form.smu_plus,
              handling_fee    : form.handling_fee,
              ppn_plus        : form.ppn_plus,
              biaya_admin     : form.biaya_admin,
              total_plus      : form.total_plus,
              surchage        : form.surchage,
              keterangan      : form.keterangan,
              service_fee     : form.service_fee,
              no_dokumen      : form.no_dokumen
          }, {
            onSuccess: () => {
               //show success alert
                Swal.fire({
                    title: 'Success!',
                    text: 'Customer saved successfully.',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2000
                });
            },
          })
       }
       return {
        form,
        submit
      };
    }
  };
</script>

<style>
.circle {
  width: 30px;
  height: 30px;
  margin-left: 10px;
  border-radius: 90%;
  background-color: rgb(
    250,
    246,
    246
  ); /* Ganti dengan warna latar belakang yang Anda inginkan */
}
</style>