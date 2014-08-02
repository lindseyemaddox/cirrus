<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); // HTTP head
?>    		
    		
	<title>Cirrus Outdoor Power Equipment</title>
	<meta name="description" content="">

</head>

<body>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); // header and navigation
?>    		

	<section id="subpage">
		
		<div class="inner">

			<h1>Contact Us</h1>

			<div class="formDiv">

			    

				<?php
				function spamcheck($field)
				{
				//filter_var() sanitizes the e-mail
				//address using FILTER_SANITIZE_EMAIL
					$field=filter_var($field, FILTER_SANITIZE_EMAIL);

					//filter_var() validates the e-mail
					//address using FILTER_VALIDATE_EMAIL
					if(filter_var($field, FILTER_VALIDATE_EMAIL))
					{
						return TRUE;
					}
					else
					{
						return FALSE;
					}
				}

				if (($_REQUEST['email_verification'])) {
						echo "<p class='regular'>Thank you for using our mail form</p>";
				}
				elseif (isset($_REQUEST['email']))
				{//if "email" is filled out, proceed

					//check if the email address is invalid
					$mailcheck = spamcheck($_REQUEST['email']);
					if ($mailcheck==FALSE)
					{
						echo "Invalid input";
					}
					else
					{//send email
				    $name_first = $_REQUEST['name_first'] ;
				    $name_last = $_REQUEST['name_last'] ;
				    $state = $_REQUEST['state'] ;
				    $zip = $_REQUEST['zip'] ;
				    $phone = $_REQUEST['phone'] ;
				    $email = $_REQUEST['email'] ;
					$to = 'cirruschuck@gmail.com';
					  $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
					  $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
					  $headers .= "MIME-Version: 1.0\r\n";
					  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
					  $message = '<html><body>';
					  $message .= 'Name: '.$name_first.'<br>';
					  $message .= 'Name: '.$name_last.'<br>';
					  $message .= 'State: '.$state.'<br>';
					  $message .= 'Zip: '.$zip.'<br>';
					  $message .= 'Email: '.$email.'<br>';
					  $message .= 'Phone: '.$phone.'<br>';
					  $message .= '</body></html>';
					  $subject = 'New Tractor Packages Contact Form';
					mail($to, $subject, $message, $headers);;
					echo "<p class='regular'>Thank you for contacting us. We will get back to you shortly.</p>";
				    }
				  }
				else
				  {//if "email" is not filled out, display the form
				  echo "<form method='post' name='contact-form'>			        
			        <div class='floating-placeholder'><input type='text' name='name_first' /><label>*First Name</label></div>

			        <div class='floating-placeholder'><input type='text' name='name_last' /><label>*Last Name</label></div>

			        <select name='state' data-placeholder='Choose a State...' class='chosen-select'>
			            <option value='Choose a State...'></option>
			            <option value='alabama'>Alabama</option>
			            <option value='alaska'>Alaska</option>
			            <option value='arizona'>Arizona</option>
			            <option value='arkansas'>Arkansas</option>
			            <option value='california'>California</option>
			            <option value='colorado'>Colorado</option>
			            <option value='connecticut'>Connecticut</option>
			            <option value='delaware'>Delaware</option>
			            <option value='district-of-columbia'>District of Columbia</option>
			            <option value='florida'>Florida</option>
			            <option value='georgia'>Georgia</option>
			            <option value='hawaii'>Hawaii</option>
			            <option value='idaho'>Idaho</option>
			            <option value='illinois'>Illinois</option>
			            <option value='indiana'>Indiana</option>
			            <option value='iowa'>Iowa</option>
			            <option value='kansas'>Kansas</option>
			            <option value='kentucky'>Kentucky</option>
			            <option value='louisiana'>Louisiana</option>
			            <option value='maine'>Maine</option>
			            <option value='maryland'>Maryland</option>
			            <option value='massachusetts'>Massachusetts</option>
			            <option value='michigan'>Michigan</option>
			            <option value='minnesota'>Minnesota</option>
			            <option value='mississippi'>Mississippi</option>
			            <option value='missouri'>Missouri</option>
			            <option value='montana'>Montana</option>
			            <option value='nebraska'>Nebraska</option>
			            <option value='nevada'>Nevada</option>
			            <option value='new-hampshire'>New Hampshire</option>
			            <option value='new-jersey'>New Jersey</option>
			            <option value='new-mexico'>New Mexico</option>
			            <option value='new-york'>New York</option>
			            <option value='north-carolina'>North Carolina</option>
			            <option value='north-dakota'>North Dakota</option>
			            <option value='ohio'>Ohio</option>
			            <option value='oklahoma'>Oklahoma</option>
			            <option value='oregon'>Oregon</option>
			            <option value='pennsylvania'>Pennsylvania</option>
			            <option value='rhode-island'>Rhode Island</option>
			            <option value='south-carolina'>South Carolina</option>
			            <option value='south-dakota'>South Dakota</option>
			            <option value='tennessee'>Tennessee</option>
			            <option value='texas'>Texas</option>
			            <option value='utah'>Utah</option>
			            <option value='vermont'>Vermont</option>
			            <option value='virginia'>Virginia</option>
			            <option value='washington'>Washington</option>
			            <option value='west-virginia'>West Virginia</option>
			            <option value='wisconsin'>Wisconsin</option>
			            <option value='wyoming'>Wyoming</option>
			        </select>

			        <div class='floating-placeholder'><input type='text' name='zip' /><label>*Zip/Postal Code</label></div>
			        
			        <div class='floating-placeholder'><input type='text' name='phone' maxlength='15' /><label>*Phone</label></div>
			        
			        <div class='floating-placeholder'><input type='text' name='email' /><label>*E-mail Address</label></div>

				    <div class='floatRight'><input type='submit' id='formSubmit' class='btn' href='#'></input></div>


				  </form>";
				  }
				?>

			</div><!--formDiv-->


		</div><!--inner-->

	</section>


<script type="text/javascript">
	$(document).ready(function(){

		function updateText(event){
				var input=$(this);
				setTimeout(function(){
					var val=input.val();
					if(val!="")
						input.parent().addClass("floating-placeholder-float");
					else
						input.parent().removeClass("floating-placeholder-float");
				},1)
			}
			$(".floating-placeholder input").keydown(updateText);
			$(".floating-placeholder input").change(updateText);
			$("input:text").val("");

			$('input[placeholder="mm/dd/yyyy"]').bind('keyup',function(){
				var strokes = $(this).val().length;
				if(strokes === 2 || strokes === 5){
						var thisVal = $(this).val();
						thisVal += '/';
						$(this).val(thisVal);
				}
		});

	});

</script>



<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/footer.php'); // footer, close body and html
?>    		