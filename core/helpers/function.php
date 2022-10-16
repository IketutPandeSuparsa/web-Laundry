<?php


function user_harus_login(string $lokasi): void
{
    //jika belum login maka redirect ke  
    if(! isset($_SESSION[USER_LOGIN])){
        redirect($lokasi);
    }
}

function hak_akses(string $peran_yang_diizinkan, string|null $lokasi_tujuan = null): void
{
    //jika user role yang login tidak sama dengan peran yang diberikan maka
    if($_SESSION[USER_LOGIN][USER_ROLE] !== $peran_yang_diizinkan) {
        redirect($lokasi_tujuan);
    } 
}
 
function redirect(string $lokasi_tujuan): void 
{
    header("Location: $lokasi_tujuan");
    die;
}    
