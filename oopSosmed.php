<?php

class Pengguna{
    private $nama;
    private $email;
    private $password;

    public function __construct($nama,$email,$password){
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

}

class Post{
    private $pengguna;
    private $tanggal;
    private $konten;

    public function __construct(Pengguna $pengguna, $konten){
        $this->pengguna = $pengguna;
        $this->tanggal = date('Y-m-d H:i:s');
        $this->konten = $konten;
    }

    public function getTanggal(){
        return $this->tanggal;
    }

    public function getKonten(){
        return $this->konten;
    }

    public function setKonten($konten){
        $this->konten = $konten;
    }

}

//contoh 
$pengguna1 = new Pengguna('John Doe', 'john.doe2@gmail.com','password123');

$post1 = new Post($pengguna1, "ini adalah konten pertama");
$post2 = new Post($pengguna1, "Ini adalah konten kedua");

echo "Nama pengguna: ".$pengguna1->getNama().PHP_EOL;
echo "Email pengguna: ".$pengguna1->getEmail().PHP_EOL;

echo "Konten post 1: ".$post1->getKonten().PHP_EOL;
echo "Konten post 1: ".$post1->getKonten().PHP_EOL;

$post1->setKonten("Konten post pertama telah diubah");
echo "Konten post 1 telah diubah: ".$post1->getKonten().PHP_EOL;



?>