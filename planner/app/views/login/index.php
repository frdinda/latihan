<div class="container-fluid login">
    <div class="row">
        <div class="col-md-7 gambar">
            
        </div>
        <div class="col-md-5 form login">
            <div class="row align-items-center justify-content-center form">
                <div class="col-9">
                    <div class="row justify-content-center judul">
                        <h1>Planner</h1>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <?php Flasher::flash();?>
                        </div>
                    </div>
                    <div class="row justify-content-center input login">
                        <div class="col-md-10">
                            <form action="<?= BASEURL;?>/login/validasi_akun" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
                                </div>
                                <a href="<?= BASEURL;?>/register">Haven't have account yet?</a><br><br>
                                <button type="submit" class="btn btn-primary Login">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>