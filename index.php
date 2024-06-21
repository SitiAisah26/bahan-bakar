<?php 
include 'proses.php'; //menyambungkan/memanggil file proses.php
$proses = new Beli();
$proses->setHarga(15420, 16130, 18310, 16510);
if(isset($_POST['kirim'])) {
    $proses->jumlah = $_POST['liter'];
    $proses->jenis = $_POST['jenis'];

    $proses->hargaBeli();
    $proses->cetakPembelian();
}

?>
<center>
<form action="" method="post"> 
   <table>
    <tr>
        <td>
            <label for="liter">Jumlah Liter:</label>
            <input type="number" id="liter" name="liter">
        </td>
    </tr>
    <tr>
        <td>
            <label for="jenis">Pilih Jenis</label>
            <select name="jenis" id="jenis">
            <option value="SSuper">Shell Power</option>
            <option value="SSVPower">Shell V-Power</option>
            <option value="SSVPowerDiesel">Shell V-Power Diesel</option>
            <option value="SSVPowerNitro">Shell V-Power Nitro</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
        <button name="kirim" type="submit">Beli</button>
        </td>
    </tr>
    </table>
</form>
</center>
</body>
</html>