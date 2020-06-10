
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
<div class="col-md-12">
 <!-- Data Kriteria-->
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

    <?php
    $xmhs1 = ($hs1*$jpw1)+($jr1*$jpw2)+($fa1*$jpw3);
    $xmhs2 = ($hs2*$jpw1)+($jr2*$jpw2)+($fa2*$jpw3);
    $xmhs3 = ($hs3*$jpw1)+($jr3*$jpw2)+($fa3*$jpw3);
    ?> 

    <?php
    $bphs1 = $xmhs1/$jpw1;
    $bphs2 = $xmhs2/$jpw2;
    $bphs3 = $xmhs3/$jpw3;

    ?>

    <?php
    $maks1 = ($bphs1+$bphs2+$bphs3)/3;
    $ci1 = ($maks1-3)/(3-1);
    $cr1 = $ci1/0.58;
    
    ?>

    <!-- Data A1-->
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
<?php
    $xmhs11 = ($hs11*$jpw11)+($jr11*$jpw21)+($fa11*$jpw31);
    $xmhs21 = ($hs21*$jpw11)+($jr21*$jpw21)+($fa21*$jpw31);
    $xmhs31 = ($hs31*$jpw11)+($jr31*$jpw21)+($fa31*$jpw31);
    ?>
<?php
    $bphs11 = $xmhs11/$jpw11;
    $bphs21 = $xmhs21/$jpw21;
    $bphs31 = $xmhs31/$jpw31;

    ?>
<?php
    $maks11 = ($bphs11+$bphs21+$bphs31)/3;
    $ci11 = ($maks11-3)/(3-1);
    $cr11 = $ci11/0.58;
    
    ?>

     <!-- Data A2-->
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
<?php
    $xmhs12 = ($hs12*$jpw12)+($jr12*$jpw22)+($fa12*$jpw32);
    $xmhs22 = ($hs22*$jpw12)+($jr22*$jpw22)+($fa22*$jpw32);
    $xmhs32 = ($hs32*$jpw12)+($jr32*$jpw22)+($fa32*$jpw32);
    ?>
 <?php
    $bphs12 = $xmhs12/$jpw12;
    $bphs22 = $xmhs22/$jpw22;
    $bphs32 = $xmhs32/$jpw32;

    ?>
<?php
    $maks12 = ($bphs12+$bphs22+$bphs32)/3;
    $ci12 = ($maks12-3)/(3-1);
    $cr12 = $ci12/0.58;
    
    ?>

    <!-- Data A3 -->
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
<?php
    $xmhs13 = ($hs13*$jpw13)+($jr13*$jpw23)+($fa13*$jpw33);
    $xmhs23 = ($hs23*$jpw13)+($jr23*$jpw23)+($fa23*$jpw33);
    $xmhs33 = ($hs33*$jpw13)+($jr33*$jpw23)+($fa33*$jpw33);
    ?>
<?php
    $bphs13 = $xmhs13/$jpw13;
    $bphs23 = $xmhs23/$jpw23;
    $bphs33 = $xmhs33/$jpw33;

    ?>
<?php
    $maks13 = ($bphs13+$bphs23+$bphs33)/3;
    $ci13 = ($maks13-3)/(3-1);
    $cr13 = $ci13/0.58;
    
    ?>

    <?php
    $hasilk1 = ($jpw1*$jpw11)+($jpw2*$jpw12)+($jpw3*$jpw13);
    $hasilk2 = ($jpw1*$jpw21)+($jpw2*$jpw22)+($jpw3*$jpw23);
    $hasilk3 = ($jpw1*$jpw31)+($jpw2*$jpw32)+($jpw3*$jpw33);
    ?>
    <body>
    	&nbsp;
    	<h1 align="center"> </h1>
    	<h3>Pengambilan Keputusan</h3>
    	<div class="center">
    <a class="rum" >Hasil = (0.1433 x 0.6999)+(0.0789 x 0.2693)+(0.7776 x 0.6710) = 0.64348881373218 </a>
   
    <table  class="table table-bordered">      
      <tr>
          <th></th>
          <th>Harga sewa</th>
          <th>Jarak</th>
          <th>Fasilitas</th>
          <th>Hasil</th>
          
          
      </tr>
      <tr>
          <td class="bold">PW Kriteria</td>
          <td><?php echo $jpw1?></td>
          <td><?php echo $jpw2?></td>
          <td><?php echo $jpw3?></td>
          <td> </td>
         

          
      </tr>
      <tr>
          <td class="bold">Champions</td>
          <td><?php echo $jpw11?></td>
          <td><?php echo $jpw12?></td>
          <td><?php echo $jpw13?></td>
          <td style="background-color:DodgerBlue;"><?php echo $hasilk1?></td>
         
          
      </tr>
      <tr>
          <td class="bold">Zona SM</td>
          <td><?php echo $jpw21?></td>
          <td><?php echo $jpw22?></td>
          <td><?php echo $jpw23?></td>
          <td><?php echo $hasilk2?></td>
          
          
      </tr>
      <tr>
          <td class="bold">Angkasa</td>
          <td><?php echo $jpw31?></td>
          <td><?php echo $jpw32?></td>
          <td><?php echo $jpw33?></td>
          <td><?php echo $hasilk3?></td>
          
          
      </tr>
      
    </table>
    <p class="text-right"><a href="hasilahp.php" class="btn btn-dark">Back</a></p>

    </body>
    </div>