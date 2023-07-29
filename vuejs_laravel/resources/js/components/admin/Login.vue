<template>
    <body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" v-model="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" v-model="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" @click="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->

</body>
</template>
    <script>
import { mapActions } from 'vuex'

        export default{
      name: 'Login',
           data() {
        return {
          email: '',
          password: '',
        }
      },
       methods: {
        ...mapActions({
          login: 'auth/login'
        }),
        async singin() {
          await axios.get('/sanctum/csrf-cookie')
          await axios.post('/login', {
            email: this.email, password: this.
              password
          }, { headers: { "Accept": "application/json" } })
            .then(({ res }) => {
              this.login()
            })
            .catch(({ res }) => {
              console.log(res)
            })

    }
  }
            
            
        }
   </script>