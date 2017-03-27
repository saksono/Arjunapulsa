<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">

<section id="feature" class="transparent-bg" >
    <div class="container">

        
            <div class="get-started center wow fadeInDown animated" style="visibility: visible; 
                 animation-name: fadeInDown;">
                <h2>Cara Transaksi</h2>
                <p class="lead"></p>
            </div>

            <div class="row">
                <div class="col-md-12 col-xs-12">
                    
                </div>
            </div>
        
    </div>
</section>

<section id="middle">
    <div class="container">
        
        <!--<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">-->
        
        <div class="col-md-6 col-xs-6" style="text-align: left">
            <h3><span class="text-center">Kami sudah mendukung transaksi tanpa kode. Berlaku untuk semua pulsa 
                        all operator <b>REGULER</b>, kecuali <b>Paket SMS, Paket Internet / Data</b>, tidak perlu lagi menghafal kode-kode 
                        produk setiap provider.</span></h3>
        <h3>Format transaksi yang sering digunakan dapat dilihat pada sebelah kiri. 
            Spasi atau titik bisa digunakan sebagai pemisah, pada contoh semua 
            pemisah memakai titik, Format transaksi lengkap Arjuna Pulsa bisa dilihat pada tabel dibawah.</h3>
            
        <h3>Semua transaksi dikirim ke Center Transaksi:</h3>
        <table>
            <tr> <td style='width: 100px'><i class="fa fa-comment-o"> </i> INDOSAT  </td><td>0857.7151.4440</td></tr>
            <tr> <td style='width: 100px'><i class="fa fa-comment-o"> </i> SIMPATI  </td><td>0822.6014.4441</td></tr>
                <tr><td style='width: 100px'><i class="fa fa-comment-o"> </i> XL  </td><td>0878.8858.4442</td></tr>
            <tr><td style='width: 100px'><i class="fa fa-comment-o"> </i> AXIS  </td><td>0838.0687.4443</td>
            <tr><td><img src="<?php echo HTTP_BASE . 'assets/images/telegram-logo-green.png' ?>" height='15%' width='15%'> 
                    TELEGRAM  </td><td>
                @ArjunaPulsa_bot</td></tr>
            <tr><TD><img src="<?php echo HTTP_BASE . 'assets/images/nimbuzz-logo-icon.gif' ?>" height='15%' width='15%'>
                     NIMBUZZ  </TD><td>
                
                arjunapulsa_trx</td>
            
            </tr>
        </table>
       
        </div>
        
        <div class="col-md-6 col-xs-6">
                    <!--start accordion-->
                    <div class="accordion">
                        
                        <div class="panel-group active" id="accordion1">
                            <div class="panel panel-default">
                                <div class="panel-heading active">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                            TRANSAKSI PULSA ELEKTRIK DAN PLN
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseOne1" class="panel-collapse in" style="height: auto;">
                                    <div class="panel-body">
                                        <div class="media accordion-inner">

                                            <div class="media-body">
                                                <p>Format: <span class="text-danger">NOMINAL.NOMOR_TUJUAN.PIN</span><br>
                                                    Contoh: <span class="text-danger">10.081234567890.1234</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                            TRANSAKSI PULSA DATA DAN VOUCHER GAME
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo1" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        Format: <span class="text-danger">KODEPRODUK.NOMOR_TUJUAN.PIN</span><br>
                                        Contoh: <span class="text-danger">ID1GB.081234567890.1234</span>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo2">
                                            MULTI TRANSAKSI
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo2" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        Format: <span class="text-danger">NOMINAL.NOMOR_TUJUAN.NOMINAL.NOMOR_TUJUAN.PIN</span><br>
                                        Contoh: <span class="text-danger">10.081234567890.20.081812345678.1234</span>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" 
                                           href="#collapseTwo3">
                                            CEK SALDO
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo3" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        Format: <span class="text-danger">SAL.PIN</span><br>
                                        Contoh: <span class="text-danger">SAL.1234</span>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" 
                                           href="#collapseTwo4">
                                            CEK STATUS TRANSAKSI
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo4" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        Format: <span class="text-danger">CEK.NOMOR_TUJUAN</span><br>
                                        Contoh: <span class="text-danger">CEK.081234567890</span>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" 
                                           href="#collapseTwo5">
                                            DEPOSIT SALDO
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo5" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        Format: <span class="text-danger">TIKET.JUMLAH.PIN</span><br>
                                        Contoh: <span class="text-danger">TIKET.50000.1234</span>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" 
                                           href="#collapseTwo6">
                                            KOMPLAIN/KONFIRMASI TRANSAKSI
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo6" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        Format: <span class="text-danger">CS.KOMPLAIN?</span><br>
                                        Contoh: <span class="text-danger">CS.081234567890 tgl 01 Belum masuk</span>
                                    </div>
                                </div>
                            </div>

                        </div> 
                    </div>

                </div><!--end col-->
                    
               <!--</div>--> 
</section>                
</div>
                
<section id="feature" class="transparent-bg">
    <div class="container">
        <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <table class="table-bordered table-condensed table-hover" style="width: 100%">
                    <tr>
                        <th>Keterangan</th>
                        <th>Format Transaksi</th>
                    </tr>
                    <tr><td>Aktifkan downline/reseller</td><td>A.[kodereseller].[pin]</td></tr>
                    <tr><td>Batalkan transaksi yang belum diproses</td><td>BTL.[tujuan].[pin]</td></tr>
                    <tr><td>Cancel balance transfer</td><td>BATALTOPUP[spr][kodereseller][spr][jumlah][spr][pin]</td></tr>
                    <tr><td>Cek harga produk</td><td>CH[spr][kodeproduk][spr][pin]</td></tr>
                    <tr><td>Check downline's markup</td><td>CEKMARKUP[spr][kodereseller][spr][pin]</td></tr>
                    <tr><td>Cek mutasi saldo terakhir, khusus manual, tiket, dan transfer saldo</td><td>REKAP[spr][pin]</td></tr>
                    <tr><td>Cek saldo akhir</td><td>SAL[spr][pin]</td></tr>
                    <tr><td>Cek saldo downline</td><td>SD[spr][kodereseller][spr][pin]</td></tr>
                    <tr><td>Cek status transaksi</td><td>CEK[spr][tujuan]</td></tr>
                    <tr><td>Cek status transaksi</td><td>CEK[spr][tujuan][spr][tanggal]</td></tr>
                    <tr><td>Cek status transaksi terakhir</td><td>LAP[spr][pin]</td></tr>
                    <tr><td>Daftarkan downline/reseller baru</td><td>REG[spr][nama][spr][alamat][spr][nomorhp][spr][pin]</td></tr>
                    <tr><td>Daftarkan downline/reseller baru</td><td>REG[spr][nama][spr][alamat][spr][nomorhp][spr][pin][spr][markup]</td></tr>
                    <tr><td>Hapus pengirim tipe GTalk</td><td>HGT[spr][email][spr][pin]</td></tr>
                    <tr><td>Hapus pengirim tipe GTalk untuk downline</td><td>HGT[spr][kodereseller][spr][email][spr][pin]</td></tr>
                    <tr><td>Hapus pengirim tipe SMS</td><td>HN[spr][tujuan][spr][pin]</td></tr>
                    <tr><td>Hapus pengirim tipe SMS</td><td>HN[spr][kodereseller][spr][tujuan][spr][pin]</td></tr>
                    <tr><td>Hapus pengirim tipe YM</td><td>HYM[spr][yahooid][spr][pin]</td></tr>
                    <tr><td>Hapus pengirim tipe YM dari downline</td><td>HYM[spr][kodereseller][spr][yahooid][spr][pin]</td></tr>
                    <tr><td>Cek laporan mutasi saldo per tanggal</td><td>MUTASI[spr][tanggal][spr][pin]</td></tr>
                    <tr><td>Cek laporan transaksi per tanggal</td><td>LAP[spr][tanggal][spr][pin]</td></tr>
                    <tr><td>Lihat daftar downline</td><td>LDL[spr][pin]</td></tr>
                    <tr><td>Lihat daftar downline dari downline (sub-downline)</td><td>LDL[spr][kodereseller][spr][pin]</td></tr>
                    <tr><td>Lihat daftar pengirim semua tipe</td><td>LIST[spr][pin]</td></tr>
                    <tr><td>Lihat daftar pengirim tipe GTalk</td><td>LISTGT[spr][pin]</td></tr>
                    <tr><td>Lihat daftar pengirim tipe GTalk untuk downline</td><td>LISTGT[spr][kodereseller][spr][pin]</td></tr>
                    <tr><td>Lihat daftar pengirim tipe SMS</td><td>LISTNO[spr][pin]</td></tr>
                    <tr><td>Lihat daftar pengirim tipe SMS dari downline</td><td>LISTNO[spr][kodereseller][spr][pin]</td></tr>
                    <tr><td>Lihat daftar pengirim tipe YM</td><td>LISTYM[spr][pin]</td></tr>
                    <tr><td>Lihat daftar pengirim tipe YM dari downline</td><td>LISTYM[spr][kodereseller][spr][pin]</td></tr>
                    <tr><td>Non-aktifkan downline/reseller</td><td>NA.[kodereseller].[pin]</td></tr>
                    <tr><td>Reset pin member</td><td>RESET.[kodereseller].[pin]</td></tr>
                    <tr><td>Tambah pengirim tipe GTalk</td><td>TGT[spr][email][spr][pin]</td></tr>
                    <tr><td>Tambah pengirim tipe GTalk untuk downline</td><td>TGT[spr][kodereseller][spr][email][spr][pin]</td></tr>
                    <tr><td>Tambah pengirim tipe SMS</td><td>TN[spr][tujuan][spr][pin]</td></tr>
                    <tr><td>Tambah pengirim tipe SMS untuk downline</td><td>TN[spr][kodereseller][spr][tujuan][spr][pin]</td></tr>
                    <tr><td>Tambah pengirim tipe YM</td><td>TYM[spr][yahooid][spr][pin]</td></tr>
                    <tr><td>Tambah pengirim tipe YM untuk downline</td><td>TYM*[kodereseller]*[yahooid]*[pin]</td></tr>
                    <tr><td>Tiket Deposit</td><td>TIKET[spr][jumlah][spr][pin]</td></tr>
                    <tr><td>Transaksi pengisian pulsa</td><td>[trim][tujuan].[kodeproduk].[pin][trim]</td></tr>
                    <tr><td>Transaksi pengisian pulsa</td><td>[trim]{[kodeproduk][spr][tujuan][spr]}[pin][trim]</td></tr>
                    <tr><td>Transaksi pengisian pulsa</td><td>{[nominal][spr][tujuan][spr]}[pin]</td></tr>
                    <tr><td>Transaksi pengisian pulsa</td><td>{[kodeproduk][spr][tujuan]}[spr][pin]</td></tr>
                    <tr><td>Transaksi pengisian pulsa</td><td>{[nominal][spr][tujuan]}[spr][pin]</td></tr>
                    <tr><td>Transaksi pengisian pulsa</td><td>[trim][nominal][spr][tujuan][spr]{[kodeproduk][spr][tujuan][spr]}[pin][trim]</td></tr>
                    <tr><td>Transaksi pengisian pulsa</td><td>[nominal][spr][counter][spr][tujuan][spr][pin][trim]</td></tr>
                    <tr><td>Transaksi pengisian pulsa</td><td>[nominal][spr][counter][spr][tujuan][spr][pin]</td></tr>
                    <tr><td>Transaksi pengisian pulsa</td><td>[kodeproduk][spr][tujuan][spr][pin]</td></tr>
                    <tr><td>Transaksi pengisian pulsa</td><td>[kodeproduk][spr][counter][spr][tujuan][spr][pin]</td></tr>
                    <tr><td>Transaksi pengisian pulsa</td><td>{[kodeproduk][spr][tujuan]}[spr][pin]</td></tr>
                    <tr><td>Transfer saldo/deposit ke downline/reseller</td><td>TOPUP[spr][kodereseller][spr][jumlah][spr][pin]</td></tr>
                    <tr><td>Ubah level downline</td><td>UL.[kodereseller].[kodelevel].[pin]</td></tr>
                    <tr><td>Change downline's markup</td><td>MARKUP[spr][kodereseller][spr][markup][spr][pin]</td></tr>
                    <tr><td>Ubah nama</td><td>UN.[nama].[pin]</td></tr>
                    <tr><td>Ubah PIN</td><td>GP.[pin].[pinbaru]</td></tr>

                </table>
            </div>
            </div>
        </div>
    </div>
</section>