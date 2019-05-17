<template>

        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card" v-if="$gate.isAuthorOrAdmin()">
              <div class="card-header">
                <h3 class="card-title">Send Money Link</h3>

                <div class="card-tools">
                  <!-- <button class="btn btn-success" @click="newModal">Add user <i class="fas fa-user-plus fa-fw"></i></button> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>Website Name</th>
                    <th>Url</th>
                    <th>Updated at</th>
                    <th>Edit Link</th>
                  </tr>
                  <tr v-for=" (user,i) in users" :key="i">
                    <td>{{user.website}}</td>
                    <td>{{user.url}}</td>
                    <td>{{user.updated_at | fDate}}</td>
                    <td>
                        <a href="#" @click="editModal(user)"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>
                </tbody></table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- .notfound -->
             <div class="card" v-if="!$gate.isAuthorOrAdmin()">
            <notfound></notfound>
             </div>
            <!-- /.notfound -->
          </div>
          <!-- Modal -->
            <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 v-show="editMode" class="modal-title" id="addNewLabel">Update send money link url( enter full url i.e. https://...)</h5>
                    <h5 v-show="!editMode" class="modal-title" id="addNewLabel">Create a user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="editMode ? updateLink() : createUser()">
                <div class="modal-body">
                    <div class="form-group">
                        <input v-model="form.website" type="text" name="website"
                            placeholder="Enter name"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('website') }">
                        <has-error :form="form" field="website"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.url" type="text" name="url"
                            placeholder="Enter Portal Url"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('url') }">
                        <has-error :form="form" field="url"></has-error>
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

</template>

<script>
    export default {
        
        data(){
            return {
                editMode : false,
                users: [],
                form : new Form({
                    id:'',
                    website: '',
                    url: '',
                })
            }
        },
        methods: {
            newModal(){
               this.editMode = false;
                this.form.reset();
                this.form.clear();
                $('#addNew').modal('show');
                 
            },
            editModal(user){
                this.editMode = true;
                this.form.reset();
                $('#addNew').modal('show');
                this.form.clear();
                this.form.fill(user);
                
            },
            loadLink(){
                if(this.$gate.isAuthorOrAdmin())
                {
                    axios.get('api/sendmoneylink').then(( {data} ) => (this.users = data));
                }
            },
            updateLink(){
                this.$Progress.start();
                this.form.put( 'api/sendmoneylink/' + this.form.id)
                .then( () => {
                    //success
                    $('#addNew').modal('hide');
                    swal(
                        'Updated!',
                        'Send Money link has been updated.',
                        'success'
                        )
                    Fire.$emit('createUser');
                    this.$Progress.finish();
                }).catch( () => {
                    //fail
                    this.$Progress.fail();
                });
            },
            getResults(page = 1) {
			axios.get('api/user?page=' + page)
				.then(response => {
					this.users = response.data;
				});
		    }
        },
        created() {
            this.loadLink();
            Fire.$on('createUser', () => this.loadLink() );
            // setInterval( () => this.loadUsers(), 3000);
        }
    }
</script>
