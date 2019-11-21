<?php
class database{
    public $host="localhost",$user="root",$pass="123",$db="contoh";
    public $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect($this->host,$this->user,$this->pass,$this->db);

    if($this->koneksi){
    //echo "Berhasil";    
            }
    else{
     echo "koneksi database gagal";   
    }            

    }
}

include 'biodata.php';
$db = new database();
?>