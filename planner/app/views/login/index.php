<div class="container login">
    <div class="row justify-content-center judul">
        <h1>Planner</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <?php Flasher::flash();?>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <form action="<?= BASEURL;?>/login/validasi_akun" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <a href="<?= BASEURL;?>/register">Haven't have account yet?</a><br><br>
                <button type="submit" class="btn btn-primary Login">Login</button>
            </form>
        </div>
    </div>
</div>