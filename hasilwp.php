<?php


include './includes/header.php';
?>

<div class="col-md-12">

    <!-- Bobot Kriteria-->
    <?php
    $bc1 = 30;
    $bc2 = 20;
    $bc3 = 20;
    $bc4 = 20;
    $bc5 = 10;
    // Kriteria A1
    $c1a1 = 2;
    $c2a1 = 7000000;
    $c3a1 = 2012;
    $c4a1 = 7;
    $c5a1 = 3;
    // Kriteria A2
    $c1a2 = 4;
    $c2a2 = 10000000;
    $c3a2 = 2015;
    $c4a2 = 2;
    $c5a2 = 3;
    // Kriteria A3
    $c1a3 = 3;
    $c2a3 = 8500000;
    $c3a3 = 2010;
    $c4a3 = 4;
    $c5a3 = 4;
    ?>
    <h3>Tabel Nilai Alternatif</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>Bobot %</th>
          <th>Nama Kriteria</th>
          <th>A1</th>
          <th>A2</th>
          <th>A3</th>
          <th>Jenis Atribut</th>
      </tr>
      <tr>
          <td><?php echo $bc1?></td>
          <td>C1</td>
          <td><?php echo $c1a1?></td>
          <td><?php echo $c1a2?></td>
          <td><?php echo $c1a3?></td>
          <td>Benefit</td>
      </tr>
      <tr>
          <td><?php echo $bc2?></td>
          <td>C2</td>
          <td>Rp <?php echo $c2a1?></td>
          <td>Rp <?php echo $c2a2?></td>
          <td>Rp <?php echo $c2a3?></td>
          <td>Cost</td>
      </tr>
      <tr>
          <td><?php echo $bc3?></td>
          <td>C3</td>
          <td><?php echo $c3a1?></td>
          <td><?php echo $c3a2?></td>
          <td><?php echo $c3a3?></td>
          <td>Benefit</td>
      </tr>
      <tr>
          <td><?php echo $bc4?></td>
          <td>C4</td>
          <td><?php echo $c4a1?></td>
          <td><?php echo $c4a2?></td>
          <td><?php echo $c4a3?></td>
          <td>Cost</td>
      </tr>
      <tr>
          <td><?php echo $bc5?></td>
          <td>C5</td>
          <td><?php echo $c5a1?></td>
          <td><?php echo $c5a2?></td>
          <td><?php echo $c5a3?></td>
          <td>Benefit</td>
      </tr>
      
      <?php
        $c11 = $bc1/100;
        $c21 = $bc2/100;
        $c31 = $bc3/100;
        $c41 = $bc4/100;
        $c51 = $bc5/100;

        $a11 = $c1a1/$c1a2*$c11;
        $a21 = $c1a2/$c1a2*$c11;
        $a31 = $c1a3/$c1a2*$c11;

        $a12 = $c2a1/$c2a1*$c21;
        $a22 = $c2a1/$c2a2*$c21;
        $a32 = $c2a1/$c2a3*$c21;

        $a13 = $c3a1/$c3a2*$c31;
        $a23 = $c3a2/$c3a2*$c31;
        $a33 = $c3a3/$c3a2*$c31;

        $a14 = $c4a2/$c4a1*$c41;
        $a24 = $c4a2/$c4a2*$c41;
        $a34 = $c4a2/$c4a3*$c41;

        $a15 = $c5a1/$c5a3*$c51;
        $a25 = $c5a2/$c5a3*$c51;
        $a35 = $c5a3/$c5a3*$c51;
      ?>
    </table>
    <hr />
    
    </table>
    
    <h3>Menghitung Vektor V ( WP )</h3>
    <img  src='img/wp.png'/>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>Nilai</th>
          <th>Nilai S1</th>
          <th>Nilai S2</th>
          <th>Nilai S3</th>
      </tr>
      <tr>
        <?php 
            $s1 = (pow($c1a1,$c11))*(pow($c2a1,$c21))*(pow($c3a1,$c31))*(pow($c4a1,$c41))*(pow($c5a1,$c51));
            $s2 = (pow($c1a2,$c11))*(pow($c2a2,$c21))*(pow($c3a2,$c31))*(pow($c4a2,$c41))*(pow($c5a2,$c51));
            $s3 = (pow($c1a3,$c11))*(pow($c2a3,$c21))*(pow($c3a3,$c31))*(pow($c4a3,$c41))*(pow($c5a3,$c51));
        ?>
        <td>S</td>
          <td><?php echo $s1?></td>
          <td><?php echo $s2?></td>
          <td><?php echo $s3?></td>
      </tr>
        </table>
    </table>
    <img  src='img/wp1.png'/>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>Vektor</th>
          <th>Nilai V1</th>
          <th>Nilai V2</th>
          <th>Nilai V3</th>
      </tr>
      <tr>
        <td>V</td>
          <td><?php echo $s1/($s1+$s2+$s3)?></td>
          <td style="background-color:DodgerBlue;"><?php echo $s2/($s1+$s2+$s3)?></td>
          <td><?php echo $s3/($s1+$s2+$s3)?></td>
      </tr>
        </table>
    </table>
    <p class="text-right"><a href="index.php" class="btn btn-dark">Back</a></p>
</div>
     
      
      