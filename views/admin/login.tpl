{include file="header.tpl" title="Info"}
<div  style="min-height: 40px;" id="response"></div>
<form action="/login/" id="login-form" method="post">
<h2> Admin Login</h2>
<div id="inputs">
	<div id="masterinput" class="clearfix">
		<label for="xlInput">Username : </label>
		<div class="input">
			<input type="text"  tabindex="1" name="adminusername" id="adminusername" class="input-xlarge required email">
		</div>
	</div>	
		<div id="masterinput" class="clearfix">
		<label for="xlInput">Password : </label>
		<div class="input">
			<input type="password"  tabindex="1" name="adminpass" id="adminpass" class="input-xlarge required">
		</div>
	</div>
	
</div>
<div class="actions">
	<div class="input">
		<button  tabindex="2" type="submit" id="generateinvoices" class="btn btn-large " >Login</button>
	</div>
</div>
</form>
<script type="text/javascript">
  $("#login-form").validate(); 
</script>
{include file="footer.tpl" title="Info"}