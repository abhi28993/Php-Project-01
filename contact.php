<?php


include 'header.php';


?>
		<!-----end-header-------->
		<!---start-getintouch---->
			<div class="get-intouch" id="contact">
				<div class="wrap">
					<h3>Contact Us</h3>
				<div class="get-intouch-grids">
					<div class="get-intouch-left-address">
						<h4>Cras at ultrices erat, sed vulputate eros nunc at augue gravida!</h4>
						<p>2345 Setwant natrer, 1234</p>
						<p>Washington. United States.</p>
						<p>(401) 1234 567</p>
						<p><a href="mailto:hello@mykingdom.com">hello@mykingdom.com</a></p>
					</div>
					<div class="get-intouch-center-form">
						<h5>Say hello!</h5>
						<form method="post" action="contact-post.html">
							<input class="frist" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
							<textarea onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';" >Your Message</textarea>
							<input type="submit" value="Send message" />
							<div class="clear"> </div>
						</form>
					</div>
					<!-- aToolTip js -->
						<script type="text/javascript" src="js/jquery.atooltip.js"></script>
						<script type="text/javascript">
							$(function(){ 
								$('a.normalTip').aToolTip();
								}); 
						</script>
					<div class="clear"> </div>
				</div>
				</div>
				<div class="map">
					<iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=India&amp;aq=0&amp;oq=indi&amp;sll=44.746733,-108.533936&amp;sspn=5.859437,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=India&amp;ll=20.593684,78.96288&amp;spn=3.787665,6.696167&amp;t=m&amp;z=8&amp;output=embed"> </iframe>
				</div>
			</div>
			<!---//End-getintouch---->
			<!----start footer------>
<?php

include 'footer.php';

?>