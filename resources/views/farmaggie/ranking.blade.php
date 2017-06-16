<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Farmaggie Ranking</title>
        <link type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ URL::asset('css/theme.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ URL::asset('images/icons/css/font-awesome.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ URL::asset('http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600')}}"
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="{{ URL::asset('index.html')}}">Farmaggie Ranking </a>
                  
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
                                <li class="active"><a href="{{ URL::asset('farm/ranking')}}"><i class="menu-icon icon-dashboard"></i>หน้าหลักสถิติ
                                </a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>เกี่ยวกับ </a>
                                </li>
                                <li><a href="{{ URL::asset('farm/login')}}"><i class="menu-icon icon-signout"></i>เข้าสู่ระบบ Farmaggie <b class="label green pull-right">
                                    beta</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->

                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>65%</b>
                                        <p class="text-muted">
                                            ยอดผู้ใช้งานเติบโต</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b>15 คน</b>
                                        <p class="text-muted">
                                            มีผู้ใช้ใหม่</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>1,080 ตัว</b>
                                        <p class="text-muted">
                                            ผู้ใช้ขายหมูไปได้แล้วทั้งหมด</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                            
                                    <ul class="widget widget-usage unstyled span12">
                                        <li>
                                            <p>
                                                <strong>ภาคกลาง</strong> <span class="pull-right small muted">30%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar" style="width: 30%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>ภาคตะวันออก</strong> <span class="pull-right small muted">10%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width: 10%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>ภาคตะวันออกเฉียงเหนือ</strong> <span class="pull-right small muted">20%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width: 20%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>ภาคตะวันตก</strong> <span class="pull-right small muted">40%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-danger" style="width: 40%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>ภาคใต้</strong> <span class="pull-right small muted">10%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-danger" style="width: 10%;">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/#btn-controls-->
                        
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        อันดับฟาร์มคุณภาพในระบบ Farmaggie</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <script>
                                            $(document).ready(function() {
                                            $('datatable-1').dataTable( {
                                                "aaSorting": [[ 4, "asc" ]]
                                            } );
                                        } );
                                        </script>
                                        <thead>
                                            <tr>
                                                <th>
                                                    ชื่อฟาร์ม
                                                </th>
                                                <th>
                                                    จังหวัด
                                                </th>
                                                <th>
                                                    ประเภทของฟาร์ม
                                                </th>
                                                <th>
                                                    มาตรฐานรับรอง
                                                </th>
                                                <th>
                                                    คะแนนรวม
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>
                                                    สุขเจริญฟาร์ม
                                                </td>
                                                <td>
                                                    หนองคาย
                                                </td>
                                                <td>
                                                    ขนาดใหญ่
                                                </td>
                                                <td class="center">
                                                    GCP, ISO9001
                                                </td>
                                                <td class="center">
                                                    98
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    ตามรอยพ่อฟาร์ม
                                                </td>
                                                <td>
                                                    กรุงเทพมหานคร
                                                </td>
                                                <td>
                                                    ขนาดเล็ก
                                                </td>
                                                <td class="center">
                                                    GCP, ISO9001
                                                </td>
                                                <td class="center">
                                                    98.5
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มแอกกี้
                                                </td>
                                                <td>
                                                    กรุงเทพมหานคร
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    GCP, ISO9001
                                                </td>
                                                <td class="center">
                                                    100
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    พุฒิพงษ์ 2541 ฟาร์ม
                                                </td>
                                                <td>
                                                    จันทบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    95
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    เจริญโภคภัณฑ์
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดใหญ่
                                                </td>
                                                <td class="center">
                                                    GCP, ISO9001
                                                </td>
                                                <td class="center">
                                                    99.5
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    แฮปปี้คนเลี้ยงหมูฟาร์ม
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    GCP, ISO9001
                                                </td>
                                                <td class="center">
                                                    94
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มเสรี
                                                </td>
                                                <td>
                                                    ตาก
                                                </td>
                                                <td>
                                                    ขนาดเล็ก
                                                </td>
                                                <td class="center">
                                                    GCP, ISO9001
                                                </td>
                                                <td class="center">
                                                    91
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    เพชรบุรีฟาร์ม
                                                </td>
                                                <td>
                                                    เพชรบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    GCP
                                                </td>
                                                <td class="center">
                                                    83
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    เบทาโกรฟาร์ม
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดใหญ่
                                                </td>
                                                <td class="center">
                                                    GCP, ISO9001
                                                </td>
                                                <td class="center">
                                                    97
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    อัศนีย์การเกษตร
                                                </td>
                                                <td>
                                                    นครปฐม
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    ISO9001
                                                </td>
                                                <td class="center">
                                                    88
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr><tr class="odd gradeX">
                                                <td>
                                                    ฟาร์มตัวอย่าง
                                                </td>
                                                <td>
                                                    ราชบุรี
                                                </td>
                                                <td>
                                                    ขนาดกลาง
                                                </td>
                                                <td class="center">
                                                    null
                                                </td>
                                                <td class="center">
                                                    0
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
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
                <b class="copyright">&copy; 2017 Farmaggie </b>All rights reserved.
            </div>
        </div>
        <script src="{{ URL::asset('scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('scripts/flot/jquery.flot.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('scripts/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('scripts/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('scripts/common.js')}}" type="text/javascript"></script>
      
    </body>
