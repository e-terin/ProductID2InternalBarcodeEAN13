<?php
$id=(int) $_GET['id'];
if($id) {
    $ean13=($id+200000000000);
    $ean13_str=(string)$ean13;
    for($i=11;$i>=0;$i--) {
        if(($i%2)==1) $m_nechet[]=(int) $ean13_str[$i];
        else $m_chet[]=(int) $ean13_str[$i];
    }
    $sum=array_sum($m_chet)+3*array_sum($m_nechet);
    $sum_str=(string)$sum;
    $last_digit=(int)substr($sum_str, -1);
    $control_summ=($last_digit==0)?0:(10-$last_digit);
    $barcode=$ean13_str.$control_summ;
    var_dump($barcode);

}

