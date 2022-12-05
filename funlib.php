<?php
function dosDecimales($num)
{
    $num = number_format($num, 2, '.', '');
    return "#" . $num . "#";
}
?>