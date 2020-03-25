<?php
$this->load->view('template/head');
?>

<!--tambahkan custom css disini-->
<!-- iCheck -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
<!-- DataTables -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"> -->


<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>-iCORONA</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-globe"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">GLOBAL</span>
                    <span class="info-box-number">
                        <?php echo $data_positif['value']; ?>
                    </span>
                    <span class="info-box-text">Total Positif</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-smile-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">GLOBAL</span>
                    <span class="info-box-number">
                        <?php echo $data_sembuh['value']; ?>
                    </span>
                    <span class="info-box-text">Total Sembuh</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-heartbeat"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">GLOBAL</span>
                    <span class="info-box-number">
                        <?php echo $data_meninggal['value']; ?>
                    </span>
                    <span class="info-box-text">Total Meninggal</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-flag"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">INDONESIA</span>
                    
                        <?php 
                            foreach($data as $a1){
                                foreach($a1 as $a2 => $val){
                                    if($val['Country_Region']=="Indonesia"){
                                        echo "<b>".$val['Confirmed']."</b> Positif<br/>";
                                        echo "<b>".$val['Deaths']."</b> Meninggal<br/>";
                                        echo "<b>".$val['Recovered']."</b> Sembuh<br/>";
                                    }
                                }
                            }
                        ?>
                    
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- <div class="row">
        <div class="col-md-12">
            <div class="box">
                 <div class="box-header with-border">
                    <h3 class="box-title">Monthly Recap Report</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <div class="btn-group">
                            <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div> -->
                <!-- <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center">
                                <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                            </p>
                            <div class="chart-responsive">
                                Sales Chart Canvas
                                <canvas id="salesChart" height="180"></canvas>
                            </div>
                        </div>
                    </div>
                </div> 
                
            </div>
        </div>
    </div> -->

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            <div class="box box-success">
                <!-- DISINI -->
                <div class="box">
                        <div class="box-header">
                        <h3 class="box-title">Live Data Global [COVID-19]</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                        <table id="table_id" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Negara</th>
                                    <th>Positif</th>
                                    <th>Meninggal</th>
                                    <th>Sembuh</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php $i = 1;
                                foreach ($data as $arr1) { 
                                    foreach ($arr1 as $arr2) { ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $arr2['Country_Region']. "<br>";?></td>
                                            <td><?php echo number_format($arr2['Confirmed'], 0, ',', '.'). "<br>";?></td>
                                            <td><?php echo number_format($arr2['Deaths']   , 0, ',', '.'). "<br>";?></td>
                                            <td><?php echo number_format($arr2['Recovered'], 0, ',', '.'). "<br>";?></td>
                                        </tr>
                            <?php $i++; }}  ?>
                            </tbody>
                        </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- END DISINI -->
            </div><!-- /.box -->

            <div class="col-md-4">
            <div class="box box-success">
                <div class="box" style="text-align:center;">
                        <div class="box-header">
                        <h3 class="box-title">Web Developer</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            iCORONA, 2020<br/>
                            Created by, <br/>
                            
                            <img width="30%" src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/ttd.png') ?>" class="img-circle"/><br/><br/>

                            <font color="red"><b>Aditria Pardana</b></font><br/>
                            +62 857 8147 6040
                        </div>
                </div>
            </div>
        </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->



<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<!-- Sparkline -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/chartjs/Chart.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard2.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>
<!-- DataTables -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script> -->
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>