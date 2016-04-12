
<div id="recruit" >
	<div class="box message_box">
		<div class="container">
			<div class="message">
				<?php echo __('RECRUIT_TEXT_2') ?>
			</div>
		</div>
	</div>
	
	<div class="opt-content opt-dev-content" style="display:">
	<div class="box application">
		<div class="container">
			<h2><?php echo __('RECRUIT_TEXT_111') ?></h2>
			<table class='table'>
				<tr>
					<td width="20%"><?php echo __('RECRUIT_TEXT_12') ?></td>
					<td><?php echo __('RECRUIT_TEXT_133') ?></td>
				</tr>
				<tr>
					<td><?php echo __('RECRUIT_TEXT_14') ?></td>
					<td><?php echo __('RECRUIT_TEXT_155') ?></td>
				</tr>
				<tr>
					<td><?php echo __('RECRUIT_TEXT_16') ?></td>
					<td><?php echo __('RECRUIT_TEXT_177') ?></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="box our_tools">
			<div class="container">
				<h2><?php echo __('RECRUIT_50_111'); ?></h2>
				<div class="message">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<?php echo __('RECRUIT_50_122'); ?>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
				<div class="tool">
					<?php
						$text = array('G.Analytics', 'G.WebMasterTool', 'G.KeywordTool', 'BlogSpot', 'Youtube', 'Facebook', 'PhotoShop', 'HTML', 'CSS', 'WordPress', 'CMS', 'Forums', 'G.Drive', 'Execl', 'Adwords', 'SEO', 'Cake PHP', 'Bower', 'Grunt', 'Jenkins', 'Selenium', 'Compass');
						for($i=1; $i<=16; $i++){
							?>
								<div class='lbox'>
									<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
										<div class="flipper">
											<div class="front">
												<img src='/img/recruit/anh<?php echo ($i) ?>.png'>
											</div>
											<div class="back">
												<?php echo $text[$i-1]; ?>
											</div>
										</div>
									</div>
								</div>						
							<?php
							//echo "<img class='lbox' src='/img/recruit/".$i.".png'>";	
						}
					?>
				</div>
			</div>
		</div>
		<div class="box application">
		<div class="container">
			<h2><?php echo __('RECRUIT_TEXT_11') ?></h2>
			<table class='table'>
				<tr>
					<td width="20%"><?php echo __('RECRUIT_TEXT_12') ?></td>
					<td><?php echo __('RECRUIT_TEXT_13') ?></td>
				</tr>
				<tr>
					<td><?php echo __('RECRUIT_TEXT_14') ?></td>
					<td><?php echo __('RECRUIT_TEXT_15') ?></td>
				</tr>
				<tr>
					<td><?php echo __('RECRUIT_TEXT_16') ?></td>
					<td><?php echo __('RECRUIT_TEXT_17') ?></td>
				</tr>
			</table>
		</div>
	</div>
	
		<div class="box our_tools">
			<div class="container">
				<h2><?php echo __('RECRUIT_50_11'); ?></h2>
				<div class="message">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<?php echo __('RECRUIT_50_12'); ?>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
				<div class="tool">
					<?php
						$text = array('HTML 5', 'CSS 3', 'PHP', 'NodeJS', 'JavasScript', 'AngularScript', 'Ruby', 'MySQL', 'PostgreSQL', 'MongoDB', 'Memcache', 'Docker', 'Vagrant', 'Git', 'Backlog', 'Chatwork', 'Cake PHP', 'Bower', 'Grunt', 'Jenkins', 'Selenium', 'Compass');
						for($i=1; $i<=22; $i++){
							?>
								<div class='lbox'>
									<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
										<div class="flipper">
											<div class="front">
												<img src='/img/recruit/IMG_r<?php echo ($i+22) ?>.png'>
											</div>
											<div class="back">
												<?php echo $text[$i-1]; ?>
											</div>
										</div>
									</div>
								</div>						
							<?php
							//echo "<img class='lbox' src='/img/recruit/".$i.".png'>";	
						}
					?>
				</div>
			</div>
		</div>
	</div>	
	


<form action="thanks_for_recruit" method="post" id="recruit_form" enctype="multipart/form-data">
	<div class="box applyform">
		<div class="container">
			<h2><?php echo __('RECRUIT_TEXT_18') ?></h2>
			<table class="table_form">
				<tr>
					<td width="20%"><?php echo __('RECRUIT_TEXT_19') ?><span class="required"> *</span></td>
					<td><input class="form-control input tovalidate" type="text" name="name" maxlength="255" placeholder='<?php echo __('RECRUIT_TEXT_20') ?>'></td>
				</tr>
				<tr>
					<td><?php echo __('RECRUIT_TEXT_21') ?><span class="required"> *</span></span></td>
					<td>
						<select class="form-control tovalidate" type="text" name="age" style="width:190px">
							<option value=''><?php echo __('RECRUIT_TEXT_22') ?></option>
							<?php 
								for($i=18; $i<=60; $i++){
									echo "<option value='".$i."'>".$i."</option>";
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td><?php echo __('RECRUIT_TEXT_23') ?></td>
					<td><input class="form-control input" type="text" name="company" maxlength="255"></td>
				</tr>
				<tr>
					<td><?php echo __('RECRUIT_TEXT_25') ?></td>
					<td><input class="form-control input" type="email" name="email" maxlength="100" placeholder='<?php echo __('RECRUIT_TEXT_26'); ?>'></td>
				</tr>
				<tr>
					<td><?php echo __('RECRUIT_TEXT_27') ?></td>
					<td><input class="form-control input" type="tel" name="phonenumber" maxlength="15" placeholder='<?php echo __('RECRUIT_TEXT_28'); ?>'>
				</tr>
				<tr>
					<td style="vertical-align:top"><?php echo __('RECRUIT_TEXT_29') ?></td>
					<td style="padding-bottom: 1px">
						<textarea maxlength="10000" id="note" name="memo" class="form-control" placeholder='<?php echo __('RECRUIT_TEXT_30'); ?>'></textarea>
					</td>
				</tr>
				<tr>
					<td><?php echo __('RECRUIT_TEXT_31') ?></td>
					<td>
						<div class="input" style="position:relative; border: thin solid #ccc; border-radius: none; height: 34px; overflow:hidden;">
							<a class='btn btn-default btn-choosefile'>
								<?php echo __('RECRUIT_TEXT_32') ?>
								<input accept=".pdf, .doc, .docx" type="file" name='cv' style='position:absolute;z-index:2;top:0;left:0;opacity:0;height:34px' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val().replace(/C:\\fakepath\\/i,""));'>
							</a>
							&nbsp;
							<span class='' id="upload-file-info"><?php echo __('RECRUIT_TEXT_34') ?></span>
						</div>
					</td>
				</tr>
			
			</table>
		</div>
	</div>
	
	<div class="box apply">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="text-align:center">
					<input type="submit" class="apply_button" name="submit" value="<?php echo __('RECRUIT_TEXT_33') ?>">
				</div>
			</div>
		</div>
	</div>
</form>
</div>

<script>
	$(".opt").on("click", function(){
		$(".opt-content").hide();
		var content = $(this).attr('content');
		$('.'+content).show();
	});

	$("#recruit_form").submit(function(){
		var pass=true;;
		$(".tovalidate").each(function(i, e){
			if($(e).val()==""){
				$(e).css({"background-color": "#FFF0F0", "border-left-width": "2px", "border-color": "#ee9393"});
				pass=false;
			}
			else
				$(e).css({"border": "thin solid #ccc", "background-color": "white"});
		})
		return pass;
	})
	$(".tovalidate").change(function(){
		$(this).css({"border": "thin solid #ccc", "background-color": "white"});
	})
	$('[data-toggle="tooltip"]').tooltip();
</script>