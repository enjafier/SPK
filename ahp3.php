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
    $hs13 = 1;
    $hs23 = 0.25;
    $hs33 = 0.16666;

    $jr13 = 4;
    $jr23 = 1;
    $jr33 = 0.25;

    $fa13 = 6;
    $fa23 = 4;
    $fa33 = 1;

    $jl13 = $hs13+$hs23+$hs33;
    $jl23 = $jr13+$jr23+$jr33;
    $jl33 = $fa13+$fa23+$fa33;

   ?>
   <p>
   <p class="text-right">
   <a href="hasilahp.php" class="btn btn-primary">Kriteria</a>
   <a href="ahp1.php" class="btn btn-primary">Alternatif 1</a>
   <a href="ahp2.php" class="btn btn-primary">Alternatif 2</a>
   <a href="ahp3.php" class="btn btn-primary">Alternatif 3</a>
   <a href="ahpputus.php" class="btn btn-danger">Keputusan</a></p>

   <h1 align="center">Hitung Alternatif 3</h1>
   <h3>Menghitung Bobot Prioritas</h3>
    <table  class="table table-bordered">      
      <tr>
          <th>Fasilitas</th>
          <th>Champions</th>
          <th>Zona SM</th>
          <th>Angkasa</th>
          
      </tr>
      <tr>
          <td class="bold">Champions</td>
          <td><?php echo $hs13?></td>
          <td><?php echo $jr13?></td>
          <td><?php echo $fa13?></td>
          
      </tr>
      <tr>
          <td class="bold">Zona SM</td>
          <td><?php echo $hs23?></td>
          <td><?php echo $jr23?></td>
          <td><?php echo $fa23?></td>
          
      </tr>
      <tr>
          <td class="bold">Angkasa</td>
          <td><?php echo $hs33?></td>
          <td><?php echo $jr33?></td>
          <td><?php echo $fa33?></td>
          
      </tr>
      <tr>
          <td class="bold">Jumlah</td>
          <td><?php echo $jl13?></td>
          <td><?php echo $jl23?></td>
          <td><?php echo $jl33?></td>
          
      </tr>
    </table>
    <hr />

    <?php
    $phs13 = $hs13/$jl13;
    $phs23 = $jr13/$jl23;
    $phs33 = $fa13/$jl33;

    $pja13 = $hs23/$jl13;
    $pja23 = $jr23/$jl23;
    $pja33 = $fa23/$jl33;

    $pfa13 = $hs33/$jl13;
    $pfa23 = $jr33/$jl23;
    $pfa33 = $fa33/$jl33;

    $jml13 = $phs13+$phs23+$phs33;
    $jml23 = $pja13+$pja23+$pja33;
    $jml33 = $pfa13+$pfa23+$pfa33;

    $jpw13 = $jml13/3;
    $jpw23 = $jml23/3;
    $jpw33 = $jml33/3;
    
    

    ?>    
    <h3>Menghitung Priority Weight</h3>
    <table  class="table table-bordered">      
      <tr>
          <th>Fasilitas</th>
          <th>Champions</th>
          <th>Zona SM</th>
          <th>Angkasa</th>
          <th>Jumlah</th>
          <th>PW</th>
          
      </tr>
      <tr>
          <td class="bold">Champions</td>
          <td><?php echo $phs13?></td>
          <td><?php echo $phs23?></td>
          <td><?php echo $phs33?></td>
          <td><?php echo $jml13?></td>
          <td><?php echo $jpw13?></td>

          
      </tr>
      <tr>
          <td class="bold">Zona SM</td>
          <td><?php echo $pja13?></td>
          <td><?php echo $pja23?></td>
          <td><?php echo $pja33?></td>
          <td><?php echo $jml23?></td>
          <td><?php echo $jpw23?></td>
          
      </tr>
      <tr>
          <td class="bold">Angkasa</td>
          <td><?php echo $pfa13?></td>
          <td><?php echo $pfa23?></td>
          <td><?php echo $pfa33?></td>
          <td><?php echo $jml33?></td>
          <td><?php echo $jpw33?></td>
          
      </tr>
    </table>
    <hr/>

    <?php
    $xmhs13 = ($hs13*$jpw13)+($jr13*$jpw23)+($fa13*$jpw33);
    $xmhs23 = ($hs23*$jpw13)+($jr23*$jpw23)+($fa23*$jpw33);
    $xmhs33 = ($hs33*$jpw13)+($jr33*$jpw23)+($fa33*$jpw33);
    ?>
    <h3>Menghitung Consistency Ratio</h3>
    <a class="font">a. Mengalikan matriks dengan PW</a>
    <table  class="table table-bordered">      
      
      <tr>
          <td class="bold">Champions</td>
          <td><?php echo $xmhs13?></td>

          
      </tr>
      <tr>
          <td class="bold">Zona SM</td>
          <td><?php echo $xmhs23?></td>

          
      </tr>
      <tr>
          <td class="bold">Angkasa</td>
          <td><?php echo $xmhs33?></td>

          
      </tr>
      
    </table>

    <?php
    $bphs13 = $xmhs13/$jpw13;
    $bphs23 = $xmhs23/$jpw23;
    $bphs33 = $xmhs33/$jpw33;

    ?>
    <a class="font">b. Membagi hasil diatas dengan PW</a>
    <table  class="table table-bordered">      
      
      <tr>
          <td class="bold">Fasilitas</td>
          <td><?php echo $bphs13?></td>

          
      </tr>
      <tr>
          <td class="bold">Fasilitas</td>
          <td><?php echo $bphs23?></td>

          
      </tr>
      <tr>
          <td class="bold">Jarak</td>
          <td><?php echo $bphs33?></td>

          
      </tr>
      
    </table>
    <hr />

    <?php
    $maks13 = ($bphs13+$bphs23+$bphs33)/3;
    $ci13 = ($maks13-3)/(3-1);
    $cr13 = $ci13/0.58;
    
    ?>
    <h3>Menghitung λmaks, CI, dan CR</h3>
    <table  class="table table-bordered">      
      <tr>
          <td class="bold">λmaks</td>
          <td><?php echo $maks13?></td>

          
      </tr>
      <tr>
          <td class="bold">CI</td>
          <td><?php echo $ci13?></td>

          
      </tr>
      <tr>
          <td class="bold">CR</td>
          <td style="background-color:DodgerBlue;"><?php echo $cr13?></td>

          
      </tr>
      
    </table>
    <p class="text-right"><a href="hasilahp.php class="btn btn-dark">Back</a></p>

 </div>
    
     
      
      