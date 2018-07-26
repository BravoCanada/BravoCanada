<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>AJAX Transparent Redirect</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		
<script>
			function AJAXTransparentRedirect12() {                                 
			var dataString = 	'CustomerId='+ $('input#CustomerId').val() + 
									'&PublicApiKey=' + $('input#PublicApiKey').val() + 
									'&SuccessUri='+$('input#SuccessUri').val() +
									'&FailUri='+$('input#FailUri').val() + 
									'&CardNumber='+$('input#CardNumber').val() + 
									'&FirstName='+$('input#FirstName').val() + 
									'&LastName='+$('input#LastName').val() + 
									'&ExpirationMonth='+$('input#ExpirationMonth').val() + 
									'&ExpirationYear='+$('input#ExpirationYear').val() + 
									'&makeDefault='+$('input#MakeDefault').val() + 
									'&Cvv='+$('input#Cvv').val();
			alert(dataString);
			//Set up the request
			var request = $.ajax({
			type: "POST",
			url: "https://stg-payments.subscriptionplatform.com/api/payments/",                   
			data: dataString 
			});

			//Set up the callback functions
			request.done(function (msg) {
			//$('#response').append("<br><p>success </p>");
				alert("success");
				//document.location.replace = '';
				});

				request.fail(function (jqXHR) {
				// $('#response').append("<br><p>failure</p>");
					alert(parseAndBuildErrorMessage(jqXHR));
					//document.location.replace = '';

					});
					}

					function htmlEscape(msg) {
					return document.createElement('span')
					.appendChild(document.createTextNode(msg))
					.parentNode
					.innerHTML;
					}

					function buildErrorMessage (errors) {
					if (errors.length == 0) {
					return "";
					}

					var message;

					if (errors.length > 1) {
					message = "<ul>";

						for (var i = 0; i < errors.length; i++) {
								if (errors[i].Value != "") {
								message += "<li>" + htmlEscape(errors[i].Value) + "</li>";
								}
						}

								message += "</ul>";
					} else {
							var internalErrors = errors[0].Value;
							internalErrors = internalErrors.split("\r\n");

							if (internalErrors.length > 1) {
							message = "<ul>";

								for (var i = 0; i < internalErrors.length; i++) {
										if (internalErrors[i].Value != "") {
										message += "<li>" + htmlEscape(internalErrors[i]) + "</li>";
										}

										message += "</ul>";
									}
									} else {
									message = htmlEscape(errors[0].Value);
									}
									}

									return message;
									}                             

									function parseAndBuildErrorMessage (xhr) {

									if (xhr.status >= 500)
									return "An error occurred, please try again";
									else
									return buildErrorMessage(xhr.responseJSON.Errors);
					}
</script>
	</head>
	
	<body>
		<form id="allfields">
			<fieldset>
				<div>
				<label for="CustomerId">Customer Id</label>
				<input autofocus="autofocus" id="CustomerId" name="CustomerId" type="text" value="374974" />
				</div>

				<div>
				<label for="PublicApiKey">Public Api Key</label>
				<input id="PublicApiKey" name="PublicApiKey" type="text" value="e5e0672b-3b1e-4abf-a633-4ca8f55886fb" />
				</div>

				<div>
				<label for="CardNumber">Card number</label>
				<input id="CardNumber" name="CardNumber" type="text" value="4111111111111111" />
				</div>

				<div>
				<label for="FirstName">First name</label>
				<input id="FirstName" name="FirstName" type="text" value="John" />
				</div>

				<div>
				<label for="LastName">Last name</label>
				<input id="LastName" name="LastName" type="text" value="Doe" />
				</div>

				<div>
				<label for="ExpirationMonth">Expiry month</label>
				<input id="ExpirationMonth" name="ExpirationMonth" type="text" value="12" />
				</div>

				<div>
				<label for="ExpirationYear">Expiry year</label>
				<input id="ExpirationYear" name="ExpirationYear" type="text" value="18" />
				</div>

				<div>
				<label for="Cvv">CVV</label>
				<input id="Cvv" name="Cvv" type="text" value="123" />
				</div>

				<input id="MakeDefault" name="MakeDefault" type="hidden" value="true" />
			<fieldset>
		</form>
		
		<input type="button" onCLick="AJAXTransparentRedirect12();" value="Submit Card">
		<div id="response"></div>
	</body>
</html>