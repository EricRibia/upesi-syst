<template>

        <div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card" v-if="$gate.isAuthorOrAdmin()">
              <div class="card-header">
                <h3 class="card-title">Careers</h3>

                <div class="card-tools">
                  <button class="btn btn-success" @click="newModal">Add Career<i class="fas fa-user-plus fa-fw"></i></button>
                </div>
              </div>

              <paginate
                name="tasks"
                :list="tasks"
                :per="5"
                >
                    <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>#</th>
                    <th>Job Title</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Application url</th>
                    <th>Updated at</th>
                  </tr>
                    <tr v-for="(service,i) in paginated('tasks')"  :key="i">
                    <td>{{i+1}}</td>
                    <td>{{service.title}}</td>
                    <td>{{service.description | summary}}</td>
                    <td>{{service.location}}</td>
                    <td>{{service.application_url}}</td>
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
<paginate-links for="tasks"></paginate-links>
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
                            placeholder="Enter job title"
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
                    <div class="form-group">
                        <input v-model="form.location" type="text" name="location"
                            rows="3"
                            placeholder="Enter job location"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('location') }">
                        <has-error :form="form" field="location"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.application_url" type="text" name="application_url"
                            rows="3"
                            placeholder="Enter application url"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('application_url') }">
                        <has-error :form="form" field="application_url"></has-error>
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
            paginate: ['tasks'],
            form : new Form({
                id:'',
                title: '',
                description: '',
                location: '',
                application_url: ''
            })
        }
    },
    computed: {
    // a computed getter
    },
    filters: {
        summary: function (value) {
            if (!value) return ''
            value = value.toString()
            return value.substr(0, 25) + '...';
        }
    },
    methods:{
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
                this.form.delete('api/career/' + id)
                .then( () => {
                    swal(
                    'Deleted!',
                    'Career has been deleted.',
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
            this.form.put( 'api/career/' + this.form.id)
            .then( () => {
                //success
                $('#addNew').modal('hide');
                $('#addNewTwo').modal('hide');
                swal(
                    'Updated!',
                    'Career has been updated.',
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
            this.form.post('api/career')
            .then( () => {
                $('#addNew').modal('hide');
                toast({
                    type: 'success',
                    title: 'Career created successfully!!'
                    });
                Fire.$emit('createNew');
                this.$Progress.finish();
            }).catch( () => {

            });
        },
    loadServ(){
        if(this.$gate.isAuthorOrAdmin())
        {
        axios.get('api/career').then(( {data} ) => (this.tasks = data));
        }
        }
    },
    created(){
        this.loadServ();
        Fire.$on('createNew', () => this.loadServ() );    }
}
</script>
