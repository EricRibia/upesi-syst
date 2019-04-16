<template>

        <div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card" v-if="$gate.isAuthorOrAdmin()">
              <div class="card-header">
                <h3 class="card-title">How it works section</h3>

                <div class="card-tools">
                  <button class="btn btn-success" @click="newModal">Add step<i class="fas fa-user-plus fa-fw"></i></button>
                </div>
              </div>
                    <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <!-- <th>ID</th> -->
                    <th>icon</th>
                    <th>number</th>
                    <th>title</th>
                    <th>Info</th>
                  </tr>
                    <tr v-for="service in tasks"  :key="service.id">
                    <!-- <td>{{service.id}}</td> -->
                    <td><img style="max-width:70%" :src="'/img/howork/'+ service.icon"></td>
                    <td>{{service.number}}</td>
                    <td>{{service.title}}</td>
                    <td>{{service.info}}</td>
                    <td>
                        <a href="#" @click="editModal(service)"><i class="fas fa-edit"></i></a>
                          /  
                        <a href="#" @click="deleteServ(service.id)"><i class="fas fa-trash-alt"></i></a>
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
                    <div class="form-group">
                        <label for="icon">Choose icon</label><br/>
                        <input ref="fileInput" type="file" @change="photoUpload" name="icon" class="form-input" id="inputFile">
                    </div>
                    </div>
                    <div class="form-group">
                        <input v-model="form.number" type="number" name="number"
                            placeholder="Enter step number"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('number') }">
                        <has-error :form="form" field="number"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.title" type="text" name="title"
                            placeholder="Enter title of procedure"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('title') }">
                        <has-error :form="form" field="title"></has-error>
                    </div>
                    <div class="form-group">
                        <textarea v-model="form.info" type="text" name="info"
                            rows="3"
                            placeholder="Enter info"
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
            form : new Form({
                id:'',
                number:'',
                title: '',
                info: '',
                icon:''
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
        this.$refs.fileInput.value = null;
        $('#addNew').modal('show');
                 
        },
    editModal(abtCont){
        this.editMode = true;
        this.form.reset();
        $('#addNew').modal('show');
        this.form.clear();
        this.form.fill(abtCont);
        // this.$refs.fileInput.value = this.form.icon;
            
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
                this.form.delete('api/howork/' + id)
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
            this.form.put( 'api/howork/' + this.form.id)
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
            this.form.post('api/howork')
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
        axios.get('api/howork').then(( {data} ) => (this.tasks = data));
        }
        }
    },
    created(){
        this.loadServ();
        Fire.$on('createNew', () => this.loadServ() );    }
}
</script>
