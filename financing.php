<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); // HTTP head
?>    		
 
	<title>Cirrus Outdoor Power Equipment</title>
	<meta name='description' content=''>

</head>

<body>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); // header and navigation
?>    		

	
	<section id='subpage'>
		
		<div class='inner'>

			<h1>Financing</h1>

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
						echo "Please go back and double check your email address!";
					}
					else
					{//send email
				    $model = $_REQUEST['model'] ;
				    $down_payment = $_REQUEST['down_payment'] ;
				    $first_name = $_REQUEST['first_name'] ;
				    $middle_initial = $_REQUEST['middle_initial'] ;
				    $last_name = $_REQUEST['last_name'] ;
				    $home_phone = $_REQUEST['home_phone'] ;
				    $email = $_REQUEST['email'] ;
				    $dob = $_REQUEST['dob'] ;
				    $ssn = $_REQUEST['ssn'] ;
				    $drivers_license_state = $_REQUEST['drivers_license_state'] ;
				    $dl_number = $_REQUEST['dl_number'] ;
				    $dl_issue = $_REQUEST['dl_issue'] ;
				    $dl_exp = $_REQUEST['dl_exp'] ;
				    $address = $_REQUEST['address'] ;
				    $city = $_REQUEST['city'] ;
				    $state = $_REQUEST['state'] ;
				    $zip = $_REQUEST['zip'] ;
				    $resident_status = $_REQUEST['resident_status'] ;
				    $resident_length = $_REQUEST['resident_length'] ;
				    $previous_address = $_REQUEST['previous_address'] ;				    
				    $previous_city = $_REQUEST['previous_city'] ;
				    $previous_state = $_REQUEST['previous_state'] ;
				    $previous_zip = $_REQUEST['previous_zip'] ;
				    $rent = $_REQUEST['rent'] ;
				    $mortgage = $_REQUEST['mortgage'] ;
				    $mortgage_holder = $_REQUEST['mortgage_holder'] ;
				    $marital_status = $_REQUEST['marital_status'] ;
				    $dependents = $_REQUEST['dependents'] ;
				    $self_employed = $_REQUEST['self_employed'] ;
				    $spouse_first_name = $_REQUEST['spouse_first_name'] ;
				    $spouse_last_name = $_REQUEST['spouse_last_name'] ;
				    $income = $_REQUEST['income'] ;
				    $other_income1 = $_REQUEST['other_income1'] ;
				    $other_income1_source = $_REQUEST['other_income1_source'] ;
				    $other_income2 = $_REQUEST['other_income2'] ;
				    $other_income2_source = $_REQUEST['other_income2_source'] ;
				    $employer = $_REQUEST['employer'] ;
				    $occupation = $_REQUEST['occupation'] ;
				    $work_phone = $_REQUEST['work_phone'] ;
				    $work_address = $_REQUEST['work_address'] ;
				    $previous_employer = $_REQUEST['previous_employer'] ;
				    $length_of_previous_employment_years = $_REQUEST['length_of_previous_employment_years'] ;
				    $length_of_previous_employment_months = $_REQUEST['length_of_previous_employment_months'] ;
				    $relative_first_name = $_REQUEST['relative_first_name'] ;
				    $relative_middle_initial = $_REQUEST['relative_middle_initial'] ;
				    $relative_last_name = $_REQUEST['relative_last_name'] ;
				    $relative_relation = $_REQUEST['relative_relation'] ;
				    $relative_home_phone = $_REQUEST['relative_home_phone'] ;
				    $relative_address = $_REQUEST['relative_address'] ;
				    $relative_city = $_REQUEST['relative_city'] ;
				    $relative_address = $_REQUEST['relative_address'] ;
				    $relative_state = $_REQUEST['relative_state'] ;
				    $relative_zip = $_REQUEST['relative_zip'] ;
				    $question1 = $_REQUEST['question1'] ;
				    $question2 = $_REQUEST['question2'] ;
				    $question3 = $_REQUEST['question3'] ;
				    $other_name = $_REQUEST['other_name'] ;
				    $question4 = $_REQUEST['question4'] ;
				    $question5 = $_REQUEST['question5'] ;
					$to = 'cirruschuck@gmail.com';
					  $subject = 'New Tractor Packages Financing Form';
					  $headers = "From: ". strip_tags($_POST['email']) . "\r\n";
					  $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
					  $headers .= "MIME-Version: 1.0\r\n";
					  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
					  $message = "<html><body>";
				    $message .= "Vehicle Model: '.$model.'<br />";
				    $message .= "Down Payment: '.$down_payment.'<br />";
				    $message .= "First Name: '.$first_name.'<br />";
				    $message .= "Middle Initial: '.$middle_initial.'<br />";
				    $message .= "Last Name: '.$last_name.'<br />";
				    $message .= "Home Phone: '.$home_phone.'<br />";
				    $message .= "Email: '.$email.'<br />";
				    $message .= "Date of Birth: '.$dob.'<br />";
				    $message .= "Social Security Number: '.$ssn.'<br />";
				    $message .= "Drivers License State: '.$drivers_license_state.'<br />";
				    $message .= "Drivers License Number: '.$dl_number.'<br />";
				    $message .= "Drivers License Issue Date: '.$dl_issue.'<br />";
				    $message .= "Drivers License Expiration Date: '.$dl_exp.'<br />";
				    $message .= "Address: '.$address.'<br />";
				    $message .= "City: '.$city.'<br />";
				    $message .= "State: '.$state.'<br />";
				    $message .= "Zip Code: '.$zip.'<br />";
				    $message .= "Resident Status: '.$resident_status.'<br />";
				    $message .= "Length at Residence: '.$resident_length.'<br />";
				    $message .= "Previous Address: '.$previous_address.'<br />";				    
				    $message .= "Previous City: '.$previous_city.'<br />";
				    $message .= "Previous State: '.$previous_state.'<br />";
				    $message .= "Previous Zip Code: '.$previous_zip.'<br />";
				    $message .= "Rent: '.$rent.'<br />";
				    $message .= "Mortgage: '.$mortgage.'<br />";
				    $message .= "Mortgage Holder: '.$mortgage_holder.'<br />";
				    $message .= "Marital Status: '.$marital_status.'<br />";
				    $message .= "Dependents: '.$dependents.'<br />";
				    $message .= "Self Employed: '.$self_employed.'<br />";
				    $message .= "Spouse First Name: '.$spouse_first_name.'<br />";
				    $message .= "Spouse Last Name: '.$spouse_last_name.'<br />";
				    $message .= "Income: '.$income.'<br />";
				    $message .= "Other Income 1: '.$other_income1.'<br />";
				    $message .= "Other Income 1 Source: '.$other_income1_source.'<br />";
				    $message .= "Other Income 2: '.$other_income2.'<br />";
				    $message .= "Other Income 2 Source: '.$other_income2_source.'<br />";
				    $message .= "Employer: '.$employer.'<br />";
				    $message .= "Occupation: '.$occupation.'<br />";
				    $message .= "Work Phone: '.$work_phone.'<br />";
				    $message .= "Work Address: '.$work_address.'<br />";
				    $message .= "Work Zip Code: '.$work_zip.'<br />";
				    $message .= "Previous Employer: '.$previous_employer.'<br />";
				    $message .= "Length of Previous Employment (years): '.$length_of_previous_employment_years.'<br />";
				    $message .= "Length of Previous Employment (months): '.$length_of_previous_employment_months.'<br />";
				    $message .= "Relative First Name: '.$relative_first_name.'<br />";
				    $message .= "Relative Middle Initial: '.$relative_middle_initial.'<br />";
				    $message .= "Relative Last Name: '.$relative_last_name.'<br />";
				    $message .= "Relative Relation to Applicant: '.$relative_relation.'<br />";
				    $message .= "Relative Home Phone: '.$relative_home_phone.'<br />";
				    $message .= "Relative Address: '.$relative_address.'<br />";
				    $message .= "Relative City: '.$relative_city.'<br />";
				    $message .= "Relative Address: '.$relative_address.'<br />";
				    $message .= "Relative State: '.$relative_state.'<br />";
				    $message .= "Relative Zip: '.$relative_zip.'<br />";
				    $message .= "Has any party to this application ever filed, been the subject, or subject to any bankruptcy proceeding? '.$question1.'<br />";
				    $message .= "Has any party to this application had a vehicle repossessed in the last 7 years? '.$question2.'<br />";
				    $message .= "Has any party to this application ever obtained credit in a name other than the name listed on this application? '.$question3.'<br />";
				    $message .= "Other Name Listed: '.$other_name.'<br />";
				    $message .= "Have you spoken to a salesperson at our dealership? If so, please enter their name: '.$question4.'<br />";
				    $message .= "Are all the responses to the above questions honest, truthful, and accurate to the best of your knowledge? '.$question5.'<br />";
					  $message .= "</body></html>";
					mail($to, $subject, $message, $headers);;
					echo "<p class='regular'>Thank you for contacting us. We will get back to you shortly.</p>";
				    }
				  }
				else
				  {//if "email" is not filled out, display the form
				  echo "<form method='post' name='contact-form'>			        
		  			<p>If you are interested in financing your vehicle, let us help. Please complete the following application as fully as posible. All information is kept secure and confidential.</p>
      			        
			        <div class='floating-placeholder'><input required type='text' name='model' /><label>*Model</label></div>

			        <div class='floating-placeholder'><input required type='text' name='down_payment' /><label>*Down Payment</label></div>


					<h2>Borrower Information</h2>

					<p>Name must appear exactly as on license or we will have to call you.</p>

			        <div class='floating-placeholder'><input required type='text' name='first_name' /><label>*First Name</label></div>

			        <div class='floating-placeholder'><input required type='text' name='middle_initial' /><label>*Middle Initial</label></div>

			        <div class='floating-placeholder'><input required type='text' name='last_name' /><label>*Last Name</label></div>

			        <div class='floating-placeholder'><input required type='text' name='home_phone' maxlength='15' /><label>*Home Phone</label></div>
			        
			        <div class='floating-placeholder'><input required type='text' name='email' /><label>*Email Address</label></div>

			        <div class='floating-placeholder'><input required type='text' name='dob' /><label>*Date of Birth</label></div>

			        <div class='floating-placeholder'><input required type='text' name='ssn' /><label>*Social Security Number</label></div>

			        <select required name='drivers_license_state' data-placeholder='*Drivers License State...' class='chosen-select'>
			            <option value=''></option>
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

			        <div class='floating-placeholder'><input required type='text' name='dl_number' /><label>*Drivers License Number</label></div>
			        
			        <div class='floating-placeholder'><input required type='text' name='dl_issue' /><label>*Drivers License Issue Date</label></div>

			        <div class='floating-placeholder'><input required type='text' name='dl_exp' /><label>*Drivers License Expiration Date</label></div>

					<h2>Residence Information</h2>

			        <div class='floating-placeholder'><input required type='text' name='address' /><label>*Current Address</label></div>

			        <div class='floating-placeholder'><input required type='text' name='city' /><label>*City</label></div>

			        <select required name='state' data-placeholder='*State...' class='chosen-select'>
			            <option value=''></option>
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

			        <div class='floating-placeholder'><input required type='text' name='zip' /><label>*Zip Code</label></div>

			        <select required name='resident_status' data-placeholder='*Resident Status...' class='chosen-select'>
			            <option value=''></option>
			            <option value='rent'>Rent</option>
			            <option value='own'>Own</option>
			            <option value='living_with_family'>Living with Family</option>
			        </select>

			        <select required name='resident_length' data-placeholder='*Length...' class='chosen-select'>
			            <option value=''></option>
						<option value='1 Year'>1 Year</option>
						<option value='2 Years'>2 Years</option>
						<option value='3 Years'>3 Years</option>
						<option value='4 Years'>4 Years</option>
						<option value='5 Years'>5 Years</option>
						<option value='6 Years'>6 Years</option>
						<option value='7 Years'>7 Years</option>
						<option value='8 Years'>8 Years</option>
						<option value='9 Years'>9 Years</option>
						<option value='10 Years'>10 Years</option>
						<option value='More Than 10 Years'>More Than 10 Years</option>
					</select>

					<p>*If at residence for less than 2 years</p>

			        <div class='floating-placeholder'><input type='text' name='previous_address' /><label>Previous Address</label></div>

			        <div class='floating-placeholder'><input type='text' name='previous_city' /><label>Previous City</label></div>

			        <select name='previous_state' data-placeholder='Previous State...' class='chosen-select'>
			            <option value='Previous State...'></option>
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

			        <div class='floating-placeholder'><input type='text' name='previous_zip' /><label>Previous Zip Code</label></div>

					<h2>Financial Information</h2>

			        <div class='floating-placeholder'><input type='text' name='rent' /><label>*Monthly Rent or Mortgage Payment</label></div>

			        <div class='floating-placeholder'><input type='text' name='mortgage' /><label>*Mortgage Balance</label></div>

			        <div class='floating-placeholder'><input type='text' name='mortgage_holder' /><label>*Mortgage Holder/Landlord</label></div>

			        <select required name='marital_status' data-placeholder='*Marital Status...' class='chosen-select'>
			            <option value=''></option>
						<option value='Single'>Single</option>
						<option value='Married'>Married</option>
						<option value='Divorced'>Divorced</option>
						<option value='Widowed'>Widowed</option>
					</select>

			        <select required name='dependents' data-placeholder='*Dependents...' class='chosen-select'>
			            <option value=''></option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						<option value='6'>6</option>
						<option value='7'>7</option>
						<option value='8'>8</option>
						<option value='9'>9</option>
						<option value='10'>10</option>
						<option value='11'>11</option>
						<option value='12'>12</option>
					</select>

			        <select required name='self_employed' data-placeholder='*Self Employed...' class='chosen-select'>
			            <option value=''></option>
						<option value='Yes'>Yes</option>
						<option value='No'>No</option>
					</select>

			        <div class='floating-placeholder'><input type='text' name='spouse_first_name' /><label>Spouse First Name</label></div>

			        <div class='floating-placeholder'><input type='text' name='spouse_last_name' /><label>Spouse Last Name</label></div>

			        <div class='floating-placeholder'><input required type='text' name='income' /><label>*Gross Monthly Income (before taxes)</label></div>

			        <div class='floating-placeholder'><input type='text' name='other_income1' /><label>Other Income #1</label></div>

			        <div class='floating-placeholder'><input type='text' name='other_income1_source' /><label>Other Income #1 Source</label></div>

			        <div class='floating-placeholder'><input type='text' name='other_income2' /><label>Other Income #2</label></div>

			        <div class='floating-placeholder'><input type='text' name='other_income2_source' /><label>Other Income #2 Source</label></div>

			        <div class='floating-placeholder'><input required type='text' name='employer' /><label>*Employer</label></div>

			        <div class='floating-placeholder'><input required type='text' name='occupation' /><label>*Occupation</label></div>

			        <div class='floating-placeholder'><input required type='text' name='work_phone' maxlength='15' /><label>*Work Phone</label></div>

			        <div class='floating-placeholder'><input required type='text' name='work_address' /><label>*Work Address</label></div>

			        <select required name='length_of_employment_years' data-placeholder='*Length of Employment (years)...' class='chosen-select'>
			            <option value=''></option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						<option value='6'>6</option>
						<option value='7'>7</option>
						<option value='8'>8</option>
						<option value='9'>9</option>
						<option value='10'>10</option>
						<option value='11'>11</option>
						<option value='12'>12</option>
						<option value='13'>13</option>
						<option value='14'>14</option>
						<option value='15'>15</option>
						<option value='16'>16</option>
						<option value='17'>17</option>
						<option value='18'>18</option>
						<option value='19'>19</option>
						<option value='20'>20</option>
						<option value='21'>21</option>
						<option value='22'>22</option>
						<option value='23'>23</option>
						<option value='24'>24</option>
						<option value='25'>25</option>
						<option value='26'>26</option>
						<option value='27'>27</option>
						<option value='28'>28</option>
						<option value='29'>29</option>
						<option value='30'>30</option>
					</select>

			        <select required name='length_of_employment_months' data-placeholder='*Length of Employment (months)...' class='chosen-select'>
			            <option value=''></option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						<option value='6'>6</option>
						<option value='7'>7</option>
						<option value='8'>8</option>
						<option value='9'>9</option>
						<option value='10'>10</option>
						<option value='11'>11</option>
						<option value='12'>12</option>
					</select>

					<p>*If current employer for less than 2 years</p>

			        <div class='floating-placeholder'><input type='text' name='previous_employer' /><label>Previous Employer</label></div>

			        <select name='length_of_previous_employment_years' data-placeholder='Length of Previous Employment (years)...' class='chosen-select'>
			            <option value='Length of Previous Employment (years)...'></option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						<option value='6'>6</option>
						<option value='7'>7</option>
						<option value='8'>8</option>
						<option value='9'>9</option>
						<option value='10'>10</option>
						<option value='11'>11</option>
						<option value='12'>12</option>
						<option value='13'>13</option>
						<option value='14'>14</option>
						<option value='15'>15</option>
						<option value='16'>16</option>
						<option value='17'>17</option>
						<option value='18'>18</option>
						<option value='19'>19</option>
						<option value='20'>20</option>
						<option value='21'>21</option>
						<option value='22'>22</option>
						<option value='23'>23</option>
						<option value='24'>24</option>
						<option value='25'>25</option>
						<option value='26'>26</option>
						<option value='27'>27</option>
						<option value='28'>28</option>
						<option value='29'>29</option>
						<option value='30'>30</option>
					</select>

			        <select name='length_of_previous_employment_months' data-placeholder='Length of Previous Employment (months)...' class='chosen-select'>
			            <option value='Length of Previous Employment (months)...'></option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						<option value='6'>6</option>
						<option value='7'>7</option>
						<option value='8'>8</option>
						<option value='9'>9</option>
						<option value='10'>10</option>
						<option value='11'>11</option>
						<option value='12'>12</option>
					</select>

					<h2>Nearest Relative Not Living With Applicant</h2>

			        <div class='floating-placeholder'><input required type='text' name='relative_first_name' /><label>*Relative First Name</label></div>

			        <div class='floating-placeholder'><input required type='text' name='relative_middle_initial' /><label>*Relative Middle Initial</label></div>

			        <div class='floating-placeholder'><input required type='text' name='relative_last_name' /><label>*Relative Last Name</label></div>

			        <div class='floating-placeholder'><input required type='text' name='relative_relation' /><label>*Relative Relationship to Applicant</label></div>

			        <div class='floating-placeholder'><input required type='text' name='relative_home_phone' maxlength='15' /><label>*Relative Home Phone</label></div>
			        
			        <div class='floating-placeholder'><input required type='text' name='relative_address' /><label>*Relative Current Address</label></div>

			        <div class='floating-placeholder'><input required type='text' name='relative_city' /><label>*Relative City</label></div>

			        <select required name='relative_state' data-placeholder='*Relative State...' class='chosen-select'>
			            <option value=''></option>
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

			        <div class='floating-placeholder'><input required type='text' name='relative_zip' /><label>*Relative Zip Code</label></div>

					<h2>Other Information</h2>

			        <select required name='question1' data-placeholder='*1.) Has any party to this application ever filed, been the subject, or subject to any bankruptcy proceeding?...' class='chosen-select'>
			            <option value=''></option>
						<option value='Yes'>Yes</option>
						<option value='No'>No</option>
					</select>

			        <select required name='question2' data-placeholder='*2.) Has any party to this application had a vehicle repossessed in the last 7 years?...' class='chosen-select'>
			            <option value=''></option>
						<option value='Yes'>Yes</option>
						<option value='No'>No</option>
					</select>

			        <select required name='question3' data-placeholder='*3.) Has any party to this application ever obtained credit in a name other than the name listed on this application?...' class='chosen-select'>
			            <option value=''></option>
						<option value='Yes'>Yes</option>
						<option value='No'>No</option>
					</select>

			        <div class='floating-placeholder'><input type='text' name='other_name' /><label>If yes, what name?</label></div>

			        <div name='question4' class='floating-placeholder'><input type='text' name='salesperson' /><label>4.) Have you spoken to a salesperson at our dealership? If so, please enter their name:</label></div>

			        <div name='question5' class='floating-placeholder'><input required type='text' name='honesty' /><label>*5.) Are all the responses to the above questions honest, truthful, and accurate to the best of your knowledge?</label></div>

					<p>(If yes, type the word 'YES' in the above field. If you do not answer this question, this application will not be processed by our Finance Department).</p>

					<p>Representation of Consent: I certify that the information provided by me is correct and complete as of the date of submission. I also understand that you will be checking with credit reporting agencies. I authorize an investigation of my credit and employment history and the release of information about my credit experience. I agree to all of the above.</p>

				    <div class='floatRight'><input type='submit' id='formSubmit' class='btn'></input></div>

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