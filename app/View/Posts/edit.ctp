<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add Post</title>
<script src="../js/src/ckeditor.js"></script>
<script src="../js/src/sample.js"></script>
<link rel="stylesheet" href="../cms/samples/css/samples.css">
<link rel="stylesheet" href="../cms/skins/moono/editor.css">
<link rel="stylesheet"
	href="../cms/samples/toolbarconfigurator/lib/codemirror/neo.css">
<link rel="stylesheet" href="../css/src/sky-forms.css">
<link rel="stylesheet" href="../css/src/app.css">
</head>
<body id="main">
	<div class="container">
		<div class="tab-v1">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#home-1" data-toggle="tab">Add New Post</a></li>

			</ul>
		</div>
		<div class="col-md-12">
<?php echo $this->Form->create('Post',array('class' => 'sky-form ') ); ?>
		<div class="col-sm-12 shadow-wrapper md-margin-bottom-40"></div>
			<fieldset>
				<section>
					<label class="select state-success"> 
					<?php
					
					echo $this->Form->input ( 'theloai', array (
							'options' => array (
									'Âm Nhạc' => 'Âm Nhạc',
									'Phim Ảnh' => 'Phim Ảnh',
									'Giải Trí' => 'Giải Trí',
									'Đời Sống' => 'Đời Sống',
									'Xã Hội' => 'Xã Hội',
									'Thể Thao' => 'Thể Thao',
									'Công Nghệ' => 'Công Nghệ',
									'Kinh Doanh' => 'Kinh Doanh',
									'Siêu Xe' => 'Siêu Xe' 
							),
							'empty' => 'Thể Loại',
							'label' => false 
					) );
					?>
					
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
<!--   begin CK editor -->
		<main>

			<div class="adjoined-bottom">
				<div class="grid-container">
					<div class="grid-width-100">
						<div id="editor" style="visibility: hidden; display: none;"></div>
						<div id="cke_editor"
							
								</div>
								<span id="cke_1_bottom" class="cke_bottom cke_reset_all"
									role="presentation" style="-webkit-user-select: none;"><span
									id="cke_1_resizer"
									class="cke_resizer cke_resizer_vertical cke_resizer_ltr"
									title="Kéo rê để thay đổi kích cỡ"
									onmousedown="CKEDITOR.tools.callFunction(0, event)">◢</span><span
									id="cke_1_path_label" class="cke_voice_label">Nhãn thành phần</span><span
									id="cke_1_path" class="cke_path" role="group"
									aria-labelledby="cke_1_path_label"><a id="cke_elementspath_9_1"
										href="javascript:void('body')" tabindex="-1"
										class="cke_path_item" title="body thành phần" hidefocus="true"
										onkeydown="return CKEDITOR.tools.callFunction(202,1, event );"
										onclick="CKEDITOR.tools.callFunction(201,1); return false;"
										role="button" aria-label="body thành phần">body</a><a
										id="cke_elementspath_9_0" href="javascript:void('p')"
										tabindex="-1" class="cke_path_item" title="p thành phần"
										hidefocus="true"
										onkeydown="return CKEDITOR.tools.callFunction(202,0, event );"
										onclick="CKEDITOR.tools.callFunction(201,0); return false;"
										role="button" aria-label="p thành phần">p</a><span
										class="cke_path_empty">&nbsp;</span></span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			</main>

			</div>
			<footer>
				<button type="submit" class="btn-u">Save</button>
			</footer>
			<hr>
		
		</div>
	</div>



	<script>
	initSample();
</script>

</body>
</html>
