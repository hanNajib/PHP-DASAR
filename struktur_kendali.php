<?php 
// Pengulangan
// while
// do while
// for
// foreach : pengulangan khusus array

// for ($i = 0; $i < 5; $i++) {    
//     echo "Hello World <br>";    
// }

// $i = 0;
// while ($i < 5) {    
//     echo "Hello World <br>";    
//     $i++;
// }

// $i = 0;
// do {
//     echo "Hello World <br>";
//     $i++;
// } while ($i < 5);



// Pengkondisian
// if
// if else
// if else if else
// ternary
// switch

$x = 20;
if ($x < 20) {
    echo "Benar";
} else if ($x == 20) {
    echo "Bingo";
}
 else {
    echo "Salah";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Struktur Kendali</title>
    <style>
        .warna-baris {
            background-color: #505050;
        }
    </style>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- <?php 
        for ($i = 1; $i <= 15; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 15; $j++) {
                echo "<td>$i, $j</td>";
            }
            echo "</tr>";
        }
        
        ?> -->

        <?php for( $i = 1; $i <= 3 ; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr class="">
            <?php endif; ?>
                <?php for( $j = 1; $j <= 5 ; $j++) { ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php } ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>
</html>