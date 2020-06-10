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
  .rum {
    font-size: 18px;
    background-color: #FF803C;
  }
  
</style>
<body action="proses.php" method="POST">
<div class="col-md-12">

    <!-- Bobot Kriteria-->
    <?php
    $hs1 = 1;
    $hs2 = 0.5;
    $hs3 = 6;

    $jr1 = 2;
    $jr2 = 1;
    $jr3 = 9;

    $fa1 = 0.166;
    $fa2 = 0.111;
    $fa3 = 1;

    $jl1 = $hs1+$hs2+$hs3;
    $jl2 = $jr1+$jr2+$jr3;
    $jl3 = $fa1+$fa2+$fa3;

   ?>
   <p>
   <p class="text-right">
   <a href="hasilahp.php" class="btn btn-primary">Kriteria</a>
   <a href="ahp1.php" class="btn btn-primary">Alternatif 1</a>
   <a href="ahp2.php" class="btn btn-primary">Alternatif 2</a>
   <a href="ahp3.php" class="btn btn-primary">Alternatif 3</a>
   <a href="ahpputus.php" class="btn btn-danger">Keputusan</a></p>

   <h1 align="center">Hitung Kriteria</h1>
   <h3>Menghitung Bobot Prioritas</h3>
    <table  class="table table-bordered">      
      <tr>
          <th>Kriteria</th>
          <th>Harga sewa</th>
          <th>Jarak</th>
          <th>Fasilitas</th>
          
      </tr>
      <tr>
          <td class="bold">Harga Sewa</td>
          <td><?php echo $hs1?></td>
          <td><?php echo $jr1?></td>
          <td><?php echo $fa1?></td>
          
      </tr>
      <tr>
          <td class="bold">Fasilitas</td>
          <td><?php echo $hs2?></td>
          <td><?php echo $jr2?></td>
          <td><?php echo $fa2?></td>
          
      </tr>
      <tr>
          <td class="bold">Jarak</td>
          <td><?php echo $hs3?></td>
          <td><?php echo $jr3?></td>
          <td><?php echo $fa3?></td>
          
      </tr>
      <tr>
          <td class="bold">Jumlah</td>
          <td><?php echo $jl1?></td>
          <td><?php echo $jl2?></td>
          <td><?php echo $jl3?></td>
          
      </tr>
    </table>
    <hr />

    <?php
    $phs1 = $hs1/$jl1;
    $phs2 = $jr1/$jl2;
    $phs3 = $fa1/$jl3;

    $pja1 = $hs2/$jl1;
    $pja2 = $jr2/$jl2;
    $pja3 = $fa2/$jl3;

    $pfa1 = $hs3/$jl1;
    $pfa2 = $jr3/$jl2;
    $pfa3 = $fa3/$jl3;

    $jml1 = $phs1+$phs2+$phs3;
    $jml2 = $pja1+$pja2+$pja3;
    $jml3 = $pfa1+$pfa2+$pfa3;

    $jpw1 = $jml1/3;
    $jpw2 = $jml2/3;
    $jpw3 = $jml3/3;
    
    

    ?>    
    <h3>Menghitung Priority Weight</h3>
    <p>
      <div class="center">
    <a class="rum" >Normalisasi 1 : 7.5 = 0.13333333</a><p>
    <a class="rum" >PW = Jumlah : Kuantitas</a></div>

    <table  class="table table-bordered">      
      <tr>
          <th>Kriteria</th>
          <th>Harga sewa</th>
          <th>Jarak</th>
          <th>Fasilitas</th>
          <th>Jumlah</th>
          <th>PW</th>
          
      </tr>
      <tr>
          <td class="bold">Harga Sewa</td>
          <td><?php echo $phs1?></td>
          <td><?php echo $phs2?></td>
          <td><?php echo $phs3?></td>
          <td><?php echo $jml1?></td>
          <td><?php echo $jpw1?></td>

          
      </tr>
      <tr>
          <td class="bold">Fasilitas</td>
          <td><?php echo $pja1?></td>
          <td><?php echo $pja2?></td>
          <td><?php echo $pja3?></td>
          <td><?php echo $jml2?></td>
          <td><?php echo $jpw2?></td>
          
      </tr>
      <tr>
          <td class="bold">Jarak</td>
          <td><?php echo $pfa1?></td>
          <td><?php echo $pfa2?></td>
          <td><?php echo $pfa3?></td>
          <td><?php echo $jml3?></td>
          <td><?php echo $jpw3?></td>
          
      </tr>
    </table>
    <hr/>

    <?php
    $xmhs1 = ($hs1*$jpw1)+($jr1*$jpw2)+($fa1*$jpw3);
    $xmhs2 = ($hs2*$jpw1)+($jr2*$jpw2)+($fa2*$jpw3);
    $xmhs3 = ($hs3*$jpw1)+($jr3*$jpw2)+($fa3*$jpw3);
    ?>
    <h3>Menghitung Consistency Ratio</h3>
    <a class="font">a. Mengalikan matriks dengan PW</a>
    <div class="center">
    <a class="rum" >Matriks bobot kriteria x PW</a>
    </div>
    <table  class="table table-bordered">      
      
      <tr>
          <td class="bold">Harga Sewa</td>
          <td><?php echo $xmhs1?></td>

          
      </tr>
      <tr>
          <td class="bold">Fasilitas</td>
          <td><?php echo $xmhs2?></td>

          
      </tr>
      <tr>
          <td class="bold">Jarak</td>
          <td><?php echo $xmhs3?></td>

          
      </tr>
      
    </table>

    <?php
    $bphs1 = $xmhs1/$jpw1;
    $bphs2 = $xmhs2/$jpw2;
    $bphs3 = $xmhs3/$jpw3;

    ?>
    <a class="font">b. Membagi hasil diatas dengan PW</a>
    <div class="center">
    <a class="rum" >Hasil matriks : PW</a>
    </div>
    <table  class="table table-bordered">      
      
      <tr>
          <td class="bold">Harga Sewa</td>
          <td><?php echo $bphs1?></td>

          
      </tr>
      <tr>
          <td class="bold">Fasilitas</td>
          <td><?php echo $bphs2?></td>

          
      </tr>
      <tr>
          <td class="bold">Jarak</td>
          <td><?php echo $bphs3?></td>

          
      </tr>
      
    </table>
    <hr />

    <?php
    $maks1 = ($bphs1+$bphs2+$bphs3)/3;
    $ci1 = ($maks1-3)/(3-1);
    $cr1 = $ci1/0.58;
    
    ?>
    <h3>Menghitung λmaks, CI, dan CR</h3>
    <div class="center">
    <a class="rum" >λmaks = Hasil perhitungan b. : jumlah kriteria</a><p>
    <a class="rum" >CI = (λmaks-n) : (n-1)</a><p>
    <a class="rum" >CR = CI - RI</a>
    <img  src='img/rc.png'/>
    </div>
    <table  class="table table-bordered">      
      <tr>
          <td class="bold">λmaks</td>
          <td><?php echo $maks1?></td>

          
      </tr>
      <tr>
          <td class="bold">CI</td>
          <td><?php echo $ci1?></td>

          
      </tr>
      <tr>
          <td class="bold" >CR</td>
          <td style="background-color:DodgerBlue;"><?php echo $cr1?></td>

          
      </tr>
      
    </table>
    <p class="text-right"><a href="index.php" class="btn btn-dark">Back</a></p>

 </div>


</body>
    
     
      
      