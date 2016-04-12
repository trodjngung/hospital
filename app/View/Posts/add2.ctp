<!-- add Post -->
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
<script src="/js/src/form-sliders.js"></script>

<div class="container">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#home-1" data-toggle="tab">Add New Post</a></li>

		</ul>
	</div>
	<div class="col-md-12">
<?php echo $this->Form->create('Post',array('class' => 'sky-form margin-left-160') ); ?>
		<div class="col-sm-12 shadow-wrapper md-margin-bottom-40"></div>
		<fieldset>
			<section>
				<label
					class="select state-success"> 
					<?php echo $this->Form->input('theloai', array(
   							 'options' => array('Âm Nhạc' => 'Âm Nhạc','Phim Ảnh'=>'Phim Ảnh','Giải Trí'=>'Giải Trí','Đời Sống'=>'Đời Sống','Xã Hội'=>'Xã Hội','Thể Thao'=>'Thể Thao','Công Nghệ'=>'Công Nghệ','Kinh Doanh'=>'Kinh Doanh','Siêu Xe'=>'Siêu Xe'),
   							 'empty' => 'Thể Loại',
							 'label' => false	
								));?>
					
				</label>
			</section>
		</fieldset>
		<fieldset>
			<div class="row">
				<section class="col-sm-12">
					<label class="input"> 
							<?php
							
							echo $this->Form->input ( 'title', array (
									'class' => 'form-control',
									'label' => false,
									'div' => false,
									'type' => 'text',
									'placeholder' => 'Tiêu đề' 
							) );
							?>
						</label>
				</section>
			</div>
		</fieldset>

		<div id="content">
			<!-- create button upload  -->
			<label for="file" class="input input-file state-success">
				<div class="button">
					<input type="file" name="files" multiple="" data-url="/upload.php"
						id="fileupload"
						onchange="this.parentNode.nextSibling.value = this.value">Browse
				</div> <input type="text" readonly="">
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
				$('<img/>').css({'width':'265px', 'height':'auto'})
							.attr('src',file.url).appendTo('.box-shadow');
				
// 2, save img for DB 
				// insert to form
				
			var $img_name = $('<input/>')
									.attr({
										type:'hidden',
										name: 'data[Post][image]',
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
				<label class="textarea"> 
					<?php
					
					echo $this->Form->textarea ( 'body', array (
							'rows' => '25',
							'cols' => '5',
							'placeholder' => 'Nội dung' 
					) );
					?>
					
					</label>
			</section>
		</fieldset>
		<footer>
			<button type="submit" class="btn-u">Save</button>
		</footer>
		<hr>
	</div>
</div>

