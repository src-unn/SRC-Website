<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/29/2016
 * Time:    2:59 PM
 **/

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Page</title>
	        <link rel="icon" type="image/png" href="image/src-logo.jpg">
	        <link rel="stylesheet" type="text/css" href="css/material-icons.css">
	        <link rel="stylesheet" type="text/css" href="css/materialize.css">
	        <meta charset="utf-8" view="viewport" content="width=device-width, initial scale=1.0" />
	        <script type="text/javascript" href="jquery.min.css"></script>
	        <script type="text/javascript" href="materialize.css"></script>
    </head>
	    <style type="text/css">
	        label
	           {
	           	font-family: "Arial Black";
	        }
		    #name
		        {
			        font-family: "Monotype Corsiva";
		    }
		    #email
		        {
			        font-family: "Monotype Corsiva";
			}
		    #company_name
		        {
			        font-family: "Monotype Corsiva";
		    }
		    #telephone
		        {
			        font-family: "Monotype Corsiva";
		    }
		    button
		    	{
		    		font-size: 15px;
		    }

	    </style>
<body>
<div class="container">
	<div class="row contain">
	    <br/>
	    <h5 style="text-align: center; font-family: Bernard MT Condensed; font-size: 30px; margin-top: 15px;">Contact Us</h5>

	    	<!--Beginning of  column-->
	   	    <div class="col s12">
	   	    	<!--Container for form-->
				<div class="container">
					<!--Form-->
					<form>

						<!--Row for Name-->
						<div class="row">
							<div class="input-field col s12">
								<label for="name">Name</label>
								<br/>
								<input type="text" name="name" id="name" placeholder="First Name Or Username" class="validate" required />
							</div>
						</div>
						<!--Row for Name End-->


						<!--Row for Email and Telephone Number-->
						<div class="row">

						   <!--Column for Email-->
							<div class="input-field col s12 m6 l6">
							    <label for="email"><b>Email</b></label>
							    <br/>
								<input type="text" name="email" id="email" placeholder="example@******.com" class="validate" required />
							</div>
						   <!--Column for Email End-->


							<!--Column for telephone input-->
							<div class="input-field col s12 m6 l6">
							    <label for="telephone">Telephone</label>
							    <br/>
								<input type="tel" name="telephone" id="telephone" placeholder="+(CountryCode)(Phone Num.)" class="validate" />

							</div>
							<!--Column for telephone input End-->

						</div>
						<!--Row for Email and Telephone Number End-->


						<!--Row for Comment(Textfield)-->
						<div class="row">
							<div class="input-field col s12">
								<label for="message">Message</label><br/>
								<textarea name="message" class="materialize-textarea"></textarea>
							</div>
						</div>
						<!--Row for Comment(Textfield) End-->
					</form>
					<!--Form Ends-->
						<button class="waves-effect waves-light btn card-panel indigo accent-1"><i class="material-icons">email</i>Submit</button>
				</div>
				<!--Container for form ends-->
		    </div>
		    <!--Ending of  column-->
	</div>
</div>

</body>
</html>
