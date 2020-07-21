<!DOCTYPE html>
<html dir="ltr" lang="th">
<head>

    <meta charset="utf-8">
    <link rel="shortcut icon" href="0000" type="image/x-icon">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/action.js"></script>
    <link rel="stylesheet" type="text/css" href="css\Sty.css" media="all">
    <link rel="stylesheet" type="text/css" href="C:\Users\sskza\Music\WEBสาขา\หน้าแรก _ มหาวิทยาลัยแม่ฟ้าหลวง Mae Fah Luang University_files\styles.css" media="all">
    <link rel="stylesheet" type="text/css" href="https://www.mfu.ac.th/fileadmin/templates/assets/css/styles.css?1549456063" media="all">
    <script src="https://www.mfu.ac.th/https://www.mfu.ac.th/typo3conf/ext/df_tabs/Resources/Public/Scripts/jquery.tabs.js?1497962408" type="text/javascript"></script>
    <script src="https://www.mfu.ac.th/typo3temp/Assets/bd4d1f63e4.js?1504949271" type="text/javascript"></script>
	<script src="https://www.mfu.ac.th/uploads/tx_t3jquery/jquery-1.12.x-1.10.x-1.2.x-3.0.x.js?1497969133" type="text/javascript"></script>
    <script src="https://www.mfu.ac.th/typo3conf/ext/bootstrap_grids/Resources/Public/Flexslider2/jquery.flexslider-min.js?1497962404" type="text/javascript"></script>
    <script src="https://www.mfu.ac.th/fileadmin/templates/assets/js/jquery.bxslider.min.js?1500908516" type="text/javascript"></script>
    <script src="https://www.mfu.ac.th/typo3conf/ext/jpfaq/Resources/Public/Javascript/jpFaq.js?1497962474" type="text/javascript"></script>
    <script src="https://www.mfu.ac.th/fileadmin/templates/assets/magnificpopup/jquery.magnific-popup.js?1536482759" type="text/javascript"></script>
    <title>หน้าแรก &#124; Computer Science SSKRU </title>
    <style>
        body,
        img {
            -webkit-filter: grayscale(0%) !important;
            filter: grayscale(0%) !important;
        }
    </style>


	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>

<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <a class="navbar-brand" href="file:///C:/Users/sskza/Music/WEBสาขา/index.html" title="Computer Science SSKRU">
                        <img class="img img-responsive" src="https://i.imgur.com/MAY7em0.png">
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="col-md-4 col-lg-4 hidden-xs hidden-sm">
                    <form class="pull-left" id="cse-search-box" method="get" action="">
                        <input type="hidden" name="cx" value="018403195813140201399:aspduyb8l08">
                        <input type="hidden" name="cof" value="FORID:10">
                        <input type="hidden" name="ie" value="UTF-8">
                        <input type="text" class="tftextinput" name="q" size="14" maxlength="120" placeholder="ค้นหา">
                        <input type="submit" name="sa" value="search" class="tfbutton">
                    </form>
                    <div class="tx-srlanguagemenu tx-srlanguagemenu-links pull-right">

                    </div>
                </div>
            </div>
            <!-- Desktop Shortcut Menu -->
            <div class="shortcutmenu clear-fix hidden-xs hidden-sm font-16" role="navigation">
                <div class="container">
                </div>
                <!-- /.container -->
            </div>
        </div>
    </div>
    <!-- /.container -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <div class="container">
            <div class="topnav clear-fix hidden-md hidden-lg">
                <div class="row">
                    <div class="col-xs-8">
                        <form id="cse-search-box" method="get" action="">
                            <input type="hidden" name="cx" value="018403195813140201399:aspduyb8l08">
                            <input type="hidden" name="cof" value="FORID:10">
                            <input type="hidden" name="ie" value="UTF-8">
                            <input type="text" class="tftextinput" name="q" size="14" maxlength="120" placeholder="ค้นหา">
                            <input type="submit" name="sa" value="search" class="tfbutton">
                        </form>
                    </div>
                    <div class="col-xs-4">
                        <div class="float-right">
                            <div class="tx-srlanguagemenu tx-srlanguagemenu-links">
                                <div class="CUR"><a class="linked-language" href="WEBสาขา\index.html">TH</a></div>
                                <div class="NO SPC"><a class="linked-language" href="WEBสาขา\index.html">EN</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a onclick="showHomePage()" target="_self" title="หน้าแรก">หน้าแรก</a></li>

                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">เกี่ยวกับสาขา<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown"><a onclick="showHistoryPage()" target="_self" title="ประวัติ">ประวัติ</a></li>
                        <li class="dropdown"><a onclick="showCoursePage()" target="_self" title="แนะนำสาขา">หลักสูตร</a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">นักศึกษา<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown"><a onclick="showPageStudent(<?php echo 543+date("Y")-2500;   ?>)" target="_self" title="ชั้นปีที่ 1">ชั้นปีที่ 1</a></li>
                        <li class="dropdown"><a onclick="showPageStudent(<?php echo 543+date("Y")-2500-1; ?>)" target="_self" title="ชั้นปีที่ 2">ชั้นปีที่ 2</a></li>
                        <li class="dropdown"><a onclick="showPageStudent(<?php echo 543+date("Y")-2500-2; ?>)" target="_self" title="ชั้นปีที่ 3">ชั้นปีที่ 3</a></li>
                        <li class="dropdown"><a onclick="showPageStudent(<?php echo 543+date("Y")-2500-3; ?>)" target="_self" title="ชั้นปีที่ 4">ชั้นปีที่ 4</a></li>
                        <li class="dropdown"><a onclick="showtable()" target="_self" title="นักศึกษา">ศิษย์เก่า</a></li>
                        <li class="dropdown"><a onclick="alert('ยังไม่ลิ้งค์นะจ๊ะ')" title="นักศึกษา">นักศึกษา</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">อาจารย์<span class="caret"></span></a>
              			<ul class="dropdown-menu"></a></li>
              				<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">ตารางสอนอาจารย์</a><ul class="dropdown-menu">
              				<li><a onclick="showPageTeacher(<?php echo 543+date("Y")-2500-58;?>)" target="_blank" title="อ.พิศาล สุขขี">อ.พิศาล สุขขี</a></li>
              				<li><a onclick="showPageTeacher(<?php echo 543+date("Y")-2500-59;?>)" title="ดร.กนิษฐา อินธิชิต">ดร.กนิษฐา อินธิชิต</a></li>
              				<li><a onclick="showPageTeacher(<?php echo 543+date("Y")-2500-57;?>)" title="อ.อุรารัตน์ แก้วดวงงาม">อ.อุรารัตน์ แก้วดวงงาม</a></li>
              				<li><a onclick="showPageTeacher(<?php echo 543+date("Y")-2500-56;?>)" title="อ.กริชบดินทร์ ผิวหอม">อ.กริชบดินทร์ ผิวหอม</a></li>
              				<li><a onclick="showPageTeacher(<?php echo 543+date("Y")-2500-61;?>)" title="ดร.เจษฎา ชาตรี">ดร.เจษฎา ชาตรี</a></li>
              				<li><a onclick="showPageTeacher(<?php echo 543+date("Y")-2500-60;?>)" title="ดร.เจษฎา โพนแก้ว">ดร.เจษฎา โพนแก้ว</a></li></ul></li></li>

                        <li class="dropdown"><a onclick="showTeacherPage()" target="_self" title="ข้อมูลอาจารย์">ข้อมูลอาจารย์</a></li>
                    </ul>
                </li>


                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">กิจกรรม<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown"><a onclick="showDatePage()"" target="_self" title="ปฏิทินสาขา">ปฏิทินสาขา</a></li>
                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">ปฏิทินอาจารย์ประจำสาขา</a>
                          <ul class="dropdown-menu">
                            <li><a onclick="showPageDateTeacher(<?php echo 543+date("Y")-2500-58;?>)" target="_blank" title="อ.พิศาล สุขขี">อ.พิศาล สุขขี</a></li>
                            <li><a onclick="showPageDateTeacher(<?php echo 543+date("Y")-2500-59;?>)" title="ดร.กนิษฐา อินธิชิต">ดร.กนิษฐา อินธิชิต</a></li>
                            <li><a onclick="showPageDateTeacher(<?php echo 543+date("Y")-2500-57;?>)" title="อ.อุรารัตน์ แก้วดวงงาม">อ.อุรารัตน์ แก้วดวงงาม</a></li>
                            <li><a onclick="showPageDateTeacher(<?php echo 543+date("Y")-2500-56;?>)" title="อ.กริชบดินทร์ ผิวหอม">อ.กริชบดินทร์ ผิวหอม</a></li>
                            <li><a onclick="showPageDateTeacher(<?php echo 543+date("Y")-2500-61;?>)" title="ดร.เจษฎา ชาตรี">ดร.เจษฎา ชาตรี</a></li>
                            <li><a onclick="showPageDateTeacher(<?php echo 543+date("Y")-2500-60;?>)" title="ดร.เจษฎา โพนแก้ว">ดร.เจษฎา โพนแก้ว</a></li>
                          </ul>
                      </li>

                        <div class="menu-widget text-center">

                            <div class="image-wrap entry">
                                <img src="Website\ข่าวสาร\00.png" width="500" height="10" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div>
                            <!-- end image-wrap -->
                            <h5><a href="https://www.facebook.com/permalink.php?story_fbid=2221609698061802&amp;id=1432524576970322&amp;_rdc=1&amp;_rdr">กิจกรรมไหว้ครูสาขาวิทยาการคอมพิวเตอร์</a></h5>
                        </div>

                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">สถิติ<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown"><a onclick="showRemainPage()" target="_self" title="นักศึกษา ชาย/หญิง">นักศึกษาคงอยู่</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">ลงชื่อเข้าใช้ ยังไม่ลิ้ง<b class=""></b></a></li>

            </ul>
        </div>
        <!-- /.container -->

        <div class="clear-fix"></div>
        <!-- Mobile Shortcut Menu -->
        <div class="shortcutmenu-mobile hidden-md hidden-lg">
        </div>
    </div>
    <!-- /.navbar-collapse -->
</nav>

   <div class="clear-fix space-30 hidden-xs hidden-sm"></div>
   <div id="body_content_info">

  <script>

    function showPageStudent(student_level){
    $.get("http://localhost/www/student.php?level="+student_level, function(data, status){
      //alert("Data: " + data + "\nStatus: " + status);
      document.getElementById("body_content_info").innerHTML = data;
    });
    }
    function showPageTeacher(teacher_level){
    $.get("http://localhost/www/teacher2.php?level="+teacher_level, function(data, status){
      //alert("Data: " + data + "\nStatus: " + status);
      document.getElementById("body_content_info").innerHTML = data;
    });
    }
    function showPageDateTeacher(date_level){
    $.get("http://localhost/www/dateTeacher.php?level="+date_level, function(data, status){
      //alert("Data: " + data + "\nStatus: " + status);
      document.getElementById("body_content_info").innerHTML = data;
    });
    }

    function showHomePage(){
    $.get("http://localhost/www/main2.php", function(data, status){
      //alert("Data: " + data + "\nStatus: " + status);
      document.getElementById("body_content_info").innerHTML = data;
    });
    }

    function showHistoryPage(){
    $.get("http://localhost/www/history2.php", function(data, status){
      //alert("Data: " + data + "\nStatus: " + status);
      document.getElementById("body_content_info").innerHTML = data;
    });
    }

    function showCoursePage(){
    $.get("http://localhost/www/Course2.php", function(data, status){
      //alert("Data: " + data + "\nStatus: " + status);
      document.getElementById("body_content_info").innerHTML = data;
    });
    }

    function showTeacherPage(){
    $.get("http://localhost/www/between.php", function(data, status){
      //alert("Data: " + data + "\nStatus: " + status);
      document.getElementById("body_content_info").innerHTML = data;
    });
    }

    function showRemainPage(){
    $.get("http://localhost/www/Remain2.php", function(data, status){
      //alert("Data: " + data + "\nStatus: " + status);
      document.getElementById("body_content_info").innerHTML = data;
    });
    }
    function showDatePage(){
    $.get("http://localhost/www/date.php", function(data, status){
      //alert("Data: " + data + "\nStatus: " + status);
      document.getElementById("body_content_info").innerHTML = data;
    });
    }
    function showtable(){
    $.get("http://localhost/www/table.php", function(data, status){
      //alert("Data: " + data + "\nStatus: " + status);
      document.getElementById("body_content_info").innerHTML = data;
    });
    }

    </script>

  <script type="text/javascript">
  /*<![CDATA[*/
  /*578436984f83532495f8f4d411f94b63*/
  jQuery(document).ready(function(){
    jQuery('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
      event.preventDefault();
      event.stopPropagation();
      jQuery(this).parent().siblings().removeClass('open');
      jQuery(this).parent().toggleClass('open');
    });
    jQuery('a.scroll-to-top').hide();
    jQuery(window).scroll(function(){ if (jQuery(this).scrollTop() > 40) { jQuery('a.scroll-to-top').fadeIn('slow'); } else { jQuery('a.scroll-to-top').fadeOut('slow'); } });
    jQuery('a.scroll-to-top').click(function(){ jQuery("html, body").animate({ scrollTop: 0 }, 2000); return false;  });
    jQuery(".side-link .toggle").on('click', function() {
      jQuery(this).parents(".side-link").find("ul.mfu-link").slideToggle();
    });
    jQuery('.panel-collapse:not(".in")').collapse('show');
    //jQuery('a[href$=".pdf"]').before('<i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;');

    jQuery("a.linked-language").html(function() { return jQuery(this).html().replace("ZH_CN", "CN");  });
  });

  /*d8eb40a89651f597d436e85482ccbfc0*/
  jQuery(function() {
      //var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
      var months = ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'];
      jQuery('#gcf-custom-template').gCalFlow({
        calid: 'mfu.ac.th_u1a3hqv9v7836iipn6r0gugn3g%40group.calendar.google.com',
        maxitem: 5,
        mode: 'upcoming',
        daterange_formatter: function (start_date, end_date, allday_p) {
          function pad(n) { return n < 10 ? "0"+n : n; }
          return '<span class="day">' + pad(start_date.getDate()) + '</span><span class="month">' + months[start_date.getMonth()] + '</span>';
        }
      });
    });

  /*801333c042aec704c645a4e1bde5c546*/
  jQuery('#bannerslide').bxSlider({
      auto: (jQuery("#bannerslide li").length > 1) ? true: false,
      mode: 'fade',
      speed: 1000,
      pager: (jQuery("#bannerslide li").length > 1) ? true: false,
      controls: false
    });

  /*61ab9970fd701c3292f13dce975e69df*/
  $('ul.new-archive a.toggle').click(function(e) {
      e.preventDefault();
      var $this = $(this);
      if ($this.next().hasClass('show')) {
        $this.next().slideUp(350);
      $this.next().removeClass('show');
      } else {
        $('ul.new-archive ul.inner.show').slideUp(350);
      $('ul.new-archive ul').removeClass('show');
      $this.next().slideDown(350);
      $this.next().addClass('show');
      }
    });

  /*]]>*/
  </script>
