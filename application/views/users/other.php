<!DOCTYPE html>
<html>
   <head>
      <title>TECHNOIDEA | Empowering Your Company</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <meta name="description" content="Mlijo is a market place of food and cullinary" />
      <meta name="author" content="Btb Group" />
      <link rel="shortcut icon" type="image/x-icon" href="<?=base_img()."logo.png"?>">
       
        <!-- URL Theme Color untuk Chrome, Firefox OS, Opera dan Vivaldi -->
        <meta name="theme-color" content="#fff" />
        <!-- URL Theme Color untuk Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#fff" />
        <!-- URL Theme Color untuk iOS Safari -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="#fff" />        
       
      <link href="<?=base_css()."bootstrap.min.css"?>" rel="stylesheet" />
      <link href="<?=base_css()."bootstrap-select.min.css"?>" rel="stylesheet">
      <link href="<?=base_css()."font-awesome.min.css"?>" rel="stylesheet">  
      <link href="<?=base_css()."animate.min.css"?>" rel="stylesheet" />      
      <link href="<?=base_css()."screen.css"?>" rel="stylesheet" />
      <link href="<?=base_css()."home.css"?>" rel="stylesheet">
      <link href="<?=base_css()."main.css"?>" rel="stylesheet" />    
      <link href="<?=base_css()."ripples.min.css"?>" rel="stylesheet">
      <link href="<?=base_css()."snackbar.min.css"?>" rel="stylesheet"> 
	    <link href="<?=base_css()."main.css"?>" rel="stylesheet">
	    <link href="<?=base_css()."responsive.css"?>" rel="stylesheet">
      <link href="<?=base_css()."owl.carousel/owl.transitions.css"?>" rel="stylesheet">
      <link href="<?=base_css()."owl.carousel/owl.carousel.css"?>" rel="stylesheet">
      <link href="<?=base_css()."owl.carousel/owl.theme.css"?>" rel="stylesheet">  

      <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'> 

      <style>

          /* -------- Snippets Grid -------- */

          #pinBoot {
            position: relative;
            max-width: 100%;
            width: 100%;
          }
          .white-panel img {
            width: 100%;
            max-width: 100%;
            height: auto;
            border-radius: 10px 10px 10px 10px;
          }

          a.tags { display: none; }

          .white-panel {
            position: absolute;
            background: white;
            
            border-radius: 10px;
            z-index: 1;
            padding: 0px;
            outline: 0;
            border: 0;
          }  
          .white-panel:hover {
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
            margin-top: -5px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
          }             
          .white-panel:hover .tags {
            top: 1em;
            left: 1em;
            width: 80% auto;
            padding: 5px 15px 5px 15px;
            display: block;
            font-size: 13px;
            font-family: "Calibri Light";  
            font-weight: 900;
            text-align: center;
            position: absolute;
            border-radius: 6px;
            box-shadow: 0px 3px 2px rgba(0, 0, 0, 0.3);
            background-color:rgba(0, 150, 136, 0.8);
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: white;
            z-index: 9;
          }                 
          .white-panel h4 {
            color: #343435;  
            padding: 15px 15px 0px 15px;
            font-size: 15px;
            font-weight: 900;
            line-height: 1em;
            font-family: "Lato";
          }
          .white-panel p {
            color: #343435;  
            font-size: 12px;
            font-weight: 900;
            line-height: 1em;
            font-family: "Calibri Light";
          }

          .tags-detail {
            top: 1em;
            left: 1em;
            width: 80% auto;
            padding: 10px 15px 10px 15px;
            display: block;
            font-size: 13px;
            font-family: "Calibri Light";  
            font-weight: 900;
            text-align: center;
            position: absolute;
            box-shadow: 0px 3px 2px rgba(0, 0, 0, 0.3);
            background-color: #3498db;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: white;
            z-index: 9;
          } .tags-detail:hover {
            color: white;
          }

          .form-group.comment {
            background-color: transparent;
            position: fixed;
            border-radius: 0px;
            display: block;
            width: 100% auto;
            height: 3em;
            margin: 0;
            bottom: 0;
          } 
      </style>          
       
   </head>
   <body class="home">

      <!-- Header -->
      <header class="main-header">
         <div class="container">
            <div class="header-content">        
<!--                <nav class="site-nav">
                  <ul class="clean-list site-links" style="margin-top:-1em;">
                    <img src="<?= base_img()."icon/technoidea.png" ?>" width="40px">
                    <a class="btn btn-white" style="background-color:transparent;font-weight:700;">IYOPARK</a>
                  </ul>
                </nav> -->

               <nav class="site-nav">
                  <ul class="clean-list site-links">
                      <?php
                      if(isset($this->session->userdata('sc_sess')['UserId'])) {
                        $UserEmail = $this->session->userdata('sc_sess')['UserEmail'];
                        $UserEmail = substr($UserEmail, strpos($UserEmail,"<")+0, strrpos($UserEmail, "@")-strpos($UserEmail,"<")-0);  
                        $UserId = $this->session->userdata('sc_sess')['UserId'];
                        $Remember = $this->session->userdata('sc_sess')['Remember'];  
                      ?>                   
                      <div class="btn-group">
                      <a href="<?=site_url('index.php/auth/logout')?>" class="btn btn-white"><?=$UserEmail?></a>
                      </div>      
                      <?php
                      } else {
                      ?>    
 
                      <a id="modal_trigger" href="<?php echo base_url()."index.php"?>"> <img src="<?=base_img()."technoidea.png"?>" width="140px" height="120px"></a> 
                      <div class="alert-top">
                          <?=$this->session->flashdata('regMsg')?>
                      </div>
                      <?php
                      }         
                      ?>
                  </ul>     
               </nav>
                
            </div>
         </div>
      </header>
       <br><br><br><br><br><br><br><br><br><br>
         <!-- Hero Section -->
         <section class="section section-hero">
               <div class="container">
                    <div class="col-md-12 first">
                             <div class="features bg-white" id="features">
        <div class="container">
        <center>

               <div class="col-md-8">
                    <div class="media">
                        <img src="<?=base_img()."icon/instagram.png"?>">
                        <div class="media-body">
                            <h3 class="mt-0">Import Produk dari Instagram</h3>
                            <p>Jika Anda berjualan di Instagram, fitur ini akan memudahkan Anda meng-import produk dari Instagram ke Ngorder.</p>
                        </div>
                    </div>
                </div>

                
                <div class="col-md-8">
                    <div class="media">
                        <img src="<?=base_img()."icon/data.png"?>">
                        <div class="media-body">
                            <h3 class="mt-0">Export dan Import data penjualan</h3>
                            <p>Anda dapat melakukan Import dan Export data penjualan, Data Produk, dan Data Customer dengan format Excel dengan mudah.</p>
                        </div>
                    </div>
                </div>     

                

                <div class="col-md-8">
                    <div class="media">
                        <img src="<?=base_img()."icon/sms.png"?>">
                        <div class="media-body">
                            <h3 class="mt-0">Auto SMS Resi</h3>
                            <p>Auto SMS Resi memungkinkan Anda mengirim SMS notifikasi Nomor Resi secara otomatis kepada Customer.</p>
                        </div>
                    </div>
                </div> 
                     
                 

                <div class="col-md-8">
                    <div class="media">
                        <img src="<?=base_img()."icon/ongkir.png"?>">
                        <div class="media-body">
                            <h3 class="mt-0">Hitung Ongkos Kirim Otomatis</h3>
                          <p>Biasanya Customer akan bertanya Ongkir ke tempatnya. Dengan Ngorder, Anda tidak perlu menghitung ongkir secara manual, setiap input order akan dihitung ongkirnya secara otomatis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="media">
                        <img src="<?=base_img()."icon/lacak.png"?>">
                        <div class="media-body">
                            <h3 class="mt-0">Lacak Pengiriman</h3>
                            <p>Tidak perlu lagi buka aplikasi atau web lain buat melacak pengiriman. Dengan praktisnya Anda bisa memantau pengiriman barang, mulai dari Expedisi hingga sampai di tangan Customer</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="media">
                        <img src="<?=base_img()."icon/stock-history.png"?>">
                        <div class="media-body">
                            <h3 class="mt-0">Stock History</h3>
                            <p>Dengan fitur ini Anda akan tahu aliran masuk dan keluar setiap produk di toko Anda. Setiap ada Stok yang bertambah atau berkurang akan dicatat.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="media">
                        <img src="<?=base_img()."icon/expense.png"?>">
                        <div class="media-body">
                            <h3 class="mt-0">Laporan Expense / Pengeluaran</h3>
                            <p>Dalam berjualan tentu ada biaya-biaya operasional lain yang akan mengurangi profit kita. Ngorder akan mencatatnya dan melaporkan Profit Bersih yang Anda dapatkan.</p>
                        </div>
                    </div>
                </div> 

                <div class="col-md-8">
                    <div class="media">
                        <img src="<?=base_img()."icon/analyzer.png"?>">
                        <div class="media-body">
                            <h3 class="mt-0">Analyzer</h3>
                            <p>Ngorder akan menganalisa penjualan Anda seperti Best Seller Products, Best Customers, Top Customer Locations, dan perbandingan hasil penjualan dari hari ke hari.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="media">
                        <img src="<?=base_img()."icon/private-order.png"?>">
                        <div class="media-body">
                            <h3 class="mt-0">Private Order System</h3>
                            <p>Punya ribuan reseller tapi masih order secara manual? Dengan Private Order System sekarang mereka dapat order secara langsung semudah belanja di toko online. Mereka juga bisa cek stok realtime.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="media">
                        <img src="<?=base_img()."icon/akses.png"?>">
                        <div class="media-body">
                            <h3 class="mt-0">Hak Akses untuk Owner, Admin dan Shipper</h3>
                            <p>Pusing mengurus toko sendirian? Anda butuh admin untuk membantu dan mungkin petugas pengirim barang. Ngorder memberikan hak akses yang berbeda-beda untuk mereka sesuai perannya.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="media">
                        <img src="<?=base_img()."icon/sales-admin.png"?>">
                        <div class="media-body">
                            <h3 class="mt-0">Monitor Penjualan Admin</h3>
                            <p>Jika Anda mempunyai beberapa Admin, dengan Ngorder Anda dapat mengetahui penjualan masing-masing Admin, dan Anda dapat memberikan bonus kepada mereka sesuai kinerjanya.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="media">
                        <img src="<?=base_img()."icon/label.png"?>">
                        <div class="media-body">
                            <h3 class="mt-0">Cetak Label Pengiriman</h3>
                            <p>Memungkinkan Anda untuk mencetak label pengiriman untuk setiap orderan. Anda juga dapat meng-kostumisasi label dengan menambah logo dan deskripsi toko serta daftar barang yang dipesan.</p>
                        </div>
                    </div>
                </div>


                
                </center> 
                    
                  </div> 

               </div>
               <br><br><br><br><br><br><br><br><br><br>
                  
            </div>
         </section> 

         
            </div>
         </section>                                 
      </div>    
       
      <?php $this->load->view('users/modals/fauth'); ?>
      <?php $this->load->view('masterpages/foot'); ?> 
       
        <!-- Custom Javascript -->
        <script type="text/javascript" src="<?=base_js()."page/home.js"?>" ></script>
        <!-- End Custom Javascript -->       
  
        <script type="text/javascript">
          $(document).ready(function () {    
              $(function(){
                $.material.init();
                $('.modal-dialog').draggable(); 
                $('input[data-toggle="popover"]').popover({
                    placement: 'top', trigger: 'focus'
                });

                /* Start : Tentang Kami */
                $(".to-maksud-tujuan").click(function(){              
                  $(".portlet .portlet-body.visi-misi").hide();  
                  $(".portlet .portlet-body.tugas-fungsi").hide();
                  $(".portlet .portlet-body.maksud-tujuan").show();  
                  $("#sizing-tentang").attr("class", "modal-dialog modal-lg");                  
                });   
                $(".to-tugas-fungsi").click(function(){              
                  $(".portlet .portlet-body.visi-misi").hide();  
                  $(".portlet .portlet-body.maksud-tujuan").hide();
                  $(".portlet .portlet-body.tugas-fungsi").show();
                  $("#sizing-tentang").attr("class", "modal-dialog modal-lg");               
                });              
                $(".to-visi-misi").click(function(){   
                  $(".portlet .portlet-body.maksud-tujuan").hide();  
                  $(".portlet .portlet-body.tugas-fungsi").hide();                      
                  $(".portlet .portlet-body.visi-misi").show();   
                  $("#sizing-tentang").attr("class", "modal-dialog modal-lg");              
                }); 
                /* End : Tentang Kami */                     
              });   

              //minimum 8 characters
              var bad = /(?=.{8,}).*/;
              //Alpha Numeric plus minimum 8
              var good = /^(?=\S*?[a-z])(?=\S*?[0-9])\S{8,}$/;
              //Must contain at least one upper case letter, one lower case letter and (one number OR one special char).
              var better = /^(?=\S*?[A-Z])(?=\S*?[a-z])((?=\S*?[0-9])|(?=\S*?[^\w\*]))\S{8,}$/;
              //Must contain at least one upper case letter, one lower case letter and (one number AND one special char).
              var best = /^(?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9])(?=\S*?[^\w\*])\S{8,}$/;

              $('#RegPass').on('keyup', function () {
                  var password = $(this);
                  var pass = password.val();
                  var passLabel = $('[for="password"]');
                  var stength = 'Weak';
                  var pclass = 'danger';
                  if (best.test(pass) == true) {
                      stength = 'Very Strong';
                      pclass = 'success';
                  } else if (better.test(pass) == true) {
                      stength = 'Strong';
                      pclass = 'warning';
                  } else if (good.test(pass) == true) {
                      stength = 'Almost Strong';
                      pclass = 'warning';
                  } else if (bad.test(pass) == true) {
                      stength = 'Weak';
                  } else {
                      stength = 'Very Weak';
                  }

                  var popover = password.attr('data-content', stength).data('bs.popover');
                  popover.setContent();
                  popover.$tip.addClass(popover.options.placement).removeClass('danger success info warning primary').addClass(pclass);

              });

          });
        </script>       
   </body> 

</html>
