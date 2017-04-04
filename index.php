<html>
<head>
    <title>ADMIN PANEL</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="" />
    <meta name="keywords" content=""/>
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"/>
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body>
<div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"> </i></a>
	  </div>
      <ul id="nav-mobile" class="side-nav fixed" style="width: 240px;">
        <li class="logo"><a id="logo-container" href="#" class="brand-logo">
			<img src="assets/img/user.jpg" width="75px" height="75px">
           </a></li>
	   <li class="no-padding">
               <ul class="collapsible collapsible-accordion">
                   <li class="bold active"><a class="collapsible-header waves-effect waves-teal">Student<i class="material-icons right">arrow_drop_down</i></a>
                       <div class="collapsible-body">
                           <ul>
                               <li><a href="">sub one</a></li>
							   <li><a href="">sub one</a></li>
							   <li><a href="">sub one</a></li>
							   <li><a href="">sub one</a></li>
                           </ul>
                       </div>
                   </li>
				   <li class="bold active"><a class="collapsible-header waves-effect waves-teal">Sample<i class="material-icons right">arrow_drop_down</i></a>
                       <div class="collapsible-body">
                           <ul>
                               <li><a href="">sub two</a></li>
							   
                           </ul>
                       </div>
                   </li>
               </ul>
           </li>
      </ul>
<header>
      <nav class="top-nav ">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">
	  <li style="list-style:none"><a class="dropdown-button right" href="#!" data-activates="dropdown1"><i class="material-icons">more_vert</i></a></li>
	   </a>
		   <ul id="dropdown1" class="dropdown-content">
			  <li><a href="#!">Setting</a></li>
			  <li><a href="<?php echo ADMIN_BASE_URL?>system/controller/login-controller.php?feature=logout">Logout</a></li>
			  <li class="divider"></li>
			  <!--<li><a href="#!">Change Password</a></li>-->
			</ul>
		  </div>
        </div>
      </nav>

    </header>
<section>
	<div class="container" style="padding-left: 240px;">
		<div class="row">
			<div class="col s12 m12 l12">
			  <div class="card card_pagvalu">
				<div class="card-content">
				  <h5>Sample Admin panel</h5>
				</div>
				<div class="card-action">
				
				</div>
				<div class="clear"></div>
			  </div>
			</div>
		</div>
	</div>
</section>
<!--footer content start-->
<section style="background-color:#424242;padding:1px;clear:both;margin-top:20px;">
	<div class="container">
		<div class="row">
			<div class="col l12">
				<p style="text-align:center;margin-top:0px;margin-bottom:0px;color:white;line-height:15px;margin-top:20px">© 2017 </p>
			</div>
		</div>
	</div>
</section>
	</html>
<script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/autosuggestion.js"></script>
<script src="assets/js/jquery.table2excel.js"></script>