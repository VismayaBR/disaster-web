<?php 
include('connection.php');
$query=mysqli_query($conn,"SELECT * FROM service_tb");




if(isset($_POST['submit_btn_org']))
{
  $nm=$_POST['name_of_camporg'];
  $are=$_POST['area1'];
  $ph=$_POST['mobile_number_org'];
  $mail=$_POST['email_org'];

  $unm=$_POST['username_org'];
  $pwd=$_POST['password_org'];


      mysqli_query($conn,"INSERT INTO login_tb (user_name,password,type) VALUES('$unm','$pwd','camporganizer') ");
      $last_login_id=mysqli_insert_id($conn);
          

            
            mysqli_query($conn,"INSERT INTO organizer(name,mobile,email,place,login_id,approve_status) values ('$nm','$ph','$mail','$are','$last_login_id','0')");
           echo "<script> alert('Registration completed'); </script>";
           echo "<script> window.location.href='home.php#camp';</script>";
          
          
}



if(isset($_POST['submit_btn']))
{
    $guest_name=$_POST['name'];
    $guest_number=$_POST['mobile_number'];
    $guest_email=$_POST['email_1'];
    $username=$_POST['username'];
    $password=$_POST['password'];

         


            $check_mobile=mysqli_query($conn,"SELECT * FROM guest_tb WHERE mobile_no='$guest_number'");
           
            if(mysqli_num_rows($check_mobile)>0)
           {

            echo "<script> alert('Mobile number already exists!');</script>";
            echo "<script>window.history.back();</script>";
           }


           
           else
               {  
                 mysqli_query($conn,"INSERT INTO login_tb (user_name,password,type) VALUES ('$username','$password','guest')");
          $last_login_id=mysqli_insert_id($conn);


          mysqli_query($conn,"INSERT INTO guest_tb(login_id,name,mobile_no,email_id) VALUES ('$last_login_id','$guest_name','$guest_number','$guest_email')");
         echo "<script>window.location.href='home.php';</script>";
      }
}





?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Flood relief</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">


    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

<style type="text/css">
    .form-order{
                padding-top: 1.5em;
               }
    .log_in{
        padding-left: 33%;
           }
    .card{
        border-radius: 1em;
        background-color: white;
        padding-left:30px;
        padding-right: 30px;
        padding-top: 0.1px;
        padding-bottom: 0.1px;
        width: 50%;
    
         }
    #btn1{
        display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-transition:all 0.15s ease-in-out;
  transition: all 0.15s ease-in-out;
  border-radius: 1em;
  cursor: pointer;
    }
    #water{background-image: url("images/waterdrop.jpeg");}
     input[type="number"]::-webkit-outer-spin-button,
     input[type="number"]::-webkit-inner-spin-button {
     -webkit-appearance: none;
     margin: 0;
    }
     input[type="number"] {
     -moz-appearance: textfield;
    }
</style>


</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header" class="col-sm-6">

       <!--  <div class="header-logo">
            
            <a class="site-logo" href="index.html">
                <img src="images/logo.svg" alt="Homepage">
            </a>
        </div> --> <!-- end header-logo -->

        <!-- end header-nav -->

       

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/flood.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=top>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">
                <h1>
               DISASTER MANAGEMENT
                </h1>

                <p>
                </p>
            </div> <!-- end home-content__main -->

        </div> <!-- end home-content -->

        <ul class="home-sidelinks">
            <li><a  href="admin/login.php">Login<span>get in touch</span></a></li> 
            <li><a  href="select.php">Register<span>get in touch</span></a></li>
            <li><a class="smoothscroll" href="#services">Services<span>what we do</span></a></li>       
            <li><a  class="smoothscroll" href="#bg">Contact<span>get in touch</span></a></li>
           
              
        </ul> <!-- end home-sidelinks -->

 <!--       <ul class="home-social">
            <li class="home-social-title">Follow Us</li>
            <li><a href="#0">
                <i class="fab fa-facebook"></i>
                <span class="home-social-text">Facebook</span>
            </a></li>
            <li><a href="#0">
                <i class="fab fa-twitter"></i>
                <span class="home-social-text">Twitter</span>
            </a></li>
            <li><a href="#0">
                <i class="fab fa-linkedin"></i>
                <span class="home-social-text">LinkedIn</span>
            </a></li>
        </ul>  end home-social -->   

        <a href="#services" class="home-scroll smoothscroll">
            <span class="home-scroll__text">Scroll Down</span>
            <span class="home-scroll__icon"></span>
        </a> <!-- end home-scroll -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='services' class="s-about">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Services Provided</h3>
                <h1 class="display-1">We are a group of design driven individuals passionate about creating beautiful UI designs.</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
                Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse. 
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row">
                
            <div class="about-process process block-1-2 block-tab-full">

                <div class="process__vline-left"></div>
                <div class="process__vline-right"></div>

                
                <?php 
                $count=0;
                while($row=mysqli_fetch_assoc($query))
                    {
                        $count++;
                     ?>
                <div class="col-block process__col" data-item="<?php echo $count;?>" data-aos="fade-up">
                    <div class="process__text">
                        

                        <h4><?php echo $row['heading'];?></h4>

                        <p>
                        <?php echo $row['service'];?>
                        </p>
                    </div>
                </div>
            <?php } ?>
               <!--  <div class="col-block process__col" data-item="2" data-aos="fade-up">
                    <div class="process__text">
                        <h4>Design</h4>

                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div> -->
               <!--  <div class="col-block process__col" data-item="3" data-aos="fade-up">
                    <div class="process__text">
                        <h4>Build</h4>

                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div>
                <div class="col-block process__col" data-item="4" data-aos="fade-up">
                    <div class="process__text">
                        <h4>Launch</h4>

                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div>
 -->
            </div> <!-- end process -->

        </div> <!-- end about-stats -->

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <!-- end s-services -->





    <!-- stats
    ================================================== -->
    <section id="stats" class="s-stats">

        <div class="row stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
          <!--       
            <div class="col-block stats__col ">
                <div class="stats__count">129</div>
                <h5>Awards Received</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">1507</div>
                <h5>Cups of Coffee</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">108</div>
                <h5>Projects Completed</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">103</div>
                <h5>Happy Clients</h5> 
            </div>
 -->
        </div> <!-- end stats -->

    </section> <!-- end s-stats -->


     <!-- login
    ================================================== -->
   <div id="water">
   <!-- end login -->



    <!-- contact
    ================================================== -->
    <section class="s-contact" id="bg">

        <div class="row section-header" >
            <div class="col-full">
                <h3 class="subhead subhead--light">Contact Us</h3>
                <h1 class="display-1 display-1--light">Get in touch and let's make something great together. Let's turn your idea on an even greater product.</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row">

            <div class="col-full contact-main" >
                <p>
                <a href="mailto:#0" class="contact-email">disastercampclt@gmail.com</a>
                <span class="contact-number">0495-275370  /  +91 9348647890</span>
                </p>
            </div> <!-- end contact-main -->

        </div> <!-- end row -->

        <div class="row">

         
         

        </div> <!-- end row -->

        <div class="row">
            <div align="center" class="col-full cl-copyright">
                <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
            </div>
        </div>

        <div class="cl-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
        </div>

    </section> <!-- end s-contact -->

</div>
    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">            
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
   
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        function validate()
        {
             
            var vname=document.getElementById("name_id").value.trim();
             var vmob=document.getElementById("number_id").value.trim();
               var vmail=document.getElementById("email_id").value.trim();
                var vuser=document.getElementById("user_id").value.trim();
                  var vpass=document.getElementById("pswrd").value.trim();


               if(vname=="")
               {
                document.getElementById("span_name").innerHTML="* empty field";
                return false;
               }
               if(vmob=="")
               {
                document.getElementById("span_num").innerHTML="*empty field";
                return false;
               }
               if(isNaN(vmob))
               {
                document.getElementById("span_num").innerHTML="* numbers only";
               
                return false;
               }

               if(vmob.length<10||vmob.length>10)
               {
                document.getElementById("span_num").innerHTML="*enter 10 numbers";
            
               return false;
               }

               if(vmail=="")
               {
                document.getElementById("span_mail_id").innerHTML="* empty field";
                return false;
               }
                if(vmail.indexOf("@")==-1||vmail.indexOf(".")==-1)
              {
                document.getElementById("span_mail_id").innerHTML="* missing of @,. please enter a valid email";
                return false;
              }
               
               

               

               if(vuser=="")
               {
                document.getElementById("span_user").innerHTML="*empty field";
                return false;
               }
               if(vpass=="")
               {
                document.getElementById("span_pswrd").innerHTML="*empty field";
                return false;
               }
           }
    </script>
<script type="text/javascript">
    function clearerror(ee)
    {
        document.getElementById(ee).innerHTML="";
    }
</script>


<script type="text/javascript">
        function validate_org()
        {
             
            var vname_org=document.getElementById("name_of_id").value.trim();
             var varea_org=document.getElementById("type1").value.trim();             
                var vmobile_org=document.getElementById("number_id_org").value.trim();
                 var vemail_org=document.getElementById("email_id_org").value.trim();
                  var vuser_org=document.getElementById("user_id_org").value.trim();
                    var vpass_org=document.getElementById("pswrd_org").value.trim();


               if(vname_org=="")
               {
                document.getElementById("span_name_org").innerHTML="* empty field";
                return false;
               }
               if(varea_org=="")
               {
                document.getElementById("stype1").innerHTML="* empty field";
                return false;
               }
               if(vmobile_org=="")
               {
                document.getElementById("span_num_org").innerHTML="*empty field";
                return false;
               }
               if(isNaN(vmobile_org))
               {
                document.getElementById("span_num_org").innerHTML="* numbers only";
               
                return false;
               }

               if(vmobile_org.length<10||vmobile_org.length>10)
               {
                document.getElementById("span_num_org").innerHTML="*enter 10 numbers";
            
               return false;
               }
                if(vemail_org=="")
               {
                document.getElementById("span_mail").innerHTML="* empty field";
                return false;
               }
                if(vemail_org.indexOf("@")==-1||vemail_org.indexOf(".")==-1)
              {
                document.getElementById("span_mail").innerHTML="* missing of @,. please enter a valid email";
                return false;
              }
               

               

               if(vuser_org=="")
               {
                document.getElementById("span_user_org").innerHTML="*empty field";
                return false;
               }
               if(vpass_org=="")
               {
                document.getElementById("span_pswrd_org").innerHTML="*empty field";
                return false;
               }
           }
    </script>
     <script type="text/javascript">
      $(document).ready(function()
        {
          $("#camporganizer").hide();
          $("#toggle-event").change(function()
          {
            if($(this).prop("checked")==true)
            {
              $("#guestlogin").show();
              $("#camporganizer").hide();
            }
            else
            {
              $("#guestlogin").hide();
              $("#camporganizer").show();
            }
            
          });
        });
    </script>
    <script type="text/javascript">
      $(document).ready(function()
        {
          $("#camporganizer").hide();
          $("#toggle-event1").change(function()
          {
            if($(this).prop("checked")==true)
            {
              $("#guestlogin").show();
              $("#camporganizer").hide();
            }
            else
            {
              $("#guestlogin").hide();
              $("#camporganizer").show();
            }
            
          });
        });
    </script>


</body>

</html>