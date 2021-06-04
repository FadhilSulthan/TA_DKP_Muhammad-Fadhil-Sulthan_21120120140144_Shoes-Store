<!DOCTYPE html>
<head>
        <title>Shoes Store</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<h1 style="color:black;text-align: center">Shoes Store</h1>
<h3 style="color:black;text-align: center">Silahkan Memilih Sepatu yang anda ingin beli</h3>
    <body>
    <table border="5" cellspacing="0" cellpadding="5" style="text-align= center; margin-left: auto; margin-right: auto;">
		<tr style="text-align= center ; color: black">
			<th>Code</th>
			<th>Merk Sepatu</th>
            <th>Jenis Sepatu</th>
            <th>Harga Sepatu</th>  
		</tr>
		<tr>
			<td>0101</td>
			<td rowspan="2">Converse</td>
            <td>Converse Renew Chuck 70 Recycled Knit Unisex Sneakers Shoes - Bright Poppy/String/Barely Volt</td>
            <td>Rp 1.200.000,00</td>  
		</tr>
        <tr>
			<td>0102</td>
			<!-- <td></td> -->
            <td>Converse Unisex Chuck Taylor Original - Black</td>
            <td>Rp 600.000,00</td>  
		</tr>
        <tr>
			<td>0201</td>
			<td rowspan="2">Adidas</td>
            <td>Adidas Ultraboost X Shoes BB6509</td>
            <td>Rp 1.200.000,00</td>
		</tr>
        <tr>
			<td>0202</td>
			<!-- <td></td> -->
            <td>Adidas Ultraboost Uncaged B37691</td>
            <td>Rp 1.400.000,00</td>
		</tr>
        <tr>
			<td>0301</td>
			<td rowspan="2">Nike</td>
            <td>Nike Air Zoom Pegasus 38 Men's Running Shoes - BLACK/BLACK-ANTHRACITE-VOLT</td>
            <td>Rp 1.800.000,00</td>
		</tr>
        <tr>
			<td>0302</td>
			<!-- <td></td> -->
            <td>Nike Fly By.Mid Men's Basketball Shoes - Black</td>
            <td>Rp 1.800.000,00</td>
		</tr>
        <tr>
			<td>0401</td>
			<td rowspan="2">Reebok</td>
            <td>Reebok Classic Leather Men's Sneakers Shoes</td>
            <td>Rp 900.000,00</td>
		</tr>
        <tr>
			<td>0402</td>
			<!-- <td></td> -->
            <td>Reebok NANO X1 Men's Training Shoes - Black</td>
            <td>Rp 1.800.000,00</td>
		</tr>
        <tr>
			<td>0501</td>
			<td rowspan="2">Vans</td>
            <td>VANS OLD SKOOL BLACK/WHITE</td>
            <td>Rp 900.000,00</td>
		</tr>
        <tr>
			<td>0502</td>
            <!-- <td></td> -->
            <td>VANS AUTHENTIC (THANK YOU FLORAL) BLACK/TRUE WHITE</td>
            <td>Rp 1.100.000,00</td>
		</tr>  
	</table>
    <table style="margin-left: auto; margin-right: auto;">
        <br><form method="post">
        <tr>
            <td><label class="code" for="codeSepatu">Code</label></td>
            <td><input type="text" id="codeSepatu" name="CodeSepatu" class="bil"> <br></td>
        </tr>

        <tr>
            <td><label class="jumlah" for="jumlahBarang">Banyak Pembelian</label></td>
            <td><input type="text" id="jumlahBarang" name="JumlahBarang" class="bil"> <br></td>
        </tr>

        <tr>
            <td></td>
            <td colspan="2"><button>check</button></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2"><button type="reset">Reset</button></td>
        </tr>
        </form>
    </table> 
     <?php
        class tokoSepatu {
            private $codeSepatu;
            private $jumlahBarang;
            private $hasil;

                public function __construct($codeSepatu, $jumlahBarang){
                    $this->codeSepatu = $codeSepatu;
                    $this->jumlahBarang = $jumlahBarang;
                }

                public function setcodeSepatu($codeSepatuBaru){
                    $this->codeSepatu = $codeSepatuBaru;
                }

                public function setjumlahBarang($jumlahBarangBaru){
                    $this->jumlahBarang = $jumlahBarangBaru;
                }
                                        
                public function getcodeSepatu(){
                    return $this->codeSepatu;
                }

                public function getjumlahBarang(){
                    return $this->jumlahBarang;
                }

                public function getHasil(){
                    while (true) {
                        if ($this->codeSepatu == true) {
                            if ($this->codeSepatu == '0101'){
                                $hasil = 1200000 * $this->jumlahBarang;
                                echo "<br>Total Harga = Rp$hasil";
                                break;
                            }
    
                            else if ($this->codeSepatu == '0102'){
                                $hasil = 600000 * $this->jumlahBarang;
                                echo "<br>Total Harga = Rp$hasil";
                                break;
                            }
    
                            else if ($this->codeSepatu == '0201'){
                                $hasil = 1200000 * $this->jumlahBarang;
                                echo "<br>Total Harga = Rp$hasil";
                                break;
                            }
                            else if ($this->codeSepatu == '0202'){
                                $hasil =1400000 * $this->jumlahBarang;
                                echo "<br>Total Harga = Rp$hasil";
                                break;
                            }
                            else if ($this->codeSepatu == '0301'){
                                $hasil =1800000 * $this->jumlahBarang;
                                echo "<br>Total Harga = Rp$hasil";
                                break;
                            }
                            else if ($this->codeSepatu == '0302'){
                                $hasil =1800000 * $this->jumlahBarang;
                                echo "<br>Total Harga = Rp$hasil";
                                break;
                            }
                            else if ($this->codeSepatu == '0401'){
                                $hasil =900000 * $this->jumlahBarang;
                                echo "<br>Total Harga = Rp$hasil";
                                break;
                            }
                            else if ($this->codeSepatu == '0402'){
                                $hasil =1800000 * $this->jumlahBarang;
                                echo "<br>Total Harga = Rp$hasil";
                                break;
                            }
                            else if ($this->codeSepatu == '0501'){
                                $hasil =900000 * $this->jumlahBarang;
                                echo "<br>Total Harga = Rp$hasil";
                                break;
                            }
                            else if ($this->codeSepatu == '0502'){
                                $hasil =1100000 * $this->jumlahBarang;
                                echo "<br>Total Harga = Rp$hasil";
                                break;
                            }     
                            else {
                                echo '<script type="text/javascript">';
                                echo ' alert("Code Tidak Terdaftar")';  
                                echo '</script>';
                                break;
                            }
                        }
                        else {
                            echo '<script type="text/javascript">';
                            echo ' alert("Maaf, Kode harus berupa angka")';  
                            echo '</script>';
                            break;
                        }
                    }
                }
            }

            $CodeSepatu = isset($_POST['CodeSepatu'])?abs((int)$_POST['CodeSepatu']):'';
            $JumlahBarang = isset($_POST['JumlahBarang'])?abs((int)$_POST['JumlahBarang']):'';
            $TokoSepatu = new tokoSepatu($CodeSepatu, $JumlahBarang);

            $TokoSepatu->getHasil();
    ?>	
    </body>
</html>