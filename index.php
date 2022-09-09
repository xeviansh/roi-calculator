<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" type="text/css" href="css/progress6.css">
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
<div class="container">
<div class="price-box">

<!-- <button id="btn" class="btn btn-primary py-4">Calculate</button> -->

<form class="form-horizontal form-pricing" role="form">
 <div class="price-slider">
   <h4 class="great"> Annual Revenue ($)</h4>
    <span><p class="price lead" id="amount-label"></p></span>
   <div class="col-sm-12">
    <!-- <input type="range" class="w-100" id="" min="0" max="100"> -->
     <div id="slider"></div>
     <span class="hid" style="margin-left:0%;margin-top:1rem;">0</span>
     <span class="hid" style="margin-left:21%;margin-top:1rem;">250M</span>
      <span class="hid" style="margin-left:22%;margin-top:1rem;">500M</span>
      <span class="hid" style="margin-left:23%;margin-top:1rem;">750M</span>
      <span class="hid" style="margin-left:18.5%;margin-top:1rem;">1B</span>

   </div>
 </div>
 <div class="price-slider">
   <h4 class="great">Annual New Sales ($)</h4>
    <span><p class="price lead" id="duration-label"></p></span>
   <div class="col-sm-12">
     <div id="slider2"></div>
     <span class="hid" style="margin-left:0%;margin-top:1rem;">0</span>
     <span class="hid" style="margin-left:21%;margin-top:1rem;">100M</span>
      <span class="hid" style="margin-left:22%;margin-top:1rem;">200M</span>
      <span class="hid" style="margin-left:22%;margin-top:1rem;">300M</span>
      <span class="hid" style="margin-left:18.5%;margin-top:1rem;">400M</span>
   </div>
 </div>
 <div class="price-slider">
   <h4 class="great">Annual Retention Rate (%)</h4>
    <span><p class="price lead" id="text-label">%</p></span>
   <div class="col-sm-12">
     <div id="slider3"></div>
     <span class="hid" style="margin-left:0%;margin-top:1rem;">0</span>
     <span class="hid" style="margin-left:22%;margin-top:1rem;">25</span>
    <span class="hid" style="margin-left:23%;margin-top:1rem;">50</span>
    <span class="hid" style="margin-left:23%;margin-top:1rem;">75</span>
    <span class="hid" style="margin-left:22%;margin-top:1rem;">100</span>
   </div>
 </div>
 
 <div class="price-form" id="tg" style="display:none">

 <input type="hidden" id="amount" class="form-control">
 <input type="hidden" id="duration" class="form-control">
 <input type="hidden" id="text" class="form-control">
 <!-- FOR CALCULATION -->
 <input type="hidden" id="amount1" class="form-control">
 <input type="hidden" id="duration1" class="form-control">
 <!-- <input type="hidden" id="text" class="form-control"> -->

   <div class="form-group total" >
     <label for="total" class="col-sm-6 control-label"><strong>Total ($): </strong></label>
     <div class="col-sm-6">
       <input type="hidden" id="total" class="form-control">
       <p class="price lead" id="total-label" style="color: #9DC347; padding-top: 7px;font-size: 30px;font-weight: 700;"></p>
     </div>
   </div>

   <span class="text-center" style="color:#2EA2ED">
    <h1 style="font-size: 50px;font-weight:700;">$</h1><br>
    <p style="font-size: 34px;font-weight:700;line-height: 0;">Represents 5 years of compounding client retention</p>
  </span>
 

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
!function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);
</script>
<script>
 $(document).ready(function() {
       $("#slider").slider({
           animate: true,
           value:0,
           min: 1,
           max: 1000000000,
           step: 100,
           slide: function(event, ui) {
               update(1,ui.value); //changed
           }
       });

       $("#slider2").slider({
           animate: true,
           value:0,
           min: 1,
           max: 400000000,
           step: 64587156,
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
// FOR CALCULATION
       $("#amount1").val(0);
       $("#duration1").val(0);

     
       update();
   });
   
   function update(slider,val) {
     var $amount = slider == 1?val:$("#amount").val();
     var $duration = slider == 2?val:$("#duration").val();
     var $text = slider == 3?val:$("#text").val();

      // var a = '1,125'
      // a=a.replace(/\,/g,'')
      // a=Number(a)
      
      // var $amount1 = $amount.replace(/\,/g,'');
      // var $duration1 = $duration.replace(/\,/g,'');

      var $amount1 = slider == 1?val:$("#amount1").val();
      var $duration1 = slider == 2?val:$("#duration1").val();
      // var $text = slider == 3?val:$("#text").val();


      $first = ($text/100) * ($amount1) + $duration1;
      $second = ($first * ($text/100)) + $duration1;
      $third = ($second * ($text/100)) + $duration1;
      $fourth = ($third * ($text/100)) + $duration1;
      $fifth = ($fourth * ($text/100)) + $duration1;


      $lost1 = $first * (($text/100) - 1) ;
      $lost2 = $second * (($text/100) - 1)  ;
      $lost3 = $third * (($text/100) - 1)  ;
      $lost4 = $fourth * (($text/100) - 1)  ;
      $lost5 = $fifth *(($text/100) - 1) ;

      $finalLost = ($lost1+$lost2+$lost3+$lost4+$lost5);

      // $qqq = $finalLost.toLocaleString('en-US');
      $qqq = $finalLost.toLocaleString(undefined,{maximumFractionDigits:2});


      $total = $qqq;

      $xxx = $amount.toLocaleString('en-US');
      $yyy = $duration.toLocaleString('en-US');

      // num.toLocaleString('en', {useGrouping:true})
      $("#amount1").val($amount1);
      $("#duration1").val($duration1); 

      $( "#amount" ).val($xxx);
      $( "#amount-label" ).text($xxx);
      $( "#duration" ).val($yyy);
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
