<template>
    <div class="container">
        <!-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Dashboard Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div> -->
         <!-- Small Box (Stat card) -->
        <h5 class="mb-2 mt-4">Pages</h5>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><i class="fa fa-info-circle" aria-hidden="true"></i></h3>

                <p>About us</p>
              </div>
              <div class="icon">
                <i class="fa fa-info-circle" aria-hidden="true"></i>
              </div>
              <router-link to="/edit-about" class="small-box-footer">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3> <i class="fa fa-handshake-o" ></i></h3>

                <p>Services</p>
              </div>
              <div class="icon">
                 <i class="fa fa-handshake-o"></i>
              </div>
              <router-link to="/edit-services" class="small-box-footer">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3> <i class="fa fa-question-circle-o"></i></h3>

                <p>FAQs and Policies</p>
              </div>
              <div class="icon">
                <i class="fa fa-question-circle-o"></i>
              </div>
              <router-link to="/edit-policies" class="small-box-footer">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3> <i class="fa fa-users"></i></h3>

                <p>Team</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <router-link to="/edit-team" class="nav-link">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
             <!-- Small Box (Stat card) -->
        <div class="row">
          <div class="col-sm-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Contact Form <br/>Submissions</span>
                <span class="info-box-number">{{conct.length}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-sm-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Personal Assistance <br/>Requests</span>
                <span class="info-box-number">{{asst.length}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><i class="fa fa-globe" aria-hidden="true"></i></h3>

                <p>Available countries</p>
              </div>
              <div class="icon">
                <i class="fa fa-globe" aria-hidden="true"></i>
              </div>
              <router-link to="/edit-countries" class="small-box-footer">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><i class="fa fa-money" aria-hidden="true"></i></h3>

                <p>Available payments in countries</p>
              </div>
              <div class="icon">
                <i class="fa fa-money" aria-hidden="true"></i>
              </div>
              <router-link to="/edit-payments" class="small-box-footer">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><i class="fa fa-info-circle" aria-hidden="true"></i></h3>

                <p>Manage users</p>
              </div>
              <div class="icon">
                <i class="fa fa-shield" aria-hidden="true"></i>
              </div>
              <router-link to="/users" class="small-box-footer">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><i class="fa fa-info-circle" aria-hidden="true"></i></h3>

                <p>How it works section</p>
              </div>
              <div class="icon">
                <i class="fa fa-info-circle" aria-hidden="true"></i>
              </div>
              <router-link to="/edit-works" class="small-box-footer">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return{
            tasks:[]
          }
        },
        computed:{
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
        methods:{
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
            // Fire.$on('createNew', () => this.loadabout());
        }
    }
</script>
