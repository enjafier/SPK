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
    $hs12 = 1;
    $hs22 = 2;
    $hs32 = 0.5;

    $jr12 = 0.5;
    $jr22 = 1;
    $jr32 = 0.16666;

    $fa12 = 2;
    $fa22 = 6;
    $fa32 = 1;

    $jl12 = $hs12+$hs22+$hs32;
    $jl22 = $jr12+$jr22+$jr32;
    $jl32 = $fa12+$fa22+$fa32;

   ?>
   <p>
   <p class="text-right">
   <a href="hasilahp.php" class="btn btn-primary">Kriteria</a>
   <a href="ahp1.php" class="btn btn-primary">Alternatif 1</a>
   <a href="ahp2.php" class="btn btn-primary">Alternatif 2</a>
   <a href="ahp3.php" class="btn btn-primary">Alternatif 3</a>
   <a href="ahpputus.php" class="btn btn-danger">Keputusan</a></p>

   <h1 align="center">Hitung Alternatif 2</h1>
   <h3>Menghitung Bobot Prioritas</h3>
    <table  class="table table-bordered">      
      <tr>
          <th>Jarak</th>
          <th>Champions</th>
          <th>Zona SM</th>
          <th>Angkasa</th>
          
      </tr>
      <tr>
          <td class="bold">Champions</td>
          <td><?php echo $hs12?></td>
          <td><?php echo $jr12?></td>
          <td><?php echo $fa12?></td>
          
      </tr>
      <tr>
          <td class="bold">Zona SM</td>
          <td><?php echo $hs22?></td>
          <td><?php echo $jr22?></td>
          <td><?php echo $fa22?></td>
          
      </tr>
      <tr>
          <td class="bold">Angkasa</td>
          <td><?php echo $hs32?></td>
          <td><?php echo $jr32?></td>
          <td><?php echo $fa32?></td>
          
      </tr>
      <tr>
          <td class="bold">Jumlah</td>
          <td><?php echo $jl12?></td>
          <td><?php echo $jl22?></td>
          <td><?php echo $jl32?></td>
          
      </tr>
    </table>
    <hr />

    <?php
    $phs12 = $hs12/$jl12;
    $phs22 = $jr12/$jl22;
    $phs32 = $fa12/$jl32;

    $pja12 = $hs22/$jl12;
    $pja22 = $jr22/$jl22;
    $pja32 = $fa22/$jl32;

    $pfa12 = $hs32/$jl12;
    $pfa22 = $jr32/$jl22;
    $pfa32 = $fa32/$jl32;

    $jml12 = $phs12+$phs22+$phs32;
    $jml22 = $pja12+$pja22+$pja32;
    $jml32 = $pfa12+$pfa22+$pfa32;

    $jpw12 = $jml12/3;
    $jpw22 = $jml22/3;
    $jpw32 = $jml32/3;
    
    

    ?>    
    <h3>Menghitung Priority Weight</h3>
    <table  class="table table-bordered">      
      <tr>
          <th>Jarak</th>
          <th>Champions</th>
          <th>Zona SM</th>
          <th>Angkasa</th>
          <th>Jumlah</th>
          <th>PW</th>
          
      </tr>
      <tr>
          <td class="bold">Champions</td>
          <td><?php echo $phs12?></td>
          <td><?php echo $phs22?></td>
          <td><?php echo $phs32?></td>
          <td><?php echo $jml12?></td>
          <td><?php echo $jpw12?></td>

          
      </tr>
      <tr>
          <td class="bold">Zona SM</td>
          <td><?php echo $pja12?></td>
          <td><?php echo $pja22?></td>
          <td><?php echo $pja32?></td>
          <td><?php echo $jml22?></td>
          <td><?php echo $jpw22?></td>
          
      </tr>
      <tr>
          <td class="bold">Angkasa</td>
          <td><?php echo $pfa12?></td>
          <td><?php echo $pfa22?></td>
          <td><?php echo $pfa32?></td>
          <td><?php echo $jml32?></td>
          <td><?php echo $jpw32?></td>
          
      </tr>
    </table>
    <hr/>

    <?php
    $xmhs12 = ($hs12*$jpw12)+($jr12*$jpw22)+($fa12*$jpw32);
    $xmhs22 = ($hs22*$jpw12)+($jr22*$jpw22)+($fa22*$jpw32);
    $xmhs32 = ($hs32*$jpw12)+($jr32*$jpw22)+($fa32*$jpw32);
    ?>
    <h3>Menghitung Consistency Ratio</h3>
    <a class="font">a. Mengalikan matriks dengan PW</a>
    <table  class="table table-bordered">      
      
      <tr>
          <td class="bold">Champions</td>
          <td><?php echo $xmhs12?></td>

          
      </tr>
      <tr>
          <td class="bold">Zona SM</td>
          <td><?php echo $xmhs22?></td>

          
      </tr>
      <tr>
          <td class="bold">Angkasa</td>
          <td><?php echo $xmhs32?></td>

          
      </tr>
      
    </table>

    <?php
    $bphs12 = $xmhs12/$jpw12;
    $bphs22 = $xmhs22/$jpw22;
    $bphs32 = $xmhs32/$jpw32;

    ?>
    <a class="font">b. Membagi hasil diatas dengan PW</a>
    <table  class="table table-bordered">      
      
      <tr>
          <td class="bold">Jarak</td>
          <td><?php echo $bphs12?></td>

          
      </tr>
      <tr>
          <td class="bold">Fasilitas</td>
          <td><?php echo $bphs22?></td>

          
      </tr>
      <tr>
          <td class="bold">Jarak</td>
          <td><?php echo $bphs32?></td>

          
      </tr>
      
    </table>
    <hr />

    <?php
    $maks12 = ($bphs12+$bphs22+$bphs32)/3;
    $ci12 = ($maks12-3)/(3-1);
    $cr12 = $ci12/0.58;
    
    ?>
    <h3>Menghitung λmaks, CI, dan CR</h3>
    <table  class="table table-bordered">      
      <tr>
          <td class="bold">λmaks</td>
          <td><?php echo $maks12?></td>

          
      </tr>
      <tr>
          <td class="bold">CI</td>
          <td><?php echo $ci12?></td>

          
      </tr>
      <tr>
          <td class="bold">CR</td>
          <td style="background-color:DodgerBlue;"><?php echo $cr12?></td>

          
      </tr>
      
    </table>
    <p class="text-right"><a href="hasilahp.php" class="btn btn-dark">Back</a></p>

 </div>
    
     
      
      