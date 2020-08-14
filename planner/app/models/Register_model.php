<?php

class Register_model{
    private $table = 'user';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function tambahAkun($data){
        $filled = array_filter($data);

        if(count($data) == count($filled)){
            $query = "INSERT INTO " .$this->table. " VALUES (:username, :pass, :nama, :tanggal_lahir)";
            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('pass', $data['password']);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
            $this->db->execute();
            return $this->db->rowCount();
        } else {
            return;
        }
    }
}

?>