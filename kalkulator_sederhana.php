<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
    <?php
        if (isset($_POST['hitung']))
        {
            $num1 = $_POST['bil1'];
            $num2 = $_POST['bil2'];
            if ($num1 == NULL || $num2 == NULL) 
            {
                $add = "Belum ada.";
                $subtract = "Belum ada.";
                $multiply = "Belum ada.";
                $divide = "Belum ada.";
            }
            else                      
            {
                $add = $num1 + $num2;      

                $subtract = $num1 - $num2;    

                $multiply = $num1 * $num2;  

                if ($num1 == 0 && $num2 == 0) 
                {
                    $divide = "tidak terdefinisi (angka manapun tidak bisa dibagi 0)";
                }
                else       
                {
                    $divide = $num1 / $num2;      
                }
            }
        }
    ?>
	<div class="kalkulator">
		<h2 class="judul">Kalkulator Sederhana</h2>
		<form method="POST" action="kalkulator_sederhana.php">
            <label for="bil1"><h4>Bilangan 1</h4></label>	
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="...">
            <label for="bil1"><h4>Bilangan 2</h4></label>
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="...">
            <br></br>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung']))
        { ?>
            <br></br>
            <h4 class="informasi">Hasil hitung</h4>
            <h4 class="bilangan">Bilangan 1: <?php echo $num1; ?></h5>
            <h4 class="bilangan">Bilangan 2: <?php echo $num2; ?></h5>
            <p>Hasil penjumlahan: <?php echo $add; ?></p>
            <p>Hasil pengurangan: <?php echo $subtract; ?></p>
            <p>Hasil perkalian: <?php echo $multiply; ?></p>
            <p>Hasil pembagian: <?php echo $divide; ?></p>
        <?php } ?>
	</div>
</body>
</html>