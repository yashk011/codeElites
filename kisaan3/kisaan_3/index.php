<html>
    <head>
        <meta charset="UTF-8">
        <title>kisaan.org</title>
       
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet"type="text/css" href="style3.css">
        <style>
            #main_links a{
    color:white;
}
#farming{
    height:200px;
    background-color: grey;
    color:white;
    text-align:justify;
    overflow-y: auto;
    padding-bottom:16px;
    padding-top: -2px;
     background: linear-gradient(#4d1933, #9b3166);
     box-shadow: 20px 20px 10px grey;
} 

h2{
    background:linear-gradient(#003366,#00ffff);
    color:black ;
    margin-right: 25%;
}

            #buy{
                font-size: 48px
            }
            #soil{
                border:2px solid #660033;
               
                height:6em;
                align-content: center;
                color:white;
                    background-color:#660033;
                    margin:4%;margin-top:6%;margin-bottom:8%;
              #ec{
                border:2px solid #660033;
                border-radius:50%;
                height:10em;
                 color:white;
                    background-color:#660033;
                     margin:4%
            }
              #seed{
                border:2px solid #660033;
                border-radius:50%;
                height:10em;
                 color:white;
                    background-color:#660033;
                     margin:4%
            }
           
}

            #shoping{
   
    background-color: #660033;
    color:white;
}
#kn{
    text-align: center;
    background:linear-gradient(#660033,white);
    color:black;
    font-size: 40px;
    font-family: arial;
    font-weight: bold;
}
#shoping1{
    background-image: url(bean1.jpg);
    padding: 7%;
        background-size:cover;
        box-shadow: 20px 20px 10px grey;
}


#location{
    background-image: url(location-on-map.gif);
    padding:2%;
     box-shadow: 20px 20px 10px grey;
}

            #saan{
                position:relative;
                 -webkit-animation: mymove 4s;
    -webkit-animation-delay: 2s;
    animation: mymove 4s;
    animation-delay: 2s;
}
            @-webkit-keyframes mymove {
    from {left: 400px;}
    to {left: 0px;}
}

@keyframes mymove {
    from {left:400px;}
    to {left: 0px;}
}

        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-xs-12">
                <div>
                    <div id="plough"><img src="plough6.png"class="img-responsive" id="saan"></div><div id="caption"><a  href="#" style="color:#660033;text-shadow:5px 5px 6px red;" >kisaan</a></div>
                </div>
                
            </div>
        </div>
            <script>
    function fun10(obj1){
        obj1.style.backgroundColor='#660033';
       
        
    }
   function fun8(obj1){
    obj1.style.backgroundColor='#660033';
           
        
    }
     function fun11(obj1){
    obj1.style.opacity='0.6'
          
        
    }
     function fun12(obj1){
    obj1.style.opacity='1'
           
        
    }
    function fun13(obj1){
    obj1.style.opacity='1'
           
        
    }
     function fun15(obj1){
        obj1.style.color='#660033';
         obj1.style.fontSize='2.5em';
       
        
    }
       function fun16(obj1){
        obj1.style.color='black';
         obj1.style.fontSize='2em';
       
        
    }
        
    
    </script>
         <div class="row">
        <div class="col-xs-12">
          <nav class="navbar navbar-inverse" style="background-color:#660033;">
             <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#demo"onclick="fun7(this)"onmouseover="fun10(this)">
                      <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                  </button>
                   
             </div>
              <div>
                 <div class="collapse navbar-collapse" id="demo">
                     <ul class="nav navbar-nav navbar-right">
                         <li class="active"><a href="index.php">home</a></li>
                    
                    <li><a href="#"><span class="glyphicon glyphicon-log-in">login</span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon th-list">about us</span></a></li>
                    <li><a href="#contact"><span class="glyphicon glyphicon-phone-alt">contact us</span></a></li>
                     </ul>
                 </div>
              </div> 
          </nav>
</div>
        </div>
    
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
          <img src="farm1.jpg" style="width:100%;">
      </div>

      <div class="item">
          <img src="farm2.jpg"  style="width:100%;">
      </div>
    
      <div class="item">
          <img src="farm3.jpg"  style="width:100%;">
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
</div>

       
               <div class="container">
        <div class="row" style="margin:10px;margin-top:5%;margin-bottom: 4%">
             <center>
            <div class="col-sm-6" id="shoping1"onmouseover="fun11(this)"onmouseout="fun12(this)"><div id="shoping"> 
                    <a href="../../user/index2.php"  style="color:white;text-decoration: none"><div id="buy"style="font-family: monospace">Shopping Portal</div></a>
                    </div>
            
            </div>
        </center>

        <div class="col-sm-5 col-sm-offset-1" id="location">
            <div>
                 <h1 id="kn">know your place</h1>
                 <a href="place1.php" style="text-decoration:none"><h2 onmouseover="fun15(this)"onmouseout="fun16(this)"><span class="glyphicon glyphicon-triangle-right"></span>Soil</h2></a>
                 <a href="encon.php" style="text-decoration:none"><h2 onmouseover="fun15(this)"onmouseout="fun16(this)" ><span class="glyphicon glyphicon-triangle-right"></span>Envoirnmental condition</h2></a>
            <a href="seed.php" style="text-decoration:none"><h2 onmouseover="fun15(this)"onmouseout="fun16(this)"><span class="glyphicon glyphicon-triangle-right"></span>Market availability..</h2>
            </a>
            </div>
            
        </div>
    </div>
               </div>
    <!--organig farming-->
    <div class="row" style="height:180px; margin:4px 4px;">
        <div class="col-xs-12" id="farming">
            <h1 style="text-allign:center">ORGANIC FARMING</h1>
            <p>Organic farming is an alternative agricultural system which originated early in the 20th century in reaction to rapidly changing farming practices. Organic farming continues to be developed by various organic agriculture organizations today.It relies on fertilizers of organic origin such as compost manure,green manure,and bone meal and places emphasis on techniques such as crop rotation and companion planting.Biological pest control,mixed cropping and the fostering of insect predators are encouraged.In general,organic standards are designed to allow the use of naturally occurring substances while prohibiting or strictly limiting synthetic substances.For instance,naturally occurring pesticides such as pyrethrin and rotenone are permitted, while synthetic fertilizers and pesticides are generally prohibited.Synthetic substances that are allowed include,for example,copper sulfate,elemental sulfur and Ivermectin. Genetically modified organisms, nanomaterials, human sewage sludge, plant growth regulators, hormones, and antibiotic use in livestock husbandry are prohibited.Reasons for advocation of organic farming include advantages in sustainability,openness, self-sufficiency, autonomy/independence,health, food security, and food safety.
            </p>
          </div>
        </div>
     <!--organig farming ends-->
     
    <!--want to display comments-->
    <div class="row">
        <div class="col-xs-12">
        
        <div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="http://localhost/kisaan/index.php" data-width="1000px" data-numposts="5"></div>
    </div>
    </div>
     <!--************************************-
            Footer Start-->
     </body>
     </html>
<?php
include 'contact5.php';
?>