<template>
    <div class="d-inline-block position-absolute h-100 w-100">
        <div class="animated fadeInUp login-content" >
            <div class="login-icon">
                <span class="icon-user"></span>
            </div>
            <form v-on:submit.prevent="loginValidate">
                <div class="md-form form-group">
                    <input type="text" name="loginUser" id="login-user" class="form-control" v-model="user" autocomplete="off">
                    <label for="login-user" >User</label>
                </div>
                <div class="md-form form-group">
                    <input type="password" name="loginPassword" class="form-control" id="login-password" v-model="password">
                    <label for="login-password">Password</label>
                </div>
                <br>
                <button type="submit" class="btn btn-dark-green">Sign In</button>
            </form>
        </div>
    </div>
</template>

<script>
    import axios    from 'axios'
    import toastr   from 'toastr'
    import md5      from 'md5'

    export default {
        data () {
            return {
                user: '',
                password: '',
            }
        },
        methods: {
            loginValidate: function(){
                var url =   'login/Validate';
                axios.post(url,{
                    user    :  this.user,
                    password:  md5(md5(this.password))
                }).then(response => {
                    if (response.data.status=='fail'){
                        toastr.warning('User or password incorrect');
                        this.password='';
                    }else{
                        window.location.href ='home';
                    }
                }).catch(error => {
                    console.log(error);
                    toastr.warning('Login error');
                    this.password='';
                });
            }
        }

    }
</script>
