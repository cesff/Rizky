<?php
class biodata extends database{
    public function index(){
        $data_biodata = mysqli_query($this->koneksi,"select * from biodata");

        return $data_biodata;
    }
}
?>