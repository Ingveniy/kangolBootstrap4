<?php
foreach ($arResult['STORES'] as &$store){
    $re = '/(.*)\((.*)\)/m';
    preg_match_all($re, $store['TITLE'], $matches, PREG_SET_ORDER, 0);
    $store['ADDRESS'] = $matches[0][2];
    $store['NAME'] = $matches[0][1];

    if ($store['ID'] == 3) $arResult['OFFICE_QUANTITY'] = $store['REAL_AMOUNT'];
}
?>