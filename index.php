<!DOCTYPE html>
<html>
    <head>
        <title>blog_site</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
    </head>
    <body>
        

        <div id="mobile">
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <a href="#">HOME</a>
                <a href="#">ABOUT US</a>
                <a href="#">PROJECT</a>
                <a href="#">GAME</a>
                <a href="#">INVESTMENTS</a>
            </div>
        </div>
        
       
            <div class="mobile_head" style="background: black; display:inline-flex; width:100%">
                 <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                <img src='image/murphy_logo.jpg' length='150' height='50' style="  padding-left:200px"> 
            </div>
            

            
        </div>
        
        <div id="windows_view">
        <div class="header">
            <p>welcome to murphy newspoint/business platform.</p>
        </div>
            
            <div id="menu_title">
                <a href="index.php"> M u r p h y  N e w s p o i n t </a>
            </div>
            
            
            <nav id="menu">
                <a href="index.php">HOME</a>
                <a href="#">ABOUT US</a>
                <a href="#">PROJECT</a>
                <a href="#">BLOG</a>
                <a href="#">SHOP</a>
                <a href="#">INVESTMENTS</a>
            </nav>
        
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="image/ICTtop.jpg" width="1145" height="600"  alt="Los Angeles">
                    </div>
                    <div class="item">
                        <img src="image/1600x400_zna_hq.jpg" width="1143" height="600" alt="Chicago" >
                    </div>
                    
                    <div class="item">
                        <img src="image/new-york-city-3.jpg" width="1145" height="600" alt="New york">
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
            <div id="menu2">
                    <a style="color: white" class="lifestyle" href="#">LIFESTYLES</a>
                    <a href="#">DESIGN</a>
                    <a href="#">FASHION</a>
                    <a href="#">SPORT</a>
                    <a href="#">MONEY</a>
            </div>
            
            
            
            
            </div>
            
            <div class="container">
                <section class="container2">
                    <div class="row">
                        <div class="col-md-4">
                            <aside class="aside">
                                <img src="image/bigmummy.JPG" width="300" height="250"><br>
                                <h4><b>how jewish American lady celebrate<br> in her country with friends</b></h4>
                            </aside>
                        </div>
                        
                        
                        <div class="col-md-4">
                            <div>
                                <h4 style="color:red; font-weight: 23px;">LATEST UPDATES</h4>
                                <?php require_once ('script/sunheadlines.php')?>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="site_link">
                                <l1 style="color: white;"class="follow_us" href="#">FOLLOW US</l1>
                                <a href="www.facebook.com/chebem"><img src="image/download%20(1).png" width="34" height="34"></a>
                                <a href="www.facebook.com/chebem"><img src="image/download%20(1).jpg" width="34" height="34"></a>
                                <a href="www.facebook.com/chebem"><img src="image/download.png" width="34" height="34"></a>
                                <a href="www.facebook.com/chebem"><img src="image/download.jpg" width="34" height="34"></a>
                            </div>
                            <div class="advert">
                                <img src="image/FSXH1046.jpg" width="200" length="100" name="dgbbb">
                                <div class="text">placehold.it/300x200"</div>
                            </div>
                            
                            <div>
                                <h3 style="color:red;">TRENDING</h3>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php
    require_once ('footer.php');
        ?>
    
    <script>
        
        window.onresize = function(){
            if(window.innerWidth > 1000) {
                document.getElementById('windows_view').style.display = 'block';
                document.getElementById('mobile').style.display = 'none';
            
            
            } else {
                document.getElementById('windows_view').style.display = 'none';
                document.getElementById('mobile').style.display = 'block';
            }
            
            }
        
        
        window.onload = function(){
            if(window.innerWidth > 1000) {
                document.getElementById('windows_view').style.display = 'block';
                document.getElementById('mobile').style.display = 'none';
            
            
            } else {
                document.getElementById('windows_view').style.display = 'none';
                document.getElementById('mobile').style.display = 'block';
            }
            
            }
        
        
        
        
        function openNav() {
            document.getElementById("myNav").style.height = "100%";
        }
        function closeNav() {
            document.getElementById("myNav").style.height = "0%";
        }
    </script>
    </body>
</html>
        