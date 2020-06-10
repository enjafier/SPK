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
        <?php
        // Bobot
        $bc1 = 0.25;
        $bc2 = 0.2;
        $bc3 = 0.2;
        $bc4 = 0.2;
        $bc5 = 0.15;
        // Nilai C1
        $a1c1 = 500000;
        $a2c1 = 600000;
        $a3c1 = 1000000;
        $a4c1 = 650000;
        $a5c1 = 500000;
        $a6c1 = 600000;
        $a7c1 = 400000;
        $a8c1 = 700000;
        $a9c1 = 500000;
        $a10c1 = 1200000;
        // Nilai C2
        $a1c2 = 15;
        $a2c2 = 6;
        $a3c2 = 3;
        $a4c2 = 10;
        $a5c2 = 7;
        $a6c2 = 3;
        $a7c2 = 5;
        $a8c2 = 10;
        $a9c2 = 8;
        $a10c2 = 10;
        // Nilai C3
        $a1c3 = 0.25;
        $a2c3 = 0.5;
        $a3c3 = 0.75;
        $a4c3 = 0.5;
        $a5c3 = 0.25;
        $a6c3 = 0.5;
        $a7c3 = 0.25;
        $a8c3 = 0.5;
        $a9c3 = 0.25;
        $a10c3 = 0.75;
        // Nilai C4
        $a1c4 = 0.5;
        $a2c4 = 0.5;
        $a3c4 = 0.5;
        $a4c4 = 0.5;
        $a5c4 = 0.5;
        $a6c4 = 0.25;
        $a7c4 = 0.25;
        $a8c4 = 0.5;
        $a9c4 = 0.5;
        $a10c4 = 0.5;
        // Nilai C5
        $a1c5 = 0.5;
        $a2c5 = 0.5;
        $a3c5 = 0.25;
        $a4c5 = 0.5;
        $a5c5 = 0.5;
        $a6c5 = 0.25;
        $a7c5 = 0.25;
        $a8c5 = 0.5;
        $a9c5 = 0.5;
        $a10c5 = 0.5;
        ?>
    <!-- Matrix Keputusan X----------------->    
    <h4><b>Matrix Keputusan (X)</b>
    </h4>
    <table class="table table-bordered" border="1">
    
        <th>X</th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
    </tr>
    <tr>
        <th>A1</th>
        <th><?php echo $a1c1?></th>
        <th><?php echo $a1c2?></th>
        <th><?php echo $a1c3?></th>
        <th><?php echo $a1c4?></th>
        <th><?php echo $a1c5?></th>
    </tr>
    <tr>
        <th>A2</th>
        <th><?php echo $a2c1?></th>
        <th><?php echo $a2c2?></th>
        <th><?php echo $a2c3?></th>
        <th><?php echo $a2c4?></th>
        <th><?php echo $a2c5?></th>
    </tr>
    <tr>
        <th>A3</th>
        <th><?php echo $a3c1?></th>
        <th><?php echo $a3c2?></th>
        <th><?php echo $a3c3?></th>
        <th><?php echo $a3c4?></th>
        <th><?php echo $a3c5?></th>
    </tr>
    <tr>
        <th>A4</th>
        <th><?php echo $a4c1?></th>
        <th><?php echo $a4c2?></th>
        <th><?php echo $a4c3?></th>
        <th><?php echo $a4c4?></th>
        <th><?php echo $a4c5?></th>
    </tr>
    <tr>
        <th>A5</th>
        <th><?php echo $a5c1?></th>
        <th><?php echo $a5c2?></th>
        <th><?php echo $a5c3?></th>
        <th><?php echo $a5c4?></th>
        <th><?php echo $a5c5?></th>
    </tr>
    <tr>
        <th>A6</th>
        <th><?php echo $a6c1?></th>
        <th><?php echo $a6c2?></th>
        <th><?php echo $a6c3?></th>
        <th><?php echo $a6c4?></th>
        <th><?php echo $a6c5?></th>
    </tr>
    <tr>
        <th>A7</th>
        <th><?php echo $a7c1?></th>
        <th><?php echo $a7c2?></th>
        <th><?php echo $a7c3?></th>
        <th><?php echo $a7c4?></th>
        <th><?php echo $a7c5?></th>
    </tr>
    <tr>
        <th>A8</th>
        <th><?php echo $a8c1?></th>
        <th><?php echo $a8c2?></th>
        <th><?php echo $a8c3?></th>
        <th><?php echo $a8c4?></th>
        <th><?php echo $a8c5?></th>
    </tr>
    <tr>
        <th>A9</th>
        <th><?php echo $a9c1?></th>
        <th><?php echo $a9c2?></th>
        <th><?php echo $a9c3?></th>
        <th><?php echo $a9c4?></th>
        <th><?php echo $a9c5?></th>
    </tr>
    <tr>
        <th>A10</th>
        <th><?php echo $a10c1?></th>
        <th><?php echo $a10c2?></th>
        <th><?php echo $a10c3?></th>
        <th><?php echo $a10c4?></th>
        <th><?php echo $a10c5?></th>
    </tr>
    </table>
    </div>
    <div>
        <?php
        // C1
        $r11 = $a1c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2)+pow($a4c1,2)
        +pow($a5c1,2)+pow($a6c1,2)+pow($a7c1,2)+pow($a8c1,2)+pow($a9c1,2)+pow($a10c1,2));
        $r21 = $a2c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2)+pow($a4c1,2)
        +pow($a5c1,2)+pow($a6c1,2)+pow($a7c1,2)+pow($a8c1,2)+pow($a9c1,2)+pow($a10c1,2));
        $r31 = $a3c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2)+pow($a4c1,2)
        +pow($a5c1,2)+pow($a6c1,2)+pow($a7c1,2)+pow($a8c1,2)+pow($a9c1,2)+pow($a10c1,2));
        $r41 = $a4c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2)+pow($a4c1,2)
        +pow($a5c1,2)+pow($a6c1,2)+pow($a7c1,2)+pow($a8c1,2)+pow($a9c1,2)+pow($a10c1,2));
        $r51 = $a5c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2)+pow($a4c1,2)
        +pow($a5c1,2)+pow($a6c1,2)+pow($a7c1,2)+pow($a8c1,2)+pow($a9c1,2)+pow($a10c1,2));
        $r61 = $a6c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2)+pow($a4c1,2)
        +pow($a5c1,2)+pow($a6c1,2)+pow($a7c1,2)+pow($a8c1,2)+pow($a9c1,2)+pow($a10c1,2));
        $r71 = $a7c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2)+pow($a4c1,2)
        +pow($a5c1,2)+pow($a6c1,2)+pow($a7c1,2)+pow($a8c1,2)+pow($a9c1,2)+pow($a10c1,2));
        $r81 = $a8c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2)+pow($a4c1,2)
        +pow($a5c1,2)+pow($a6c1,2)+pow($a7c1,2)+pow($a8c1,2)+pow($a9c1,2)+pow($a10c1,2));
        $r91 = $a9c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2)+pow($a4c1,2)
        +pow($a5c1,2)+pow($a6c1,2)+pow($a7c1,2)+pow($a8c1,2)+pow($a9c1,2)+pow($a10c1,2));
        $r101 = $a10c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2)+pow($a4c1,2)
        +pow($a5c1,2)+pow($a6c1,2)+pow($a7c1,2)+pow($a8c1,2)+pow($a9c1,2)+pow($a10c1,2));
        // C2
        $r12 = $a1c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2)+pow($a4c2,2)
        +pow($a5c2,2)+pow($a6c2,2)+pow($a7c2,2)+pow($a8c2,2)+pow($a9c2,2)+pow($a10c2,2));
        $r22 = $a2c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2)+pow($a4c2,2)
        +pow($a5c2,2)+pow($a6c2,2)+pow($a7c2,2)+pow($a8c2,2)+pow($a9c2,2)+pow($a10c2,2));
        $r32 = $a3c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2)+pow($a4c2,2)
        +pow($a5c2,2)+pow($a6c2,2)+pow($a7c2,2)+pow($a8c2,2)+pow($a9c2,2)+pow($a10c2,2));
        $r42 = $a4c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2)+pow($a4c2,2)
        +pow($a5c2,2)+pow($a6c2,2)+pow($a7c2,2)+pow($a8c2,2)+pow($a9c2,2)+pow($a10c2,2));
        $r52 = $a5c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2)+pow($a4c2,2)
        +pow($a5c2,2)+pow($a6c2,2)+pow($a7c2,2)+pow($a8c2,2)+pow($a9c2,2)+pow($a10c2,2));
        $r62 = $a6c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2)+pow($a4c2,2)
        +pow($a5c2,2)+pow($a6c2,2)+pow($a7c2,2)+pow($a8c2,2)+pow($a9c2,2)+pow($a10c2,2));
        $r72 = $a7c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2)+pow($a4c2,2)
        +pow($a5c2,2)+pow($a6c2,2)+pow($a7c2,2)+pow($a8c2,2)+pow($a9c2,2)+pow($a10c2,2));
        $r82 = $a8c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2)+pow($a4c2,2)
        +pow($a5c2,2)+pow($a6c2,2)+pow($a7c2,2)+pow($a8c2,2)+pow($a9c2,2)+pow($a10c2,2));
        $r92 = $a9c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2)+pow($a4c2,2)
        +pow($a5c2,2)+pow($a6c2,2)+pow($a7c2,2)+pow($a8c2,2)+pow($a9c2,2)+pow($a10c2,2));
        $r102 = $a10c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2)+pow($a4c2,2)
        +pow($a5c2,2)+pow($a6c2,2)+pow($a7c2,2)+pow($a8c2,2)+pow($a9c2,2)+pow($a10c2,2));
        // c3
        $r13 = $a1c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2)+pow($a4c3,2)
        +pow($a5c3,2)+pow($a6c3,2)+pow($a7c3,2)+pow($a8c3,2)+pow($a9c3,2)+pow($a10c3,2));
        $r23 = $a2c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2)+pow($a4c3,2)
        +pow($a5c3,2)+pow($a6c3,2)+pow($a7c3,2)+pow($a8c3,2)+pow($a9c3,2)+pow($a10c3,2));
        $r33 = $a3c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2)+pow($a4c3,2)
        +pow($a5c3,2)+pow($a6c3,2)+pow($a7c3,2)+pow($a8c3,2)+pow($a9c3,2)+pow($a10c3,2));
        $r43 = $a4c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2)+pow($a4c3,2)
        +pow($a5c3,2)+pow($a6c3,2)+pow($a7c3,2)+pow($a8c3,2)+pow($a9c3,2)+pow($a10c3,2));
        $r53 = $a5c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2)+pow($a4c3,2)
        +pow($a5c3,2)+pow($a6c3,2)+pow($a7c3,2)+pow($a8c3,2)+pow($a9c3,2)+pow($a10c3,2));
        $r63 = $a6c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2)+pow($a4c3,2)
        +pow($a5c3,2)+pow($a6c3,2)+pow($a7c3,2)+pow($a8c3,2)+pow($a9c3,2)+pow($a10c3,2));
        $r73 = $a7c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2)+pow($a4c3,2)
        +pow($a5c3,2)+pow($a6c3,2)+pow($a7c3,2)+pow($a8c3,2)+pow($a9c3,2)+pow($a10c3,2));
        $r83 = $a8c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2)+pow($a4c3,2)
        +pow($a5c3,2)+pow($a6c3,2)+pow($a7c3,2)+pow($a8c3,2)+pow($a9c3,2)+pow($a10c3,2));
        $r93 = $a9c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2)+pow($a4c3,2)
        +pow($a5c3,2)+pow($a6c3,2)+pow($a7c3,2)+pow($a8c3,2)+pow($a9c3,2)+pow($a10c3,2));
        $r103 = $a10c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2)+pow($a4c3,2)
        +pow($a5c3,2)+pow($a6c3,2)+pow($a7c3,2)+pow($a8c3,2)+pow($a9c3,2)+pow($a10c3,2));
        // c4
        $r14 = $a1c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2)+pow($a4c4,2)
        +pow($a5c4,2)+pow($a6c4,2)+pow($a7c4,2)+pow($a8c4,2)+pow($a9c4,2)+pow($a10c4,2));
        $r24 = $a2c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2)+pow($a4c4,2)
        +pow($a5c4,2)+pow($a6c4,2)+pow($a7c4,2)+pow($a8c4,2)+pow($a9c4,2)+pow($a10c4,2));
        $r34 = $a3c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2)+pow($a4c4,2)
        +pow($a5c4,2)+pow($a6c4,2)+pow($a7c4,2)+pow($a8c4,2)+pow($a9c4,2)+pow($a10c4,2));
        $r44 = $a4c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2)+pow($a4c4,2)
        +pow($a5c4,2)+pow($a6c4,2)+pow($a7c4,2)+pow($a8c4,2)+pow($a9c4,2)+pow($a10c4,2));
        $r54 = $a5c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2)+pow($a4c4,2)
        +pow($a5c4,2)+pow($a6c4,2)+pow($a7c4,2)+pow($a8c4,2)+pow($a9c4,2)+pow($a10c4,2));
        $r64 = $a6c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2)+pow($a4c4,2)
        +pow($a5c4,2)+pow($a6c4,2)+pow($a7c4,2)+pow($a8c4,2)+pow($a9c4,2)+pow($a10c4,2));
        $r74 = $a7c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2)+pow($a4c4,2)
        +pow($a5c4,2)+pow($a6c4,2)+pow($a7c4,2)+pow($a8c4,2)+pow($a9c4,2)+pow($a10c4,2));
        $r84 = $a8c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2)+pow($a4c4,2)
        +pow($a5c4,2)+pow($a6c4,2)+pow($a7c4,2)+pow($a8c4,2)+pow($a9c4,2)+pow($a10c4,2));
        $r94 = $a9c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2)+pow($a4c4,2)
        +pow($a5c4,2)+pow($a6c4,2)+pow($a7c4,2)+pow($a8c4,2)+pow($a9c4,2)+pow($a10c4,2));
        $r104 = $a10c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2)+pow($a4c4,2)
        +pow($a5c4,2)+pow($a6c4,2)+pow($a7c4,2)+pow($a8c4,2)+pow($a9c4,2)+pow($a10c4,2));
        // c5
        $r15 = $a1c5/sqrt(pow($a1c5,2)+pow($a2c5,2)+pow($a3c5,2)+pow($a4c5,2)
        +pow($a5c5,2)+pow($a6c5,2)+pow($a7c5,2)+pow($a8c5,2)+pow($a9c5,2)+pow($a10c5,2));
        $r25 = $a2c5/sqrt(pow($a1c5,2)+pow($a2c5,2)+pow($a3c5,2)+pow($a4c5,2)
        +pow($a5c5,2)+pow($a6c5,2)+pow($a7c5,2)+pow($a8c5,2)+pow($a9c5,2)+pow($a10c5,2));
        $r35 = $a3c5/sqrt(pow($a1c5,2)+pow($a2c5,2)+pow($a3c5,2)+pow($a4c5,2)
        +pow($a5c5,2)+pow($a6c5,2)+pow($a7c5,2)+pow($a8c5,2)+pow($a9c5,2)+pow($a10c5,2));
        $r45 = $a4c5/sqrt(pow($a1c5,2)+pow($a2c5,2)+pow($a3c5,2)+pow($a4c5,2)
        +pow($a5c5,2)+pow($a6c5,2)+pow($a7c5,2)+pow($a8c5,2)+pow($a9c5,2)+pow($a10c5,2));
        $r55 = $a5c5/sqrt(pow($a1c5,2)+pow($a2c5,2)+pow($a3c5,2)+pow($a4c5,2)
        +pow($a5c5,2)+pow($a6c5,2)+pow($a7c5,2)+pow($a8c5,2)+pow($a9c5,2)+pow($a10c5,2));
        $r65 = $a6c5/sqrt(pow($a1c5,2)+pow($a2c5,2)+pow($a3c5,2)+pow($a4c5,2)
        +pow($a5c5,2)+pow($a6c5,2)+pow($a7c5,2)+pow($a8c5,2)+pow($a9c5,2)+pow($a10c5,2));
        $r75 = $a7c5/sqrt(pow($a1c5,2)+pow($a2c5,2)+pow($a3c5,2)+pow($a4c5,2)
        +pow($a5c5,2)+pow($a6c5,2)+pow($a7c5,2)+pow($a8c5,2)+pow($a9c5,2)+pow($a10c5,2));
        $r85 = $a8c5/sqrt(pow($a1c5,2)+pow($a2c5,2)+pow($a3c5,2)+pow($a4c5,2)
        +pow($a5c5,2)+pow($a6c5,2)+pow($a7c5,2)+pow($a8c5,2)+pow($a9c5,2)+pow($a10c5,2));
        $r95 = $a9c5/sqrt(pow($a1c5,2)+pow($a2c5,2)+pow($a3c5,2)+pow($a4c5,2)
        +pow($a5c5,2)+pow($a6c5,2)+pow($a7c5,2)+pow($a8c5,2)+pow($a9c5,2)+pow($a10c5,2));
        $r105 = $a10c5/sqrt(pow($a1c5,2)+pow($a2c5,2)+pow($a3c5,2)+pow($a4c5,2)
        +pow($a5c5,2)+pow($a6c5,2)+pow($a7c5,2)+pow($a8c5,2)+pow($a9c5,2)+pow($a10c5,2));
        ?>
    <!-- Matrix Normalisasi----------------->    
    <h4><b>Matrix Normalisasi</b></h4>
    <table class="table table-bordered" border="1">
    
        <th></th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
    </tr>
    <tr>
        <th>A1</th>
        <th><?php echo $r11?></th>
        <th><?php echo $r12?></th>
        <th><?php echo $r13?></th>
        <th><?php echo $r14?></th>
        <th><?php echo $r15?></th>
    </tr>
    <tr>
        <th>A2</th>
        <th><?php echo $r21?></th>
        <th><?php echo $r22?></th>
        <th><?php echo $r23?></th>
        <th><?php echo $r24?></th>
        <th><?php echo $r25?></th>
    </tr>
    <tr>
        <th>A3</th>
        <th><?php echo $r31?></th>
        <th><?php echo $r32?></th>
        <th><?php echo $r33?></th>
        <th><?php echo $r34?></th>
        <th><?php echo $r35?></th>
    </tr>
    <tr>
        <th>A4</th>
        <th><?php echo $r41?></th>
        <th><?php echo $r42?></th>
        <th><?php echo $r43?></th>
        <th><?php echo $r44?></th>
        <th><?php echo $r45?></th>
    </tr>
    <tr>
        <th>A5</th>
        <th><?php echo $r51?></th>
        <th><?php echo $r52?></th>
        <th><?php echo $r53?></th>
        <th><?php echo $r54?></th>
        <th><?php echo $r55?></th>
    </tr>
    <tr>
        <th>A6</th>
        <th><?php echo $r61?></th>
        <th><?php echo $r62?></th>
        <th><?php echo $r63?></th>
        <th><?php echo $r64?></th>
        <th><?php echo $r65?></th>
    </tr>
    <tr>
        <th>A7</th>
        <th><?php echo $r71?></th>
        <th><?php echo $r72?></th>
        <th><?php echo $r73?></th>
        <th><?php echo $r74?></th>
        <th><?php echo $r75?></th>
    </tr>
    <tr>
        <th>A8</th>
        <th><?php echo $r81?></th>
        <th><?php echo $r82?></th>
        <th><?php echo $r83?></th>
        <th><?php echo $r84?></th>
        <th><?php echo $r85?></th>
    </tr>
    <tr>
        <th>A9</th>
        <th><?php echo $r91?></th>
        <th><?php echo $r92?></th>
        <th><?php echo $r93?></th>
        <th><?php echo $r94?></th>
        <th><?php echo $r95?></th>
    </tr>
    <tr>
        <th>A10</th>
        <th><?php echo $r101?></th>
        <th><?php echo $r102?></th>
        <th><?php echo $r103?></th>
        <th><?php echo $r104?></th>
        <th><?php echo $r105?></th>
    </tr>
    </table>
    </div>
    <div>
    <?php
    // C1
    $y11 = $r11 * $bc1;
    $y21 = $r21 * $bc1;
    $y31 = $r31 * $bc1;
    $y41 = $r41 * $bc1;
    $y51 = $r51 * $bc1;
    $y61 = $r61 * $bc1;
    $y71 = $r71 * $bc1;
    $y81 = $r81 * $bc1;
    $y91 = $r91 * $bc1;
    $y101 = $r101 * $bc1;
    // C2
    $y12 = $r12 * $bc2;
    $y22 = $r22 * $bc2;
    $y32 = $r32 * $bc2;
    $y42 = $r42 * $bc2;
    $y52 = $r52 * $bc2;
    $y62 = $r62 * $bc2;
    $y72 = $r72 * $bc2;
    $y82 = $r82 * $bc2;
    $y92 = $r92 * $bc2;
    $y102 = $r102 * $bc2;
    // C3
    $y13 = $r13 * $bc3;
    $y23 = $r23 * $bc3;
    $y33 = $r33 * $bc3;
    $y43 = $r43 * $bc3;
    $y53 = $r53 * $bc3;
    $y63 = $r63 * $bc3;
    $y73 = $r73 * $bc3;
    $y83 = $r83 * $bc3;
    $y93 = $r93 * $bc3;
    $y103 = $r103 * $bc3;
    // C4
    $y14 = $r14 * $bc4;
    $y24 = $r24 * $bc4;
    $y34 = $r34 * $bc4;
    $y44 = $r44 * $bc4;
    $y54 = $r54 * $bc4;
    $y64 = $r64 * $bc4;
    $y74 = $r74 * $bc4;
    $y84 = $r84 * $bc4;
    $y94 = $r94 * $bc4;
    $y104 = $r104 * $bc4;
    // C5
    $y15 = $r15 * $bc5;
    $y25 = $r25 * $bc5;
    $y35 = $r35 * $bc5;
    $y45 = $r45 * $bc5;
    $y55 = $r55 * $bc5;
    $y65 = $r65 * $bc5;
    $y75 = $r75 * $bc5;
    $y85 = $r85 * $bc5;
    $y95 = $r95 * $bc5;
    $y105 = $r105 * $bc5;
    ?>
    <!-- Matrix Normalisasi Terbobot----------------->    
    <h4><b>Matrix Normalisasi Terbobot</b></h4>
    <table class="table table-bordered" border="1">
    
        <th></th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
    </tr>
    <tr>
        <th>A1</th>
        <th><?php echo $y11?></th>
        <th><?php echo $y12?></th>
        <th><?php echo $y13?></th>
        <th><?php echo $y14?></th>
        <th><?php echo $y15?></th>
    </tr>
    <tr>
        <th>A2</th>
        <th><?php echo $y21?></th>
        <th><?php echo $y22?></th>
        <th><?php echo $y23?></th>
        <th><?php echo $y24?></th>
        <th><?php echo $y25?></th>
    </tr>
    <tr>
        <th>A3</th>
        <th><?php echo $y31?></th>
        <th><?php echo $y32?></th>
        <th><?php echo $y33?></th>
        <th><?php echo $y34?></th>
        <th><?php echo $y35?></th>
    </tr>
    <tr>
        <th>A4</th>
        <th><?php echo $y41?></th>
        <th><?php echo $y42?></th>
        <th><?php echo $y43?></th>
        <th><?php echo $y44?></th>
        <th><?php echo $y45?></th>
    </tr>
    <tr>
        <th>A5</th>
        <th><?php echo $y51?></th>
        <th><?php echo $y52?></th>
        <th><?php echo $y53?></th>
        <th><?php echo $y54?></th>
        <th><?php echo $y55?></th>
    </tr>
    <tr>
        <th>A6</th>
        <th><?php echo $y61?></th>
        <th><?php echo $y62?></th>
        <th><?php echo $y63?></th>
        <th><?php echo $y64?></th>
        <th><?php echo $y65?></th>
    </tr>
    <tr>
        <th>A7</th>
        <th><?php echo $y71?></th>
        <th><?php echo $y72?></th>
        <th><?php echo $y73?></th>
        <th><?php echo $y74?></th>
        <th><?php echo $y75?></th>
    </tr>
    <tr>
        <th>A8</th>
        <th><?php echo $y81?></th>
        <th><?php echo $y82?></th>
        <th><?php echo $y83?></th>
        <th><?php echo $y84?></th>
        <th><?php echo $y85?></th>
    </tr>
    <tr>
        <th>A9</th>
        <th><?php echo $y91?></th>
        <th><?php echo $y92?></th>
        <th><?php echo $y93?></th>
        <th><?php echo $y94?></th>
        <th><?php echo $y95?></th>
    </tr>
    <tr>
        <th>A10</th>
        <th><?php echo $y101?></th>
        <th><?php echo $y102?></th>
        <th><?php echo $y103?></th>
        <th><?php echo $y104?></th>
        <th><?php echo $y105?></th>
    </tr>
    </table>
    </div>
    <div>
    <!-- Menghitung nilai yi----------------->    
    <h4><b>Menghitung Nilai Yi</b></h4>
    <table class="table table-bordered" border="1">
    
        <th></th>
        <th>MAX</th>
        <th>MIN</th>
        <th>Yi</th>
        <th>Ranking</th>
    </tr>
    <tr>
        <th>A1</th>
        <th><?php echo $max1 = $y12?></th>
        <th><?php echo $min1 = $y11+$y13+$y14+$y15?></th>
        <th><?php echo $yi1 = $max1 - $min1?></th>
        <th>1</th>
    </tr>
    <tr>
        <th>A2</th>
        <th><?php echo $max2 = $y22?></th>
        <th><?php echo $min2 = $y21+$y23+$y24+$y25?></th>
        <th><?php echo $yi2 = $max2 - $min2?></th>
        <th>8</th>
    </tr>
    <tr>
        <th>A3</th>
        <th><?php echo $max3 = $y32?></th>
        <th><?php echo $min3 = $y31+$y33+$y34+$y35?></th>
        <th><?php echo $yi3 = $max3 - $min3?></th>
        <th>10</th>
    </tr>
    <tr>
        <th>A4</th>
        <th><?php echo $max4 = $y42?></th>
        <th><?php echo $min4 = $y41+$y43+$y44+$y45?></th>
        <th><?php echo $yi4 = $max4 - $min4?></th>
        <th>6</th>
    </tr>
    <tr>
        <th>A5</th>
        <th><?php echo $max5 = $y52?></th>
        <th><?php echo $min5 = $y51+$y53+$y54+$y55?></th>
        <th><?php echo $yi5 = $max5 - $min5?></th>
        <th>4</th>
    </tr>
    <tr>
        <th>A6</th>
        <th><?php echo $max6 = $y62?></th>
        <th><?php echo $min6 = $y61+$y63+$y64+$y65?></th>
        <th><?php echo $yi6 = $max6 - $min6?></th>
        <th>5</th>
    </tr>
    <tr>
        <th>A7</th>
        <th><?php echo $max7 = $y72?></th>
        <th><?php echo $min7 = $y71+$y73+$y74+$y75?></th>
        <th><?php echo $yi7 = $max7 - $min7?></th>
        <th>2</th>
    </tr>
    <tr>
        <th>A8</th>
        <th><?php echo $max8 = $y82?></th>
        <th><?php echo $min8 = $y81+$y83+$y84+$y85?></th>
        <th><?php echo $yi8 = $max8 - $min8?></th>
        <th>7</th>
    </tr>
    <tr>
        <th>A9</th>
        <th><?php echo $max9 = $y92?></th>
        <th><?php echo $min9 = $y91+$y93+$y94+$y95?></th>
        <th><?php echo $yi9 = $max9 - $min9?></th>
        <th>3</th>
    </tr>
    <tr>
        <th>A10</th>
        <th><?php echo $max10 = $y102?></th>
        <th><?php echo $min10 = $y101+$y103+$y104+$y105?></th>
        <th><?php echo $yi10 = $max10 - $min10?></th>
        <th>9</th>
    </tr>
    </table>
    
<h4>5 Alternatif Teratas</h4>
    <table class="table table-bordered" border="1">
        
            <th>Alternatif</th>
            <th>Nama</th>
            <th>Ranking</th>
        </tr>
        <tr>
            <td>A1</td>
            <td>Adelan</td>
            <td>1</td>
        </tr>
        <tr>
            <td>A7</td>
            <td>Nuriadi</td>
            <td>2</td>
        </tr>
        <tr>
            <td>A9</td>
            <td>Poniman</td>
            <td>3</td>
        </tr>
        <tr>
            <td>A5</td>
            <td>Mislan</td>
            <td>4</td>
        </tr>
        <tr>
            <td>A6</td>
            <td>Sukirah</td>
            <td>5</td>
        </tr>
    </table>
    </div>
