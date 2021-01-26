<script src="highcharts/code/highcharts.js"></script>
<script src="highcharts/code/modules/data.js"></script>
<script src="highcharts/code/modules/drilldown.js"></script>
<?php
session_start();
include "twitteroauth.php";
include "koneksi.php";
include './JaroWinkler.php';

$consumer_key = "HCuFEesqFrpg3hCr6kxDVyeXs";
$consumer_secret = "VtWDSeiIqwpvvImHkHBVKr7hXgJMqqz7EIY6JWC4H4GQlQqtwo";
$access_token = "1046742898098626561-27kcGulTgtIRAc5cYt1uviCN0LioPe";
$access_token_secret = "29Eto8zevy3EkahlLeZL7kpp3fYYFpvKfnZ9UNGnECCQq";

$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);


require_once __DIR__ . '/vendor/autoload.php';
$tokenizerFactory  = new \Sastrawi\Tokenizer\TokenizerFactory();
$tokenizer = $tokenizerFactory->createDefaultTokenizer();
// isi twitter
if (isset($_POST['cari'])) {
    $_SESSION['cari']=$_POST['cari'];
    $_SESSION['cari2']=$_POST['cari2'];
    $start1 = microtime(true);
    $target = $_POST['cari'];
    $target2 = $_POST['cari2'];

$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=a&result_type=recent&count=100&include_rts=false&tweet_mode=extended');

$result = array();

   foreach ($tweets->statuses as $key => $tweet) {
       if($tweet->user->location = 'Indonesia'){
             $nama = $tweet->user->name;
                  $status = $tweet->full_text;
                        $tanggal = $tweet->created_at;
                         $lokasi = $tweet->user->location;
                   
                 
                          $sql_id = "select max(id_status) AS id_status from twitter WHERE id_status like '%S%'";
                          $hasil_id = mysqli_query ($con, $sql_id);
                          if(mysqli_num_rows($hasil_id)>0){
                            $row = mysqli_fetch_array($hasil_id);
                            $idmax = $row ['id_status'];
                            $id_urut = (int) substr ($idmax, 1, 4);
                            $id_urut++;
                            // sprintf = menambahkan (+)
                            $id_status = "S".sprintf("%04s", $id_urut);
                          }
                        else {
                            $id_status = "S0001";
                          }
                                           
                        $sql ="INSERT INTO twitter (nama,status,tanggal,lokasi,id_status) values ('$nama', '$status','$tanggal','$lokasi','$id_status')";
                        mysqli_query($con,$sql); 
                    }
                }
            ?>
               
<?php  
}else{

}
?> 
<!doctype html>
<html class="no-js" lang="">
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

    <style>
    #rcorners2 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 200px;
    height: 150px; 
    }
    
    #rcorners1 {
    border-radius: 25px;
    background: #ffff;
    padding: 20px; 
    width: auto;
    height: 300px; 
    padding-top : 40px;
    }
    </style>

</head>
<body>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                 <a href="data_twitter.php"><h2 style="color:white; font_family: Lucida Calligraphy;" >  INTEGRASI DATA  </h2></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <br>
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>

									<div class="breadcomb-ctn">
                                        <h2>Data</h2>
                                        <!-- untuk mengirim ke halaman yg sama -->
                                        <form action=" <?php echo $_SERVER['PHP_SELF']?>" method ="POST">
                                            <div class="col-sm-4">
                                                <div class="nk-int-st">
                                                    <input id="idcari" type="text" name="cari" class="form-control" placeholder="Masukkan Kata Kunci">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="nk-int-st">
                                                    <input id="idcari2" type="text" name="cari2" class="form-control" placeholder="Masukkan Kata Kunci Kedua">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <button class="btn btn-default btn-icon-notika" type="submit"><i class="notika-icon notika-checked"></i>Cek</button>
                                                <?php
                                                    // echo $nt.'<br>';
                                                ?>  
                                            </div>      
                                        </form>
                                    </div>
								</div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp ">
								    <h4>Kata Kunci Pertama :  </h4>
                                    <font color=#009688><h4>
                                        <?php echo "  "; echo  @$target;?></h4>
                                    </font>
                                </div>
                                <div class="breadcomb-wp border-radius:25px">
                                <h4 >Kata Kunci Kedua :  </h4>
                                    <font color=#009688><h4>
                                        <?php echo "  "; echo  @$target2;?></h4>
                                    </font>
								</div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Data Table area End--> 


<!-- Data Twitter -->
        <?php
        $str = mysqli_query($con,"SELECT NAMA,STATUS,TANGGAL,LOKASI FROM TWITTER ORDER BY ID_STATUS DESC LIMIT 100");
        ?>

        <?php  $i=0;
        $start1 = microtime(true);
        require_once __DIR__ . '/vendor/autoload.php';
        $tokenizerFactory  = new \Sastrawi\Tokenizer\TokenizerFactory();
        $tokenizer = $tokenizerFactory->createDefaultTokenizer();
        // isi twitter
        
            $target =  @$_POST['cari'];
            $target2 =  @$_POST['cari2'];
            // $dataa = $_POST['postingan'];
            // $nama = $_POST['nama'];
            $tokens=array();
            
            $jaro=array();
            $levenshtein=array();

            $time_start1 = array();
            $time_end = array();
            
            $sumTS = array();
            $sumTE = array();
            
            $treshold = array();
            $maksjr = array();

            $coba1 = array();
            $coba2 = array();

            $status=array();

            //untuk menampung maks jr dan ed
            $tres_jr = array();
            $tres_levenshtein = array();

            $makslv=0;
            $maksjr=0;
           
            // echo count($_POST['postingan']);

                while($data=mysqli_fetch_array($str)){
                $status[] = $data['STATUS'];
                //$nama[] = $data['NAMA'];
                } //end while 
                       
            $no = 0;
            $no2 = 0;
            // for untuk status
            for ($b=0; $b < count($status); $b++) { 
                $tokens = $tokenizer->tokenize($status[$b]);
        
                        // for untuk kata
                        for ($a=0; $a < count($tokens); $a++) {
                            $time_start = microtime(true);
                        
                            $time_start1[] = number_format(microtime(true)-$time_start,6);
                            $time_end[] = number_format(microtime(true)-$time_start,6);

                            $jaro[] =JaroWinkler($target, $tokens[$a]);
                            $levenshtein[] =levenshtein($target, $tokens[$a]);
            
                            $jaro1[] =JaroWinkler($target, $tokens[$a]);
                            $levenshtein1[] =levenshtein($target, $tokens[$a]);
                            
                            $sumTS[$a] = array_sum($time_start1);
                            $sumTE[$a] = array_sum($time_end);

                             
                            $kataleven=levenshtein($target, $tokens[$a]);
                            //echo $kataleven;                
                            //echo levenshtein($target, $tokens[$a]);
                                
                             $kataJaro=JaroWinkler($target, $tokens[$a]);    
                             //echo JaroWinkler($target, $tokens[$a]);
                             //echo $kataJaro;
            
                if(levenshtein($target, $tokens[$a])>$makslv){
                $coba1[$b][$a]=levenshtein($target, $tokens[$a]);
                }
                else{
                $coba1[$b][$a]=$makslv;
                }
                if(JaroWinkler($target, $tokens[$a])>$maksjr){
                    $coba2[$b][$a]=JaroWinkler($target, $tokens[$a]);
                }
                else{
                    $coba2[$b][$a]=$maksjr;
                }
                            
            } // end for nampilin per kata
            $treshold=0.8;
        if((max($coba2[$b]))>=$treshold){
            $no++;
        }else{
        }   
        }
            for ($b2=0; $b2 < count($status); $b2++) { 
                $tokens2 = $tokenizer->tokenize($status[$b2]);
        
                        // for untuk kata
                        for ($a2=0; $a2 < count($tokens2); $a2++) {
                            $time_start = microtime(true);
                        
                            $time_start1[] = number_format(microtime(true)-$time_start,6);
                            $time_end[] = number_format(microtime(true)-$time_start,6);

                            $jaro[] =JaroWinkler($target2, $tokens2[$a2]);
                            $levenshtein[] =levenshtein($target2, $tokens2[$a2]);
            
                            $jaro1[] =JaroWinkler($target2, $tokens2[$a2]);
                            $levenshtein1[] =levenshtein($target2, $tokens2[$a2]);
                            
                            $sumTS[$a2] = array_sum($time_start1);
                            $sumTE[$a2] = array_sum($time_end);
                             
                            $kataleven=levenshtein($target2, $tokens2[$a2]);
                            
                             $kataJaro=JaroWinkler($target2, $tokens2[$a2]);    

                if(levenshtein($target2, $tokens2[$a2])>$makslv){
                $coba11[$b2][$a2]=levenshtein($target2, $tokens2[$a2]);
                }
                else{
                $coba11[$b2][$a2]=$makslv;
                }
                if(JaroWinkler($target2, $tokens2[$a2])>$maksjr){
                    $coba22[$b2][$a2]=JaroWinkler($target2, $tokens2[$a2]);
                }
                else{
                    $coba22[$b2][$a2]=$maksjr;
                }
                            
            } // end for nampilin per kata
        $treshold=0.8;
        if((max($coba22[$b2]))>=$treshold){
            $no2++;
        }else{
        }   
    }//end for looping status 

//================================================FB==========================================
$strFB = mysqli_query($con,"SELECT id_fb,status_fb FROM facebook LIMIT 100");
$i=0;
                        
        //buat nampung status FB                
        $tokensFB=array();
            
        $jaro1FB=array();
        $levenshtein1FB=array();

        //$time_start1 = array();
        //$time_end = array();
            
        $tresholdFB = array();
        $maksjrFB = array();

        $statusFB=array();

        @$coba1FB = array();
        // variabel untuk menampung similarity jaro
        @$coba2FB = array();

        //untuk menampung maks jr dan ed
        $tres_jrFB = array();
        $tres_levenshtein = array();

        $makslvFB=0;
        $maksjrFB=0;
          
        // echo count($_POST['postingan']);

        while($dataFB=mysqli_fetch_array($strFB)){
            $statusFB[] = $dataFB['status_fb'];
        } //end while 
        ?>
                                                        
                <?php        
                $noFB = 0;
                $noFB2 = 0;
                // for untuk status
                for ($bFB=0; $bFB < count($statusFB); $bFB++) { 
                    $tokensFB = $tokenizer->tokenize($statusFB[$bFB]);
        
                        // for untuk kata
                        for ($aFB=0; $aFB < count($tokensFB); $aFB++) {
                            $time_start = microtime(true);
                        
                            $jaro1FB[] =JaroWinkler($target, $tokensFB[$aFB]);
                            $levenshtein1FB[] =levenshtein($target, $tokensFB[$aFB]);
  
                            $katalevenFB=levenshtein($target, $tokensFB[$aFB]);
                                 
                             $kataJaroFB=JaroWinkler($target, $tokensFB[$aFB]);    
                            
                            //mencari nilai Maksimal Levenstein per status
                            if(levenshtein($target, $tokensFB[$aFB])>$makslvFB){
                            $coba1FB[$bFB][$aFB]=levenshtein($target, $tokensFB[$aFB]);
                            }
                            else{
                            $coba1FB[$bFB][$aFB]=$makslvFB;
                            }
                            //mencari nilai Maksimal Levenstein per status
                            if(JaroWinkler($target, $tokensFB[$aFB])>$maksjrFB){
                                $coba2FB[$bFB][$aFB]=JaroWinkler($target, $tokensFB[$aFB]);
                            }
                            else{
                                $coba2FB[$bFB][$aFB]=$maksjrFB;
                            }
                            
            } // end for nampilin per kata
            
            //MENCARI STATUS YANG LOLOS TRESHOLD
            $tresholdFB=0.8;
            if((max(@$coba2FB[$bFB]))>=$tresholdFB){

            $noFB++;
            }else{

            }   
    }
    //end for looping status 

    // for untuk status
                for ($bFB2=0; $bFB2 < count($statusFB); $bFB2++) { 
                    $tokensFB2 = $tokenizer->tokenize($statusFB[$bFB2]);
        
                        // for untuk kata
                        for ($aFB2=0; $aFB2 < count($tokensFB2); $aFB2++) {
                            $time_start = microtime(true);
                            $jaro1FB[] =JaroWinkler($target2, $tokensFB2[$aFB2]);
                            $levenshtein1FB[] =levenshtein($target2, $tokensFB2[$aFB2]);
                            $katalevenFB=levenshtein($target2, $tokensFB2[$aFB2]);
                             $kataJaroFB=JaroWinkler($target2, $tokensFB2[$aFB2]);    
                            //mencari nilai Maksimal Levenstein per status
                            if(levenshtein($target2, $tokensFB2[$aFB2])>$makslvFB){
                            $coba1FB[$bFB2][$aFB2]=levenshtein($target2, $tokensFB2[$aFB2]);
                            }else{
                            $coba1FB[$bFB2][$aFB2]=$makslvFB;
                            }
                            //mencari nilai Maksimal Levenstein per status
                            if(JaroWinkler($target2, $tokensFB2[$aFB2])>$maksjrFB){
                                $coba2FB[$bFB2][$aFB2]=JaroWinkler($target2, $tokensFB2[$aFB2]);
                            }else{
                                $coba2FB[$bFB2][$aFB2]=$maksjrFB;
                            }
            } // end for nampilin per kata
            //MENCARI STATUS YANG LOLOS TRESHOLD
            $tresholdFB=0.8;
            if((max(@$coba2FB[$bFB2]))>=$tresholdFB){

            $noFB2++;
            }else{

            }   
    }
    //end for looping status 
//echo "JUMLAH DATA LOLOS TRESHOLD = ";
//echo $noFB;                        
?>
<!--
        </tbody>
    </table>
</div>
-->
<!-- End Data Twitter -->
    
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <?php if (isset ($_POST['cari'])) {
                    ?>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom:30px">
                        <div class="col-lg-12">
                            <div id="container1" style="min-width: 920px; max-width: 1200px; height: 300px; margin: 0 auto; border-radius:25px"></div>
                                </div>
                    </div>
             <?php   } ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div id="rcorners1" style="">
                            <center><h2>Data Twitter</h2></center>
                            <div class="col-lg-12">
                                
                                <div class="col-lg-12" >
                                    <center>
                                        <br>
                                        <font style = "font-size:700%"><?php //echo ($no+$no2);?></font>
                                        <img src="images/twitter.png"><br>
                                    </center>
                                </div>

                                <div class="col-lg-12" >
                                <center>
                                    <br>
                               <a href="hasil_tweet.php?cari=<?php echo $target;?>&&cari2=<?php echo $target2 ?>" target=_blank>
                                <button class="btn btn-default btn-icon-notika" type="button" onclick="#" >Lihat Data</button>
                                </a>
                                </center>  
                                </div>
                            </div>
                        </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    
                        <div id="rcorners1" style="">
                            <center><h2>Data Facebook</h2></center>
                            <div class="col-lg-12">
                                
                                <div class="col-lg-12" >
                               
                                    <center>
                                        <br>
                                        <font style = "font-size:700%"><?php //echo ($noFB+$noFB2);?></font>
                                        <img src="images/facebook.png"><br><br>
                                    </center>
                                </div>
                                </div>

                                <div class="col-lg-12" >
                                <center>
                                    <a href="hasil_fb.php?cari=<?php echo $target;?>&&cari2=<?php echo $target2 ?>" target=_blank>
                                    <button class="btn btn-default btn-icon-notika" type="button" onclick="#" >Lihat Data</button>
                                    </a></center>  
                                </div>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
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

    
</body>

</html>

    <script type="text/javascript">

    var not = <?php echo $no;?>;
    var not2 = <?php echo $no2;?>;
    var nott = not + not2;
    var nof = <?php echo $noFB;?>;
    var nof2 = <?php echo $noFB2;?>;
    var noff = nof + nof2;


    Highcharts.chart('container1', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Pie Graph'
        },
        subtitle: {
            text: 'klik untuk melihat perbandingan kata kunci'
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.name}: {point.y:.0f} Data'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> Data<br/>'
        },

        "series": [
            {
                "name": "Integrasi Data",
                "colorByPoint": true,
                "data": [
                    {
                        "name": "Twitter",
                        "y": nott,
                        "drilldown": "Twitter"
                    },
                    {
                        "name": "Facebook",
                        "y": noff,
                        "drilldown": "Facebook"
                    },
                ]
            }
        ],
        "drilldown": {
            "series": [
                {
                    "name": "Twitter",
                    "id": "Twitter",
                    "data": [
                        [
                            "<?php echo $target;?>",
                            not
                        ],
                        [
                            "<?php echo $target2;?>",
                            not2
                        ],
                    ]
                },
                {
                    "name": "Facebook",
                    "id": "Facebook",
                    "data": [
                        [
                            "<?php echo $target;?>",
                            nof
                        ],
                        [
                            "<?php echo $target2;?>",
                            nof2
                        ],
                    ]
                },
            ]
        }
    });

            </script>