<?php 
class si_kereta_api{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "si_kereta_api";
	var $koneksi="";

	function __construct(){
		$this->koneksi = mysqli_connect($this->host,
        $this->username,
		$this->password,
		$this->database);
	
	}

    function tampil_data(){
        $data=mysqli_query($this->koneksi,
		"SELECT * FROM tbl_stasiun");
        while($d=mysqli_fetch_array($data)){
            $hasil[]= $d;
        }
        return $hasil;
    }
  
	function input_data($id_stasiun,$nama_stasiun,$alamat,$email,$telepon,$jumlah_jalur,$tgl_pembangunan){
		mysqli_query($this->koneksi, "INSERT INTO tbl_stasiun VALUES
		(NULL,'$id_stasiun','$nama_stasiun','$alamat','$email','$telepon','$jumlah_jalur','$tgl_pembangunan')");
	}
	
}
?>