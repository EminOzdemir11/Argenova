<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link href="../Css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src='main.js'></script>
</head>


<header>
    <div class="header">
        <div class="row" style="background-image: linear-gradient(to bottom, #f0f8ff, rgba(231, 225, 225, 0.842)); ">
            <div class="col-md-1"></div>
            <div id="braintech" class="col-md-4">
                <a href="#">
                    <img src="https://rstheme.com/products/html/braintech/assets/images/logo-dark.png" width="200" height="40">
                </a>
            </div>
            <div class="col-md-7">
                <div style="margin-top: 20px;" class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-2">
                        <span><b>Address</b></span><br>
                        <span style="font-style: italic;">Niksar-Tokat</span>
                    </div>
                    <div class="col-md-2">
                        <span><b>Email</b></span><br>
                        <span style="font-style: italic;">info@gmail.com</span>
                    </div>
                    <div class="col-md-2">
                        <span><b>Phone</b></span><br>
                        <span style="font-style: italic;">0555 888 44 22</span>
                    </div>

                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <div id="navbardiv1" class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul>
                        <li><a href="#"><b>Home</b></a>
                            <ul>
                                <li><a href="#">Multipages</a></li>
                                <li><a href="#">Onepages</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><b>About</b></a></li>
                        <li><a href="#"><b>Services</b></a>
                            <ul>
                                <li><a href="#">Software Development</a></li>
                                <li><a href="#">Web Development </a></li>
                                <li><a href="#">Analytic Solutions</a></li>
                                <li><a href="#">Cloud and DevOps</a></li>
                                <li><a href="#">Project Desing</a></li>
                                <li><a href="#">Data Center</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><b>Pages</b></a>
                            <ul>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Single Team</a></li>
                                <li><a href="#">Case Studios</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Faq</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><b>Blog</b></a>
                            <ul>
                                <li><a href="/Day4/blog.html">Blog</a></li>
                                <li><a href="/Day5/blogDetails.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><b>Contact</b></a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-2"></div>  
            <div class="col-md-3">
                <ul style="padding-top: 15px;" class="footer-social md-mb-30">
                    <li style="display: inline; margin-right: 20px;">
                        <i style="color: #d1dad6;" class="fa fa-search"></i> 
                    </li>
                    |
                    <li style="display: inline; margin-left: 20px;">
                        <a href="#" target="_blank"><span><i style="color: #d1dad6;" class="fa fa-facebook"></i></span></a>
                    </li>
                    <li style="display: inline;"> 
                        <a href="# " target="_blank"><span><i style="color: #d1dad6;" class="fa fa-twitter"></i></span></a> 
                    </li>

                    <li style="display: inline;"> 
                        <a href="# " target="_blank"><span><i style="color: #d1dad6;" class="fa fa-pinterest-p"></i></span></a> 
                    </li>
                    <li style="display: inline;"> 
                        <a href="# " target="_blank"><span><i style="color: #d1dad6;" class="fa fa-instagram"></i></span></a> 
                    </li>
                </ul>
            </div>
        </div>
        <div id="ana-img" style="height: 400px; text-align: center;">
            <h1 style="transform: translateY(350%);">Blog</h1>
            <h5 style="transform: translateY(700%);">Home/Blog</h5>
        </div>
    </div>
</header>

<body>

<small><?php echo $_SESSION["username"]; ?></small>
      
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div style="background-color: rgba(194, 194, 228, 0.178); border-radius: 5px; margin: 20px; padding-left: 10px; padding-right: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <img style="border-radius: 20px; margin: 10px;" src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/1.jpg" width="665" height="480">
                            </a>
                        </div>
                        <div style="padding-left: 40px;" class="col-md-12">
                            <div class="blog-content">
                                <h3><a style="text-decoration: none; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: black;" href="#">Open Source Job Report Show More Openings Fewer</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-calendar-check-o"></i> January 10, 2020  
                                            </a>                                                      
                                        </li>
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-user-o"></i> admin 
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                                <div class="blog-desc">   
                                    We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...           
                                </div>
                                <br>
                                <div style="margin-bottom: 20px;" class="blog-button inner-blog">
                                    <a style="text-decoration: none; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: blue;" class="blog-btn" href="">Continue Reading → </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px;" class="col-md-4">
                <div class="col-md-12">
                    <div class="box-search">
                        <form class="example">
                            <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" type="text" placeholder="Searching..." name="search2">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div> 
                </div>
                <div style="margin-top: 30px;" class="col-md-12">
                    <div class="box-search">
                        <h5 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Latest Post</h5>
                        <hr width="20%" color="#0000F8" size="4">
                        <hr>
                        
                        <div style="margin-bottom: 20px;">
                            <div class="row">
                                <div style="margin-top: 7px;" class="col-md-2">
                                    <a style="border-radius: 10px;" href="#"><img src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/1.jpg" width="250%" height="80%"></a>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="post-desc">
                                        <a style="text-decoration: none; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="#">Pen Source Job Report Show More Openings Fewer</a><br>
                                        <span class="date">
                                            <i class="fa fa-calendar"></i>
                                            January 21, 2020
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div style="margin-bottom: 20px;">
                            <div class="row">
                                <div style="margin-top: 7px;" class="col-md-2">
                                    <a style="border-radius: 10px;" href="#"><img src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/1.jpg" width="250%" height="80%"></a>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="post-desc">
                                        <a style="text-decoration: none; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="#">Pen Source Job Report Show More Openings Fewer</a><br>
                                        <span class="date">
                                            <i class="fa fa-calendar"></i>
                                            January 21, 2020
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div style="margin-bottom: 20px;">
                            <div class="row">
                                <div style="margin-top: 7px;" class="col-md-2">
                                    <a style="border-radius: 10px;" href="#"><img src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/1.jpg" width="250%" height="80%"></a>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="post-desc">
                                        <a style="text-decoration: none; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="#">Pen Source Job Report Show More Openings Fewer</a><br>
                                        <span class="date">
                                            <i class="fa fa-calendar"></i>
                                            January 21, 2020
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div style="margin-bottom: 20px;">
                            <div class="row">
                                <div style="margin-top: 7px;" class="col-md-2">
                                    <a style="border-radius: 10px;" href="#"><img src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/1.jpg" width="250%" height="80%"></a>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="post-desc">
                                        <a style="text-decoration: none; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="#">Pen Source Job Report Show More Openings Fewer</a><br>
                                        <span class="date">
                                            <i class="fa fa-calendar"></i>
                                            January 21, 2020
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                  
            </div>
            <div class="col-md-1"></div>
        </div>    
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div style="background-color: rgba(194, 194, 228, 0.178); border-radius: 5px; margin: 20px; padding-left: 10px; padding-right: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <img style="border-radius: 20px; margin: 10px;" src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/2.jpg" width="665" height="480">
                            </a>
                        </div>
                        <div style="padding-left: 40px;" class="col-md-12">
                            <div class="blog-content">
                                <h3><a style="text-decoration: none; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: black;" href="#">Tech Products That Makes Its Easier to Stay at Home</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-calendar-check-o"></i> January 10, 2020  
                                            </a>                                                      
                                        </li>
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-user-o"></i> admin 
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                                <div class="blog-desc">   
                                    We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...           
                                </div>
                                <br>
                                <div style="margin-bottom: 20px;" class="blog-button inner-blog">
                                    <a style="text-decoration: none; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: blue;" class="blog-btn" href="">Continue Reading → </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px;" class="col-md-4">
                <div style="margin-top: 30px;" class="col-md-12">
                    <div class="box-search">
                        <h5 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Categories</h5>
                        <hr width="20%" color="#0000F8" size="4">
                        
                        <div style="margin-bottom: 20px;">
                            <a style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-decoration: none;" href="#">Application Testing</a>
                        </div>
                        <hr>
                        <div style="margin-bottom: 20px;">
                            <a style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-decoration: none;" href="#">Artifical Intelligence</a>
                        </div>
                        <hr>
                        <div style="margin-bottom: 20px;">
                            <a style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-decoration: none;" href="#">Digital Technology</a>
                        </div>
                        <hr>
                        <div style="margin-bottom: 20px;">
                            <a style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-decoration: none;" href="#">IT Services</a>
                        </div>
                        <hr>
                        <div style="margin-bottom: 20px;">
                            <a style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-decoration: none;" href="#">Software Development</a>
                        </div>
                        <hr>
                        <div style="margin-bottom: 20px;">
                            <a style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-decoration: none;" href="#">Web Development</a>
                        </div>                        
                    </div> 
                </div>
                  
            </div>
            <div class="col-md-1"></div>
        </div>    
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div style="background-color: rgba(194, 194, 228, 0.178); border-radius: 5px; margin: 20px; padding-left: 10px; padding-right: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <img style="border-radius: 20px; margin: 10px;" src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/3.jpg" width="665" height="480">
                            </a>
                        </div>
                        <div style="padding-left: 40px;" class="col-md-12">
                            <div class="blog-content">
                                <h3><a style="text-decoration: none; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: black;" href="#">Necessity May Give Us Your Best Virtual Court System</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-calendar-check-o"></i> January 10, 2020  
                                            </a>                                                      
                                        </li>
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-user-o"></i> admin 
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                                <div class="blog-desc">   
                                    We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...           
                                </div>
                                <br>
                                <div style="margin-bottom: 20px;" class="blog-button inner-blog">
                                    <a style="text-decoration: none; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: blue;" class="blog-btn" href="">Continue Reading → </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px;" class="col-md-4">     
            </div>
            <div class="col-md-1"></div>
        </div>    
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div style="background-color: rgba(194, 194, 228, 0.178); border-radius: 5px; margin: 20px; padding-left: 10px; padding-right: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <img style="border-radius: 20px; margin: 10px;" src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/4.jpg" width="665" height="480">
                            </a>
                        </div>
                        <div style="padding-left: 40px;" class="col-md-12">
                            <div class="blog-content">
                                <h3><a style="text-decoration: none; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: black;" href="#">Servo Project Joins The Linux Foundation Fold Desco</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-calendar-check-o"></i> January 10, 2020  
                                            </a>                                                      
                                        </li>
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-user-o"></i> admin 
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                                <div class="blog-desc">   
                                    We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...           
                                </div>
                                <br>
                                <div style="margin-bottom: 20px;" class="blog-button inner-blog">
                                    <a style="text-decoration: none; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: blue;" class="blog-btn" href="">Continue Reading → </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px;" class="col-md-4">
            </div>
            <div class="col-md-1"></div>
        </div>    
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div style="background-color: rgba(194, 194, 228, 0.178); border-radius: 5px; margin: 20px; padding-left: 10px; padding-right: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <img style="border-radius: 20px; margin: 10px;" src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/5.jpg" width="665" height="480">
                            </a>
                        </div>
                        <div style="padding-left: 40px;" class="col-md-12">
                            <div class="blog-content">
                                <h3><a style="text-decoration: none; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: black;" href="#">Servo Project Joins The Linux Foundation Fold Desco</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-calendar-check-o"></i> January 10, 2020  
                                            </a>                                                      
                                        </li>
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-user-o"></i> admin 
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                                <div class="blog-desc">   
                                    We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...           
                                </div>
                                <br>
                                <div style="margin-bottom: 20px;" class="blog-button inner-blog">
                                    <a style="text-decoration: none; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: blue;" class="blog-btn" href="">Continue Reading → </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px;" class="col-md-4">
            </div>
            <div class="col-md-1"></div>
        </div>    
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div style="background-color: rgba(194, 194, 228, 0.178); border-radius: 5px; margin: 20px; padding-left: 10px; padding-right: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <img style="border-radius: 20px; margin: 10px;" src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/6.jpg" width="665" height="480">
                            </a>
                        </div>
                        <div style="padding-left: 40px;" class="col-md-12">
                            <div class="blog-content">
                                <h3><a style="text-decoration: none; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: black;" href="#">Necessity May Give Us Your Best Virtual Court System</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-calendar-check-o"></i> January 10, 2020  
                                            </a>                                                      
                                        </li>
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-user-o"></i> admin 
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                                <div class="blog-desc">   
                                    We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...           
                                </div>
                                <br>
                                <div style="margin-bottom: 20px;" class="blog-button inner-blog">
                                    <a style="text-decoration: none; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: blue;" class="blog-btn" href="">Continue Reading → </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px;" class="col-md-4">
            </div>
            <div class="col-md-1"></div>
        </div>    
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div style="background-color: rgba(194, 194, 228, 0.178); border-radius: 5px; margin: 20px; padding-left: 10px; padding-right: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <img style="border-radius: 20px; margin: 10px;" src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/7.jpg" width="665" height="480">
                            </a>
                        </div>
                        <div style="padding-left: 40px;" class="col-md-12">
                            <div class="blog-content">
                                <h3><a style="text-decoration: none; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: black;" href="#">Tech Products That Makes Its Easier to Stay at Home</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-calendar-check-o"></i> January 10, 2020  
                                            </a>                                                      
                                        </li>
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-user-o"></i> admin 
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                                <div class="blog-desc">   
                                    We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...           
                                </div>
                                <br>
                                <div style="margin-bottom: 20px;" class="blog-button inner-blog">
                                    <a style="text-decoration: none; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: blue;" class="blog-btn" href="">Continue Reading → </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px;" class="col-md-4">
            </div>
            <div class="col-md-1"></div>
        </div>    
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div style="background-color: rgba(194, 194, 228, 0.178); border-radius: 5px; margin: 20px; padding-left: 10px; padding-right: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <img style="border-radius: 20px; margin: 10px;" src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/8.jpg" width="665" height="480">
                            </a>
                        </div>
                        <div style="padding-left: 40px;" class="col-md-12">
                            <div class="blog-content">
                                <h3><a style="text-decoration: none; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: black;" href="#">Open Source Job Report Show More Openings Fewer</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-calendar-check-o"></i> January 10, 2020  
                                            </a>                                                      
                                        </li>
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-user-o"></i> admin 
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                                <div class="blog-desc">   
                                    We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...           
                                </div>
                                <br>
                                <div style="margin-bottom: 20px;" class="blog-button inner-blog">
                                    <a style="text-decoration: none; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: blue;" class="blog-btn" href="">Continue Reading → </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px;" class="col-md-4">
            </div>
            <div class="col-md-1"></div>
        </div>    
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div style="background-color: rgba(194, 194, 228, 0.178); border-radius: 5px; margin: 20px; padding-left: 10px; padding-right: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <img style="border-radius: 20px; margin: 10px;" src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/9.jpg" width="665" height="480">
                            </a>
                        </div>
                        <div style="padding-left: 40px;" class="col-md-12">
                            <div class="blog-content">
                                <h3><a style="text-decoration: none; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: black;" href="#">Types of Social Proof What its Makes Them Effective</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-calendar-check-o"></i> January 10, 2020  
                                            </a>                                                      
                                        </li>
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-user-o"></i> admin 
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                                <div class="blog-desc">   
                                    We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...           
                                </div>
                                <br>
                                <div style="margin-bottom: 20px;" class="blog-button inner-blog">
                                    <a style="text-decoration: none; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: blue;" class="blog-btn" href="">Continue Reading → </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px;" class="col-md-4">
            </div>
            <div class="col-md-1"></div>
        </div>    
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div style="background-color: rgba(194, 194, 228, 0.178); border-radius: 5px; margin: 20px; padding-left: 10px; padding-right: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <img style="border-radius: 20px; margin: 10px;" src="https://rstheme.com/products/html/braintech/assets/images/blog/inner/10.jpg" width="665" height="480">
                            </a>
                        </div>
                        <div style="padding-left: 40px;" class="col-md-12">
                            <div class="blog-content">
                                <h3><a style="text-decoration: none; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: black;" href="#">Tech Firms Support Huawei Restriction, Balk at Cost</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-calendar-check-o"></i> January 10, 2020  
                                            </a>                                                      
                                        </li>
                                        <li style="display: inline;">
                                            <a style="text-decoration: none; color: rgb(56, 53, 53); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" href="">
                                                <i style="color: blue;" class="fa fa-user-o"></i> admin 
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                                <div class="blog-desc">   
                                    We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...           
                                </div>
                                <br>
                                <div style="margin-bottom: 20px;" class="blog-button inner-blog">
                                    <a style="text-decoration: none; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: blue;" class="blog-btn" href="">Continue Reading → </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px;" class="col-md-4">
            </div>
            <div class="col-md-1"></div>
        </div>    
    </div>

</body>

<footer>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24238.931625516747!2d36.92393390631882!3d40.58870312809484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407d1ab91ddb8c95%3A0x3ec6b394fa23e1ff!2sNiksar%2C%20Tokat!5e0!3m2!1str!2str!4v1623831079520!5m2!1str!2str" width="1525" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div id="footerbg">
        <div style="padding-top: 30px;" class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <th >
                    <a href="#">
                        <img src="https://rstheme.com/products/html/braintech/assets/images/logo-dark.png" width="150" height="40">
                    </a>
                </th>
                <p id="sedut-pers">Sedut perspiciatis unde omnis iste <br> natus error sitlutem acc usantium <br> doloremque denounce with illo <br> inventore veritatis</p>
                <br>
                <ul class="footer-social md-mb-30">  
                    <li style="display: inline;"> 
                        <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a> 
                    </li>
                    <li style="display: inline;"> 
                        <a href="# " target="_blank"><span><i class="fa fa-twitter"></i></span></a> 
                    </li>

                    <li style="display: inline;"> 
                        <a href="# " target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a> 
                    </li>
                    <li style="display: inline;"> 
                        <a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a> 
                    </li>
                                                             
                </ul>
            </div>
            <div class="col-md-2">
                <h4 style="margin-bottom: 30px;">IT Services</h4>
                <p></p><a class="footer2" href="#">Software Development</a></p>
                <p></p><a class="footer2" href="#">Web Development</a></p>
                <p></p><a class="footer2" href="#">Analytic Solutions</a></p>
                <p></p><a class="footer2" href="#">Cloud and DevOps</a></p>
                <p></p><a class="footer2" href="#">Project Desing</a></p>
                
            </div>
            <div class="col-md-3">
                <h4 style="margin-bottom: 30px;">Contact Info</h4>
                <p class="footerp">374 FA Tower, William S Blvd <br> 2721, IL, USA</p>
                <p class="footerp">0543 754 65 24</p>
                <p class="footerp">info@gmail.com</p>
                <p class="footerp">Opening Hours: 10:00 - 18:00</p> 
            </div>
            <div class="col-md-3">
                <h4 style="margin-bottom: 30px;">Newsletter</h4>
                <p id="we-denounce">We denounce with righteous and in <br> and dislike men who are so beguiled <br> and demo realized.</p>
                <br>
                <div class="wrap">
                    <div class="search">
                       <input type="text" class="searchTerm" placeholder="Your email address">
                       <div style="background-color: rgb(206, 197, 197); border-bottom-right-radius: 30px; border-top-right-radius: 30px;">
                            <button type="submit" class="searchButton">
                                <i class="fa fa-search"></i>
                            </button>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="footer-bottom">
            <div class="container">                    
                <div class="row y-middle">
                    <div class="col-lg-5 text-right md-mb-10 order-last">
                        <ul class="copy-right-menu">
                            <li class="footer-ul2-li"><a class="footer-ul2-li-a" href="#">Home</a></li>
                            <li class="footer-ul2-li"><a class="footer-ul2-li-a" href="#">About</a></li>
                            <li class="footer-ul2-li"><a class="footer-ul2-li-a" href="#">Blog</a></li>
                            <li class="footer-ul2-li"><a class="footer-ul2-li-a" href="#">Shop</a></li>
                            <li class="footer-ul2-li"><a class="footer-ul2-li-a" href="#">FAQs</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-7">
                        <div class="copyright">
                            <p>&copy; 2021 All Rights Reserved. Developed By <a style="text-decoration: none; color: #4f4f4f" href="http://rstheme.com/">RSTheme</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</footer>

</html>
