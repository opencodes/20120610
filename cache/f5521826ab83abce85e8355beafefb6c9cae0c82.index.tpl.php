<?php /*%%SmartyHeaderCode:4407489064fd80304411a50-36116336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5521826ab83abce85e8355beafefb6c9cae0c82' => 
    array (
      0 => '../20120610/views/index.tpl',
      1 => 1339551879,
      2 => 'file',
    ),
    'e97409c04418a9389a299251fe42087e581339b6' => 
    array (
      0 => '../20120610/views/header.tpl',
      1 => 1339551684,
      2 => 'file',
    ),
    'd72d3290bf6fdd5c685c74935b43e0588218ae47' => 
    array (
      0 => '../20120610/views/footer.tpl',
      1 => 1339551677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4407489064fd80304411a50-36116336',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_4fd8030444eff7_12869779',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd8030444eff7_12869779')) {function content_4fd8030444eff7_12869779($_smarty_tpl) {?><html lang="en"><head>
    <meta charset="utf-8">
    <title>Scaffolding · Twitter Bootstrap</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <!-- Le styles -->
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="public/css/docs.css">
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
         
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="/">Home</a>
              </li>
            
              <li class="">
                <a href="/about/">About</a>
              </li>
              <li class="">
                <a href="/user/register/">Register</a>
              </li>
              <li class="">
              </li>
            </ul>
          </div>

     <form class="navbar-search pull-right" action="/user/login" method="post">
	    <input type="text" class="search-query" placeholder="Username/Email" name="username">
	    <input type="password" class="search-query" placeholder="Password" name="userpass">
			<button type="submit" class="btn">Login</button>    
		</form>

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

        </div>
      </div>
    </div>

<footer class="footer">
<div class="container" style="min-height: 150px;">
   <div class="row">
    <div class="span4">
      <h3><small><a href="/about/">About</a></small></h3>
      <p>Aliquam laoreet posuere velit vitae semper. Pellentesque sit amet lorem tortor. Donec pretium venenatis varius. Nulla condimentum hendrerit erat non commodo. Vestibulum sit amet risus neque, non tempus felis. Nulla tincidunt est nec urna tempor a mollis eros fermentum. Nam convallis, risus eu tempus commodo, justo augue imperdiet turpis, sed pulvinar mauris tellus nec lectus. Pellentesque non fringilla eros. </p>
    </div><!-- /.span -->
    <div class="span3">
      <h3><small><a href="/contact/">Contact</a></small></h3>
      <p>Aliquam laoreet posuere velit vitae semper. Pellentesque sit amet lorem tortor. Donec pretium venenatis varius. Nulla condimentum hendrerit erat non commodo. Vestibulum sit amet risus neque, non tempus felis. Nulla tincidunt est nec urna tempor a mollis eros fermentum. Nam convallis, risus eu tempus commodo, justo augue imperdiet turpis, sed pulvinar mauris tellus nec lectus. Pellentesque non fringilla eros.</p>
      
    </div><!-- /.span -->
    <div class="span230">
      <h3><small>Contact Information</small></h3>
      <div class="textwidget"><h6>Author Name</h6>
			<p>918 East Test Rd.<br>
			Test, WA 99206<br>
			USA<br>
			<br>
			Telephone: +0 123 456 789<br>
			Email: <a href="mailto:email@example.com">email@example.com</a></p>
			<div id="social">
			</div>
</div>
    </div><!-- /.span -->
    
  </div><!-- /.row -->

</div>
    <div  style="height:35px;background-color:#000;width:100%;margin:auto;">
<div class="container">    
Copyright &copy; 2012 . All Rights Reserved. 		
      <p class="pull-right"><a href="#">Back to top</a></p>
					
</div>
</div>
</footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="public/js/google-code-prettify/prettify.js"></script>
    <script src="public/js/bootstrap-transition.js"></script>
    <script src="public/js/bootstrap-alert.js"></script>
    <script src="public/js/bootstrap-modal.js"></script>
    <script src="public/js/bootstrap-dropdown.js"></script>
    <script src="public/js/bootstrap-scrollspy.js"></script>
    <script src="public/js/bootstrap-tab.js"></script>
    <script src="public/js/bootstrap-tooltip.js"></script>
    <script src="public/js/bootstrap-popover.js"></script>
    <script src="public/js/bootstrap-button.js"></script>
    <script src="public/js/bootstrap-collapse.js"></script>
    <script src="public/js/bootstrap-carousel.js"></script>
    <script src="public/js/bootstrap-typeahead.js"></script>
    <script src="public/js/application.js"></script>
   
</body></html>
<?php }} ?>