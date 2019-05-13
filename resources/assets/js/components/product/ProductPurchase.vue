<template>
    <div>
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <div class="d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-info d-lg-block m-l-15" data-toggle="modal" data-target="#add-productPurchase" @click="cancel"><i class="fa fa-plus-circle"></i> New purchase</button>
                    <div id="add-productPurchase" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                        <div :class="{'form-group': true, 'has-danger': errors.has('purchasing_price') }">
                                            <div class="col-md-12 m-b-20">
                                            <input name="purchasing_price" v-model="form.purchasing_price" v-validate="'required|decimal:2'" :class="{'form-control': true, 'form-control-danger': errors.has('purchasing_price') }" type="text" placeholder="Purchasing price" data-vv-as="Purchasing price">
                                            <small v-show="errors.has('purchasing_price')" class="form-control-feedback">{{ errors.first('purchasing_price') }}</small>
                                            </div>
                                        </div>
                                        <div :class="{'form-group': true, 'has-error has-danger': errors.has('supplier_id') }">
                                            <div class="col-md-12 m-b-20">
                                            <selectize name="supplier_id" v-model="form.supplier_id" :settings="settings" v-validate="'required'" data-vv-as="Supplier"> 
                                                <option v-for="option in optionsSuppliers" :value="option.value">{{ option.text }}</option>
                                            </selectize>
                                            <small v-show="errors.has('supplier_id')" class="form-control-feedback">{{ errors.first('supplier_id') }}</small>
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
                    <h4 class="card-title">Purchases list</h4>
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
                                    <th>Purchasing price</th>
                                    <th>Supplier</th>
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
                                    <th>Purchasing price</th>
                                    <th>Supplier</th>
                                    <th>Created Date</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr v-for="(productPurchase, index) in productsPurchase">
                                    <td>{{index+1}}</td>
                                    <td>{{productPurchase.product ? productPurchase.product.ref : '-'}}</td>
                                    <td>{{productPurchase.product ? productPurchase.product.designation : '-'}}</td>
                                    <td>{{productPurchase.product.category ? productPurchase.product.category.name : '-'}}</td>
                                    <td>{{productPurchase.qte ? productPurchase.qte : 0}}</td>
                                    <td>{{productPurchase.purchasing_price ? productPurchase.purchasing_price : 0}}</td>
                                    <td>{{productPurchase.supplier ? productPurchase.supplier.name : 0}}</td>
                                    <td>{{productPurchase.created_at}}</td>
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
    props:['response','suppliers','products'],
    components: {
        Selectize
    },
    data () {
        return {
            edit:false,
            productsPurchase:[],
            form:{
                product_id:null,
                supplier_id:null,
                qte:'',
                purchasing_price:'',
            },
            settings: {},
            optionsSuppliers:[
				{value:null, text:'Select a supplier'},
        	], 
            optionsProducts:[
				{value:null, text:'Select a product'},
        	], 
        }
    },
    created(){
        this.productsPurchase = this.response;
        console.log(this.response)
        for(let index in this.suppliers) {
            this.optionsSuppliers.push({'value':this.suppliers[index].id, 'text':this.suppliers[index].name});
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
                supplier_id:null,
                qte:'',
                purchasing_price:'',
            }
            this.$validator.reset();
        },
        onCreate() {
            this.$validator.validateAll().then(result => {
                if (!this.errors.any()) {
                    this.loading = true
                    axios.post(route('productPurchase.add'), this.form).then(res => {
    
                        this.loading = false
                        let type = 'error'
                        let title = 'Error!'
                        let text = (res.data.msg !== '') ? res.data.msg : 'Please retry later'

                        if(res.data.result) {
                            console.log(res.data.newProductPurchase);
                            this.productsPurchase.unshift(res.data.newProductPurchase);
                            type="success"
                            title = 'Purchased!'
                            text = "Your product has been purchased."
                            this.form = {
                                product_id:null,
                                supplier_id:null,
                                qte:'',
                                purchasing_price:'',
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