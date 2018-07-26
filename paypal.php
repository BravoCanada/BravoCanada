<div style="display:none">
	<form id="payPAlForm" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_xclick">
		<input type="hidden" name="business" value="nitesh@oscuz.com">
		<input type="hidden" name="item_name" value="<?php echo $_GET['cname'] ?>">
		<input type="hidden" name="item_number" value="1">
		<input type="hidden" name="amount" value="<?php echo $_GET['cprice'] ?>">
		<input type="hidden" name="no_shipping" value="0">
		<input type="hidden" name="no_note" value="1">
		<input type="hidden" name="currency_code" value="USD">
		<input type="hidden" name="lc" value="AU">
		<input type="hidden" name="bn" value="PP-BuyNowBF">
		 <input type="hidden" name="return" value="http://oscuz.com/bravocanada/price/thanks">
		<input type="hidden" name="rm" value="2">
		<input type="hidden" name="cbt" value="Return to The Site">
		<input type="hidden" name="cancel_return" value="http://oscuz.com/bravocanada/price/failed">
	   
		<input type="image" src="https://www.paypal.com/en_AU/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
		<img alt="" border="0" src="https://www.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1">
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function(){
	jQuery('#payPAlForm').submit();
});
</script>