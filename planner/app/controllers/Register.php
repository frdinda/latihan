<?php

class Register extends Controller{
    public function index(){
        $data['judul'] = 'Register';
        $this->view('templates/header', $data);
        $this->view('register/index', $data);
        $this->view('templates/footer');
    }

    public function tambah_akun(){
        if($this->model('Register_model')->tambahAkun($_POST) > 0){
            header('Location: ' .BASEURL. '/home');
            exit;
            exit;
        } else {
            Flasher::setFlash('failed signing up', 'danger');
            header('Location: ' .BASEURL. '/register');
            exit;
        }
    }
    
}



?>