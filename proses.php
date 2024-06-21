<?php 
        //logic
class Shell {
    protected $ppn;
    private $SSuper,
            $SSVPower,
            $SSVPowerDiesel,
            $SSVPowerNitro;
    public $jumlah;
    public $jenis;

    function __construct() {
        $this->ppn = 0.1;
    }

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
        $this->SSuper = $tipe1;
        $this->SSVPower = $tipe2;
        $this->SSVPowerDiesel = $tipe3;
        $this->SSVPowerNitro = $tipe4;
    }

    public function getHarga() {
        $data["SSuper"] = $this->SSuper;
        $data["SSVPower"] = $this->SSVPower;
        $data["SSVPowerDiesel"] = $this->SSVPowerDiesel;
        $data["SSVPowerNitro"] = $this->SSVPowerNitro;
        return $data;
    }
}

            //proses

class Beli extends Shell {
    public function hargaBeli() {
        $dataHarga = $this->getHarga();
        $hargaBeli = $this->jumlah * $dataHarga[$this->jenis];
        $hargaPPN = $hargaBeli * $this->ppn;
        $hargaBayar = $hargaBeli + $hargaPPN;
        return $hargaBayar;
    }

    public function cetakPembelian() { 
        echo "<center>--------------------------------------------</center>";
        echo "<center>Anda membeli bahan bakar minyak tipe {$this->jenis} <br>";
        echo "Dengan jumlah : {$this->jumlah} Liter <br>";
        echo "Total yang harus anda bayar Rp." . number_format($this->hargaBeli(), 0, ',', '.') . "<br>";
        echo "<center>--------------------------------------------</center>";
    }
    }
?>