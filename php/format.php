<?php
function rupiah ($price) {
    $rupiah = "IDR " . number_format($price , 0, ',', '.');
    return $rupiah; 
}    
?>