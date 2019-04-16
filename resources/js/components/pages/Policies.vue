<template>

        <div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card" v-if="$gate.isAuthorOrAdmin()">
              <div class="card-header">
                <h3 class="card-title">FAQs</h3>

                <div class="card-tools">
                  <button class="btn btn-success" @click="newModal">Add FAQ<i class="fas fa-user-plus fa-fw"></i></button>
                </div>
              </div>

              <paginate
                name="vals"
                :list="vals"
                :per="2"
                >
                    <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Info</th>
                    <th>Updated at</th>
                    <th>Modify</th>
                  </tr>
                    <tr v-for="value in paginated('vals')"  :key="value.id">
                    <td>{{value.id}}</td>
                    <td>{{value.title}}</td>
                    <td>{{value.description | summary}}</td>
                    <td>{{value.updated_at | fDate}}</td>
                    <td>
                        <a href="#" @click="editModal(value)"><i class="fas fa-edit"></i></a>
                          /  
                        <a href="#" @click="deletePolicy(value.id)"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                </tbody></table>
              </div>
              <!-- /.card-body -->
</paginate>
<paginate-links for="vals"></paginate-links>
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
                    <h5 v-show="editMode" class="modal-title" id="addNewLabel">Update value</h5>
                    <h5 v-show="!editMode" class="modal-title" id="addNewLabel">Create value</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="editMode ? updatePolicy() : createPolicy()">
                <div class="modal-body">
                    <div class="form-group">
                        <input v-model="form.title" type="text" name="title"
                            placeholder="Enter name of value"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('title') }">
                        <has-error :form="form" field="title"></has-error>
                    </div>
                    <div class="form-group">
                        <textarea v-model="form.description" type="text" name="description"
                            rows="3"
                            placeholder="Enter description"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('description') }">
                        </textarea>
                        <has-error :form="form" field="description"></has-error>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Privacy Policy and Terms of Use section</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>Name</th>
                    <th>Info</th>
                    <th>Updated at</th>
                    <th>Modify</th>
                  </tr>
                  <tr v-for=" about in abCont()" :key="about.id">
                    <td>{{about.title}}</td>
                    <td>{{about.description | summary}}</td>
                    <td>{{about.updated_at | fDate}}</td>
                    <td>
                        <a href="#" @click="editModalTwo(about)"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>
                </tbody></table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- .notfound -->
             <div class="card">
            <!-- <notfound></notfound> -->
             </div>
            <!-- /.notfound -->
          </div>
        </div>
                  <!-- Modal -->
            <div class="modal fade" id="addNewTwo" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewLabel">{{form.title}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="editMode ? updatePolicy() : createPolicy()">
                <div class="modal-body">
                    <div class="form-group">
                        <textarea v-model="form.description" type="text" name="bio"
                            rows="10"
                            placeholder="Enter description"
                            class="form-control">
                        </textarea>
                <has-error :form="form" field="description"></has-error>

                    </div>
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button v-show="editMode" type="submit" class="btn btn-success">Update</button>
                </div>
                </form>
                </div>
            </div>
            </div>
        </div>



</template>

<script>
export default {
    data(){
        return{
            editMode : false,
            tasks : [],
            paginate: ['vals'],
            form : new Form({
                id:'',
                title: '',
                description: ''
            })
        }
    },
    computed: {
    // a computed getter
        vals: function () {
            if(this.tasks){
            const newdata = this.tasks;
            return newdata.filter( (val) => { return val.type === 'faqs'; });
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
    methods:{
    abCont() {
            if(this.tasks){
            const newdata = this.tasks;
            return newdata.filter( (val) => { return val.type =='termsnprivacy'; });
            }
        },
     newModal(){
        this.editMode = false;
        this.form.reset();
        this.form.clear();
        $('#addNew').modal('show');
                 
        },
    editModal(abtCont){
        this.editMode = true;
        this.form.reset();
        $('#addNew').modal('show');
        this.form.clear();
        this.form.fill(abtCont);
            
        },
    editModalTwo(abtCont){
        this.editMode = true;
        this.form.reset();
        $('#addNewTwo').modal('show');
        this.form.clear();
        this.form.fill(abtCont);
            
    },
     deletePolicy(id){
        swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if(result.value){
                this.form.delete('api/policy/' + id)
                .then( () => {
                    swal(
                    'Deleted!',
                    'Deleted successfully.',
                    'success'
                    )
                Fire.$emit('createNew');
                }).catch( () => {
                    swal({
                    type: 'error',
                    title: 'Failed',
                    text: 'Something went wrong!',
                    })
                });
            }
        })
        },
     updatePolicy(){
            this.$Progress.start();
            this.form.put( 'api/policy/' + this.form.id)
            .then( () => {
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
            }).catch( () => {
                //fail
                this.$Progress.fail();
            });
        },
     createPolicy(){
            this.$Progress.start();
            this.form.post('api/policy')
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
    loadPolicy(){
        if(this.$gate.isAuthorOrAdmin())
        {
        axios.get('api/policy').then(( {data} ) => (this.tasks = data));
        }
        }
    },
    created(){
        this.loadPolicy();
        Fire.$on('createNew', () => this.loadPolicy() );    }
}
</script>
