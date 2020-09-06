<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script>
            function myFunction() {
                document.getElementById("demo").innerHTML="developing submit form....";
                demo.style.border="1px solid #1e0633"; demo.style.background="#1e0633";demo.style.color="white";
                demo.style.padding="8px 8px 8px 8px"; 
                document.getElementById("button").style.display="none";
            }
        </script>
    </head>
    
    <body>
        
      
  
  <div class="row" style="background: #202020;">
    <div id="view" class="col-sm-4" >
      <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
       <div style="padding-left: 20px; color:white">
         <h2>ENVOY</h2>
        <P>We create possibilty for you to<br> 
            read news around the world </P>
        </div> 
    
      </div>
      
      
    <div class="col-sm-4">
      <fieldset style=" text-align: center;">
            <div style="color: white; padding: 20px 0px 80px 0px;">
                <h4> MURPHY NEWS POINT & BUSINESS PLATFORM</h4>
                <p id="demo">murphy nets point brings news headline around the world right in front of you... to be part of 2020 adventure.<br>
                    terms and conditions applied</p>
                <button id="button" type="button" onclick="myFunction()" style="color: black">Subscribe to news letter</button>
                
                <div id="mobile">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
            </div>
 
        </fieldset>
      </div>
      
    <div  class="col-sm-4" >
        <div id="footer2" style="float: right; color:white; padding-right: 100px;">
        <h2>Expore</h2>
        <a href="/">home</a><br>
        <a href="/">about us</a><br>
        <a href="/">game</a><br>
        <a href="/">Entertainment</a>
        
        </div>
      </div>
  </div>
        <script>
             window.onload = function(){
            if(window.innerWidth > 1000) {
                document.getElementById('view').style.display = 'block';
                document.getElementById('footer2').style.display = 'block';
                document.getElementById('mobile').style.display = 'none';
            
            
            } else {
                document.getElementById('view').style.display = 'none';
                document.getElementById('footer2').style.display = 'none';
                document.getElementById('mobile').style.display = 'block';
            }
            
            }
             
             
            window.onresize = function(){
            if(window.innerWidth > 1000) {
                document.getElementById('view').style.display = 'block';
                document.getElementById('footer2').style.display = 'block';
                document.getElementById('mobile').style.display = 'none';
            
            
            } else {
                document.getElementById('view').style.display = 'none';
                document.getElementById('footer2').style.display = 'none';
                document.getElementById('mobile').style.display = 'block';
            }
            
            }
        
        
        </script>


        
    </body>
</html>
