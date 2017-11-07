<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>RandomShit</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
   </script>
 
   <script>

        function openWebsite( website) {
             
      
       var win = window.open(website, '_blank');
       if (win) {
           //Browser has allowed it to be opened
               win.focus();
           } else {
     //Browser has blocked it
     alert('Please allow popups for this website');
 }
}

 var redirect_website = '<?php echo $redirect_website ?>';
 if(redirect_website!="")
 openWebsite(redirect_website);
  
       
     


   </script>
<style type="text/css">
.container-fluid {
    
    background-color: currentColor;
}
.container-center
{
    margin-top: 15%;
    font-family: 'VT323', monospace;
}

.ft-style{
    font-size: 70px;
    color: #AED581;
}
.ln-one{
    font-size: 80px;
}
.ln-two{
    font-size: 50px;
}
.ln-three{
    font-size: 80px;
}
.btn-text{
    font-size: 25px;
}
</style>
</head>
<!-- #E6EE9C style="background-color: #BA68C8" -->
<body class="container-fluid" >

 <script>

 </script>

<center>

<div class="container-center">
    <div class="ft-style">
    <p><div class="ln-one">Find Me</div>
        <div class="ln-two">Something</div>
        <div class="ln-three">Interesting!</div></p>
    </div>

    <form method="post" action="{{route('findWebsite')}}">
         {{ csrf_field() }}
        <button type="submit" class="btn btn-danger btn-lg btn-text"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>GO!!</button>
    </form>
    <!-- <a href="{{route('findWebsite')}}" class="btn btn-danger btn-lg btn-text"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> GO!!!</a>
 -->
</div>
</center>
</body>


</html>
