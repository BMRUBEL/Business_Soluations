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
                                <h3 class="m-0">About Add</h3>
                            </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                     <div class="form-group">
                                        <label for="exampleInputName">Title</label>
                                        <input type="text" 
                                        class="form-control"  
                                        v-model="title"
                                        placeholder="enter your title"
                                       >
                                      </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputContactEmail">Descript</label>
                                        <input type="text" 
                                        class="form-control" 
                                        v-model="descript"  
                                        placeholder="enter your descript">
                                    </div>
                                  </div>
                             </div>
                            <div class="row">
                                <div class="col-sm-6">
                                     <div class="form-group">
                                        <label for="exampleInputName">Part 1</label>
                                        
                                        <input type="text" 
                                        class="form-control"  
                                        v-model="part_1"
                                         placeholder="Enter your part-1">
                                         
                                      </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Part-2</label>
                                        <input type="text" 
                                        class="form-control"  
                                        v-model="part_2"
                                         placeholder="Enter your part-2">
                                         
                                    </div>
                                 </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                     <div class="form-group">
                                        <label for="exampleInputName">Part 3</label>
                                        
                                        <input type="text" 
                                        class="form-control"  
                                        v-model="part_3"
                                         placeholder="Enter your part-3">
                                         
                                      </div>
                                 </div>

                                 <div class="col-sm-6">
                                     <div class="form-group">
                                        <label for="exampleInputName">Photo</label>
                                        <input type="file" 
                                        class="form-control"  
                                        @change="fileHandle($event)" 
                                       >
                                      </div>
                                 </div>

                            </div>
                            <div class="col-sm-12">
                                     <div class="form-group">
                                        <label for="exampleInputName"></label>
                                         <button type="submit" class="btn btn-block btn-primary" @click="submit">Save</button>
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
            
 name: "Add_abo",

            data() {
            return {
                 title: "",
                descript: "",
                part_1: "",
                part_2: "",
                part_3: "",
                file: "",
            
        };
    },
   
    methods: { 
        fileHandle(e) {
            this.file = e.target.files[0];
        },

    submit() {
        let formData = new FormData();
        formData.append("photo", this.photo);
        formData.append("title", this.title);
        formData.append("descript", this.descript);
        formData.append("part_1", this.part_1);
        formData.append("part_2", this.part_2);
        formData.append("part_3", this.part_3);
        formData.append("file", this.file);

                axios
                    .post("api/about", formData, {
                        headers: { "Content-Type": "multipart/form-data"},
                    })
                    .then((response) =>{
                        this.$router.push("/about");
                    })
   },

},
    mounted() {
         
    },

}
</script>