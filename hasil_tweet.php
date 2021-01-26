<!doctype html>
<html class="no-js" lang="">

<?php
    session_start();
    include "koneksi.php";
    include './JaroWinkler.php';
    require_once __DIR__ . '/vendor/autoload.php';
    $target =  @$_REQUEST['cari'];
    $target2 =  @$_REQUEST['cari2'];

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Table | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
	<!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <link rel="stylesheet" href="css/wave/button.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- datatable baru-->
    <!-- <script src="data-table/jquery.dataTables2.min.js"></script>
    <script src="data-table/jquery-3.3.1js"></script> -->
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="data_twitter.php"><h2 style="color:white; font_family: Lucida Calligraphy;"> INTEGRASI DATA </h2></a>

                        <!-- <a><img style="width:100px; height:100px" src="img/logo/logo2.png"  /></a> -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item nc-al"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-alarm"></i></span>
                                    <div class="spinner4 spinner-4"></div>
                                    <div class="ntd-ctn"><span>3</span></div>
                                </a>

                            </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menus"></i></span>
                                    <div class="spinner4 spinner-4"></div>
                                    <div class="ntd-ctn"><span>2</span></div>
                                </a>

                            </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-chat"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Chat</h2>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Table area End-->
    <div class="data-table-area">
        <div class="container" id="tampil_get">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                       <br>
                        <div class="basic-tb-hd">
                            <center><h1>Twitter</h1></center> 
                            <h2>SIMILARITY  ( "<?php echo $target?>" ) </h2> 
                        </div>
                         <div class="table-responsive">
                        <table id="example1" class="table table-striped">
                        <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Postingan</center></th>
                                <th><center>Similarity</center></th>
                            </tr>
                        </thead>
                        <tbody> 

        <?php
        $str = mysqli_query($con,"SELECT NAMA,STATUS,TANGGAL,LOKASI FROM TWITTER ORDER BY ID_STATUS DESC LIMIT 100");
        $i=0;
        $start1 = microtime(true);
        $tokenizerFactory  = new \Sastrawi\Tokenizer\TokenizerFactory();
        $tokenizer = $tokenizerFactory->createDefaultTokenizer();
        // isi twitter
        
        //$target =  @$_POST['kata'];
        $tokens=array();
            
        $jaro=array();
        $levenshtein=array();
       
        $treshold = array();
        $maksjr = array();

        $coba1 = array();
        $coba2 = array();

        //untuk menampung maks jr dan ed
        $tres_jr = array();
        $tres_levenshtein = array();

        $makslv=0;
        $maksjr=0;

        $status = array();
          
        // echo count($_POST['postingan']);

        while($data=mysqli_fetch_array($str)){
            $status[] = $data['STATUS'];
            //$nama[] = $data['NAMA'];
        } //end while 
        ?>
                                                                          
                <?php        
                $no = 0;
                // for untuk status
                for ($b=0; $b < count($status); $b++) { 
                    $tokens = $tokenizer->tokenize($status[$b]);
        
                        // for untuk kata
                        for ($a=0; $a < count($tokens); $a++) {
                            $time_start = microtime(true);
                        
                            $jaro[] =JaroWinkler($target, $tokens[$a]);
                            $levenshtein[] =levenshtein($target, $tokens[$a]);
 
                            $kataleven=levenshtein($target, $tokens[$a]);
                               
                             $kataJaro=JaroWinkler($target, $tokens[$a]);    
                             
                            //mencari nilai Maksimal Levenstein per status
                            if(levenshtein($target, $tokens[$a])>$makslv){
                            $coba1[$b][$a]=levenshtein($target, $tokens[$a]);
                            }
                            else{
                            $coba1[$b][$a]=$makslv;
                            }

                            //mencari nilai Maksimal Levenstein per status
                            if(JaroWinkler($target, $tokens[$a])>$maksjr){
                                $coba2[$b][$a]=JaroWinkler($target, $tokens[$a]);
                            }
                            else{
                                $coba2[$b][$a]=$maksjr;
                            }
                            
            } // end for nampilin per kata
            
            //MENCARI STATUS YANG LOLOS TRESHOLD
            $treshold=0.8;
            if((max($coba2[$b]))>=$treshold){

            $no++;
            ?>

            <tr>
                <td>
                    <center>
                        <?php echo $no;?>
                    </center>
                </td>
                
                <td>
                    <?php
                        echo $status[$b]; echo"<br>";
                    ?>
                </td>
                
                <td>
                    <center>
                        <?php print_r(max($coba2[$b]));?>
                    </center>
                </td>
            </tr>
            <?php 
                }
            else{}   
                }//end for looping status 
                //echo "JUMLAH DATA LOLOS TRESHOLD = ";
                //echo $no;                        
            ?>
 </tbody> 

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
<!-- =================================== kata kedua ============================= -->
<br>
<!-- Data Table area End-->
    <div class="data-table-area">
        <div class="container" id="tampil_get">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                       <br>
                        <div class="basic-tb-hd">
                     
                            <h2>SIMILARITY  ( "<?php echo $target2?>" ) </h2> 
                        </div>
                         <div class="table-responsive">
                        <table id="example2" class="table table-striped">
                        <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Postingan</center></th>
                                <th><center>Similarity</center></th>
                            </tr>
                        </thead>
                        <tbody> 

        <?php
        $str = mysqli_query($con,"SELECT NAMA,STATUS,TANGGAL,LOKASI FROM TWITTER ORDER BY ID_STATUS DESC LIMIT 100");
        $i=0;
        $start1 = microtime(true);
        $tokenizerFactory2  = new \Sastrawi\Tokenizer\TokenizerFactory();
        $tokenizer2 = $tokenizerFactory2->createDefaultTokenizer();
        // isi twitter
        
        //$target =  @$_POST['kata'];
        $tokensTW2=array();
            
        $jaroTW2=array();
        $levenshteinTW2=array();
       
        $treshold = array();
        $maksjr = array();

        $coba1 = array();
        $coba2 = array();

        //untuk menampung maks jr dan ed
        $tres_jrTW2 = array();
        $tres_levenshteinTW2 = array();

        $makslv=0;
        $maksjr=0;

        $statusTW2 = array();
          
        // echo count($_POST['postingan']);

        while($dataTW1=mysqli_fetch_array($str)){
            $statusTW2[] = $dataTW1['STATUS'];
            //$nama[] = $data['NAMA'];
        } //end while 
        ?>
                                                                          
                <?php        
                $noTW2 = 0;
                // for untuk status
                for ($bTW2=0; $bTW2 < count($statusTW2); $bTW2++) { 
                    $tokensTW2 = $tokenizer->tokenize($statusTW2[$bTW2]);
        
                        // for untuk kata
                        for ($aTW2=0; $aTW2 < count($tokensTW2); $aTW2++) {
                            $time_start = microtime(true);
                        
                            $jaroTW2[] =JaroWinkler($target2, $tokensTW2[$aTW2]);
                            $levenshteinTW2[] =levenshtein($target2, $tokensTW2[$aTW2]);
 
                            $kataleven=levenshtein($target2, $tokensTW2[$aTW2]);
                               
                             $kataJaro=JaroWinkler($target2, $tokensTW2[$aTW2]);    
                             
                            //mencari nilai Maksimal Levenstein per status
                            if(levenshtein($target2, $tokensTW2[$aTW2])>$makslv){
                            $coba1[$bTW2][$aTW2]=levenshtein($target2, $tokensTW2[$aTW2]);
                            }
                            else{
                            $coba1[$bTW2][$aTW2]=$makslv;
                            }

                            //mencari nilai Maksimal Levenstein per status
                            if(JaroWinkler($target2, $tokensTW2[$aTW2])>$maksjr){
                                $coba2[$bTW2][$aTW2]=JaroWinkler($target2, $tokensTW2[$aTW2]);
                            }
                            else{
                                $coba2[$bTW2][$aTW2]=$maksjr;
                            }
                            
            } // end for nampilin per kata
            
            //MENCARI STATUS YANG LOLOS TRESHOLD
            $treshold=0.8;
            if((max($coba2[$bTW2]))>=$treshold){

            $noTW2++;
            ?>

            <tr>
                <td>
                    <center>
                        <?php echo $noTW2;?>
                    </center>
                </td>
                
                <td>
                    <?php
                        echo $statusTW2[$bTW2]; echo"<br>";
                    ?>
                </td>
                
                <td>
                    <center>
                        <?php print_r(max($coba2[$bTW2]));?>
                    </center>
                </td>
            </tr>
            <?php 
                }
            else{}   
                }//end for looping status 
                //echo "JUMLAH DATA LOLOS TRESHOLD = ";
                //echo $no;                        
            ?>
 </tbody> 

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018
                            . All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
	<!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
    <script type="text/javascript">
        $('#example1').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true
        });
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true
        });
        
        // $(document).ready( function () {
        //     $('#example1').DataTable();
        // } );
    </script>
</body>

</html>
