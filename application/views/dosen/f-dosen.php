<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Data Dosen</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url('assets/mdi-font/css/material-design-iconic-font.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/font-awesome-4.7/css/font-awesome.min.css') ?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i') ?>" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/select2/select2.min.css') ?> rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/datepicker/daterangepicker.css') ?> rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('css/main.css') ?>" rel="stylesheet" media="all">
</head>

<body>
  <section id="t_dosen" class="dosen section-bg">
      <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
              <div class="card-body">
                <h2 class="title">Dosen</h2>
                  <form action="<?php echo base_url('/dosen/Dosen/input_t_dosen')?> " method="post" role="form" class="">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NIDN</label>
                                    <input class="input--style-4" type="text" name="NIDN" class="form-control" id="NIDN" placeholder="NIDN" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama</label>
                                    <input class="input--style-4" type="text" name="ds_nm" class="form-control" id="nama" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                    <div class="validate"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                              <div class="input-group">
                                  <label class="label">Gelar Depan</label>
                                  <input class="input--style-4" type="text" name="gelardepan" class="form-control" id="gelar depan" placeholder="Gelar Depan" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                  <div class="validate"></div>
                              </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-0">
                                  <div class="input-group">
                                      <label class="label">Gelar Belakang</label>
                                      <input class="input--style-4"type="text" name="gelarbelakang" class="form-control" id="gelar belakang" placeholder="Gelar Belakang" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                      <div class="validate"></div>
                                  </div>
                                </div>
                              </div>
                        <div class="row row-space">
                            <div class="col-2">
                              <div class="input-group">
                                  <label class="label">Email</label>
                                  <input class="input--style-4" type="email" name="ds_email" class="form-control" id="email" placeholder="Your Email" data-rule="minlen:4" data-msg="Please enter you">
                                  <div class="validate"></div>
                              </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="ds_tlp" class="form-control" id="no_telp" placeholder="Your Number" data-rule="minlen:4" data-msg="Please enter your number">
                                    <div class="validate"></div>
                                </div>
                            </div>
                        </div>
                            <div class="p-t-15">
                            <div class="btn btn--radius-2 btn--blue"><button type="submit" name="submit">Submit</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url('assets/select2/select2.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datepicker/moment.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datepicker/daterangepicker.js') ?>"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url('js/global.js') ?>"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
