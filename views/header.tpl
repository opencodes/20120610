<html lang="en"><head>
    <meta charset="utf-8">
    <title>Scaffolding · Twitter Bootstrap</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <!-- Le styles -->
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="public/css/docs.css">
    <link rel="stylesheet" href="public/css/common.css">    
    <link rel="stylesheet" href="public/js/google-code-prettify/prettify.css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link href="/ico/favicon.ico" rel="shortcut icon">
    <link href="/ico/apple-touch-icon-144-precomposed.png" sizes="144x144" rel="apple-touch-icon-precomposed">
    <link href="/ico/apple-touch-icon-114-precomposed.png" sizes="114x114" rel="apple-touch-icon-precomposed">
    <link href="/ico/apple-touch-icon-72-precomposed.png" sizes="72x72" rel="apple-touch-icon-precomposed">
    <link href="/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
     <script src="public/js/jquery.js"></script>
    <script src="public/js/jquery.validate.js"></script>
  </head>

  <body >


  <!-- Navbar
    ================================================== -->
     <div class="navbar navbar-fixed-top" style="height:10px;">
      <div class="navbar-inner">
        <div class="container">
          <div class='logo pull-left'>
          	<a href="index">Employee CIBIL</a>		
          </div>        
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="about">About</a>
              </li>
              <li class="">
                <a href="register">Register</a>
              </li>
              <li class="">
                <a href="employee">Employee</a>
              </li>
              <li class="">
              </li>
            </ul>
          </div>          
		{if $smarty.session.user}
     	   <div class="btn-group pull-right">
            <a href="#" data-toggle="dropdown" class="btn dropdown-toggle">
              <i class="icon-user"></i> 
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="/user/myaccount/">My Account</a></li>
              <li class="divider"></li>
              <li><a href="/user/logout/">Sign Out</a></li>
            </ul>
          </div>
		{else }
		<form class="navbar-search pull-right" action="/user/login" method="post">
	    <input type="text" class="search-query" placeholder="Username/Email" name="username">
	    <input type="password" class="search-query" placeholder="Password" name="userpass">
			<button type="submit" class="btn">Login</button>    
		</form>		
		{/if}
        </div>
      </div>
    </div>
<div class="container" >
    