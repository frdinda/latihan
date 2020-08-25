<?php

class Login extends Controller{
    public function index(){
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function validasi_akun(){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $data_user = $this->model('Login_model')->validasiAkunUser($_POST['username']);
            if($data_user > 0){
                if($data_user['pass'] == $_POST['password']){
                    header('Location: ' .BASEURL. '/home');
                    exit;
                } else{
                    Flasher::setFlash('wrong password', 'danger');
                    header('Location: ' .BASEURL. '/login');
                    exit;
                }
            }else{
                Flasher::setFlash('account have not registered', 'danger');
                header('Location: ' .BASEURL. '/login');
                exit;
            }
        }else{
            Flasher::setFlash('all part of the form need to be filled', 'danger');
            header('Location: ' .BASEURL. '/login');
            exit;
        }
    }
}



?>