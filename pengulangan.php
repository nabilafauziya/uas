<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengulangan</title>
</head>
<body>
    <form action="" method="post">

    <table>
        <h1>Form Pengulangan</h1>

        <div name="input">
           <p>1. Deret Bilangan Ganjil</p>
           <p>2. Segitiga Sama Kaki Terbalik</p>
           <p>3. Deret Bilangan Kelipatan</p>
        </div>
        
        <tr>
            <td><label for="pilih">Pilih</label></td>
            <td>:</td>
            <td><input type="text" name="input"></td>
        </tr>
        <tr>
            <td><label for="angka">Masukkan Angka</label></td>
            <td>:</td>
            <td><input type="text" name="angka"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="KIRIM"></td>
        </tr>
    </table>
    </form>
    
    <?php
    
    if (isset($_POST ["submit"])) {
        $pilih = $_POST ["pilih"];
        $angka = $_POST ["angka"];
        
        if ($_POST["input"] == "1") {
          for($a = 1; $a <= $angka; $a++){
             if($a % 2 == 1 )
               echo("$a");
             }
        }
        else if ($_POST["input"] == "2") {
            for($n = 1; $n <= $angka; $n++){
        	for($f = 1; $f <= $n; $f++){
        		echo "&nbsp";
        	}
        	for($r = $angka; $r >= $n; $r-=1){
        		echo "*";
        	}
        	echo "<br>";
        	}
        }
        else if ($_POST["input"] == "3") {
            for ($i= 1; $i <= $angka; $i++) { 
		    	if ( $bagi = $i % 3 == 0 ) {
			    	echo "$i";
		    	}
	     	}
        }
    }
    
    
    ?>
    
    
</body>
</html>
