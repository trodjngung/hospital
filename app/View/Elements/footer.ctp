<!--  ********* START FOOTER *********  -->
<div class="footer">
	<div class="container">
		<div class="row">
			<!-- Sitemap -->
			<div class="col-sm-8 xs-margin-bottom-30">
				<div class="heading-footer">
					<?php
					echo $this->Html->link ( $this->Html->image ( '/img/layout/BANNER.png', array (
							'alt' => 'VSCSO',
							'style' => 'width: 465px' 
					) ), array (
							'controller' => '/' 
					), array (
							'class' => 'logo',
							'escape' => false 
					) )?>
				</div>
				<div class="row footer-sitemap">
					<ul class="col-xs-6 list-unstyled useful-links">
						<div class="fb-page"
							data-href="https://www.facebook.com/Vietnamese-Science-And-Culture-Society-Of-Oregon-770142523004486" data-width="292"
							data-height="210" data-small-header="false"
							data-adapt-container-width="true" data-hide-cover="false"
							data-show-facepile="true" data-show-posts="false">
							<div class="fb-xfbml-parse-ignore">
								<blockquote cite="https://www.facebook.com/Vietnamese-Science-And-Culture-Society-Of-Oregon-770142523004486">
									<a href="https://www.facebook.com/Vietnamese-Science-And-Culture-Society-Of-Oregon-770142523004486">www.lachongschool.com/</a>
								</blockquote>
							</div>
						</div>
					</ul>
					<ul class="col-xs-6 list-unstyled useful-links">
						<li><?php echo $this->Html->link(__("LAYOUT_TEXT_13"), array('controller'=>'/'))?></li>
						<li><?php echo $this->Html->link(__("LAYOUT_TEXT_133"), array('controller'=>'home', 'action'=>'news'))?></li>
						
						<li><?php echo $this->Html->link(__("LAYOUT_TEXT_15"), array('controller'=>'home', 'action'=>'event'))?></li>
						<li><?php echo $this->Html->link(__("LAYOUT_TEXT_16"), array('controller'=>'home', 'action'=>'staff'))?></li>
						<li><?php echo $this->Html->link(__("LAYOUT_TEXT_14"), array('controller'=>'home', 'action'=>'mission'))?></li>
						<li><?php echo $this->Html->link(__("LAYOUT_TEXT_18"), array('controller'=>'home', 'action'=>'financials'))?></li>
						<li><?php echo $this->Html->link(__("LAYOUT_TEXT_17"), array('controller'=>'home', 'action'=>'contact_us'))?></li>
					</ul>

				</div>
			</div>
			<!-- Contact us -->
			<div class="col-sm-4">
				<div class="heading-footer">
					<h2><?php echo __('LAYOUT_TEXT_21')?></h2>
				</div>
				<!-- Contact Us -->
				<ul class="list-unstyled contact-us">
					<address>
						<i class="fa fa-home"></i><?php echo __('LAYOUT_TEXT_22')?><br />
						<i class="fa fa-phone"></i><?php echo __('LAYOUT_TEXT_23')?><br />
						<i class="fa fa-globe"></i><?php echo __('LAYOUT_TEXT_24')?><br />
						<i class="fa fa-facebook-official"></i><a
							href="https://www.facebook.com/Vietnamese-Science-And-Culture-Society-Of-Oregon-770142523004486" target="_blank">www.facebook.com/vscsoorg </a><br />
						<i class="fa fa-envelope"></i><?php echo $this->Html->link(__("LAYOUT_TEXT_25"), array('controller'=>'home', 'action'=>'contact'))?>
					</address>
				</ul>
			</div>
		</div>
	</div>
	<!--/container -->
</div>

<div class="footer-copyright">
	<div class="container">
		<ul class="list-inline">
			<li><?php echo __('LAYOUT_TEXT_27')?></li>
		</ul>
	</div>
</div>
<!--  ********* END FOOTER *********  -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=989836261057485&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>