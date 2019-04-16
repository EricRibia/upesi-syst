<template>

    <div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card" v-if="$gate.isAuthorOrAdmin()">
                    <div class="card-header">
                        <h3 class="card-title">Payments in countries</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" @click="newModal">Add payment<i class="fas fa-user-plus fa-fw"></i></button>
                        </div>
                    </div>

                    <paginate name="countries" :list="tasks" :per="5">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>Type</th>
                                        <th>Country</th>
                                        <!-- <th>Payment logo</th> -->
                                        <th>Payment info</th>
                                        <th>Modify</th>
                                    </tr>
                                    <tr v-for="value in paginated('countries')" :key="value.id">
                                        <td>{{value.type}}</td>
                                        <td>{{value.name}}</td>
                                        <!-- <td>{{value.logo | summary}}</td> -->
                                        <td>{{value.info | summary}}</td>
                                        <td>
                                            <a href="#" @click="editModal(value)"><i class="fas fa-edit"></i></a>
                                            /
                                            <a href="#" @click="deleteAbout(value.id)"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </paginate>
                    <paginate-links for="countries"></paginate-links>
                </div>
                <!-- /.card -->
                <!-- .notfound -->
                <div class="card">
                    <!-- <notfound></notfound> -->
                </div>
                <!-- /.notfound -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 v-show="editMode" class="modal-title" id="addNewLabel">Update payment</h5>
                            <h5 v-show="!editMode" class="modal-title" id="addNewLabel">Create payment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form @submit.prevent="editMode ? updateAbout() : createPayment()">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Select country</label>
                                    <select name="type" v-model="form.name" class="form-control">
                                        <!-- <option selected disabled value="">Please select one</option> -->
                                        <option v-for="count in countries" :key="count.id" :value="count.name">
                                            {{ count.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="type">Payment type</label>
                                    <select name="type" v-model="form.type" class="form-control">
                                        <option value="Cash Pickup">Cash Pickup</option>
                                        <option value="Bank Transfer">Bank Transfers</option>
                                        <option value="Mobile Wallets">Mobile Wallet Transfers</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="info">Enter points on payment seperated by |</label>
                                    <textarea v-model="form.info" type="text" name="description" rows="3" placeholder="Enter payment type info"
                                        class="form-control">
                                    </textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button v-show="editMode" type="submit" class="btn btn-success">Update</button>
                                <button v-show="!editMode" type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card" v-if="$gate.isAuthorOrAdmin()">
                    <div class="card-header">
                        <h3 class="card-title">Payment type logos</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" @click="newModalTwo">Add payment logo<i class="ml-2 fas fa-user-plus fa-fw"></i></button>
                        </div>
                    </div>

                    <paginate name="pimages" :list="payment_images" :per="5">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>Logo</th>
                                        <th>Country</th>
                                        <th>Type</th>
                                    </tr>
                                    <tr v-for="value in paginated('pimages')" :key="value.id">
                                        <td style="max-width:10px"><img style="max-width:55px" :src="'/storage/' + value.img"></td>
                                        <td>{{value.country}}</td>
                                        <td>{{value.type}}</td>
                                        <td>
                                            <a href="#" @click="editModalTwo(value)"><i class="fas fa-edit"></i></a>
                                            /
                                            <a href="#" @click="deletePayment(value.id)"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </paginate>
                    <paginate-links for="pimages"></paginate-links>
                </div>
                <!-- /.card -->
                <!-- .notfound -->
                <div class="card">
                    <!-- <notfound></notfound> -->
                </div>
                <!-- /.notfound -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="addNewTwo" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 v-show="editMode" class="modal-title" id="addNewLabel">Update payment</h5>
                            <h5 v-show="!editMode" class="modal-title" id="addNewLabel">Upload payment logos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form @submit.prevent="editMode ? updateAbout() : createAbout()">
                            <div class="modal-body">
                                <div class="form-group">
                                    <select name="type" v-model="form.name" class="form-control">
                                        <option v-for="count in countries" :key="count.id" :value="count.name">
                                            {{ count.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="type" v-model="form.type" class="form-control">
                                        <option value="Cash Pickup" selectd="selected">Cash Pickup.</option>
                                        <option value="Bank Transfer">Bank Transfers</option>
                                        <option value="Mobile Wallets">Mobile Wallet Transfers</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <p name="logo">Upload payment logo(s)</p>
                                    <input type="file" multiple @change="fieldChange" name="logo" class="form-input" id="inputFile">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button v-show="editMode" type="submit" class="btn btn-success">Update</button>
                                <button v-show="!editMode" type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>



</template>

<script>
    export default {
        data() {
            return {
                editMode: false,
                tasks: [],
                paginate: ['countries','pimages'],
                form : new Form({
                id:'',
                name: '',
                type: '',
                info: '',
                }),
                logos: [],
                countries: [],
                payment_images:[],
                formTwo:new FormData
            }
        },
        filters: {
            summary: function (value) {
                if (!value) return ''
                value = value.toString()
                return value.substr(0, 25) + '...';
            }
        },
        computed: {
            vals() {
                if (this.tasks) {
                    const newdata = this.tasks;
                    return newdata;
                }
            }
        },
        methods: {
            fieldChange(e) {
                
                let selectedfiles = e.target.files;
                if (!selectedfiles.length) {
                    return false;
                }
                for (let i = 0; i < selectedfiles.length; i++) {
                    this.logos.push(selectedfiles[i]);
                }
                console.log(this.logos);
            },
            newModal() {
                this.editMode = false;
                this.form.reset();
                this.form.clear();
                $('#addNew').modal('show');

            },
            newModalTwo() {
                this.editMode = false;
                this.form.reset();
                this.form.clear();
                $('#addNewTwo').modal('show');

            },
            editModal(abtCont) {
                this.editMode = true;
                this.form.reset();
                $('#addNew').modal('show');
                this.form.clear();
                this.form.fill(abtCont);

            },
            editModalTwo(abtCont) {
                this.editMode = true;
                this.form.reset();
                $('#addNewTwo').modal('show');
                this.form.clear();
                this.form.fill(abtCont);

            },
            deletePayment(id) {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        this.form.delete('api/pimages/' + id)
                            .then(() => {
                                swal(
                                    'Deleted!',
                                    'Deleted successfully.',
                                    'success'
                                )
                                Fire.$emit('createNew');
                            }).catch(() => {
                                swal({
                                    type: 'error',
                                    title: 'Failed',
                                    text: 'Something went wrong!',
                                })
                            });
                    }
                })
            },
            deleteAbout(id) {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        this.form.delete('api/payments/' + id)
                            .then(() => {
                                swal(
                                    'Deleted!',
                                    'Deleted successfully.',
                                    'success'
                                )
                                Fire.$emit('createNew');
                            }).catch(() => {
                                swal({
                                    type: 'error',
                                    title: 'Failed',
                                    text: 'Something went wrong!',
                                })
                            });
                    }
                })
            },
            updateAbout() {
                this.$Progress.start();
                this.form.put('api/payments/' + this.form.id)
                    .then(() => {
                        //success
                        $('#addNew').modal('hide');
                        $('#addNewTwo').modal('hide');
                        swal(
                            'Updated!',
                            'Updated successfully.',
                            'success'
                        )
                        Fire.$emit('createNew');
                        this.$Progress.finish();
                    }).catch(() => {
                        //fail
                        this.$Progress.fail();
                    });
            },
            createPayment() {
            this.$Progress.start();
            this.form.post('api/payments')
            .then( () => {
                $('#addNew').modal('hide');
                toast({
                    type: 'success',
                    title: 'Created successfully!!'
                    });
                Fire.$emit('createNew');
                this.$Progress.finish();
            }).catch( () => {

            });
            },
            createAbout() {
                this.$Progress.start();
                if(this.logos.length < 1 ){
                 swal({
                type: 'error',
                title: 'Empty fields',
                text: 'Ensure you upload payment logo images',
                })   
                return
                }

                for (let i = 0; i < this.logos.length; i++) {
                    this.formTwo.append('pics[]', this.logos[i])
                }

                const config = {
                    headers: {
                        'Contect-Type': 'multipart/form-data'
                    }
                }
                this.formTwo.append('imageData', this.form.name)
                this.formTwo.append('imagetype', this.form.type)
                axios.post('api/pimages', this.formTwo,config)
                    .then((res) => {
                        $('#addNewTwo').modal('hide');
                        toast({
                            type: 'success',
                            title: 'Created successfully!!'
                        });
                        Fire.$emit('createNew');
                        this.$Progress.finish();
                        this.logos = [];
                        // this.formTwo = null;
                        // console.log(res)
                    }).catch((response) => {
                        swal({
                            type: 'error',
                            title: 'Unable to send',
                            text: response,
                        })
                    });
            },
            loadabout() {
                if (this.$gate.isAuthorOrAdmin()) {
                    axios.get('api/payments').then(({
                        data
                    }) => (this.tasks = data));
                    axios.get('api/countries').then(({
                        data
                    }) => (this.countries = data));
                    axios.get('api/pimages').then(({
                        data
                    }) => (this.payment_images = data));
                }
            }
        },
        created() {
            this.loadabout();
            Fire.$on('createNew', () => this.loadabout());
        }
    }

</script>
