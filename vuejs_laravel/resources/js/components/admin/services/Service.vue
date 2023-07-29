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
                                <h3 class="m-0">Service Status</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12">
                                    <table
                                        class="table table-bordered table-hover"
                                    >
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Icon</th>
                                                <th>Icon</th>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                v-for="(d, i) in service"
                                                :key="i"
                                            >
                                                <td>{{ ++i }}</td>
                                                <td>{{ d.icon }}</td>
                                                <td>{{ d.title }}</td>
                                                <td>{{ d.descript }}</td>
                                                <td>
                                                    <router-link
                                                        :to="`/edit_service/${d.id}`" class="btn btn-success"
                                                        >
                                                        <i class="nav-icon fas fa-edit "></i></router-link
                                                    >
                                                    &nbsp;
                                                    <a 
                                                        href="javascript:void(0)"
                                                        @click="
                                                            delservice(d.id)
                                                        " class="btn btn-danger"
                                                        ><i class="fa fa-trash"></i></a
                                                    >
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
            
 name:'Service',
            data() {
            return {
            service: [],
            msg:"",
        };
    },
    methods: {
        getservice() {
            axios.get("api/service").then((response) => {
                this.service = response.data.data;
                // consloe.log(response);
            });
        },
        delservice(id) {
            axios.delete(`api/service/${id}`)
            .then((response)=> {
                console.log(response.data)
                this.getservice()
                this.msg="Deleted Successfully!"
            })
        },
      
    },
   
    mounted() {
        this.getservice();
    },

}
</script>