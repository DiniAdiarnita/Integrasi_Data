<?php

include "twitteroauth.php";
include "koneksi.php";

$consumer_key = "HCuFEesqFrpg3hCr6kxDVyeXs";
$consumer_secret = "VtWDSeiIqwpvvImHkHBVKr7hXgJMqqz7EIY6JWC4H4GQlQqtwo";
$access_token = "1046742898098626561-27kcGulTgtIRAc5cYt1uviCN0LioPe";
$access_token_secret = "29Eto8zevy3EkahlLeZL7kpp3fYYFpvKfnZ9UNGnECCQq";

$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
if(isset($_POST['idcari'])){
    $cr = $_POST['idcari'];
$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q='.$cr.'&result_type=recent&count=50&include_rts=false&tweet_mode=extended');

//echo "<pre>";
//echo json_encode($tweets);
//print_r($tweets);
//echo "</pre>";
$result = array();

?>
<!-- //Perform the reuqest -->
<!-- $twitter = new TwitterAPIExchange($settings);
$json_data = $twitter->setGtfield($getfield)
                    ->buildOauth($url, $requestMethod)
                    ->performRrequest(); -->

<!-- echo $json_data; -->

<!-- menjadi format JSON ke ARRAY -->
<!-- $array_data = json_decode($json_data, true); -->

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="data-table-list">
            <div class="basic-tb-hd">
                <h2>Data Terbaru Twitter</h2>
            </div>
            <div class="table-responsive">
                <table id="data-table-basic" class="table table-striped">
                    <thead>
                        <tr>
                            <th><center>Nama</th>
                            <th><center>Postingan</th>
                            <th><center>Tanggal</th>
                            <th><center>Lokasi</th>
                        </tr>
                    </thead>
                    <?php 
                    foreach ($tweets->statuses as $key => $tweet) {
                    ?>
                    <tbody>
                        <tr>
                            <td><center><?php echo $nama = $tweet->user->name;?></center></td>
                            <td><center><?php echo $status = $tweet->full_text;?></center></td>

                            <!-- <td><center>
                                <?php 
                                $string = $status;
                                $token = strtok($string,' ');
                                while($token !==false){
                                    echo "$token,' '";
                                    $token=strtok(' ');
                                }
                                ?>
                                </center></td> -->

                            <td><center><?php echo $tanggal = $tweet->created_at;?></center></td>
                            <td><center><?php echo $lokasi = $tweet->user->location;?></center></td>
                    </tbody>
                    
                    <?php

                        $sql ="INSERT INTO twitter values ('$nama', '$status','$tanggal','$lokasi')";
                        mysqli_query($con,$sql); 
                    }
                    ?>
                    
                </table>
            </div>
        </div>
    </div>
</div>
<?php  }else{
  echo "Data tidak masuk";
}
?>
    <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>

 