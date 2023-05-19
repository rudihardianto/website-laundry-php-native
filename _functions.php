<?php

function url($url = null)
{
    $url_utama = "http://localhost/laundry_rizal_skripsi";
    if ($url != null) {
        return $url_utama.'/'.$url;
    } else {
        return $url_utama;
    }
}

?>