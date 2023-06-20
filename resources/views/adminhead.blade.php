<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bdtask - Bootstrap Admin Template Dashboard</title>

  <!-- Favicon and touch icons -->
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Start Global Mandatory Style
        =====================================================================-->
        <!-- jquery-ui css -->
<link href="{{asset('admincss/jquery-ui.min.css') }}" rel="stylesheet" type="text/css"/>

<!-- Bootstrap -->
<link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

<!-- Bootstrap tag input-->
<link href="{{asset('admincss/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css"/>
<!-- Bootstrap rtl -->
<?php //if (($setting->site_align=='RTL')) { ?>
<!--<link href="{{asset('admincss/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css"/> -->
<?php //} ?>

<!-- Lobipanel css -->
<link href="{{asset('admincss/lobipanel.min.css') }}" rel="stylesheet" type="text/css"/>
<!-- Pace css -->
<link href="{{asset('admincss/flash.css') }}" rel="stylesheet" type="text/css"/>

<link href="{{asset('admincss/all.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{asset('admincss/fontawesome-iconpicker.min.css') }}" rel="stylesheet" type="text/css"/>

<!-- Font Awesome -->
<link href="{{asset('admincss/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>

<!-- Pe-icon -->
<link href="{{asset('admincss/pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css"/>
<!-- Themify icons -->
<link href="{{asset('admincss/themify-icons.css') }}" rel="stylesheet" type="text/css"/>
<!-- select2.min -->
<link href="{{asset('admincss/select2.min.css') }}" rel="stylesheet" type="text/css"/>
<!-- timepicker -->
<link href="{{asset('admincss/jquery-ui-timepicker-addon.min.css') }}" rel="stylesheet" type="text/css"/>
<!-- datatable -->
<link href="{{asset('datatables/css/dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{asset('css/sweetalert.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{asset('css/toastr.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{asset('admincss/kitchen.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{asset('admincss/print.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{asset('admincss/extra.css') }}" rel="stylesheet" type="text/css" />
<!-- End Global Mandatory Style

<!- Theme style --> 
<link href="{{asset('admincss/custom.min.css') }}" rel="stylesheet" type="text/css"/>


<!-- Theme style rtl -->
<?php //if (($setting->site_align=='RTL')) { ?>
	<!--<link href="{{asset('admincss/custom-rtl.min.css') }}" rel="stylesheet" type="text/css"/>-->
<?php //} ?>
<link href="{{asset('admincss/sidebarcolor.css') }}" rel="stylesheet" type="text/css"/>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
<script src="#/ordermanage/order/showljslang" type="text/javascript"></script>
<script src="#/ordermanage/order/basicjs" type="text/javascript"></script>
<style>
        .loading:after {
  content: ' .';
  animation: dots 1s steps(5, end) infinite;}
		@keyframes dots {
  20%, 20% {
    color: rgba(0,0,0,1);
    text-shadow:
      .25em 0 0 rgba(0,0,0,0),
      .5em 0 0 rgba(0,0,0,0);}
  40% {
    color: #F00;
    text-shadow:
      .25em 0 0 rgba(0,0,0,0),
      .5em 0 0 rgba(0,0,0,0);}
  60% {
    text-shadow:
      .25em 0 0 #F00,
      .5em 0 0 rgba(0,0,0,0);}
  80%, 100% {
    text-shadow:
      .25em 0 0 #666,
      .5em 0 0 #666;}}
	   
        </style>