<?php 
	$zoom = 16;
	$coordinate = __('ACCESS_TEXT_9');
	$name = __('ACCESS_TEXT_10');
	$address = __('ACCESS_TEXT_11');
	$email = __('ACCESS_TEXT_12');
	
	$phone = __('ACCESS_TEXT_13');
	$website = __('ACCESS_TEXT_14');
?>
	<div class="access">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mapbox">
					<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
					</script>
					<div style="overflow:hidden;height:400px;width:100%;border: thin solid #CCC">
					        <div id="gmap_canvas" style="height:400px;width:100%;">
					        </div>
					        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
					</div>
				</div>
				<div class="col-md-6 ">
					
						<div class="headline1 ">
							<h2><?php echo __('ACCESS_TEXT_2'); ?></h2>
							<p class="space-lg-hor"></p>
						</div>
						<div class="box_content">
							<ul class="list-unstyled">
								<li><i class="fa fa-home"></i> <?php echo __('ACCESS_TEXT_3'); ?></li>
								<li><i class="fa fa-envelope"></i> <?php echo __('ACCESS_TEXT_4'); ?></li>
								<li><i class="fa fa-phone"></i> <?php echo __('ACCESS_TEXT_5'); ?></li>
							</ul>
						</div>
				<br><br>	
						<div class="headline1">
							<h2><?php echo __('ACCESS_TEXT_6'); ?></h2>
							<p class="space-lg-hor"></p>
							
						</div>
						<div class="box_content">
							<?php echo __('ACCESS_TEXT_7'); ?><br>
							<?php echo __('ACCESS_TEXT_8'); ?>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>

<script type="text/javascript">
        function init_map()
        {
                var myOptions = {zoom:<?php echo $zoom; ?>,
                                center:new google.maps.LatLng(<?php echo $coordinate; ?>),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                                };
                map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?php echo $coordinate ?>)});
                infowindow = new google.maps.InfoWindow({content:"<?php echo "<b>".$name."</b><br>".$address; ?>" });
                google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
                infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
</script>