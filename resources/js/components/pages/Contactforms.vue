<template>
    <div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card" v-if="$gate.isAuthorOrAdmin()">
                    <div class="card-header">
                        <h3 class="card-title">Personal Assistance Form</h3>
                    </div>

                    <paginate name="asst" :list="asst" :per="5">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Tel</th>
                                        <th>Organization</th>
                                        <th>Remove</th>
                                    </tr>
                                    <tr v-for="value in paginated('asst')" :key="value.id">
                                        <td>{{value.name}}</td>
                                        <td>{{value.email}}</td>
                                        <td>{{value.phonenumber}}</td>
                                        <td>{{value.orgnmessage}}</td>
                                        <td>
                                            <a href="#" @click="deleteAbout(value.id)"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </paginate>
                    <paginate-links for="asst"></paginate-links>
                </div>
                <!-- /.card -->
                <!-- .notfound -->
                <div class="card">
                    <!-- <notfound></notfound> -->
                </div>
                <!-- /.notfound -->
            </div>
            <!-- Modal -->
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Contact Us Form</h3>
                    </div>
                    <paginate name="conct" :list="conct" :per="5">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Remove</th>
                                    </tr>
                                    <tr v-for="about in paginated('conct')" :key="about.id">
                                        <td>{{about.name}}</td>
                                        <td>{{about.email}}</td>
                                        <td>{{about.phonenumber}}</td>
                                        <td>{{about.orgnmessage}}</td>
                                        <td>
                                            <a href="#" @click="deleteAbout(about.id)"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </paginate>
                    <paginate-links for="conct"></paginate-links>
                </div>
                <!-- /.card -->
                <!-- .notfound -->
                <div class="card">
                    <!-- <notfound></notfound> -->
                </div>
                <!-- /.notfound -->
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
                paginate: ['asst', 'conct'],
                form : new Form({
                id:'',
                title: '',
                description: ''
                })
            }
        },
        computed: {
            // a computed getter
            asst() {
                if (this.tasks) {
                    const newdata = this.tasks;
                    return newdata.filter((val) => {
                        return val.type === 'assistance';
                    });
                }
            },
            conct() {
                if (this.tasks) {
                    const newdata = this.tasks;
                    return newdata.filter((val) => {
                        return val.type == 'contact';
                    });
                }
            }
        },
        filters: {
            summary: function (value) {
                if (!value) return ''
                value = value.toString()
                return value.substr(0, 25) + '...';
            }
        },
        methods: {
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
                        this.form.delete('api/contactforms/' + id)
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
            loadabout() {
                if (this.$gate.isAuthorOrAdmin()) {
                    axios.get('api/contactforms').then(({
                        data
                    }) => (this.tasks = data));
                }
            }
        },
        created() {
            this.loadabout();
            Fire.$on('createNew', () => this.loadabout());
        }
    }

</script>
