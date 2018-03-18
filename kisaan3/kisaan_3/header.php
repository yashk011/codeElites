<html>
    <head>
        <meta charset="UTF-8">
        <title>kisaan.org</title>
       
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet"type="text/css" href="style3.css">
        <style>
            #shoping{
    margin:20%;
    background-color: #660033;
    color:white;
}
#shoping1{
    background-image: url(bean1.jpg);
}
#location{
    background-image: url(location-on-map.gif);
}
            #saan{
                position:relative;
                 -webkit-animation: mymove 4s ;
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
                    <div id="plough"><img src="plough6.png"class="img-responsive" id="saan"></div><div id="caption"><a  href="#" style="color:#660033" >kisaan</a></div>
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
    obj1.style.opacity='0.5'
          
        
    }
     function fun12(obj1){
    obj1.style.opacity='1'
           
        
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
                         <li><a href="index.php">home</a></li>
                    
                    <li><a href="#"><span class="glyphicon glyphicon-log-in">login</span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon th-list">about us</span></a></li>
                    <li><a href="#contact"><span class="glyphicon glyphicon-phone-alt">contact us</span></a></li>
                     </ul>
                 </div>
              </div> 
          </nav>
</div>
        </div>
    </body>