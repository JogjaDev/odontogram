<?php
include "koneksi.php";
class fungsi{
    function cek_rusak($pasien, $gigi){
        $var = "";
        $sql = "";
        $query = mysql_query($sql);

        $hasil = mysql_num_rows($query);

        if($hasil){
            $var = get_class();
        }    
        return $var;
    }

    function get_class($rusak){
        $var = "";
        if($rusak){
            $var = "";
        }
        return $var;
    }

    function cek_gigi($pasien ,$gigi){
        $sql = "SELECT * FROM record WHERE id_pasien='$pasien' AND no_gigi='$gigi'";
        $query = mysql_query($sql);
        $hasil = mysql_fetch_array($query);
        switch($hasil['kerusakan']){
            case "erupsi" :
                $class = "class='erupsi'";
                break;
            case "cabut"  :
                $class = "class='cabut'";
                break;
            case "goyah"  :
                $class = "class='goyah'";
                break;
            case "akar"   :
                $class = "class='akar'";
                break;
            case "karies" :
                $class = "class='karies'";
                break;
            case "tumpatan":
                $class = "class='tumpatan'";
                break;
        }
        return $class;
    }
    
}
?>