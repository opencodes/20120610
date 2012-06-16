<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CIBIL Admin :</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="CIBIL" >

    <!-- Le styles -->
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <style >
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="public/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="public/css/common.css" rel="stylesheet">
    <link href="public/css/demo_table_jui.css" rel="stylesheet">
    <link href="public/css/jquery-ui-1.8.20.custom.css" rel="stylesheet">
	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->		
    <script src="public/js/jquery.js"></script>
    <script src="public/js/jquery.validate.js"></script>
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
      
        <div class="container-fluid">
      
          <a class="brand" href="#">EMP-CIBIL</a>
		 {if $smarty.session.id}
          <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> mail@example.com
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li class="divider"></li>
              <li><a href="/logout/">Sign Out</a></li>
            </ul>
          </div>
          
          <div class="nav-collapse">
          
            <ul class="nav">
              <li class="active"><a href="/">Home</a></li>
              <li><a href="/posts/">Posts</a></li>
              <li><a href="/media/">Media</a></li>
              <li><a href="/links/">Links</a></li>
              <li><a href="/pages/">Pages</a></li>
              <li><a href="/comments/">Comments</a></li>
              <li><a href="/users/">Users</a></li>
              <li><a href="/tools/">Tools</a></li>
              <li><a href="/setting/">Setting</a></li>
            </ul>

          </div><!--/.nav-collapse -->
		  {/if}
        </div>
       
      </div>
    </div>	<div class="container">
