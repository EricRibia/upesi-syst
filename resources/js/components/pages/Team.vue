<template>

        <div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card" v-if="$gate.isAuthorOrAdmin()">
              <div class="card-header">
                <h3 class="card-title">Team</h3>

                <div class="card-tools">
                  <button class="btn btn-success" @click="newModal">Add Team Member<i class="fas fa-user-plus fa-fw"></i></button>
                </div>
              </div>

              <paginate
                name="tasks"
                :list="tasks"
                :per="7"
                >
                    <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Bio</th>
                    <th>Date Modified</th>
                    <th>Modify</th>
                  </tr>
                    <tr v-for="value in paginated('tasks')"  :key="value.id">
                    <td><img class="backProfiles" :src="'/img/team/'+ value.photo"></td>
                    <td>{{value.name}}</td>
                    <td>{{value.title}}</td>
                    <td>{{value.info | summary}}</td>
                    <td>{{value.updated_at | fDate}}</td>
                    <td>
                        <a href="#" @click="editModal(value)"><i class="fas fa-edit"></i></a>
                          /  
                        <a href="#" @click="deleteTeam(value.id)"><i class="fas fa-trash-alt"></i></a>
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
                    <h5 v-show="editMode" class="modal-title" id="addNewLabel">Update value</h5>
                    <h5 v-show="!editMode" class="modal-title" id="addNewLabel">Create value</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="editMode ? updateTeam() : createTeam()">
                <div class="modal-body">
                    <div class="form-group">
                        <input v-model="form.name" type="text" name="name"
                            placeholder="Enter name"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                        <has-error :form="form" field="name"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.title" type="text" name="title"
                            placeholder="Enter title e.g CEO"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('title') }">
                        <has-error :form="form" field="title"></has-error>
                    </div>
                    <div class="form-group">
                        <input type="file" @change="photoUpload" name="photo" class="form-input" id="inputFile">
                    </div>
                    <div class="form-group">
                        <textarea v-model="form.info" type="text" name="description"
                            rows="3"
                            placeholder="Enter bio"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('info') }">
                        </textarea>
                        <has-error :form="form" field="info"></has-error>
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
                name: '',
                title: '',
                info:'',
                photo:''
            })
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
     newModal(){
        this.editMode = false;
        this.form.reset();
        this.form.clear();
        $('#addNew').modal('show');
                 
        },
    editModal(teamCont){
        this.editMode = true;
        this.form.reset();
        $('#addNew').modal('show');
        this.form.clear();
        this.form.fill(teamCont);
            
        },
    photoUpload(e){
        let file = e.target.files[0];
        let reader = new FileReader();
        if( file['size'] < 262144){
            reader.onloadend = (file) => {
            // console.log('Result', reader.result);
            this.form.photo =reader.result;
            }
            reader.readAsDataURL(file);
        }else{
            swal({
            type: 'error',
            title: 'Failed to upload',
            text: 'Image should be less than 2mbs',
            })
        }
    },
     deleteTeam(id){
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
                this.form.delete('api/team/' + id)
                .then( () => {
                    swal(
                    'Deleted!',
                    'Team member removed successfully.',
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
     updateTeam(){
            this.$Progress.start();
            this.form.put( 'api/team/' + this.form.id)
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
                $('#addNew').modal('hide');
                $('#addNewTwo').modal('hide');
                this.$Progress.fail();
            });
        },
     createTeam(){
            this.$Progress.start();
            this.form.post('api/team')
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
    loadTeam(){
        if(this.$gate.isAuthorOrAdmin())
        {
        axios.get('api/team').then(( {data} ) => (this.tasks = data));
        }
        }
    },
    created(){
        this.loadTeam();
        Fire.$on('createNew', () => this.loadTeam() );    }
}
</script>
