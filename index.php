<html lang="en"><head>
    <meta charset="utf-8">
    <title>Scaffolding · Twitter Bootstrap</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <!-- Le styles -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="/css/docs.css">
    <link rel="stylesheet" href="/js/google-code-prettify/prettify.css">

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
     <script src="/js/jquery.js"></script>
    <script src="/js/jquery.validate.js"></script>
  </head>

  <body >


  <!-- Navbar
    ================================================== -->
    <%- partial('topbar') %>      
    <div class="container ">
      <!-- Masthead
      ================================================== -->
      <header id="overview" class="jumbotron subhead">
      <!-- Carousel nav -->
      <h1>Nodepress</h1>
				     <div id="myCarousel" class="carousel">
				    <!-- Carousel items -->
				
              <div class="item">
                <img src="/img/bootstrap-mdo-sfmoma-01.jpg" alt="">
                <div class="carousel-caption">
                  <h4>First Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
              <div class="item active">
                <img src="/img/bootstrap-mdo-sfmoma-02.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
              <div class="item">
                <img src="/img/bootstrap-mdo-sfmoma-03.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Third Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>			    
				    </div>
        <div class="subnav">
          <ul class="nav nav-pills">
            <li class="active"><a href="/">Home</a></li>
            <li class=""><a href="/blog">Post</a></li>           
          </ul>
        </div>
      </header>
      <div class="row">
    <div class="span7">
  		<%- body %>
  	</div>
    <div class="span230">
      <%- partial('sidebar') %>     
    </div>
  </div>


</div><!-- /container -->
<!-- Footer
 ================================================== -->
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
   
    <script src="/js/google-code-prettify/prettify.js"></script>
    <script src="/js/bootstrap-transition.js"></script>
    <script src="/js/bootstrap-alert.js"></script>
    <script src="/js/bootstrap-modal.js"></script>
    <script src="/js/bootstrap-dropdown.js"></script>
    <script src="/js/bootstrap-scrollspy.js"></script>
    <script src="/js/bootstrap-tab.js"></script>
    <script src="/js/bootstrap-tooltip.js"></script>
    <script src="/js/bootstrap-popover.js"></script>
    <script src="/js/bootstrap-button.js"></script>
    <script src="/js/bootstrap-collapse.js"></script>
    <script src="/js/bootstrap-carousel.js"></script>
    <script src="/js/bootstrap-typeahead.js"></script>
    <script src="/js/application.js"></script>
   
</body></html>
