<section id="feature" class="transparent-bg" >
    <div class="container">

        <div class="Center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">

            <div class="get-started center wow fadeInDown animated" style="visibility: visible; 
                 animation-name: fadeInDown;">
                <h2>Daftar Harga Arjuna Pulsa</h2>
                <p class="lead">Last Update 27-Maret-2017.</p>
             </div>
            </div>
        
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <table id='tbl_harga' class="table-bordered table-condensed table-hover table-responsive" style="width: 100%">
                        <thead>
                            <tr><td>KODE</td><td>KETERANGAN</td><td>HARGA</td><td>STATUS</td></tr>
                        </thead>
                        <?php
                                mydata(HTTP_BASE.'assets/upload/harga.txt');
                        ?>
                    </table>
                </div>
                
            </div>         
        
    </div><!--end container-->
</section>

<?php
function mydata($file_path,$start_line=0,$end_line=0)
{
$urldatafile = file($file_path) or die("Sorry, Couldn't load data!!");
if($end_line==0){
    $linecount = count($urldatafile);
    $end_line = $linecount;
}
$array_data = array_slice($urldatafile, $start_line, $end_line);
    //echo "<table>";
    foreach ($array_data as $data)
    { 
    $data = explode("|", $data);

    
    if($data[3] == 0){
        $status = '<span class="text-primary">Open</span>';
    }else{
        $status = '<span class="text-danger">Gangguan</span>';    
        }
    
    //$status = 'Open';
    echo "<tr>";
        echo "<td>{$data[0]}</td><td>{$data[1]}</td><td>{$data[2]}</td><td>$status</td>";
    echo "</tr>";
    }
    //echo "</table>";
}
?>

