<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-8 offset-lg-4 mt-5">
                <h1>Aplikasi Inventori</h1>
            </div>
        <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
        <!-- <div class="col-lg-5 d-none d-lg-block"></div> -->
        <div class="col-lg-8 offset-lg-2">
            <div class="p-5">
            <form method="post" name="doLogin" action="<?php echo base_url('/Auth/doLogin'); ?>">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <Label>Username</Label>
                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Password</label>
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <hr>
                <div class="col-lg-8 offset-lg-2">
                    <input class="btn btn-primary btn-user btn-block" type="submit" value="Login" >
                </div>
            </form>
            <hr>
            </div>
        </div>
        </div>
    </div>
    </div>

</div>