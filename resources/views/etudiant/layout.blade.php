
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Etudiant Crud</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<style>
        .footer {
            position: relative;
            top:13%; //hadi mohima bax ib9a dik xi info lii ta7t page dima las9a fl lakahr
            bottom: 0;
//          height: 180px;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }
a { color: #fe921f }
h2 {
   font-size: 32px;
  line-height: 150px;
  text-shadow: -1px -1px , 1px 1px #d60, -3px 0 4px ;
  font-family:"Segoe print", Arial, Helvetica, sans-serif;
  color: #9C27B0; 
  padding:32px;
  font-weight:lighter;
  -moz-box-shadow: 2px 2px 6px ;  
  -webkit-box-shadow: 2px 2px 6px ;  
  box-shadow:2px 2px 6px ;  
  text-align:center;
  display:inline;
}
strong{
color:black;
}
    </style> 
</head>
 <body>
  <div class="container">    
     @yield('content') <!-- db hna fin ghay b9a itktb kolshi ms awal page tat ban hiya dyl main 7it drtha f route ohiya tat sayft hadi -->
    </div>
<div class="text-center footer">

        <h4>Pour plus informations : </h4>
        <h4>+21290784557</h4>
        <h4>Mejdyassin@gmail.com</h4>
         <h4>Code source : </h4>
         <a href="https://github.com/CharkiAbdelillah/app-laravel-crud"  style="background-color:black" class="btn btn-success-default" target="_blank">https://github.com/CharkiAbdelillah/app-laravel-crud</a> 
    </div>
 </body>
</html>
