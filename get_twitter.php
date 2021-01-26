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
$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q='.$cr.'&result_type=recent&count=100&include_rts=false&tweet_mode=extended');
//echo "<pre>";
//echo json_encode($tweets);
//print_r($tweets);
//echo "</pre>";
$result = array();

?>

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
                            <th style="width: 10%"><center>Nama</th>
                            <th style="width: 40%" ><center>Postingan</th>
                            <th style="width: 15%" ><center>Tanggal</th>
                            <th style="width: 10%" ><center>Lokasi</th>
                        </tr>
                    </thead>
                    <?php 
                    foreach ($tweets->statuses as $key => $tweet) {
                            if($tweet->user->location = 'Indonesia'){
                        ?>
                    <tbody>
                        <tr>
                            <td style="width: 10%"><center><?php echo $nama = $tweet->user->name;?></center></td>
                            <td style="text-align: center, width: 40%" ><center><?php echo $status = $tweet->full_text;?></center></td>
                            <td style="width: 15%" ><center><?php echo $tanggal = $tweet->created_at;?></center></td>
                            <td style="width: 10%" ><center><?php echo $lokasi = $tweet->user->location;?></center></td>
                    </tbody>
                 
                    <?php
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