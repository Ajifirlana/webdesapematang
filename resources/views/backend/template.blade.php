<meta charset="utf-8"/>
<title>Web Administrator </title>
<meta name="description" content="Form repeater examples">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<!--begin::Web font -->
<script src="{{asset('admintemplate/dashboard/libs/webfont/1.6.16/webfont.js')}}"></script>
<script>
  WebFont.load({
    google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
    active: function() {
        sessionStorage.fonts = true;
    }
  });
</script>
<!--end::Web font -->
<!--begin::Base Styles -->

<link href="{{asset('admintemplate/dashboard/assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('admintemplate/dashboard/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('admintemplate/dashboard/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('admintemplate/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('admintemplate/css/line-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('admintemplate/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('admintemplate/css/select2.min.css')}}" rel="stylesheet">
<link href="{{asset('admintemplate/css/select2-bootstrap.min.css')}}" rel="stylesheet">
 
<link href="{{asset('admintemplate/css/notify.css')}}" rel="stylesheet">
<!--end::Base Styles -->
<link rel="shortcut icon" href="admintemplate/'dashboard/assets/demo/default/media/img/logo/favicon.ico"/>
<script src="admintemplate/dashboard/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="/admintemplate/dashboard/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
@section("sisip")
@show

