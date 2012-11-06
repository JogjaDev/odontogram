<!DOCTYPE HTML>
<?php
include "lib/fungsi.php";
include "lib/koneksi.php";
$gigi = new fungsi;

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout_admin.css" />
        <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout_admin_text.css" />
        <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
        <title>Odontogram Application System</title>
        <style type="text/css">
        #div1 {width:350px;height:70px;padding:10px;border:1px solid #aaaaaa;}
        </style>
    </head>

    <!-- Global IE fix to avoid layout crash when single word size wider than column width -->
    <!--[if IE]><style type="text/css"> body {word-wrap: break-word;}</style><![endif]-->

    <body>
        <div class="page-container">      
            <div class="header">
                <div class="header-top">
                    <a class="sitelogo" href="#"></a>
                    <div class="sitename">
                        <h1><a href="index.html">Odontogram</a></h1>
                        <h2>Odontogram Application System</h2>
                    </div>
                </div>
                <div class="header-bottom">
                </div>
            </div>
            <div class="main">
                <div class="main-navigation">
                    <div class="round-border-topright"></div>
                    <h1 class="first">Sidebar</h1>
                    <dl class="nav3-grid">
                        <dt><a href="http://localhost/odontogram">Home</a></dt>
                        <dt><a href="http://localhost/odontogram/detail.php">Detail Gigi</a></dt>
                        <dt><a href="http://localhost/odontogram/detail2.php">Detail Gigi 2</a></dt>
                    </dl>                       
                </div>
                <div class="main-content">
                    <h1 class="pagetitle">Odontogram</h1>       
                    <div class="column1-unit">        
                        <h1>Odontogram Application System</h1>                            
                        <h3>Portings already available or in development</h3>
                    </div>  
                    <div class="content">
                        <form method="get" action="">
                        <p><label>Cari Pasien : </label>
                            <select name="pasien">
                                <option value="0">Pasien</option> 
<?php $sql = "select * from pasien";
$query = mysql_query($sql);
while($hasil = mysql_fetch_array($query)){
    echo "<option value='".$hasil['id_pasien']."'>".$hasil['nama']."</option>";
}
?>
                            </select>
                            <input type="submit" name="submit" value="Lihat" />
                        </p>
                        </form>
                        <?php if(isset($_GET['submit'])) { ?>
                        <div id="forms">
                            <p>
                                <a href="#" title="Kerusakan"><button>Kerusakan</button></a>
                                <a href="#" title="Lihat Kerusakan"><button>Lihat Kerusakan</button></a>
                            </p>
                            <table width="100%">
                                <thead></thead>
                                <tbody>
                                    <!-- image begin -->
                                    <tr>
                                        <td>17 <img src="./images/detail.jpg" alt="Detail Gigi 17" <?php echo $gigi->cek_gigi($_GET['pasien'], '17'); ?>/></td>
                                        <td>16 <img src="./images/detail.jpg" alt="Detail Gigi 16" <?php echo $gigi->cek_gigi($_GET['pasien'], '16'); ?>/></td>
                                        <td>15 <img src="./images/detail.jpg" alt="Detail Gigi 15" <?php echo $gigi->cek_gigi($_GET['pasien'], '15'); ?>/></td>
                                        <td>14 <img src="./images/detail.jpg" alt="Detail Gigi 14" <?php echo $gigi->cek_gigi($_GET['pasien'], '14'); ?>/></td>
                                        <td>13 <img src="./images/detail.jpg" alt="Detail Gigi 13" <?php echo $gigi->cek_gigi($_GET['pasien'], '13'); ?>/></td>
                                        <td>12 <img src="./images/detail.jpg" alt="Detail Gigi 12" <?php echo $gigi->cek_gigi($_GET['pasien'], '12'); ?>/></td>
                                        <td>11 <img src="./images/detail.jpg" alt="Detail Gigi 11" <?php echo $gigi->cek_gigi($_GET['pasien'], '11'); ?>/></td>
                                        <td>21 <img src="./images/detail.jpg" alt="Detail Gigi 21" <?php echo $gigi->cek_gigi($_GET['pasien'], '21'); ?>/></td>
                                        <td>22 <img src="./images/detail.jpg" alt="Detail Gigi 22" <?php echo $gigi->cek_gigi($_GET['pasien'], '22'); ?>/></td>
                                        <td>23 <img src="./images/detail.jpg" alt="Detail Gigi 23" <?php echo $gigi->cek_gigi($_GET['pasien'], '23'); ?>/></td>
                                        <td>24 <img src="./images/detail.jpg" alt="Detail Gigi 24" <?php echo $gigi->cek_gigi($_GET['pasien'], '24'); ?>/></td>
                                        <td>25 <img src="./images/detail.jpg" alt="Detail Gigi 25" <?php echo $gigi->cek_gigi($_GET['pasien'], '25'); ?>/></td>
                                        <td>26 <img src="./images/detail.jpg" alt="Detail Gigi 26" <?php echo $gigi->cek_gigi($_GET['pasien'], '26'); ?>/></td>
                                        <td>27 <img src="./images/detail.jpg" alt="Detail Gigi 27" <?php echo $gigi->cek_gigi($_GET['pasien'], '27'); ?>/></td>
                                    </tr>
                                    <!-- image end -->
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>55</td>
                                        <td>54</td>
                                        <td>53</td>
                                        <td>52</td>
                                        <td>51</td>
                                        <td>61</td>
                                        <td>62</td>
                                        <td>63</td>
                                        <td>64</td>
                                        <td>65</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <!-- image begin -->
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 55" <?php echo $gigi->cek_gigi($_GET['pasien'], '55'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 54" <?php echo $gigi->cek_gigi($_GET['pasien'], '54'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 53" <?php echo $gigi->cek_gigi($_GET['pasien'], '53'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 52" <?php echo $gigi->cek_gigi($_GET['pasien'], '52'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 51" <?php echo $gigi->cek_gigi($_GET['pasien'], '51'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 61" <?php echo $gigi->cek_gigi($_GET['pasien'], '61'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 62" <?php echo $gigi->cek_gigi($_GET['pasien'], '62'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 63" <?php echo $gigi->cek_gigi($_GET['pasien'], '63'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 64" <?php echo $gigi->cek_gigi($_GET['pasien'], '64'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 65" <?php echo $gigi->cek_gigi($_GET['pasien'], '65'); ?>/></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <!-- image end -->
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>85</td>
                                        <td>84</td>
                                        <td>83</td>
                                        <td>82</td>
                                        <td>81</td>
                                        <td>71</td>
                                        <td>72</td>
                                        <td>73</td>
                                        <td>74</td>
                                        <td>75</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <!-- image begin -->
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 85" <?php echo $gigi->cek_gigi($_GET['pasien'], '85'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 84" <?php echo $gigi->cek_gigi($_GET['pasien'], '84'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 83" <?php echo $gigi->cek_gigi($_GET['pasien'], '83'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 82" <?php echo $gigi->cek_gigi($_GET['pasien'], '82'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 81" <?php echo $gigi->cek_gigi($_GET['pasien'], '81'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 71" <?php echo $gigi->cek_gigi($_GET['pasien'], '71'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 72" <?php echo $gigi->cek_gigi($_GET['pasien'], '72'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 73" <?php echo $gigi->cek_gigi($_GET['pasien'], '73'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 74" <?php echo $gigi->cek_gigi($_GET['pasien'], '74'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 75" <?php echo $gigi->cek_gigi($_GET['pasien'], '75'); ?>/></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <!-- image end -->
                                    <tr>
                                        <td>47</td>
                                        <td>46</td>
                                        <td>45</td>
                                        <td>44</td>
                                        <td>43</td>
                                        <td>42</td>
                                        <td>41</td>
                                        <td>31</td>
                                        <td>32</td>
                                        <td>33</td>
                                        <td>34</td>
                                        <td>35</td>
                                        <td>36</td>
                                        <td>37</td>
                                    </tr>
                                    <!-- image begin -->
                                    <tr>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 47" <?php echo $gigi->cek_gigi($_GET['pasien'], '47'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 46" <?php echo $gigi->cek_gigi($_GET['pasien'], '46'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 45" <?php echo $gigi->cek_gigi($_GET['pasien'], '45'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 44" <?php echo $gigi->cek_gigi($_GET['pasien'], '44'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 43" <?php echo $gigi->cek_gigi($_GET['pasien'], '43'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 42" <?php echo $gigi->cek_gigi($_GET['pasien'], '42'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 41" <?php echo $gigi->cek_gigi($_GET['pasien'], '41'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 31" <?php echo $gigi->cek_gigi($_GET['pasien'], '31'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 32" <?php echo $gigi->cek_gigi($_GET['pasien'], '32'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 33" <?php echo $gigi->cek_gigi($_GET['pasien'], '33'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 34" <?php echo $gigi->cek_gigi($_GET['pasien'], '34'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 35" <?php echo $gigi->cek_gigi($_GET['pasien'], '35'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 36" <?php echo $gigi->cek_gigi($_GET['pasien'], '36'); ?>/></td>
                                        <td><img src="./images/detail.jpg" alt="Detail Gigi 37" <?php echo $gigi->cek_gigi($_GET['pasien'], '37'); ?>/></td>
                                    </tr>
                                    <!-- image end -->
                                </tbody>
                            </table>
                        </div>
                        <?php } ?>
                    </div>
                    <hr class="clear-contentunit" />
                </div> 
            </div>
            <div class="footer">
                <p>Copyright &copy; 2012 Odontogram Application System Information | All Rights Reserved</p>
                <p class="credits">Design by &copy;<a href="http://www.jogjadev.com/">JogjaDev</a></p>
            </div>      
        </div> 

    </body>
</html>