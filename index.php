<!DOCTYPE html>
<html lang="en">
<head>
    <met a charset="UTF-8">
 <met a http-equiv="X-UA-Compatible" content="IE=edge">
 <met a name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" type="text/css" href="css/progress6.css">
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">
<div class="price-box">

<button id="btn" class="btn btn-primary py-4">Calculate</button>

<form class="form-horizontal form-pricing" role="form">
 <div class="price-slider">
   <h4 class="great"> Annual Revenue ($)</h4>
    <span><p class="price lead" id="amount-label"></p></span>
   <div class="col-sm-12">
     <div id="slider"></div>
     <span style="margin-left:0%;margin-top:1rem;">0</span>
     <span style="margin-left:22%;margin-top:1rem;">25M</span>
      <span style="margin-left:23%;margin-top:1rem;">50M</span>
      <span style="margin-left:23%;margin-top:1rem;">75M</span>
      <span style="margin-left:18.5%;margin-top:1rem;">1B</span>
   </div>
 </div>
 <div class="price-slider">
   <h4 class="great">Annual New Sales ($)</h4>
    <span><p class="price lead" id="duration-label"></p></span>
   <div class="col-sm-12">
     <div id="slider2"></div>
     <span style="margin-left:0%;margin-top:1rem;">0</span>
     <span style="margin-left:21%;margin-top:1rem;">100M</span>
      <span style="margin-left:22%;margin-top:1rem;">200M</span>
      <span style="margin-left:22%;margin-top:1rem;">300M</span>
      <span style="margin-left:18.5%;margin-top:1rem;">400M</span>
   </div>
 </div>
 <div class="price-slider">
   <h4 class="great">Annual Retention Rate (%)</h4>
    <span><p class="price lead" id="text-label">%</p></span>
   <div class="col-sm-12">
     <div id="slider3"></div>
     <span style="margin-left:0%;margin-top:1rem;">0</span>
     <span style="margin-left:22%;margin-top:1rem;">25</span>
    <span style="margin-left:23%;margin-top:1rem;">50</span>
    <span style="margin-left:23%;margin-top:1rem;">75</span>
    <span style="margin-left:22%;margin-top:1rem;">100</span>
   </div>
 </div>
 
 <div class="price-form" id="tg" style="display:none">

 <input type="hidden" id="amount" class="form-control">
 <input type="hidden" id="duration" class="form-control">
 <input type="hidden" id="text" class="form-control">

             <div class="form-group total" >
               <label for="total" class="col-sm-6 control-label"><strong>Total ($): </strong></label>
               <div class="col-sm-6">
                 <input type="hidden" id="total" class="form-control">
                 <p class="price lead" id="total-label" style="color: #9DC347; padding-top: 7px;font-size: 30px;font-weight: 700;"></p>
               </div>
             </div>
 

 </div>
</form>
</div>
</div>
<script>
const btn = document.getElementById('btn');
btn.addEventListener('click', () => {
 const form = document.getElementById('tg');

 if (form.style.display === 'none') {
   form.style.display = 'block';
 } else {
   form.style.display = 'none';
 }
});

</script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script>
 $(document).ready(function() {
       $("#slider").slider({
           animate: true,
           value:0,
           min: 1,
           max: 1000000000,
           step: 2500,
           slide: function(event, ui) {
               update(1,ui.value); //changed
           }
       });

       $("#slider2").slider({
           animate: true,
           value:0,
           min: 1,
           max: 400000000,
           step: 2500,
           slide: function(event, ui) {
               update(2,ui.value); //changed
           }
       });

       $("#slider3").slider({
           animate: true,
           value:0,
           min: 1,
           max: 100,
           step: 1,
           slide: function(event, ui) {
               update(3,ui.value); //changed
           }
       });

       $("#amount").val(0);
       $("#duration").val(0);
       $("#text").val(0);

       $("#amount-label").text(0);
       $("#duration-label").text(0);
       $("#text-label").text(0);

     
       update();
   });
   
   function update(slider,val) {
     var $amount = slider == 1?val:$("#amount").val();
     var $duration = slider == 2?val:$("#duration").val();
     var $text = slider == 3?val:$("#text").val();

      $first = ($text/100) * ($amount) + $duration;
      $second = ($first * ($text/100)) + $duration;
      $third = ($second * ($text/100)) + $duration;
      $fourth = ($third * ($text/100)) + $duration;
      $fifth = ($fourth * ($text/100)) + $duration;


      $lost1 = $first * (($text/100) - 1) ;
      $lost2 = $second * (($text/100) - 1)  ;
      $lost3 = $third * (($text/100) - 1)  ;
      $lost4 = $fourth * (($text/100) - 1)  ;
      $lost5 = $fifth *(($text/100) - 1) ;

      $finalLost = ($lost1+$lost2+$lost3+$lost4+$lost5);

      $qqq = $finalLost.toLocaleString('en-US');


      $total = $qqq;

      $xxx = $amount.toLocaleString('en-US');
      $yyy = $duration.toLocaleString('en-US');

      $( "#amount" ).val($amount);
      $( "#amount-label" ).text($xxx);
      $( "#duration" ).val($duration);
      $( "#duration-label" ).text($yyy);
      $( "#text" ).val($text);
      $( "#text-label" ).text($text);
      $( "#total" ).val($total);
      $( "#total-label" ).text($total);

      $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span>  <span class="glyphicon glyphicon-chevron-right"></span></label>');
      $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span>  <span class="glyphicon glyphicon-chevron-right"></span></label>');
      $('#slider3 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> <span class="glyphicon glyphicon-chevron-right"></span></label>');

   }
</script>
</body>
</html>