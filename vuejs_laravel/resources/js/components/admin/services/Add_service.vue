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
                                <h3 class="m-0">Service Add</h3>
                            </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                     <div class="form-group">
                                        <label for="exampleInputName">Icon</label>
                                        <input type="text" 
                                        class="form-control"  
                                        v-model="icon" 
                                        placeholder="Enter icon">
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
                                        <label for="exampleInputName">Description</label>
                                        <br/>
                                        <!-- <input type="text" 
                                        class="form-control"  
                                        v-model="descript"
                                         placeholder="Enter your text"> -->
                                         <textarea 
                                          id="summernote" 
                                          v-model="descript"
                                          cols="50" 
                                          rows="8">
                                        </textarea>
                                      </div>
                                 </div>
                                <div class="col-sm-6">
                                     <div class="form-group">
                                        <label for="exampleInputName"></label>
                                         <button type="submit" class="btn btn-block btn-primary" @click="submit">Save</button>
                                      </div>
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
            
 name: "Add_service",

            data() {
            return {
                icon: "",
                title: "",
                descript: "",
                msg: "",
            
        };
    },

    methods: { 


    submit() {
        let formData = new FormData();
        formData.append("icon", this.icon);
        formData.append("title", this.title);
        formData.append("descript", this.descript);
        formData.append("msg", this.msg);

                axios
                    .post("api/service", formData, {
                        headers: { "Content-Type": "multipart/form-data"},
                        msg: this.msg,
                        
                    })
                    .then((response) =>{
                        this.$router.push("/serv");
                        this.msg="Insert Successfully!"
                    })
   },

},
    mounted() {
         
    },

}
</script>