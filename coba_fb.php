<!-- Data Table area End-->
    <div class="data-table-area2">
        <div class="container" id="tampil_get">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                       <br>
                        <div class="basic-tb-hd">
                     
                            <h2>SIMILARITY</h2>
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
        $strFB = mysqli_query($con,"SELECT id_fb,status_fb FROM facebook LIMIT 100");
        $i=0;
        $start1 = microtime(true);
        
        //$target =  @$_POST['cari'];
        $target =  @$_REQUEST['cari'];
        $target2 =  @$_REQUEST['cari2'];
                        
        //buat nampung status FB                
        $tokensFB2=array();
            
        $jaro1FB=array();
        $levenshtein1FB=array();

        $tresholdFB = array();
        $maksjrFB = array();

        // variabel untuk menampung similarity jaro
        @$coba1FB = array();
        @$coba2FB = array();

        //untuk menampung maks jr dan ed
        $tres_jrFB = array();
        $tres_levenshtein = array();

        $makslvFB=0;
        $maksjrFB=0;
          
        // echo count($_POST['postingan']);

        while($dataFB=mysqli_fetch_array($strFB)){
            $statusFB[] = $dataFB['status_fb'];
            //$nama[] = $data['NAMA'];
        } //end while 
        ?>
                                                        
                <?php        
                $noFB2 = 0;
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
                            }
                            else{
                            $coba1FB[$bFB2][$aFB2]=$makslvFB;
                            }
                            //mencari nilai Maksimal Levenstein per status
                            if(JaroWinkler($target2, $tokensFB2[$aFB2])>$maksjrFB){
                                $coba2FB[$bFB2][$aFB2]=JaroWinkler($target2, $tokensFB2[$aFB2]);
                            }
                            else{
                                $coba2FB[$bFB2][$aFB2]=$maksjrFB;
                            }
                            
            } // end for nampilin per kata
            
            //MENCARI STATUS YANG LOLOS TRESHOLD
            $tresholdFB=0.8;
            if((max(@$coba2FB[$bFB2]))>=$tresholdFB){

            $noFB2++;
            ?>
            <tr>
                <td>
                    <center>
                        <?php echo $noFB2;?>
                    </center>
                </td>
                
                <td>
                    <?php
                        echo $statusFB[$bFB2]; echo"<br>";
                    ?>
                </td>
                
                <td>
                    <center>
                        <?php print_r(max($coba2FB[$bFB2]));?>
                    </center>
                </td>
            </tr>
            <?php 
                }
            else{

                     }   
                }//end for looping status                        
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