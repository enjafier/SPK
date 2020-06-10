<?php
include './includes/header.php';
?>
<style>
  .bold {
  font-weight: bold;
}
  .font {
    font-size: 20px;
  }
</style>
<div class="col-md-12">
    <div class="page-header">
        <h1 align="center">SPK Website</h1>
        <h4 align="center">Hafiz Nur Javier 08</h4>
    </div>
    <h3>1. Kriteria WP dan SAW</h3>
    <table class="table table-bordered">
        <table class="table table-bordered">
      <tr>
          <th>Bobot</th>
          <th>Nama Kriteria</th>
          <th>A1</th>
          <th>A2</th>
          <th>A3</th>
      </tr>
      <tr>
          <td>0.3</td>
          <td>C1</td>
          <td>2</td>
          <td>4</td>
          <td>3</td>
      </tr>
      <tr>
          <td>0.2</td>
          <td>C2</td>
          <td>Rp7.000.000</td>
          <td>Rp10.000.000</td>
          <td>Rp8.500.000</td>
      </tr>
      <tr>
          <td>0.2</td>
          <td>C3</td>
          <td>2012</td>
          <td>2015</td>
          <td>2010</td>
      </tr>
      <tr>
          <td>0.2</td>
          <td>C4</td>
          <td>7</td>
          <td>2</td>
          <td>4</td>
      </tr>
      <tr>
          <td>0.1</td>
          <td>C5</td>
          <td>3</td>
          <td>3</td>
          <td>4</td>
      </tr>
      
    </table>
    <p class="text-right"><a href="hasilsaw.php" class="btn btn-primary">Hasil SAW</a>
    <a href="hasilwp.php" class="btn btn-primary">Hasil WP</a></p>
    
</div>

<div class="col-md-12">
    <div class="page-header">
    </div>

    <h3>2. Kriteria AHP</h3>
    <table  class="table table-bordered">
        <table class="table table-bordered">
      <tr>
          <th>Kriteria</th>
          <th>Harga sewa</th>
          <th>Jarak</th>
          <th>Fasilitas</th>
          
      </tr>
      <tr>
          <td>Harga Sewa</td>
          <td>1</td>
          <td>2</td>
          <td>1/6</td>
          
      </tr>
      <tr>
          <td>Fasilitas</td>
          <td>1/2</td>
          <td>1</td>
          <td>1/9</td>
          
      </tr>
      <tr>
          <td>Jarak</td>
          <td>6</td>
          <td>9</td>
          <td>1</td>
          
      </tr>
    </table>
    <a></a>

    <a class="font">Alternatif Harga Sewa</a>
    <table class="table table-bordered">
        <table class="table table-bordered">
      <tr>
          <th>Harga sewa</th>
          <th>Champions</th>
          <th>Zona SM</th>
          <th>Angkasa</th>
          
      </tr>
      <tr>
          <td>Champions</td>
          <td>1</td>
          <td>4</td>
          <td>6</td>
          
      </tr>
      <tr>
          <td>Zona SM</td>
          <td>1/4</td>
          <td>1</td>
          <td>2</td>
          
      </tr>
      <tr>
          <td>Angkasa</td>
          <td>1/6</td>
          <td>1/2</td>
          <td>1</td>
          
      </tr>
  
    </table>
    
    <a class="font">Alternatif Jarak</a>
    <table class="table table-bordered">
        <table class="table table-bordered">
      <tr>
          <th>Jarak</th>
          <th>Champions</th>
          <th>Zona SM</th>
          <th>Angkasa</th>
          
      </tr>
      <tr>
          <td>Champions</td>
          <td>1</td>
          <td>1/2</td>
          <td>2</td>
          
      </tr>
      <tr>
          <td>Zona SM</td>
          <td>2</td>
          <td>1</td>
          <td>6</td>
          
      </tr>
      <tr>
          <td>Angkasa</td>
          <td>1/2</td>
          <td>1/6</td>
          <td>1</td>
          
      </tr>
  
    </table>
    
    <a class="font">Alternatif Fasilitas</a>
    <table class="table table-bordered">
        <table class="table table-bordered">
      <tr>
          <th>Fasilitas</th>
          <th>Champions</th>
          <th>Zona SM</th>
          <th>Angkasa</th>
          
      </tr>
      <tr>
          <td>Champions</td>
          <td>1</td>
          <td>5</td>
          <td>7</td>
          
      </tr>
      <tr>
          <td>Zona SM</td>
          <td>1/5</td>
          <td>5</td>
          <td>4</td>
          
      </tr>
      <tr>
          <td>Angkasa</td>
          <td>1/7</td>
          <td>1/4</td>
          <td>1</td>
          
      </tr>
  
    </table>
    <p class="text-right"><a href="hasilahp.php" class="btn btn-primary">Hasil AHP</a>

     <h3>3. Kriteria Electre </h3><p>
    <table class="table table-bordered" border="1">
    <tr>
        <th></th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
    </tr>
    <tr>
        <th>A1</th>
        <td>2</td>
        <td>4</td>
        <td>2</td>
        <td>3</td>
        <td>3</td>
    </tr>
    <tr>
        <th>A2</th>
        <td>4</td>
        <td>1</td>
        <td>5</td>
        <td>5</td>
        <td>3</td>
    </tr>
    <tr>
        <th>A3</th>
        <td>3</td>
        <td>2</td>
        <td>1</td>
        <td>4</td>
        <td>4</td>
    </tr>  
      </table>
      <p class="text-right"><a href="electre.php" class="btn btn-primary">Hasil Electre</a> 

         <h3>4. Topsis </h3><p>
    <table class="table table-bordered" border="1">
    <a>Benefit : C1, C2, dan C3</a><br>
    <a>Cost : C4</a>
           
                <th></th>
                <th>Sepatu 1</th>
                <th>Sepatu 2</th>
                <th>Sepatu 3</th>
            </tr>
            <tr>
                <td>C1</td>
                <td>sedang</td>
                <td>baik</td>
                <td>sangat baik</td>
            </tr>
            <tr>
                <td>C2</td>
                <td>sangat baik</td>
                <td>sedang</td>
                <td>baik</td>
            </tr>
            <tr>
                <td>C3</td>
                <td>sedang</td>
                <td>kurang</td>
                <td>sangat baik</td>
            </tr>
            <tr>
                <td>C4</td>
                <td>murah</td>
                <td>mahal</td>
                <td>murah</td>
            </tr>
      </table>
      <p class="text-right"><a href="topsis.php" class="btn btn-primary">Hasil Topsis</a> 

        <h3>5. Moora </h3><p>
    <table class="table table-bordered" border="1">
     <a>Benefit : C2</h4><br>
    <a>Cost : C1, C3, C4, dan C5</h4>
  
                <th>Alternatif</th>
                <th>Pendapatan</th>
                <th>Lama Tinggal</th>
                <th>Pekerjaan</th>
                <th>Dinding</th>
                <th>Lantai</th>
            </tr>
            <tr>
                <td>Bobot</td>
                <td>0,25</td>
                <td>0,2</td>
                <td>0,2</td>
                <td>0,2</td>
                <td>0,15</td>
            </tr>
            <tr>
                <td>Adelan</td>
                <td>500.000</td>
                <td>15</td>
                <td>Tukang Becak</td>
                <td>Papan</td>
                <td>Semen</td>
            </tr>
            <tr>
                <td>Suwinto</td>
                <td>600.000</td>
                <td>6</td>
                <td>Petani</td>
                <td>Papan</td>
                <td>Semen</td>
            </tr>
            <tr>
                <td>Manisem</td>
                <td>1.000.000</td>
                <td>3</td>
                <td>Wiraswasta</td>
                <td>Papan</td>
                <td>Tanah</td>
            </tr>
            <tr>
                <td>Kardik</td>
                <td>650.000</td>
                <td>10</td>
                <td>Petani</td>
                <td>Papan</td>
                <td>Semen</td>
            </tr>
            <tr>
                <td>Mislam</td>
                <td>500.000</td>
                <td>7</td>
                <td>Tukang Becak</td>
                <td>Papan</td>
                <td>Semen</td>
            </tr>
            <tr>
                <td>Sukirah</td>
                <td>600.000</td>
                <td>3</td>
                <td>Petani</td>
                <td>Tepas</td>
                <td>Tanah</td>
            </tr>
            <tr>
                <td>Nuriadi</td>
                <td>400.000</td>
                <td>5</td>
                <td>Tukang Becak</td>
                <td>Tepas</td>
                <td>Tanah</td>
            </tr>
            <tr>
                <td>Sutiyem</td>
                <td>700.000</td>
                <td>10</td>
                <td>Petani</td>
                <td>Papan</td>
                <td>Semen</td>
            </tr>
            <tr>
                <td>Poniman</td>
                <td>500.000</td>
                <td>8</td>
                <td>Tukang Becak</td>
                <td>Papan</td>
                <td>Semen</td>
            </tr>
            <tr>
                <td>Sugiatik</td>
                <td>1.200.000</td>
                <td>10</td>
                <td>Wiraswasta</td>
                <td>Papan</td>
                <td>Semen</td>
            </tr>
      </table>
      <p class="text-right"><a href="moora.php" class="btn btn-primary">Hasil Moora</a> 

         <h3>6. GDSS </h3><p>
    <table class="table table-bordered" border="1">
      <a>Benefit : C1, C2, C5, dan C6</h4><br>
    <a>Cost : C3 dan C4</h4>
    <div class="row">
        <div class="col-sm-4">
        <table class="table table-bordered" border="1">
            
                <th>Juri 1</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>
            </tr>
            <tr>
                <th>A1</th>
                <th>1</th>
                <th>1</th>
                <th>3</th>
                <th>4</th>
                <th>1</th>
                <th>4</th>
            </tr>
            <tr>
                <th>A2</th>
                <th>1</th>
                <th>1</th>
                <th>4</th>
                <th>3</th>
                <th>1</th>
                <th>3</th>
            </tr>
            <tr>
                <th>A3</th>
                <th>1</th>
                <th>1</th>
                <th>4</th>
                <th>4</th>
                <th>1</th>
                <th>4</th>
            </tr>
            <tr>
                <th>A4</th>
                <th>1</th>
                <th>1</th>
                <th>3</th>
                <th>3</th>
                <th>0</th>
                <th>3</th>
            </tr>
            <tr>
                <th>A5</th>
                <th>1</th>
                <th>1</th>
                <th>3</th>
                <th>3</th>
                <th>1</th>
                <th>4</th>
            </tr>
        </table>
        </div>
        <div class="col-sm-4">
        <table class="table table-bordered" border="1">
            
                <th>Juri 2</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>
            </tr>
            <tr>
                <th>A1</th>
                <th>1</th>
                <th>1</th>
                <th>4</th>
                <th>4</th>
                <th>1</th>
                <th>4</th>
            </tr>
            <tr>
                <th>A2</th>
                <th>1</th>
                <th>1</th>
                <th>3</th>
                <th>3</th>
                <th>1</th>
                <th>4</th>
            </tr>
            <tr>
                <th>A3</th>
                <th>1</th>
                <th>1</th>
                <th>4</th>
                <th>4</th>
                <th>1</th>
                <th>3</th>
            </tr>
            <tr>
                <th>A4</th>
                <th>1</th>
                <th>1</th>
                <th>4</th>
                <th>2</th>
                <th>0</th>
                <th>4</th>
            </tr>
            <tr>
                <th>A5</th>
                <th>1</th>
                <th>1</th>
                <th>3</th>
                <th>4</th>
                <th>1</th>
                <th>3</th>
            </tr>
        </table>
        </div>
        <div class="col-sm-4">
        <table class="table table-bordered" border="1">
            
                <th>Juri 3</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>
            </tr>
            <tr>
                <th>A1</th>
                <th>1</th>
                <th>1</th>
                <th>3</th>
                <th>3</th>
                <th>1</th>
                <th>3</th>
            </tr>
            <tr>
                <th>A2</th>
                <th>1</th>
                <th>1</th>
                <th>4</th>
                <th>3</th>
                <th>1</th>
                <th>4</th>
            </tr>
            <tr>
                <th>A3</th>
                <th>1</th>
                <th>1</th>
                <th>3</th>
                <th>4</th>
                <th>1</th>
                <th>3</th>
            </tr>
            <tr>
                <th>A4</th>
                <th>1</th>
                <th>1</th>
                <th>4</th>
                <th>4</th>
                <th>1</th>
                <th>3</th>
            </tr>
            <tr>
                <th>A5</th>
                <th>1</th>
                <th>1</th>
                <th>4</th>
                <th>3</th>
                <th>0</th>
                <th>4</th>
            </tr>
      </table>
      <p class="text-right"><a href="gdss.php" class="btn btn-primary">Hasil GDSS</a> 
</div>

