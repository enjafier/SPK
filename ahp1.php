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

    <!-- Bobot Kriteria-->
    <?php
    $hs11 = 1;
    $hs21 = 0.25;
    $hs31 = 0.16666;

    $jr11 = 4;
    $jr21 = 1;
    $jr31 = 0.5;

    $fa11 = 6;
    $fa21 = 2;
    $fa31 = 1;

    $jl11 = $hs11+$hs21+$hs31;
    $jl21 = $jr11+$jr21+$jr31;
    $jl31 = $fa11+$fa21+$fa31;

   ?>
   <p>
   <p class="text-right">
   <a href="hasilahp.php" class="btn btn-primary">Kriteria</a>
   <a href="ahp1.php" class="btn btn-primary">Alternatif 1</a>
   <a href="ahp2.php" class="btn btn-primary">Alternatif 2</a>
   <a href="ahp3.php" class="btn btn-primary">Alternatif 3</a>
   <a href="ahpputus.php" class="btn btn-danger">Keputusan</a></p>

   <h1 align="center">Hitung Alternatif 1</h1>
   <h3>Menghitung Bobot Prioritas</h3>
    <table  class="table table-bordered">      
      <tr>
          <th>Harga sewa</th>
          <th>Champions</th>
          <th>Zona SM</th>
          <th>Angkasa</th>
          
      </tr>
      <tr>
          <td class="bold">Champions</td>
          <td><?php echo $hs11?></td>
          <td><?php echo $jr11?></td>
          <td><?php echo $fa11?></td>
          
      </tr>
      <tr>
          <td class="bold">Zona SM</td>
          <td><?php echo $hs21?></td>
          <td><?php echo $jr21?></td>
          <td><?php echo $fa21?></td>
          
      </tr>
      <tr>
          <td class="bold">Angkasa</td>
          <td><?php echo $hs31?></td>
          <td><?php echo $jr31?></td>
          <td><?php echo $fa31?></td>
          
      </tr>
      <tr>
          <td class="bold">Jumlah</td>
          <td><?php echo $jl11?></td>
          <td><?php echo $jl21?></td>
          <td><?php echo $jl31?></td>
          
      </tr>
    </table>
    <hr />

    <?php
    $phs11 = $hs11/$jl11;
    $phs21 = $jr11/$jl21;
    $phs31 = $fa11/$jl31;

    $pja11 = $hs21/$jl11;
    $pja21 = $jr21/$jl21;
    $pja31 = $fa21/$jl31;

    $pfa11 = $hs31/$jl11;
    $pfa21 = $jr31/$jl21;
    $pfa31 = $fa31/$jl31;

    $jml11 = $phs11+$phs21+$phs31;
    $jml21 = $pja11+$pja21+$pja31;
    $jml31 = $pfa11+$pfa21+$pfa31;

    $jpw11 = $jml11/3;
    $jpw21 = $jml21/3;
    $jpw31 = $jml31/3;
    
    

    ?>    
    <h3>Menghitung Priority Weight</h3>
    <table  class="table table-bordered">      
      <tr>
          <th>Harga sewa</th>
          <th>Champions</th>
          <th>Zona SM</th>
          <th>Angkasa</th>
          <th>Jumlah</th>
          <th>PW</th>
          
      </tr>
      <tr>
          <td class="bold">Champions</td>
          <td><?php echo $phs11?></td>
          <td><?php echo $phs21?></td>
          <td><?php echo $phs31?></td>
          <td><?php echo $jml11?></td>
          <td><?php echo $jpw11?></td>

          
      </tr>
      <tr>
          <td class="bold">Zona SM</td>
          <td><?php echo $pja11?></td>
          <td><?php echo $pja21?></td>
          <td><?php echo $pja31?></td>
          <td><?php echo $jml21?></td>
          <td><?php echo $jpw21?></td>
          
      </tr>
      <tr>
          <td class="bold">Angkasa</td>
          <td><?php echo $pfa11?></td>
          <td><?php echo $pfa21?></td>
          <td><?php echo $pfa31?></td>
          <td><?php echo $jml31?></td>
          <td><?php echo $jpw31?></td>
          
      </tr>
    </table>
    <hr/>

    <?php
    $xmhs11 = ($hs11*$jpw11)+($jr11*$jpw21)+($fa11*$jpw31);
    $xmhs21 = ($hs21*$jpw11)+($jr21*$jpw21)+($fa21*$jpw31);
    $xmhs31 = ($hs31*$jpw11)+($jr31*$jpw21)+($fa31*$jpw31);
    ?>
    <h3>Menghitung Consistency Ratio</h3>
    <a class="font">a. Mengalikan matriks dengan PW</a>
    <table  class="table table-bordered">      
      
      <tr>
          <td class="bold">Champions</td>
          <td><?php echo $xmhs11?></td>

          
      </tr>
      <tr>
          <td class="bold">Zona SM</td>
          <td><?php echo $xmhs21?></td>

          
      </tr>
      <tr>
          <td class="bold">Angkasa</td>
          <td><?php echo $xmhs31?></td>

          
      </tr>
      
    </table>

    <?php
    $bphs11 = $xmhs11/$jpw11;
    $bphs21 = $xmhs21/$jpw21;
    $bphs31 = $xmhs31/$jpw31;

    ?>
    <a class="font">b. Membagi hasil diatas dengan PW</a>
    <table  class="table table-bordered">      
      
      <tr>
          <td class="bold">Harga Sewa</td>
          <td><?php echo $bphs11?></td>

          
      </tr>
      <tr>
          <td class="bold">Fasilitas</td>
          <td><?php echo $bphs21?></td>

          
      </tr>
      <tr>
          <td class="bold">Jarak</td>
          <td><?php echo $bphs31?></td>

          
      </tr>
      
    </table>
    <hr />

    <?php
    $maks11 = ($bphs11+$bphs21+$bphs31)/3;
    $ci11 = ($maks11-3)/(3-1);
    $cr11 = $ci11/0.58;
    
    ?>
    <h3>Menghitung λmaks, CI, dan CR</h3>
    <table  class="table table-bordered">      
      <tr>
          <td class="bold">λmaks</td>
          <td><?php echo $maks11?></td>

          
      </tr>
      <tr>
          <td class="bold">CI</td>
          <td><?php echo $ci11?></td>

          
      </tr>
      <tr>
          <td class="bold">CR</td>
          <td style="background-color:DodgerBlue;"><?php echo $cr11?></td>

          
      </tr>
      
    </table>
    <p class="text-right"><a href="hasilahp.php" class="btn btn-dark">Back</a></p>

 </div>
    
     
      
