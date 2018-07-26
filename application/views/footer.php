<!--FOOTER AREA STARTS HERE-->

<footer role="footer-area" class="mt-5">
	<section role="btm-footer">
		<div class="container" style="max-width: 1060px;">
			<div class="row">
				<div class="col-md-4">
					<a href="<?php echo base_url('/');?>"><img src="<?php echo base_url();?>assets/user/img/btm-logo.png" class="img-fluid"></a>
					<p class="mt-2">Bravo Canada is a Canadian Education Services company, offering language schools packages as well as university and colleges application preparation for international students that desire to apply for higher education in Canada.</p>
				</div>
				<div class="col-md-4 footer-1">
					<h6 class="mb-5">CONTACT US</h6>
					<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; &nbsp;<span>P.O Box 47116 - 10 Dundas Street East, Toronto, Ontario M5B 2G9, Canada<br></span><br><br>
					<i class="fa fa-phone"></i>&nbsp; &nbsp;&nbsp;<span> (+62)21-2224 3333</span>
				</div>
				<div class="col-md-4 footer-1">
					<h6 class="mb-5">STAY IN TOUCH</h6>
					<div class="subscribe-area">
						<form class="form-inline">
							<input name="s" placeholder="Subscribe our newsletter" class="form-control" type="text">
							<button type="submit" class="btn btn-dark"><i class="fa fa-paper-plane" style="color:#000;"></i></button>
					    </form>
							<br>
							<div class="social-media-icons">
								<i class="fa fa-facebook"></i>
								<i class="fa fa-twitter"></i>
								<i class="fa fa-instagram"></i>
								<i class="fa fa-youtube-play" aria-hidden="true"></i>
							</div>
                        
					</div>
				</div>
			</div>
			
			<div class="row btm-nav">
				<div class="col-md-7">
					<ul>
					   <li><a href="<?php echo base_url('home/help');?>">HELP</a></li>
					   <li><a href="<?php echo base_url('home/terms');?>">TERMS & CONDITION</a></li>
					   <li><a href="<?php echo base_url('home/privacy');?>">PRIVACY</a></li>
					   <li><a href="<?php echo base_url('home/faq');?>">FAQ</a></li>
					   <li><a href="<?php echo base_url('home/blog');?>">BLOG</a></li>
					   <li><a href="<?php echo base_url('home/contact');?>">TALK TO US</a></li>
					</ul>
				</div>
				<div class="col-md-5 ml-auto">
					<p>Copyright &copy; 2018 : Bravo Canada</p>
				</div>
			</div>
		</div>
	</section>
</footer>

<!--FOOTER AREA ENDS HERE-->

	<script src="<?php echo base_url();?>assets/user/js/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
	<script src="<?php echo base_url();?>assets/user/js/popper.min.js"></script>
	<script src="<?php echo base_url();?>assets/user/js/bootstrap.min.js"></script>
	
	<script src="<?php echo base_url();?>assets/user/js/masonry.pkgd.min.js"></script>
	<script src="<?php echo base_url();?>assets/user/js/jquery.flexslider-min.js"></script>
	<script src="<?php echo base_url();?>assets/user/js/main.js"></script> <!-- Resource jQuery -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/user/js/jquery.amichels.slider.js"></script>
	<script src="<?php echo base_url();?>assets/user/js/custom.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$(".carousel-wrap").carousel();
		});
	

	    var _gaq = _gaq || [];
	   _gaq.push(['_setAccount', 'UA-36251023-1']);
	   _gaq.push(['_setDomainName', 'jqueryscript.net']);
	   _gaq.push(['_trackPageview']);

	   (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	   })();

	</script>

	<script>		
		
		$(document).on('click','.lang_select',function()
		{

			var lang_select = $(this).text();

			// $.ajax({

			// 	url : '<?php echo base_url('home/setLanguage/');?>'+lang_select,
			// 	dataType: 'json',
			// 	success: function(data)
			// 	{
			// 		if(data)
			// 		{
			// 			window.location.href = window.location.href;
			// 		}
			// 	}

			// });

		});

	</script>
	<script type="text/javascript">function add_chatinline(){var hccid=30532513;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>
</body>
</html>