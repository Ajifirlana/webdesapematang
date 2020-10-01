
<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
<meta charset="utf-8"/>
<title>Web Administrator </title>
<meta name="description" content="Form repeater examples">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<!--begin::Web font -->
<script src="/admintemplate/dashboard/libs/webfont/1.6.16/webfont.js"></script>

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
<link href="/admintemplate/dashboard/assets/vendors/custom/datatables/datatables.bundle.css'" rel="stylesheet" type="text/css"/>
<link href="/admintemplate/dashboard/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css"/>
<link href="/admintemplate/dashboard/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css"/>
<link href="/admintemplate/css/animate.css" rel="stylesheet">
<link href="/admintemplate/css/line-awesome.min.css" rel="stylesheet">
<link href="/admintemplate/css/font-awesome.css" rel="stylesheet">
<link href="/admintemplate/css/select2.min.css" rel="stylesheet">
<link href="/admintemplate/css/select2-bootstrap.min.css" rel="stylesheet">
 
<link href="/admintemplate/css/notify.css" rel="stylesheet">
<!--end::Base Styles -->
<link rel="shortcut icon" href="/admintemplate/'dashboard/assets/demo/default/media/img/logo/favicon.ico"/>
<script src="/admintemplate/dashboard/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="/admintemplate/dashboard/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
@section("sisip")
@show

</head>

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
  <!-- BEGIN: Header -->
  <header id="m_header" class="m-grid__item m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
  <div class="m-container m-container--fluid m-container--full-height">
    <div class="m-stack m-stack--ver m-stack--desktop">
      <!-- BEGIN: Brand -->
      <div class="m-stack__item m-brand m-brand--skin-dark ">
        <div class="m-stack m-stack--ver m-stack--general">
          <div class="m-stack__item m-stack__item--middle m-brand__logo">
            <a href="{{url('backend/')}}" class="m-brand__logo-wrapper"><img alt="" src="{{asset('dashboard/assets/demo/default/media/img/logo/logo_default_dark.png')}}"/></a>
          </div>
          <div class="m-stack__item m-stack__item--middle m-brand__tools">
            <!-- BEGIN: Left Aside Minimize Toggle -->
            <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block "><span></span></a>
            <!-- END -->
            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
            <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block"><span></span></a>
            <!-- END -->
            <!-- BEGIN: Responsive Header Menu Toggler -->
            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block"><span></span></a>
            <!-- END -->
            <!-- BEGIN: Topbar Toggler -->
            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block"><i class="flaticon-more"></i></a>
            <!-- BEGIN: Topbar Toggler --></div>
        </div>
      </div>
      <!-- END: Brand -->
      <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
        <!-- BEGIN: Horizontal Menu -->
        <button class="m-aside-header-menu-mobile-close m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
        <!-- END: Horizontal Menu -->
        <!-- BEGIN: Topbar -->
        <div id="m_header_topbar" class="m-topbar m-stack m-stack--ver m-stack--general m-stack--fluid">
          <div class="m-stack__item m-topbar__nav-wrapper">
           @include("backend.topbar")
          </div>
        </div>
        <!-- END: Topbar -->
      </div>
    </div>
  </div>
  </header>
  <!-- END: Header -->
  <!-- begin::Body -->
  <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
    <!-- BEGIN: Left Aside -->
    <button class="m-aside-left-close m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
    <div id="m_aside_left" class="m-grid__item  m-aside-left m-aside-left--skin-dark ">
      @include("backend.sidebar")
    </div>
    <!-- END: Left Aside -->
   
  </div>
<div class="m-grid__item m-footer">
  <!--begin::Portlet-->
  <div class="m-portlet">
    <div class="m-portlet__head">
      <div class="m-portlet__head-caption">
       
      </div>
    </div>

    <div class="m-portlet__body">
       <div align="center" class="m-portlet__head-title">
          <span class="m-portlet__head-icon m--hide">
          <i class="la la-gear"></i>
          </span>
          <h3 class="m-portlet__head-text">Tambah Galeri</h3>
        </div>
      <div class="col-md-12">

     
       <form action="/backend/tambahgaleristore" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        <div class="form-group">
                            <label>Caption</label>
                            <input type="text" name="caption" class="form-control" placeholder="Nama caption ..">

                        </div>

                  
                       

                     
                        <div class="form-group">
              <label>Gambar</label>
              <input type="file" name="image" class="form-control">

            </div>

            
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

     <div class="container">
<nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                              <h1> 
                            
                           
                            </h1>
                              
                            </ul>
                        </nav>
</div>                          
                            
                            

      </div>
    </div>
  </div>
  <!--end::Portlet-->
</div>



  </div>


<script type="text/javascript">
    $base_url = '{{url("/")}}';
</script>

<script src="{{asset('js/bootbox.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dashboard/assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap-notify.js')}}"></script>
<script src="{{asset('js/jquery.form.min.js')}}"></script>
<script src="{{asset('js/jquery.mask.min.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/jquery.number.min.js')}}"></script>
<script src="{{asset('js/moment-with-locales.js')}}"></script>
<script src="{{asset('js/bootstrap-datetimepicker.js')}}"></script>
<script src="{{asset('js/init.js')}}"></script>
@section("js")
@show
</body>

<ul class="m-topbar__nav m-nav m-nav--inline">
  <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
    <a href="#" class="m-nav__link m-dropdown__toggle">
    <span class="m-topbar__userpic">
    <img src="{{asset('dashboard/assets/app/media/img/users/user4.jpg')}}" class="m--img-rounded m--marginless" alt=""/>
    </span>
    
    </a>
    <div class="m-dropdown__wrapper">
      <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
      <div class="m-dropdown__inner">
        <div class="m-dropdown__header m--align-center" style="background: url({!!url('dashboard/assets/app/media/img/misc/user_profile_bg.jpg')!!}); background-size: cover;">
          <div class="m-card-user m-card-user--skin-dark">
            <div class="m-card-user__details">
              <span class="m-card-user__name m--font-weight-500">{{Auth::user()->username}}</span>
            </div>
          </div>
        </div>
        <div class="m-dropdown__body">
          <div class="m-dropdown__content">
            <ul class="m-nav m-nav--skin-light">
              <li class="m-nav__item">
                <a href="{{url('backend/ganti-password')}}" class="m-nav__link">
                <i class="m-nav__link-icon la la-key"></i>
                <span class="m-nav__link-text">Ganti Password</span>
                </a>
              </li>
              <li class="m-nav__separator m-nav__separator--fit"></li>
              <li class="m-nav__item">
                <a href="{{url('logout')}}" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </li>
</ul>
