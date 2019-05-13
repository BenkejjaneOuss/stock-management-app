<template>
    <div>
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <div class="d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-info d-lg-block m-l-15" data-toggle="modal" data-target="#add-productSale" @click="cancel"><i class="fa fa-plus-circle"></i> New sale</button>
                    <div id="add-productSale" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" ref="closeModal">×</button>
                                </div>
                                <form class="form-horizontal" method="post" @submit.prevent="onCreate">
                                    <div class="modal-body">
                                        <div :class="{'form-group': true, 'has-error has-danger': errors.has('product_id') }">
                                            <div class="col-md-12 m-b-20">
                                            <selectize name="product_id" v-model="form.product_id" :settings="settings" v-validate="'required'" data-vv-as="Product"> 
                                                <option v-for="option in optionsProducts" :value="option.value">{{ option.text }}</option>
                                            </selectize>
                                            <small v-show="errors.has('product_id')" class="form-control-feedback">{{ errors.first('product_id') }}</small>
                                            </div>
                                        </div>
                                        <div :class="{'form-group': true, 'has-danger': errors.has('qte') }">
                                            <div class="col-md-12 m-b-20">
                                            <input name="qte" v-model="form.qte" v-validate="'required|numeric'" :class="{'form-control': true, 'form-control-danger': errors.has('qte') }" type="text" placeholder="Quantity" data-vv-as="Quantity">
                                            <small v-show="errors.has('qte')" class="form-control-feedback">{{ errors.first('qte') }}</small>
                                            </div>
                                        </div>
                                        <div :class="{'form-group': true, 'has-danger': errors.has('selling_price') }">
                                            <div class="col-md-12 m-b-20">
                                            <input name="selling_price" v-model="form.selling_price" v-validate="'required|decimal:2'" :class="{'form-control': true, 'form-control-danger': errors.has('purchasing_price') }" type="text" placeholder="Selling price" data-vv-as="Selling price">
                                            <small v-show="errors.has('selling_price')" class="form-control-feedback">{{ errors.first('selling_price') }}</small>
                                            </div>
                                        </div>
                                        <div :class="{'form-group': true, 'has-error has-danger': errors.has('client_id') }">
                                            <div class="col-md-12 m-b-20">
                                            <selectize name="client_id" v-model="form.client_id" :settings="settings" v-validate="'required'" data-vv-as="Client"> 
                                                <option v-for="option in optionsClients" :value="option.value">{{ option.text }}</option>
                                            </selectize>
                                            <small v-show="errors.has('client_id')" class="form-control-feedback">{{ errors.first('client_id') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer" v-if="edit">
                                        <input type="button" class="btn btn-info" @click="onUpdate" value="Update" >
                                        <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">Cancel</button>
                                    </div>
                                    <div class="modal-footer" v-else>
                                        <input type="submit" class="btn btn-info" value="Add">
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </div>
            </div>
        </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row" >
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sales list</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Ref</th>
                                    <th>Designation</th>
                                    <th>Category</th>
                                    <th>Qty</th>
                                    <th>Selling price</th>
                                    <th>Client</th>
                                    <th>Created Date</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>N°</th>
                                    <th>Ref</th>
                                    <th>Designation</th>
                                    <th>Category</th>
                                    <th>Qty</th>
                                    <th>Selling price</th>
                                    <th>Client</th>
                                    <th>Created Date</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr v-for="(productSale, index) in productsSale">
                                    <td>{{index+1}}</td>
                                    <td>{{productSale.product ? productSale.product.ref : '-'}}</td>
                                    <td>{{productSale.product ? productSale.product.designation : '-'}}</td>
                                    <td>{{productSale.product.category ? productSale.product.category.name : '-'}}</td>
                                    <td>{{productSale.qte ? productSale.qte : 0}}</td>
                                    <td>{{productSale.selling_price ? productSale.selling_price : 0}}</td>
                                    <td>{{productSale.client ? productSale.client.name : 0}}</td>
                                    <td>{{productSale.created_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import Selectize from 'vue2-selectize'
export default {
    props:['response','clients','products'],
    components: {
        Selectize
    },
    data () {
        return {
            edit:false,
            productsSale:[],
            form:{
                product_id:null,
                client_id:null,
                qte:'',
                selling_price:'',
            },
            settings: {},
            optionsClients:[
				{value:null, text:'Select a client'},
        	], 
            optionsProducts:[
				{value:null, text:'Select a product'},
        	], 
        }
    },
    created(){
        this.productsSale = this.response;
        for(let index in this.clients) {
            this.optionsClients.push({'value':this.clients[index].id, 'text':this.clients[index].name});
        }
        for(let index in this.products) {
            this.optionsProducts.push({'value':this.products[index].id, 'text':this.products[index].ref  +" / "+ this.products[index].designation });
        }
        			
    },
    mounted(){

        var table = $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
            {
                extend: 'copy',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
                }
            },

            {
                extend: 'excel',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
                },
            },
            ],
        });
    },
    methods:{
        cancel(){
            this.form = {
                product_id:null,
                client_id:null,
                qte:'',
                selling_price:'',
            }
            this.$validator.reset();
        },
        onCreate() {
            this.$validator.validateAll().then(result => {
                if (!this.errors.any()) {
                    this.loading = true
                    axios.post(route('productSale.add'), this.form).then(res => {
    
                        this.loading = false
                        let type = 'error'
                        let title = 'Error!'
                        let text = (res.data.msg !== '') ? res.data.msg : 'Please retry later'

                        if(res.data.result) {
                            this.productsSale.unshift(res.data.newProductSale);
                            type="success"
                            title = 'Sold!'
                            text = "Your product has been sold."
                            this.form = {
                                product_id:null,
                                client_id:null,
                                qte:'',
                                selling_price:'',
                            }      
                            this.$refs.closeModal.click()
                            this.$validator.reset();
                        }

                        this.$swal.fire({
                            type: type,
                            title: title,
                            text: text,
                            showConfirmButton: false,
                            showCloseButton: true,
                            
                        })
                        
                        
                        //this.form = res.data.result;

                    }).catch(e => {
                        console.log('createForm', e)
                        this.loading = false
                    })

                }
            })
        },
    },
    
       
}
</script>