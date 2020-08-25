<div class="container-fluid register">
    <div class="row justify-content-center judul">
        <h1>Sign Up</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <?php Flasher::flash();?>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <form action="<?= BASEURL;?>/register/tambah_akun" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Birth Date</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                </div>
                <button type="submit" class="btn btn-primary Register">Login</button>
            </form>
        </div>
    </div>
</div>