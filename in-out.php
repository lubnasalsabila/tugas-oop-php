<?php
// class aritmatika {
//     private $a;
//     private $b;
//     private $c;

//     public function __construct($a, $b, $c) {
//         $this->a = $a;
//         $this->b = $b;
//         $this->c = $c;
//     }

//     public function tambah() {
//         return $this->a + $this->b + $this->c;
//     }


//     public function kurang() {
//         return $this->a - $this->b - $this->c;
//     }


//     public function kali() {
//         return $this->a * $this->b * $this->c;
//     }


//     public function bagi() {
//         return $this->a / $this->b / $this->c;
//     }


//     public function mod() {
//         return $this->a % $this->b % $this->c;
//     }
// }
include "toin-out.php";
$matika = new aritmatika();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="a">
        <select name="operasi" id="">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
        <option value="mod">%</option>gf
        </select>
        <input type="number" name="b">
        <select name="operasi" id="">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
        <option value="mod">%</option>
        </select>
        <input type="number" name="c">
        <label for="">=</label>
        <input type="submit" value="jumlahkan">
    </form>
</body>
</html>
<?php

if ($_POST) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    if ($_POST['operasi']== "tambah") {
        echo "Hasil: ".$a." + ".$b." + ".$c." = ". $matika->setTambah($a,$b,$c). "<br><br>";
    }elseif ($_POST['operasi'] == "kurang") {
        echo "Hasil: ".$a." - ".$b." - ".$c." = ". $matika->setKurang($a,$b,$c). "<br><br>";
    }elseif ($_POST['operasi'] == "kali") {
        echo "Hasil: ".$a." * ".$b." * ".$c." = ". $matika->setKali($a,$b,$c). "<br><br>";
    }elseif ($_POST['operasi'] == "bagi") {
        echo "Hasil: ".$a." / ".$b." / ".$c." = ". $matika->setBagi($a,$b,$c). "<br><br>";
    }elseif ($_POST['operasi'] == "mod") {
        echo "Hasil: ".$a." % ".$b." % ".$c." = ". $matika->setModul($a,$b,$c). "<br><br>";
    }
}