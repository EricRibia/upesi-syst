<template>

        <div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card" v-if="$gate.isAuthorOrAdmin()">
              <div class="card-header">
                <h3 class="card-title">{{about}}</h3>

                <div class="card-tools">
                  <button class="btn btn-success" @click="newModal">Add value<i class="fas fa-user-plus fa-fw"></i></button>
                </div>
              </div>
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
                  <tr v-for=" value in values()" :key="value.id">
                    <td>{{value.id}}</td>
                    <td>{{value.title}}</td>
                    <td>{{value.description | caps}}</td>
                    <td>{{value.updated_at | fDate}}</td>
                    <td>
                        <a href="#" @click="editModal(value)"><i class="fas fa-edit"></i></a>
                          /  
                        <a href="#" @click="deleteValue(value.id)"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                </tbody></table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <pagination :data="about" @pagination-change-page="getResults"></pagination>
              </div>
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
                    <h5 v-show="editMode" class="modal-title" id="addNewLabel">Update user's info</h5>
                    <h5 v-show="!editMode" class="modal-title" id="addNewLabel">Create a user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="editMode ? updateValue() : createValue()">
                <div class="modal-body">
                    <div class="form-group">
                        <input v-model="about.title" type="text" name="name"
                            placeholder="Enter name of value"
                            class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <textarea v-model="about.description" type="text" name="description"
                            rows="3"
                            placeholder="Enter description"
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
                <h3 class="card-title">About us section</h3>
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
                  <tr v-for=" about in aboutContent()" :key="about.id">
                    <td>{{about.title}}</td>
                    <td>{{about.description | caps}}</td>
                    <td>{{about.updated_at | fDate}}</td>
                    <td>
                        <a href="#" @click="editModal(about)"><i class="fas fa-edit"></i></a>
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
        </div>
                  <!-- Modal -->
            <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewLabel">Update About section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="updateAboutSection()">
                <div class="modal-body">
                    <div class="form-group">
                        <textarea v-model="about.description" type="text" name="description"
                            rows="3"
                            placeholder="Enter description"
                            class="form-control">
                        </textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Update</button>
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
            about: {},
            messages:{
                val:'values',
                about:'about'
            }
        }
        },
        filters: {
            caps: function (value) {
                if (!value) return ''
                value = value.toString()
                return value.substr(0, 25) + '...';
            }
            },
        methods: {
            newModal(){
               this.editMode = false;
                // this.form.reset();
                // this.form.clear();
                $('#addNew').modal('show');
                 
            },
            editModal(user){
                this.editMode = true;
                // this.form.reset();
                $('#addNew').modal('show');
                // this.form.clear();
                // this.form.fill(user);
                
            },
            deleteValue(id){
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
                        this.form.delete('api/pages/' + id)
                        .then( () => {
                            swal(
                            'Deleted!',
                            'User has been deleted.',
                            'success'
                            )
                        Fire.$emit('createValue');
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
            loadAbout(){
                if(this.$gate.isAuthorOrAdmin())
                {
                    axios.get('api/pages',this.messages).then(( {data} ) => (this.about = data));
                }
            },
            updateContent(){
                this.$Progress.start();
                this.form.put( 'api/pages/' + this.form.id)
                .then( () => {
                    //success
                    $('#addNew').modal('hide');
                    swal(
                        'Updated!',
                        'User has been updated.',
                        'success'
                        )
                    Fire.$emit('createValue');
                    this.$Progress.finish();
                }).catch( () => {
                    //fail
                    this.$Progress.fail();
                });
            },
                        updateValue(){
                this.$Progress.start();
                this.form.put( 'api/pages/' + this.form.id)
                .then( () => {
                    //success
                    $('#addNew').modal('hide');
                    swal(
                        'Updated!',
                        'User has been updated.',
                        'success'
                        )
                    Fire.$emit('createValue');
                    this.$Progress.finish();
                }).catch( () => {
                    //fail
                    this.$Progress.fail();
                });
            },
            createValue(){
                this.$Progress.start();
                this.form.post('api/pages')
                .then( () => {
                    $('#addNew').modal('hide');
                    toast({
                        type: 'success',
                        title: 'User created successfully!!'
                        });
                    Fire.$emit('createValue');
                    this.$Progress.finish();
                }).catch( () => {

                });
            },
            getResults(page = 1) {
			axios.get('api/pages?page=' + page)
				.then(response => {
					this.about = response.data;
				});
            },
            values () {
                if(this.about.data){
                const newdata = this.about.data;
                return newdata.filter( (val) => { return val.type === 'value'; });
                }
            },
            aboutContent () {
                if(this.about.data){
                const newdata = this.about.data;
                return newdata.filter( (val) => { return val.type === 'about'; });
                }
            },
        },
        created() {
            this.loadAbout();
            Fire.$on('createValue', () => this.loadAbout() );
            // setInterval( () => this.loadAbout(), 3000);
        }
    }
</script>
