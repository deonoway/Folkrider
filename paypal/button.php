



<form action="https://www.paypal.com/cgi-bin/webscr" method="post"> 
 
    <!-- Identify your business so that you can collect the payments. --> 
    <input type="hidden" name="business" value="admin@folkrider.com"> 
 
    <!-- Specify a Buy Now button. -->  
    <input type="hidden" name="cmd" value="_xclick"> 
 
    <!-- Specify details about the item that buyers will purchase. --> 
    <input type="hidden" name="item_name" value="Folkrider"> 
    <input type="hidden" name="amount" value="2.00"> 
    <input type="hidden" name="currency_code" value="USD"> 
  
    <!-- Display the payment button. --> 
    <input type="image" name="submit" border="0" 
        src="https://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif" 
        alt="PayPal - The safer, easier way to pay online"> 
    <img alt="" border="0" width="1" height="1" 
        src="https://www.paypal.com/en_US/i/scr/pixel.gif" > 
</form>