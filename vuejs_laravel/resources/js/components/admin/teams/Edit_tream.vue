<template>
    <body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
        <Header/>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
        <Menu/>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Laravel vue js Arsha</h1>
                    <div v-if="msg" class="alert alert-success">
                                    {{ msg }}
                                </div>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="m-0">Edit team Status</h3>
                            </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                     <div class="form-group">
                                        <label for="exampleInputName">Image</label>
                                        <input type="file" 
                                        class="form-control"  
                                        @change="fileHandle($event)" 
                                       >
                                      </div>
                                      
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputContactEmail">Title</label>
                                        <input type="text" 
                                        class="form-control" 
                                        v-model="title"  
                                        placeholder="enter your title name">
                                    </div>
                                  </div>
                             </div>
                            <div class="row">
                                <div class="col-sm-6">
                                     <div class="form-group">
                                        <label for="exampleInputName">Designation</label>
                                        <br/>
                                        <input type="text" 
                                        class="form-control"  
                                        v-model="designation"
                                         placeholder="Enter your designation">
                                         
                                      </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Details</label>
                                        <br/>
                                        <textarea 
                                          id="summernote" 
                                          v-model="details"
                                          cols="50" 
                                          rows="8">
                                        </textarea>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-sm-12">
                                     <div class="form-group">
                                        <label for="exampleInputName"></label>
                                         <button type="submit" class="btn btn-block btn-primary" @click="update">update</button>
                                      </div>
                                 </div>
                         </div>
                        </div>
                    </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- footer -->
<Footer/>
   
<!-- endfooter -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard.js"></script> -->
</body>
</template>

<script>
import axios from 'axios';
import Footer from '../Footer.vue';
import Header from '../Header.vue';
import Menu from '../Menu.vue';
 
export default{
  components: { Header, Menu, Footer },
            
 name: "Edit_tream",

            data() {
            return {
                 title: "",
                designation: "",
                details: "",
                file: "",
                msg: "",
            
        };
    },
   
    methods: { 
        gettream(){
            axios.get(`/api/team/${this.id}`).then((response) =>{
               this.title = response.data.data.title;
                this.designation = response.data.data.designation;
                this.details = response.data.data.details;
                this.file = response.data.data.file;
            })
        },
        fileHandle(e) {
            this.file = e.target.files[0];
        },

        update() {
        let formData = new FormData();
        // formData.append("photo", this.photo);
        formData.append("title", this.title);
        formData.append("designation", this.designation);
        formData.append("details", this.details);
        formData.append("__method", 'PUT');
        formData.append("file", this.file);


                axios
                    .post("/api/team", formData, {
                        headers: { "Content-Type": "multipart/form-data"},
                    })
                    .then((response) =>{
                        this.$router.push("/team");
                       
                    })
   },

},
    mounted() {
        this.id = this.$route.params.id;
        this.gettream();
      
    },

}
</script>