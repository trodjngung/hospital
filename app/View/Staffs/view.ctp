<!-- View staff -->
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">View Staff</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="#">Staff</a></li>
			<li class="active"><a href="">view</li>
		</ul>
	</div>
	
</div>

<div class="container">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#home-1" data-toggle="tab">Profile</a></li>
		</ul>

	</div>
	<div class="container content-sm">
		<div class="row about-me">
			<div class="col-sm-4 shadow-wrapper md-margin-bottom-40">
				<div class="box-shadow shadow-effect-2">
					<img class="img-responsive img-bordered full-width"
						src="/files/<?php echo($staff['Staff']['image']);?>"
						alt="">
						
				</div>
			</div>

			<div class="col-sm-8">
				<div class="overflow-h">
					<div class="pull-left">
						<h2><?php echo ($staff['Staff']['name']);  ?>
									 </h2>
						<span>CEO, Director</span>
					</div>
					<ul class="social-icons pull-right">
						<li><a class="rounded-x social_facebook"
							data-original-title="Facebook" href="<?php echo ($staff['Staff']['facebook']); ?>"
							target="_blank"
							></a></li>
						<li><a class="rounded-x social_twitter"
							data-original-title="Twitter" href="<?php echo ($staff['Staff']['facebook']); ?>"
							target="_balnk"
							></a></li>
						<li><a class="rounded-x social_googleplus"
							data-original-title="Google Plus" href="#"></a></li>
						<li><a class="rounded-x social_linkedin"
							data-original-title="Linkedin" href="#"></a></li>
					</ul>
				</div>
				<p>Address:<?php echo ($staff['Staff']['address']); ?></p>
			    <p>Facebook: <a href = "<?php echo ($staff['Staff']['facebook']); ?>"> <?php echo ($staff['Staff']['facebook']); ?> </a></p>
				<p>Twitter: <a href="<?php echo ($staff['Staff']['twitter']); ?>"><?php echo ($staff['Staff']['twitter']); ?></a></p>
				<p>Birthday: <?php echo ($staff['Staff']['birthday']); ?></p>
				<p>Graduate: <?php echo ($staff['Staff']['graduate']); ?></p>
				<p>Html/CSS: <?php echo ($staff['Staff']['htmlcss']); ?></p>
				<p>JavaScript: <?php echo ($staff['Staff']['javascript']); ?></p>
				<p>Message: <?php echo ($staff['Staff']['message']); ?></p>
				<p>Suspendisse non magna sed justo tincidunt pellentesque. Proin sit
					amet ligula vel orci tempus viverra. Donec massa justo, sodales in
					leo pretium, adipiscing dictum mi. Nullam sed eleifend purus. Sed
					eget lacus eget urna venenatis hendrerit sed sit amet dui.
					Suspendisse lorem velit, tincidunt nec mattis ut, gravida
					adipiscing sapien.</p>
				<br>

			</div>
			
			<h2><?php echo $this->Html->link('come back',array('controller'=>'staffs','action'=>'index'))?> </h2>
		</div>
		
	</div>
</div>