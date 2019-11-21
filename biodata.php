<?php
class biodata extends database{
    public function index(){
        $data_biodata = mysqli_query($this->koneksi,"select * from biodata");

        return $data_biodata;
    }
    public function create($nama1,$tanggal_lahir1){
        mysqli_query($this->koneksi,"insert into biodata values(null,'$nama1','$tanggal_lahir1')")
    }
}
?>