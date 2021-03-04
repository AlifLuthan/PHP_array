<?php

$buah = ['apel','jeruk','mangga'];

echo 'jumlah buah adalah ' . count($buah);
?>
<h3>Berikut adalah daftar buahnya : </h3>
<ol>
    <?php
        $jumlah = count($buah);
        for($i = 0 ; $i < $jumlah ; $i++){
            echo '<li>'. $buah[$i]. '</li>';
        }
    ?>
</ol>
<hr>
<?php
    //Two Ways creation
        $umur = ['Alif' => 19,'Adam' => 18,'ichsan'=> 20];
        foreach($umur as $nama => $value){
            echo '<br/>' . $nama. ' usianya : ' .$value;
        }
?>
<hr>
<?php
    //Array Multidimensi
    $ar_jus=[
        ['buah'=>'Stoberi','harga'=>9500],
        ['buah'=>'mangga','harga'=>8000],
        ['buah'=>'alpukat','harga'=>10000],
        ['buah'=>'durian','harga'=>14000],
    ];
?>
<!--Membuat daftar buah buahan menggunakan PHP array -->
<table width ="100%" border="1">
    <thead>
    <tr>
        <th>NO</th><th>NamaBuah</th><th>HargaBuah</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        $total = 0;
        foreach($ar_jus as $jus){
            echo '<tr><td>'.$nomor.'</td><td>'.$jus['buah'].'</td><td align = "right">'.number_format($jus['harga'],2,'.','.').'</td></tr>';
        $nomor++;
        $total = $total + $jus['harga'];
        }
        ?>
        <tr>
            <td colspan="3" align="right">
            <?php
            echo number_format($total,2,'.','.')
            ?>
            </td>
        </tr>
    </tbody>
</table>