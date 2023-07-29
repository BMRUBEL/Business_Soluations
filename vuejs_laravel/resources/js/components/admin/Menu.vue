<template>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/admin/dist/img/Rubel_photo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">B.M. Rubel</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          
          </li>
       
      
      
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>

             </ul>
          
            </li>

          <li class="nav-item">
              <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Services
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>
           
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/addservice" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Management</p>
                </router-link>
                 
              </li>

             </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/serv" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Status</p>
                </router-link>
                 
              </li>

             </ul>
          </li>


          <li class="nav-item">
              <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Teams
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>
           
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/addteam" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team Management</p>
                </router-link>
              </li>
             </ul>
             
             <ul class="nav nav-treeview">
              <li class="nav-item">
                 <router-link to="/team" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team Status</p>
                </router-link>
              </li>
             </ul>
          </li>

          <li class="nav-item">
              <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Abouts
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/addabou" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Management</p>
                </router-link>
              </li>
             </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/about" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Status</p>
                </router-link>
              </li>
             </ul>

          </li>


          <li class="nav-item">
              <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Contacts
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                 <router-link to="/contact" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Info</p>
                </router-link>
              </li>
             </ul>

          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Authetication
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                 <a class="nav-link" href="javascript:void(0)" @click="logout"> 
                       <i class="far fa-circle nav-icon"></i>
                    <p>Logout</p>
                  </a>
              </li>
             </ul>

          </li>

            
         
     
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</template>
<script>
import { mapActions } from 'vuex'
    export default{
  name: 'Menu',
        return(){

        },
         methods: {
    ...mapActions({
      signout: 'auth/logout'
    }),
    logout() {
      this.signout()
    }
  },
    }
</script>
 