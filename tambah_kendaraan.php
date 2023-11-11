<div>
    <h3>Tambah Kendaraan</h3>
</div>
<form action="simpan_kendaraan.php" method="post">
    <div style="margin:10px;">
        <div>Jenis Kendaraan</div>
        <select name="jenis">
            <option>MOBIL</option>
            <option>MOTOR</option>
            <option>TRUK</option>
        </select>
    </div>  
    <div style="margin:10px;">  
        <div>Model Kendaraan</div>
        <input type='text' name="model" size="30">
    </div>    
    <div style="margin:10px;">
        <div>Tahun</div>
        <input type='number' name="tahun" size="4">
    </div> 
    <div style="margin:10px;">
        <div>Manufaktur</div>
        <input type='text' name="manufaktur" size="30" >
    </div>
    <div style="margin:10px;">
        <div>Jumlah Penumpang</div>
        <input type='number' name="penumpang" size="30">
    </div>
    <div style="margin:10px;">
        <div>Harga</div>
        <input type='number' name="harga" size="30">
    </div>  
    <div style="margin:15px"><b>Mobil</b>
        <div style="margin:10px;">
            <div>Jenis bahan Bakar</div>
            <input type='text' name="bahan_bakar" size="30">
        </div>    
        <div style="margin:10px;">
            <div>Luas Bagasi</div>
            <input type='text' name="luas_bagasi" size="30">
        </div> 
    </div> 
   
    <div style="margin:15px"><b>Truk</b>
        <div style="margin:10px;">
            <div>Jumlah Roda</div>
            <input type='number' name="jml_roda" size="30">
        </div> 
        <div style="margin:10px;">
            <div>Luas Kargo</div>
            <input type='text' name="luas_kargo" size="30">
        </div> 
    </div>
    <div style="margin:15px"><b>Motor</b>
        <div style="margin:10px;">
            <div>Ukuran Bagasi</div>
            <input type='number' name="ukuran_bagasi" size="30">
        </div> 
        <div style="margin:10px;">
            <div>Kapasitas bensin</div>
            <input type='text' name="kapasitas_bensin" size="30">
        </div> 
    </div>
    <div style="margin:10px;">
        <input type="submit" value="Simpan">
    </div>
</form>