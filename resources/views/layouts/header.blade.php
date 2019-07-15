<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- <link href="{{ asset('/public/css/app.css') }}" rel="stylesheet">
 -->
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ config('app.name', 'Basic Accounting Solution') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('css/paper-dashboard.css') }}" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
</head>

<body>
    
       <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
        <div class="logo">
                <a href="{{ url('/') }}" class="simple-text logo-mini">
                   
                </a>

                <a href="{{ url('/') }}" class="simple-text logo-normal">
                <span style="font-size:18px;color:#7AC29A;text-transform: uppercase;">
                SF Cheques</span>
                </a>
            </div>
            <div class="sidebar-wrapper">
                
                @if (Route::has('login'))
@auth
      
                <ul class="nav">
                    <li @if (\Request::is('/')) class="active" @endif>
                        <a href="{{ url('/') }}">
                            <i class="ti-panel"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                </ul>


@else

<div style="text-align:center;">

<p>&nbsp;</p>
<!--<p><span style="font-size:22px;color:#FF615D;text-transform: uppercase;">SF Cheques</span></p>-->
<p style="padding:25px;padding-top:5px; ">
<img src="{{ asset('img/logo.jpg') }}" class="img-responsive" style="border-radius: 5px;" />
</p>
<p><span style="font-size:13px;font-weight: normal;">, 
Plot # P-6, near Nara Jail, S.I.T.E., Hyderabad, 022-3886453 </span></p>
</div>
@endauth
@endif                
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-minimize">
    <!--                     <button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
     -->                </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand">
                        <span style="font-size:18px;color:#7AC29A;text-transform: uppercase;">{{\Request::route()->getName()}}</span> 
                         </a>
                    </div>
                    <div class="collapse navbar-collapse">

                        <ul class="nav navbar-nav navbar-right">
                            @if (Route::has('login'))
                        @auth
                      <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-user"></i>
                                    <p class="notification"></p>
                                    <p> {{ Auth::user()->name }}</p>
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                             
                                   <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li> 


                        @else

                        <li>
                            <a href="{{ route('login') }}" class="dropdown">
                                <i class="ti-unlock"></i>
                                <p>Login</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="dropdown>
                                <i class="ti-user"></i>
                                <p>Register</p>
                            </a>
                        </li>
                      

                        @endauth
                  @endif
                            
                        </ul>
                    </div>
                </div>
            </nav>
