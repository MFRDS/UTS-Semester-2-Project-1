<?php
require_once 'Pasien.php';


class BMI extends Pasien{
    public $bmi;
    public $berat;
    public $tinggi;
  
    function __construct($tanggal,$kode,$nama,$gender,$tmp_lahir,$tgl_lahir,$email,$berat,$tinggi){
        parent::__construct($tanggal,$kode,$nama,$gender,$tmp_lahir,$tgl_lahir,$email);
        $this->berat = $berat;
        $this->tinggi = $tinggi;

    }


    public function getBMI(){
    $tinggi1 = $this->tinggi/100;
    $this->bmi = ($this->berat / pow($tinggi1,2));
    return $this->bmi;
    }

    public function status(){

    if($this->bmi <= 18.5){
        return "Berat Badan Kurang";
    }elseif($this->bmi <= 25){
        return "Normal (Ideal)";
    }elseif($this->bmi <= 30){
        return "Berat Badan Kelebihan";
    }else{
        return "Kegemukan (Obesitas)";
    }
    }}
?>