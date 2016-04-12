<!-- add staff -->
<style>
.bar {
	height: 18px;
	background: blue;
}
</style>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="/vendor/other/jquery/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="/js/src/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="/js/src/canvas-to-blob.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="/vendor/other/jquery/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="/vendor/other/jquery/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="/vendor/other/jquery/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="/vendor/other/jquery/jquery.fileupload-image.js"></script>
<script src="/vendor/jquery/jquery-ui.js"></script>
<!-- edit staff -->
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Staff</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="">Staff</a></li>
			<li class="active"><a href="">Edit</li>
		</ul>
	</div>
	<!--/container-->
</div>
<div class="container">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#home-1" data-toggle="tab">Edit Profile</a></li>

		</ul>
	</div>
	<div class="col-md-9">
<?php echo $this->Form->create('Staff',array('class' => 'sky-form') ); ?>
			<header>Profile Information </header>
		<div class="col-sm-4 shadow-wrapper md-margin-bottom-40">
			<div class="box-shadow shadow-effect-2">
				<img class="img-responsive img-bordered full-width"
					src="/files/<?php
					echo ($staff ['Staff'] ['image']);
					?> "
					alt="">

			</div>
		</div>
		<fieldset>
			<div class="row">
				<section class="col col-6">
					<label class="input"> <i class="icon-prepend fa fa-user"></i> 
							<?php
							
							echo $this->Form->input ( 'name', array (
									'class' => 'form-control',
									'label' => false,
									'div' => false,
									'type' => 'text',
									'placeholder' => 'Name' 
							) );
							?>
						</label>
				</section>
				<section class="col col-6">
					<label class="input"> <i class="icon-prepend fa fa-home"></i> 
						<?php
						
						echo $this->Form->input ( 'address', array (
								'class' => 'form-control',
								'label' => false,
								'div' => false,
								'type' => 'text',
								'placeholder' => 'Address' 
						) );
						?>
						</label>
				</section>
			</div>

			<div class="row">
				<section class="col col-6">
					<label class="input"> <i class="icon-prepend fa fa-facebook-official"></i>
							<?php
							
							echo $this->Form->input ( 'facebook', array (
									'class' => 'form-control',
									'label' => false,
									'div' => false,
									'type' => 'text',
									'placeholder' => 'Facebook Link' 
							) );
							?>
						</label>
				</section>
				<section class="col col-6">
					<label class="input"> <i class="icon-prepend fa fa-twitter"></i> 
						<?php
						
						echo $this->Form->input ( 'twitter', array (
								'class' => 'form-control',
								'label' => false,
								'div' => false,
								'type' => 'text',
								'placeholder' => 'Twitter Link' 
						) );
						?>
						</label>
				</section>
			</div>

			<div class="row">
				<section class="col col-6">
					<label class="input"> <i class="icon-prepend fa fa-calendar"></i> 
							 <?php
								
								echo $this->Form->input ( 'birthday', array (
										'id' => 'datepicker',
										'label' => false,
										'div' => false,
										'type' => 'text',
										'placeholder' => 'Birthday' 
								) );
								?>
						</label>
				</section>
				<section class="col col-6">
					<label class="input"> <i class="icon-prepend fa fa-graduation-cap"></i> 
						<?php
						
						echo $this->Form->input ( 'graduate', array (
								'class' => 'form-control',
								'label' => false,
								'div' => false,
								'type' => 'text',
								'placeholder' => 'Graduate' 
						) );
						?>
						</label>
				</section>
			</div>
			<div class="row">

				<section class="col col-4">
					<label class="label">Skill Japanese (<span id="japanese"><?php echo $staff['Staff']['japanese']; ?></span>)


					</label>
						<?php
						
						echo $this->Form->input ( 'japanese', array (
								'class' => 'form-control',
								'label' => false,
								'div' => false,
								'type' => 'hidden',
								'id' => 'japanese_value' 
						) );
						?>
						<div id="slider1"
						class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
						aria-disabled="false">
						<a class="ui-slider-handle ui-state-default ui-corner-all"
							href="#" style="left: <?php echo $staff['Staff']['japanese']; ?>%;"></a>
					</div>

				</section>
				<section class="col col-4">
					<label class="label">Skill English (<span id="english"><?php echo $staff ['Staff'] ['english']?></span>)
					</label>
					<?php
					
					echo $this->Form->input ( 'english', array (
							'class' => 'form-control',
							'label' => false,
							'div' => false,
							'type' => 'hidden',
							'id' => 'english_value' 
					) );
					?>
						<div id="slider2"
						class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
						aria-disabled="false">
						<a class="ui-slider-handle ui-state-default ui-corner-all"
							href="#" style="left: <?php echo $staff ['Staff'] ['english']?>%;"></a>
					</div>

				</section>
				<section class="col col-4">
					<label class="label">Skill Vietnamese (<span id="vietnamese"><?php echo $staff ['Staff'] ['vietnamese']?></span>)
					</label>
					<?php
					echo $this->Form->input ( 'vietnamese', array (
							'class' => 'form-control',
							'label' => false,
							'div' => false,
							'type' => 'hidden',
							'id' => 'vietnamese_value' 
					) );
					?>
						<div id="slider3"
						class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
						aria-disabled="false">
						<a class="ui-slider-handle ui-state-default ui-corner-all"
							href="#" style="left: 10%;"></a>
					</div>

				</section>
			</div>

			<div class="row">
				<section class="col col-4">
					<label class="label">HTML/CSS (<span id="htmlcss"><?php echo $staff ['Staff'] ['htmlcss']?></span>)
					</label>
					<?php
					echo $this->Form->input ( 'htmlcss', array (
							'class' => 'form-control',
							'label' => false,
							'div' => false,
							'type' => 'hidden',
							'id' => 'htmlcss_value' 
					) );
					?>
						<div id="slider4"
						class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
						aria-disabled="false">
						<a class="ui-slider-handle ui-state-default ui-corner-all"
							href="#" style="left: 10%;"></a>
					</div>

				</section>
				<section class="col col-4">
					<label class="label">JavaScript(<span id="javascript"><?php echo $staff ['Staff'] ['javascript']?></span>)
					</label>
					<?php
					echo $this->Form->input ( 'javascript', array (
							'class' => 'form-control',
							'label' => false,
							'div' => false,
							'type' => 'hidden',
							'id' => 'javascript_value' 
					) );
					?>
						<div id="slider5"
						class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
						aria-disabled="false">
						<a class="ui-slider-handle ui-state-default ui-corner-all"
							href="#" style="left: 10%;"></a>
					</div>

				</section>
				<section class="col col-4">
					<label class="label">PHP (<span id="php"><?php echo $staff ['Staff'] ['php']?></span>)
					</label>
					<?php
					echo $this->Form->input ( 'php', array (
							'class' => 'form-control',
							'label' => false,
							'div' => false,
							'type' => 'hidden',
							'id' => 'php_value' 
					) );
					?>
					
						<div id="slider6"
						class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
						aria-disabled="false">
						<a class="ui-slider-handle ui-state-default ui-corner-all"
							href="#" style="left: 10%;"></a>
					</div>

				</section>
			</div>
			<div class="row">
				<section class="col col-6">
					<label class="label">NODE.JS (<span id="nodejs"><?php echo $staff ['Staff'] ['nodejs']?></span>)
					</label>
					<?php
					echo $this->Form->input ( 'nodejs', array (
							'class' => 'form-control',
							'label' => false,
							'div' => false,
							'type' => 'hidden',
							'id' => 'nodejs_value' 
					) );
					?>
						<div id="slider7"
						class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
						aria-disabled="false">
						<a class="ui-slider-handle ui-state-default ui-corner-all"
							href="#" style="left: 10%;"></a>
					</div>

				</section>
				<section class="col col-6">
					<label class="label">LINUX (<span id="linux"><?php echo $staff ['Staff'] ['linux']?></span>)
					</label>
					<?php
					echo $this->Form->input ( 'linux', array (
							'class' => 'form-control',
							'label' => false,
							'div' => false,
							'type' => 'hidden',
							'id' => 'linux_value' 
					) );
					?>
						<div id="slider8"
						class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
						aria-disabled="false">
						<a class="ui-slider-handle ui-state-default ui-corner-all"
							href="#" style="left: 10%;"></a>
					</div>

				</section>
			</div>
		</fieldset>
		<div id="content">

			<h4 class="color-green">Change your avatar</h4>
			<!-- create button upload  -->
			<label for="file" class="input input-file state-success">
                                            <div class="button"><input type="file" name="files" multiple="" data-url="/upload.php" id="fileupload" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly="">
                                        </label>
			<script>
$(function (){
	$('<div/>').attr({id:'progress'}).appendTo('#content');
    $('<div/>').addClass('bar')
    			.attr({'style':'width:0%;'})
    			.appendTo('#progress');
   
    $('#fileupload').fileupload({
        dataType: 'json',
        url: '/upload.php',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo('#content');
            });
        },
    //display upload progress
	 progressall: function (e, data) {
	        var progress = parseInt(data.loaded / data.total * 100, 10);
	        $('#progress .bar').css(
	            'width',
	            progress + '%'
	        );
	    },
	  // add  
	    add: function (e, data) {
            data.context = $('<button/>').text('Upload')
            .attr('class','btn-u')
                .appendTo('#content')
                .click(function () {
                    data.context = $('<p/>').text('Uploading...').replaceAll($(this));
                    data.submit();
                });
        },
        done: function (e, data) {
            data.context.text('Upload finished.')
            .attr('class','color-green');
            
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).attr('class','color-green').appendTo('#content');
console.log( file.url );
console.log( 'file.url' );


// 1. show img in chatbox
				$('<img/>').css({'width':'240px', 'height':'240px'})
							.attr('src',file.url).appendTo('.box-shadow');
				
// 2, save img for DB 
				// insert to form
				
			var $img_name = $('<input/>')
									.attr({
										type:'hidden',
										name: 'data[Staff][image]',
										value:file.name
										 });	
console.log( $img_name );				
			$('form').append( $img_name );			
			
					   
            });
        },
        
        
     // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator && navigator.userAgent),
        imageMaxWidth: 800,
        imageMaxHeight: 800,
        imageCrop: true // Force cropped images
    });
    
    
});	
</script>

		</div>


		<fieldset>
			<section>
				<label class="textarea">  <i class="icon-prepend fa fa-comment"></i>
					<?php
					
					echo $this->Form->textarea ( 'message', array (
							'rows' => '5',
							'cols' => '5',
							'placeholder' => 'Message' 
					) );
					?>
					
					</label>
			</section>
		</fieldset>
		<footer>
			<button type="submit" class="btn-u">Save</button>
		</footer>
		<hr>
		<h4>If you don't want to edit profile. Please <?php echo $this->Html->link('come back',array('controller'=>'staffs','action'=>'index'))?> 
		</h4>

	</div>
</div>

<script>
  $(function() {
	   $( "#datepicker").datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: "1950:2015"	
	        });
	  });
	    </script>
<script>
	    $(function() {
    $('#slider1').slider({
        
	      min: 0,
	      max: 100,
	      animate: "fast",
	      value: $('#japanese_value').val() ,
	      slide: function(event, ui)
	      {
	        $('#japanese').text(ui.value);

	        $('#japanese_value').val(ui.value);
	        

	           
	      },
	      
  	
    });
  $('#slider2').slider({
	      min: 0,
	      max: 100,
	      animate: "fast",
	      value: $('#english_value').val() ,
	      slide: function(event, ui)
	      {
	        $('#english').text(ui.value);
	        $('#english_value').val(ui.value);
	      }
  });
  $('#slider3').slider({
	      min: 0,
	      max: 100,
	      animate: "fast",
	      value: $('#vietnamese_value').val() ,
	      slide: function(event, ui)
	      {
	        $('#vietnamese').text(ui.value);
	        $('#vietnamese_value').val(ui.value);
	      }
});
  $('#slider4').slider({
	      min: 0,
	      max: 100,
	      animate: "fast",
	      value: $('#htmlcss_value').val() ,
	      slide: function(event, ui)
	      {
	        $('#htmlcss').text(ui.value);
	        $('#htmlcss_value').val(ui.value);
	      }
});
  $('#slider5').slider({
	      min: 0,
	      max: 100,
	      animate: "fast",
	      value: $('#javascript_value').val() ,
	      slide: function(event, ui)
	      {
	        $('#javascript').text(ui.value);
	        $('#javascript_value').val(ui.value);
	      }
});
  $('#slider6').slider({
	      min: 0,
	      max: 100,
	      animate: "fast",
	      value: $('#php_value').val() ,
	      slide: function(event, ui)
	      {
	        $('#php').text(ui.value);
	        $('#php_value').val(ui.value);
	      }
});
  $('#slider7').slider({
	      min: 0,
	      max: 100,
	      animate: "fast",
	      value: $('#nodejs_value').val() ,
	      slide: function(event, ui)
	      {
	        $('#nodejs').text(ui.value);
	        $('#nodejs_value').val(ui.value);
	      }
});
  $('#slider8').slider({
	      min: 0,
	      max: 100,
	      animate: "fast",
	      value: $('#linux_value').val() ,
	      slide: function(event, ui)
	      {
	        $('#linux').text(ui.value);
	        $('#linux_value').val(ui.value);
	      }
});
  });
  </script>