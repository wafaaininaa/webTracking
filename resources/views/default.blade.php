<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>SB Admin 2 - Bootstrap Admin Theme</title>
   <!-- Bootstrap Core CSS -->
   <link href="{!! asset('theme/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
   <!-- MetisMenu CSS -->
   <link href="{!! asset('theme/vendor/metisMenu/metisMenu.min.css') !!}" rel="stylesheet">
   <!-- Custom CSS -->
   <link href="{!! asset('theme/dist/css/sb-admin-2.css') !!}" rel="stylesheet">
   <!-- Morris Charts CSS -->
   <link href="{!! asset('theme/vendor/morrisjs/morris.css') !!}" rel="stylesheet">
   <!-- Custom Fonts -->
   <link href="{!! asset('theme/vendor/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
</head>
<body>
   <div id="wrapper">
       <!-- Navigation -->
       <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           @include('theme.header')
           @include('theme.sidebar')
       </nav>
       <div id="page-wrapper">
           @yield('content')
      </div>
       <!-- /#page-wrapper -->
   </div>
   <!-- /#wrapper --
   <!-- jQuery -->
   <script src="{!! asset('theme/vendor/jquery/jquery.min.js') !!}"></script>
   <!-- Bootstrap Core JavaScript -->
   <script src="{!! asset('theme/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
   <!-- Metis Menu Plugin JavaScript -->
   <script src="{!! asset('theme/vendor/metisMenu/metisMenu.min.js') !!}"></script>
   <!-- Morris Charts JavaScript -->
   <script src="{!! asset('theme/vendor/raphael/raphael.min.js') !!}"></script>
   <script src="{!! asset('theme/vendor/morrisjs/morris.min.js') !!}"></script>
   <script src="{!! asset('theme/data/morris-data.js') !!}"></script
   <!-- Custom Theme JavaScript -->
   <script src="{!! asset('theme/dist/js/sb-admin-2.js') !!}"></script>
</body>
</html>
Setup Header
Insert the following code inside the directory file resources/views/theme/header.blade.php
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
       <div class="container-fluid">
         <div class="navbar-wrapper">
           <a class="navbar-brand" href="#pablo">Dashboard</a>
         </div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
           <span class="sr-only">Toggle navigation</span>
           <span class="navbar-toggler-icon icon-bar"></span>
           <span class="navbar-toggler-icon icon-bar"></span>
           <span class="navbar-toggler-icon icon-bar"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end">
           <form class="navbar-form">
             <span class="bmd-form-group"><div class="input-group no-border">
               <input type="text" value="" class="form-control" placeholder="Search...">
               <button type="submit" class="btn btn-white btn-round btn-just-icon">
                 <i class="material-icons">search</i>
                 <div class="ripple-container"></div>
               </button>
             </div></span>
           </form>
           <ul class="navbar-nav">
             <li class="nav-item">
               <a class="nav-link" href="#pablo">
                 <i class="material-icons">dashboard</i>
                 <p class="d-lg-none d-md-block">
                   Stats
                 </p>
               </a>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="material-icons">notifications</i>
                 <span class="notification">5</span>
                 <p class="d-lg-none d-md-block">
                   Some Actions
                 </p>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                 <a class="dropdown-item" href="#">Mike John responded to your email</a>
                 <a class="dropdown-item" href="#">You have 5 new tasks</a>
                 <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                 <a class="dropdown-item" href="#">Another Notification</a>
                 <a class="dropdown-item" href="#">Another One</a>
               </div>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="material-icons">person</i>
                 <p class="d-lg-none d-md-block">
                   Account
                 </p>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                 <a class="dropdown-item" href="#">Profile</a>
                 <a class="dropdown-item" href="#">Settings</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#">Log out</a>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </nav>