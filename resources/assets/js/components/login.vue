<template>
    <div class="d-inline-block position-absolute h-100 w-100">
        <div class="animated fadeInUp login-content" >
            <div class="login-icon">
                <span class="icon-user"></span>
            </div>
            <form action="loginValidate">
                <div class="md-form form-group">
                    <input type="text" name="loginUser" id="login-user" class="form-control">
                    <label for="login-user" >User</label>
                </div>
                <div class="md-form form-group">
                    <input type="password" name="loginPassword" class="form-control" id="inputPassword4MD">
                    <label for="inputPassword4MD">Password</label>
                </div>
                <br>
                <button type="submit" class="btn btn-dark-green">Sign In</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>
