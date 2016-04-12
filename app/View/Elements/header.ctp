<!--  ********* HEADER ********* -->
<?php
	//pass query language
	if ($this->action == 'top') {
		$query_lang_vn = array ('controller' => '/','?' => array ('lang' => 'vn'));
		$query_lang_jpn = array ('controller' => '/','?' => array ('lang' => 'jpn'));
		$query_lang_eng = array ('controller' => '/','?' => array ('lang' => 'eng'));
	} else {
		$query_lang_vn = array ('?' => array ('lang' => 'vn'));
		$query_lang_jpn = array ('?' => array ('lang' => 'jpn'));
		$query_lang_eng = array ('?' => array ('lang' => 'eng'));
	}
	//display language flag
	$thisLanguage = $this->Session->read ( 'Config.language' );
	if($thisLanguage === 'vn'){
		$language_flag =  $this->Html->image ( "/img/layout/IMG_h4.png");
	}elseif ($thisLanguage === 'jpn'){
		$language_flag =  $this->Html->image ( "/img/layout/IMG_h6.png");
	}else{
		$language_flag =  $this->Html->image ( "/img/layout/IMG_h5.png");
	}
?>
<div class="header">
	<div class="container">
		<!-- Logo -->
		<?php
		echo $this->Html->link ( $this->Html->image ( '/img/layout/BANNER.png', array ('alt' => 'VSCSO', 'style' => 'width: 465px'
		) ), array ('controller' => '/' 
		), array ('class' => 'logo','escape' => false 
		) )?>
		<!-- End Logo -->
		<!-- Name company -->
		<!-- End Name company -->
		<!-- Topbar -->
		<div class="topbar">
			<ul class="small-menu-bar pull-right">
				<li><?php echo $this->Html->link(__("LAYOUT_TEXT_8"), array('controller'=>'home', 'action'=>'contact'))?></li>
				<li class="topbar-devider second-devider"></li>
				<li class="hoverSelector"><i>
				<?php
				// display language flag
				echo $language_flag;
				?>
				</i> <a><?php echo __('LAYOUT_TEXT_10')?></a>
					<ul class="languages hoverSelectorBlock">
						<li>
							<a href="<?php echo $this->Html->url($query_lang_eng)?>">
								<img alt="English" src="/img/layout/IMG_h5.png">
								<span><?php echo __ ( 'LAYOUT_TEXT_10_1' )?></span>
							</a>
						</li>
						<li>
							<a href="<?php echo $this->Html->url($query_lang_vn)?>">
								<img alt="Vietnamese" src="/img/layout/IMG_h4.png">
								<span><?php echo __ ( 'LAYOUT_TEXT_10_2' )?></span>
							</a>
						</li>
						<!-- 
						<li>
							<a href="<?php // echo $this->Html->url($query_lang_jpn)?>">
								<img alt="Japanese" src="/img/layout/IMG_h6.png">
								<span><?php //echo __ ( 'LAYOUT_TEXT_10_3' )?></span>
							</a>
						</li>
						 -->
					</ul></li>
			</ul>
		</div>
		<!-- End Topbar -->
		<!-- Toggle get grouped for better mobile display -->
		<button type="button" class="navbar-toggle menu-toggle" data-toggle="collapse" data-target="#main-menubar">
			<span class="sr-only">Toggle main menu</span> <span class="fa fa-bars"></span>
		</button>
		<button type="button" class="navbar-toggle language-toggle" data-toggle="collapse" data-target="#languages-change">
			<span class="sr-only">Toggle change languae</span> <span class="language-status"><?php echo $language_flag ;?></span>
		</button>
		<!-- End Toggle -->
	</div>
	<!-- Language navigation -->
	<div id="languages-change" class="collapse navbar-collapse mega-menu navbar-responsive-collapse languages-change">
		<div class="container">
			<ul class="nav navbar-nav">
				<li>
					<a href="<?php echo $this->Html->url($query_lang_eng)?>">
						<img alt="English" src="/img/layout/IMG_h5.png">
						<span><?php echo __ ( 'LAYOUT_TEXT_10_1' )?></span>
					</a>
				</li>
				<li>
					<a href="<?php echo $this->Html->url($query_lang_vn)?>">
						<img alt="Vietnamese" src="/img/layout/IMG_h4.png">
						<span><?php echo __ ( 'LAYOUT_TEXT_10_2' )?></span>
					</a>
				</li>
				<!--  
				<li>
					<a href="<?php //echo $this->Html->url($query_lang_jpn)?>">
						<img alt="Japanese" src="/img/layout/IMG_h6.png">
						<span><?php //echo __ ( 'LAYOUT_TEXT_10_3' )?></span>
					</a>
				</li>
				-->
			</ul>
		</div>
	</div>
	<!-- End Navigation -->
	<!-- Main navigation -->
	<div id="main-menubar" class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
		<div class="container">
			<ul class="nav navbar-nav">
				<li><?php echo $this->Html->link(__("LAYOUT_TEXT_2"), array('controller'=>'/'))?></li> 
				<!--  <li><?php // echo $this->Html->link(__("LAYOUT_TEXT_1"), array('controller'=>'home', 'action'=>'news'))?></li> -->
				<li><?php echo $this->Html->link(__("LAYOUT_TEXT_5"), array('controller'=>'home', 'action'=>'news'))?></li>
				<li><?php echo $this->Html->link(__("LAYOUT_TEXT_3"), array('controller'=>'home', 'action'=>'event'))?></li>
				<li><?php echo $this->Html->link(__("LAYOUT_TEXT_6"), array('controller'=>'home', 'action'=>'staff'))?></li>
				<li><?php echo $this->Html->link(__("LAYOUT_TEXT_4"), array('controller'=>'home', 'action'=>'mission'))?></li>
				<li><?php echo $this->Html->link(__("LAYOUT_TEXT_6_1"), array('controller'=>'home', 'action'=>'financials'))?></li>
				<li><?php echo $this->Html->link(__("LAYOUT_TEXT_7"), array('controller'=>'home', 'action'=>'contact_us'))?></li>
			</ul>
		</div>
	</div>
	<!-- End Navigation -->
</div>
<!--  ********* END HEADER ********* -->
