<template>

        <div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card" v-if="$gate.isAuthorOrAdmin()">
              <div class="card-header">
                <h3 class="card-title">Services</h3>

                <div class="card-tools">
                  <button class="btn btn-success" @click="newModal">Add Service<i class="fas fa-user-plus fa-fw"></i></button>
                </div>
              </div>

              <paginate
                name="vals"
                :list="vals"
                :per="5"
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
                    <tr v-for="service in paginated('vals')"  :key="service.id">
                    <td>{{service.id}}</td>
                    <td>{{service.title}}</td>
                    <td>{{service.description | summary}}</td>
                    <td>{{service.updated_at | fDate}}</td>
                    <td>
                        <a href="#" @click="editModal(service)"><i class="fas fa-edit"></i></a>
                          /  
                        <a href="#" @click="deleteServ(service.id)"><i class="fas fa-trash-alt"></i></a>
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
                    <h5 v-show="editMode" class="modal-title" id="addNewLabel">Update service</h5>
                    <h5 v-show="!editMode" class="modal-title" id="addNewLabel">Create service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="editMode ? updateServ() : createServ()">
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
            return newdata.filter( (val) => { return val.type === 'service'; });
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
            return newdata.filter( (val) => { return val.type =='countries'; });
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
     deleteServ(id){
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
                this.form.delete('api/servic/' + id)
                .then( () => {
                    swal(
                    'Deleted!',
                    'User has been deleted.',
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
     updateServ(){
            this.$Progress.start();
            this.form.put( 'api/servic/' + this.form.id)
            .then( () => {
                //success
                $('#addNew').modal('hide');
                $('#addNewTwo').modal('hide');
                swal(
                    'Updated!',
                    'User has been updated.',
                    'success'
                    )
                Fire.$emit('createNew');
                this.$Progress.finish();
            }).catch( () => {
                //fail
                this.$Progress.fail();
            });
        },
     createServ(){
            this.$Progress.start();
            this.form.post('api/servic')
            .then( () => {
                $('#addNew').modal('hide');
                toast({
                    type: 'success',
                    title: 'User created successfully!!'
                    });
                Fire.$emit('createNew');
                this.$Progress.finish();
            }).catch( () => {

            });
        },
    loadServ(){
        if(this.$gate.isAuthorOrAdmin())
        {
        axios.get('api/servic').then(( {data} ) => (this.tasks = data));
        }
        }
    },
    created(){
        this.loadServ();
        Fire.$on('createNew', () => this.loadServ() );    }
}
</script>
