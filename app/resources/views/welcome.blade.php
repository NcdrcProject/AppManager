<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            } */


            html, body {
  font-family: 'Open Sans', sans-serif;
  height: 100%;
}
body {
  background: #FFFFFF;
  height: 100%;
}
img {
  max-width: 100%;
}
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
a {
  text-decoration: none;
}
#header {
  float: left;
  width: 100%;
  background: #ffffff;
  position: relative;
}
.white-label {
  float: left;
  background: #33373B;
  max-width: 210px;
  padding: 10px;
  min-height: 44px;
  background: #279BE4;
  width: 100%;
  max-height: 44px;
}
.white-label img {
  max-height: 43px;
}
.header-nav {
  min-height: 64px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background: #279BE4;
}
.menu-button {
  float: left;
  font-size: 29px;
  color: #fff;
  padding: 12px 19px;
}
.nav ul {
  height: 64px;
  float: right;
}
.nav ul li {
  float: left;
  position: relative;
  padding: 11px;
}
.nav > ul > li:first-child {
  border-left: none;
}
.nav ul li a {
  color: #fff;
  padding: 1px;
  float: left;
}
.nav ul li i {
  color: #fff;
}
.nav ul li:hover {
  background: #01A9F0;
  color: #fff;
}
.user-profile {
  float: right;
}
.user-profile > div {
  float: left;
  padding: 20px 8px;
  position: relative;
}
.user-profile i {
  font-size: 1.2em;
  color: #5F6F86;
}
.user-profile i:hover {
  color: #397AC5;
}
.font-icon i:after {
  position: absolute;
  content: '3';
  background: #E74C3C;
  color: #fff;
  font-size: 12px;
  border-radius: 50%;
  width: 10px;
  height: 10px;
  padding: 3px 4px 4px 3px;
  text-align: center;
  top: 12px;
  right: 11px;
}
.font-icon {
  padding: 8px 10px;
}
.font-icon i {
  font-size: 24px;
}
.nav-mail .font-icon i:after {
  background: #2ECC71;
}
div.user-image {
  padding: 9px 5px;
  margin: 0 5px;
  border-left: 1px solid #ccc;
  border-right: 1px solid #ccc;
}
.nav-profile {
  background: #0274BD;
}
.nav-profile-image img {
  width: 39px;
  height: 41px;
  border-radius: 50%;
  float: left;
}
.nav-profile-name {
  float: right;
  margin: 11px 7px 8px 14px;
  color: #fff;
}
.nav-profile-name i {
  padding: 0 0 0 11px;
}
.nav-chat i:after {
  display: none;
}
#sidebar {
  overflow: hidden;
  width: 210px;
  height: 100%;
  float: left;
  background: #2A2D33;
}
#sidebar-nav {
  width: 106%;
  height: calc(100% - 95px);
  padding: 0;
  background: #2A2D33;
  border-right: 1px solid #E0E0E0;
  overflow-y: scroll;
}
#sidebar-nav h2 {
  color: #60636B;
  float: left;
  width: 100%;
  font-size: .8em;
  font-family: 'Open Sans', sans-serif;
  font-weight: 600;
  text-transform: uppercase;
  padding: 3px 0 2px 20px;
  border-top: 1px solid #4D4C4C;
  box-sizing: border-box;
  margin: 10px 0;
}
/*
#sidebar-nav ul {

}
#sidebar-nav ul li {

} */
#sidebar-nav ul li a {
  color: #C2C2C2;
  font-size: .95em;
  padding: 15px 20px;
  float: left;
  width: 100%;
  font-weight: 600;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#sidebar-nav ul li:hover a, #sidebar-nav ul li:hover a i, #sidebar-nav li.active a, #sidebar-nav li.active a i {
  color: #333;
}
#sidebar-nav ul li:hover a {
  background: #fff;
  color: #333;
}
#sidebar-nav ul li.active a {
  background: #fff;
  color: #333;
}
#sidebar-nav ul li.active a i {
  background: #fff;
}
#sidebar-nav i {
  padding-right: 8px;
  font-size: 1.3em;
  color: #60636B;
  width: 25px;
  text-align: center;
}
#content {
  float: left;
  width: calc(100% - 210px);
  height: 100%;
  word-wrap: break-word;
  background: #FFFFFF;
  font-family: Raleway, sans-serif;
}
::-webkit-scrollbar {
    width: 12px;
}
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
.content {
  float: left;
  background: #E9EEF4;
  width: 100%;
  height: calc(100% - 64px);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.content-header {
  background: #fff;
  float: left;
  width: 100%;
  margin-bottom: 15px;
  padding: 15px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-bottom: 1px solid #ccc;
}
.content-header h1 {
  margin: 0;
  font-weight: normal;
  padding-bottom: 5px;
}
.content-header p {
  margin: 0;
  padding-left: 2px;
}
.widget-box {
  background: #fff;
  border: 1px solid #E0E0E0;
  float: left;
  width: 100%;
  margin: 0 0 15px 15px;
}
.widget-header {
  cursor: move;
}
.widget-header-blue {
  background: #279BE4;
}
.widget-header-red {
  background: #c0392b;
}
.widget-header-purple {
  background: #8e44ad;
}
.widget-header-yellow {
  background: #f1c40f;
}

.widget-header h2 {
  font-size: 15px;
  font-weight: normal;
  margin: 0;
  padding: 11px 15px;
  color: #F9F9F9;
  display: inline-block;
}
.sample-widget {max-width: 47%;}
.widget-box .fa-cog {
  float: right;
  color: #fff;
  margin: 11px 11px 0 0;
  font-size: 20px;
}

/*JQuery-UI handler*/
.portlet-placeholder {
  border: 1px dotted gray;
  margin: 0 1em 1em 0;
  height: 50px;
}
        </style>
    </head>
    <body>
        <!--div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div-->




        <section id="sidebar"> 
  <div class="white-label">
  </div> 
  <div id="sidebar-nav">   
    <ul>
      <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="#"><i class="fa fa-desktop"></i> My Website</a></li>
      <li><a href="#"><i class="fa fa-usd"></i> Ecommerce</a></li>
      <li><a href="#"><i class="fa fa-pencil-square-o"></i> My Blog</a></li>
      <li><a href="#"><i class="fa fa-sitemap"></i> SEO Tools</a></li>
      <li><a href="#"><i class="fa fa-line-chart"></i> Reporting</a></li>
      <li><a href="#"><i class="fa fa-comments-o"></i>Social Marketing</a></li>
      <li><a href="#"><i class="fa fa-map-marker"></i> Get Traffic</a></li>     
      <li><a href="#"><i class="fa fa-users"></i> Employees</a></li>
      <li><a href="#"><i class="fa fa-calendar-o"></i> Reservations</a></li>
      <li><a href="#"><i class="fa fa-calendar"></i> Calendar</a></li>
    </ul>
  </div>
</section>
<section id="content">
  <div id="header">
    <div class="header-nav">
      <div class="menu-button">
        <!--<i class="fa fa-navicon"></i>-->
      </div>
      <div class="nav">
        <ul>
          <li class="nav-settings">
            <div class="font-icon"><i class="fa fa-tasks"></i></div>
          </li>
          <li class="nav-mail">
            <div class="font-icon"><i class="fa fa-envelope-o"></i></div>
          </li>
          <li class="nav-calendar">
            <div class="font-icon"><i class="fa fa-calendar"></i></div>
          </li>
          <li class="nav-chat">
            <div class="font-icon"><i class="fa fa-comments-o"></i></div>
          </li>
          <li class="nav-profile">
            <div class="nav-profile-image">
              <img src="https://skynet.marketecture.com/user_avatars/258800/Hayley-Helsten.jpg" alt="profile-img" alt="profile image">
              <div class="nav-profile-name">Jane Smith<i class="fa fa-caret-down"></i></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="content-header">
      <h1>Dashboard</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div id="sortable">
      <div class="widget-box sample-widget">
      <div class="widget-header widget-header-red">
        <h2>Widget Header #1</h2>
        <i class="fa fa-cog"></i>
      </div>
      <div class="widget-content">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png">
      </div>
    </div>
      <div class="widget-box sample-widget">
      <div class="widget-header widget-header-purple">
        <h2>Widget Header #2</h2>
        <i class="fa fa-cog"></i>
      </div>
      <div class="widget-content">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png">
      </div>
    </div>
      <div class="widget-box sample-widget">
      <div class="widget-header widget-header-yellow">
        <h2>Widget Header #3</h2>
        <i class="fa fa-cog"></i>
      </div>
      <div class="widget-content">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png">
      </div>
    </div>
      <div class="widget-box sample-widget">
      <div class="widget-header widget-header-blue">
        <h2>Widget Header #4</h2>
        <i class="fa fa-cog"></i>
      </div>
      <div class="widget-content">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png">
      </div>
    </div>
    </div>
  </div>
</section>


    </body>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script>
        $( function() {
  $('#sortable').sortable({
      connectWith: ".column",
      handle: ".widget-header",
      cancel: ".fa-cog",
      placeholder: "portlet-placeholder ui-corner-all"
   });
  $('#sortable').disableSelection();
});
    </script>
</html>
