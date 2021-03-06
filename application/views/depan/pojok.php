
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link href="<?php echo base_url('assets/template/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/template/bootstrap/css/bootstrap-responsive.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/template/css/theme.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/template/images/icons/css/font-awesome.css') ?>" rel="stylesheet" type="text/css" />
        <!-- <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet"> -->
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">ABC </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            
                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url()."assets/template/images/user.png" ?>" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active">
                                <a href="<?php echo site_url('Rama')?>">
                                <i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li>
                                    <a href="#"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>
                                <li>
                                <a href="<?php echo site_url('berita')?>">
                                <i class="menu-icon icon-inbox"></i>Berita <b class="label green pull-right">
                                    11</b> </a></li>
                                <li>
                                <a href="<?php echo site_url('pojok')?>">
                                <i class="menu-icon icon-tasks"></i>Pojok <b class="label orange pull-right">
                                    19</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <table class="table table-striped table-bordered table-condensed">
							<thead>
									<tr>
									  <th>ID</th>
									  <th>Foto</th>
									  <th>Judul Pojok</th>
									  <th>Tanggal Posting</th>
									  <th>Isi Pojok</th>
									  <th>Penulis</th>
									  <th>Aksi</th>
									</tr>
							</thead>
								<tbody>
									<tr>
									  <td>1</td>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td></td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>Jacob</td>
									  <td>Thornton</td>
									  <td>Thornton</td>
									  <td>Thornton</td>
                                      <td>@fat</td>
                                      <td></td>
									</tr>
									<tr>
									  <td>3</td>
									  <td>Larry</td>
									  <td>the Bird</td>
									  <td>the Bird</td>
									  <td>the Bird</td>
                                      <td>@twitter</td>
                                      <td></td>
									</tr>
								</tbody>
							</table>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2018 ramastudio.net </b>All rights reserved.
            </div>
        </div>
        <script src="<?php echo base_url('assets/template/scripts/jquery-1.9.1.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/template/scripts/jquery-ui-1.10.1.custom.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/template/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/template/scripts/flot/jquery.flot.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/template/scripts/flot/jquery.flot.resize.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/template/scripts/datatables/jquery.dataTables.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/template/scripts/common.js') ?>" type="text/javascript"></script>

      
    </body>
