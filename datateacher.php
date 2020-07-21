<style>
body {font-family: Arial, Helvetica, sans-serif;}
/* Full-width input fields */


/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 35%;

}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
#modalmg {
  display: none; /* Hidden by default */
  position: absolute; /* Stay in place */
  opacity: 1;
  z-index: 1; /* Sit on top */
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  background-color: rgb(0,0,0,); /* Fallback color */
  background-color: rgba(255, 255, 255, 0);

}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: absolute; /* Stay in place */
  opacity: 1;
  z-index: 1; /* Sit on top */
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  background-color: rgb(0,0,0,); /* Fallback color */
  background-color: rgba(255, 255, 255, 0);

}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
  padding:20px;

}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

<section id="maincontent" class="maincontent" role="maincontent">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div id="c162" class="csc-default">

                </div>
                <div id="c164" class="csc-default">
                    <div id="c164">
                        <div class="ce-textpic ce-right ce-intext">
                            <div class="ce-bodytext">
                            </div>
                        </div>

                        <section class="section db p120">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tagline-message page-title text-center">
                                            <font size="10"> คณาจารย์ </font>
                                            <ul class="breadcrumb">
                                                <li>
                                                    <a href="javascript:void(0)"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end container -->
                        </section>

                        <!-- end section -->
                        <section class="section gb nopadtop">
                            <div class="container">
                                <div class="boxed boxedp4">
                                    <div class="row blog-grid">

                                        <div class="col-md-4">
                                            <div class="course-box">
                                                <div class="">
                                                    <img src="https://is.gd/068bLt " height="220" width="300" alt="" srcset="">
                                                    <div class="magnifier">
                                                        <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                                    </div>
                                                </div>
                                                <!-- end image-wrap -->
                                                <div class="course-details">
                                                    <h4>
															<a onclick="document.getElementById('id01').style.display='block'" title="คลิก">ชื่อ : ดร.เจษฎา ชาตรี</a>

															</h4>
                                                    <p><strong>ตำแหน่งงาน :</strong> อาจารย์ </p>
                                                    <p><strong>เบอร์โทร : </strong> -</p>

                                                </div>
                                                <!-- end details -->
                                                <div class="course-footer clearfix">
                                                </div>
                                                <!-- end footer -->
                                            </div>
                                        </div>

                                        <div id="id01" class="modal" style="display: none;">
                                            <form class="modal-content animate" action="/action_page.php" style="height: fit-content;width: 750px;">
                                                <div class="imgcontainer">

                                                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                                                    <img src="https://is.gd/068bLt " height="220" width="300" alt="Avatar" class="avatar">
                                                </div>

                                                <div class="container">
                                                    <h4>
                              <p><strong>ชื่อ :</strong> ดร.เจษฎา ชาตรี </p>
                              <p><strong>ตำแหน่งงาน :</strong> อาจารย์ </p>
                              <p><strong>เบอร์โทร : </strong> -</p>
                              <p><strong>ID Line : </strong> @tiwly</p>

                            </h4>
                                                </div>

                                            </form>
                                        </div>

                                        <script>
                                            // Get the modal
                                            var modal = document.getElementById('id01');

                                            // When the user clicks anywhere outside of the modal, close it
                                            window.onclick = function(event) {
                                                if (event.target == modal) {
                                                    modal.style.display = "none";
                                                }
                                            }
                                        </script>

                                        <div class="col-md-4">
                                            <div class="course-box">
                                                <div class="">
                                                    <img src="https://is.gd/W4iWg4 " height="220" width="300" alt="" srcset="">
                                                    <div class="magnifier">
                                                        <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                                    </div>
                                                </div>
                                                <!-- end image-wrap -->
                                                <div class="course-details">
                                                    <h4>
															<a onclick="document.getElementById('id02').style.display='block'" title="คลิก">ชื่อ : ดร.เจษฎา โพนแก้ว</a>

															</h4>
                                                    <p><strong>ตำแหน่งงาน :</strong> อาจารย์ </p>
                                                    <p><strong>เบอร์โทร : </strong> -</p>

                                                </div>
                                                <!-- end details -->
                                                <div class="course-footer clearfix">
                                                </div>
                                                <!-- end footer -->
                                            </div>
                                        </div>

                                        <div id="id02" class="modal" style="display: none;">
                                            <form class="modal-content animate" action="/action_page.php" style="height: fit-content;width: 750px;">
                                                <div class="imgcontainer">

                                                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
                                                    <img src="https://is.gd/W4iWg4 " height="220" width="300" alt="Avatar" class="avatar">
                                                </div>

                                                <div class="container">
                                                    <h4>
                              <p><strong>ชื่อ :</strong> ดร.เจษฎา โพนแก้ว </p>
                              <p><strong>ตำแหน่งงาน :</strong> อาจารย์ </p>
                              <p><strong>เบอร์โทร : </strong> -</p>
                              <p><strong>ID Line : </strong> -</p>

                            </h4>
                                                </div>

                                            </form>
                                        </div>

                                        <script>
                                            // Get the modal
                                            var modal = document.getElementById('id02');

                                            // When the user clicks anywhere outside of the modal, close it
                                            window.onclick = function(event) {
                                                if (event.target == modal) {
                                                    modal.style.display = "none";
                                                }
                                            }
                                        </script>

                                        <div class="col-md-4">
                                            <div class="course-box">
                                                <div class="">
                                                    <img src="https://is.gd/IFmkff " height="220" width="300" alt="" srcset="">
                                                    <div class="magnifier">
                                                        <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                                    </div>
                                                </div>
                                                <!-- end image-wrap -->
                                                <div class="course-details">
                                                    <h4>
															<a onclick="document.getElementById('id03').style.display='block'" title="คลิก">ชื่อ : ดร.กนิษฐา อินธิชิต</a>

															</h4>
                                                    <p><strong>ตำแหน่งงาน :</strong> อาจารย์ </p>
                                                    <p><strong>เบอร์โทร : </strong> -</p>

                                                </div>
                                                <!-- end details -->
                                                <div class="course-footer clearfix">
                                                </div>
                                                <!-- end footer -->
                                            </div>
                                        </div>

                                        <div id="id03" class="modal" style="display: none;">
                                            <form class="modal-content animate" action="/action_page.php" style="height: fit-content;width: 750px;">
                                                <div class="imgcontainer">

                                                    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
                                                    <img src="https://is.gd/IFmkff " height="220" width="300" alt="Avatar" class="avatar">
                                                </div>

                                                <div class="container">
                                                    <h4>
                              <p><strong>ชื่อ :</strong> ดร.กนิษฐา อินธิชิต </p>
                              <p><strong>ตำแหน่งงาน :</strong> อาจารย์ </p>
                              <p><strong>เบอร์โทร : </strong> -</p>
                              <p><strong>ID Line : </strong> -</p>

                            </h4>
                                                </div>

                                            </form>
                                        </div>

                                        <script>
                                            // Get the modal
                                            var modal = document.getElementById('id03');

                                            // When the user clicks anywhere outside of the modal, close it
                                            window.onclick = function(event) {
                                                if (event.target == modal) {
                                                    modal.style.display = "none";
                                                }
                                            }
                                        </script>

                                        <div class="col-md-4">
                                            <div class="course-box">
                                                <div class="">
                                                    <img src="https://is.gd/sDMrzH " height="220" width="300" alt="" srcset="">
                                                    <div class="magnifier">
                                                        <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                                    </div>
                                                </div>
                                                <!-- end image-wrap -->
                                                <div class="course-details">
                                                    <h4>
															<a onclick="document.getElementById('id04').style.display='block'" title="คลิก">ชื่อ : อ.พิศาล สุขขี</a>

															</h4>
                                                    <p><strong>ตำแหน่งงาน :</strong> ประธานสาขา </p>
                                                    <p><strong>เบอร์โทร : </strong> -</p>

                                                </div>
                                                <!-- end details -->
                                                <div class="course-footer clearfix">
                                                </div>
                                                <!-- end footer -->
                                            </div>
                                        </div>

                                        <div id="id04" class="modal">
                                            <form class="modal-content animate" action="/action_page.php" style="height: fit-content;width: 750px;">
                                                <div class="imgcontainer">

                                                    <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">×</span>
                                                    <img src="https://is.gd/sDMrzH " height="220" width="300" alt="Avatar" class="avatar">
                                                </div>

                                                <div class="container">
                                                    <h4>
                              <p><strong>ชื่อ :</strong> อ.พิศาล สุขขี </p>
                              <p><strong>ตำแหน่งงาน :</strong> ประธานสาขา </p>
                              <p><strong>เบอร์โทร : </strong> -</p>
                              <p><strong>ID Line : </strong> -</p>

                            </h4>
                                                </div>

                                            </form>
                                        </div>

                                        <script>
                                            // Get the modal
                                            var modal = document.getElementById('id04');

                                            // When the user clicks anywhere outside of the modal, close it
                                            window.onclick = function(event) {
                                                if (event.target == modal) {
                                                    modal.style.display = "none";
                                                }
                                            }
                                        </script>

                                        <div class="col-md-4">
                                            <div class="course-box">
                                                <div class="">
                                                    <img src="https://is.gd/uZKA9m " height="220" width="300" alt="" srcset="">
                                                    <div class="magnifier">
                                                        <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                                    </div>
                                                </div>
                                                <!-- end image-wrap -->
                                                <div class="course-details">
                                                    <h4>
															<a onclick="document.getElementById('id05').style.display='block'" title="คลิก">ชื่อ : อ.อุรารัตน์ แก้วดวงงาม</a>

															</h4>
                                                    <p><strong>ตำแหน่งงาน :</strong> อาจารย์ </p>
                                                    <p><strong>เบอร์โทร : </strong> -</p>

                                                </div>
                                                <!-- end details -->
                                                <div class="course-footer clearfix">
                                                </div>
                                                <!-- end footer -->
                                            </div>
                                        </div>

                                        <div id="id05" class="modal">
                                            <form class="modal-content animate" action="/action_page.php" style="height: fit-content;width: 750px;">
                                                <div class="imgcontainer">

                                                    <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">×</span>
                                                    <img src="https://is.gd/uZKA9m " height="220" width="300" alt="Avatar" class="avatar">
                                                </div>

                                                <div class="container">
                                                    <h4>
                              <p><strong>ชื่อ :</strong> อ.อุรารัตน์ แก้วดวงงาม </p>
                              <p><strong>ตำแหน่งงาน :</strong> อาจารย์ </p>
                              <p><strong>เบอร์โทร : </strong> -</p>
                              <p><strong>ID Line : </strong> -</p>

                            </h4>
                                                </div>

                                            </form>
                                        </div>

                                        <script>
                                            // Get the modal
                                            var modal = document.getElementById('id05');

                                            // When the user clicks anywhere outside of the modal, close it
                                            window.onclick = function(event) {
                                                if (event.target == modal) {
                                                    modal.style.display = "none";
                                                }
                                            }
                                        </script>

                                        <div class="col-md-4">
                                            <div class="course-box">
                                                <div class="">
                                                    <img src="https://is.gd/0zJJfG " height="220" width="300" alt="" srcset="">
                                                    <div class="magnifier">
                                                        <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                                    </div>
                                                </div>
                                                <!-- end image-wrap -->
                                                <div class="course-details">
                                                    <h4>
															<a onclick="document.getElementById('id06').style.display='block'" title="คลิก">ชื่อ : อ.กริชบดินทร์ ผิวหอม</a>

															</h4>
                                                    <p><strong>ตำแหน่งงาน :</strong> อาจารย์ </p>
                                                    <p><strong>เบอร์โทร : </strong> -</p>

                                                </div>
                                                <!-- end details -->
                                                <div class="course-footer clearfix">
                                                </div>
                                                <!-- end footer -->
                                            </div>
                                        </div>

                                        <div id="id06" class="modal" style="display: none;">
                                            <form class="modal-content animate" action="/action_page.php" style="height: fit-content;width: 750px;">
                                                <div class="imgcontainer">

                                                    <span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close Modal">×</span>
                                                    <img src="https://is.gd/0zJJfG " height="220" width="300" alt="Avatar" class="avatar">
                                                </div>

                                                <div class="container">
                                                                          <h4>
                                                    <p><strong>ชื่อ :</strong> อ.กริชบดินทร์ ผิวหอม </p>
                                                    <p><strong>ตำแหน่งงาน :</strong> อาจารย์ </p>
                                                    <p><strong>เบอร์โทร : </strong> -</p>
                                                    <p><strong>ID Line : </strong> -</p>

                                                  </h4>
                                                </div>

                                            </form>
                                        </div>

                                        <script>
                                            // Get the modal
                                            var modal = document.getElementById('id06');

                                            // When the user clicks anywhere outside of the modal, close it
                                            window.onclick = function(event) {
                                                if (event.target == modal) {
                                                    modal.style.display = "none";
                                                }
                                            }
                                        </script>

                                        <!-- end box -->

                                        <!-- end col -->
                                    </div>
                                </div>

                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
