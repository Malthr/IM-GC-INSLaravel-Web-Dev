<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    <?php
        require ('../animal.php');
        require ('../frog.php');
        require ('../ape.php');

        $sheep = new animal("Shaun");

        echo "Nama Hewan : " . $sheep->getName() . "<br>";
        echo "Jumlah Kaki : " . $sheep->getLegs() . "<br>";
        echo "Cold Blooded : " . $sheep->getType() . "<br>";
        
        echo "<br>";
        
        $kodok = new frog("Buduk");
        
        echo "Nama Hewan :" . $kodok->getName() . "<br>";
        echo "Jumlah Kaki :" . $kodok->getLegs() . "<br>";
        echo "Cold Blooded : " . $kodok->getType() . "<br>";
        echo "Jump : " . $kodok->jump() . "<br>";
        
        echo "<br>";
        
        $sungokong = new ape("Kera Sakti");
        
        echo "Nama Hewan : " . $sungokong->getName() . "<br>";
        echo "Jumlah Kaki : " . $sungokong->getLegs() . "<br>";
        echo "Cold Blooded : " . $sungokong->getType() . "<br>";
        echo "Yell : " . $sungokong->yell() . "<br>";
    ?>
</body>
</html>