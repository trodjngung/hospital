<div id="contact">
	<div class="container content">
	<div class="headline-center margin-bottom-20" >
		<h2>
						Liên Hệ			</h2>
						</div>
		<!-- Start Form Contact -->
				<?php
				echo $this->Form->create ( "Contact", array ('url' => array ('controller' => 'home','action' => 'ajax_contact' 
				),'class' => 'contact-form','role' => 'form' 
				) );
				?>
		<fieldset>
			<section class="field">
				<label class="label col-sm-2"><?php echo __('CONTACT_TEXT_2')?><span class="required">*</span></label>
				<label class="input col-sm-10">
					<i class="icon-prepend fa fa-user"></i>
					<?php
					echo $this->Form->input ( 'name', array ('name' => 'name','id' => 'name','label' => false,'div' => false,'type' => 'text',
															'placeholder' => __ ( 'CONTACT_TEXT_3' ) 
					) );
					?>
				</label>
			</section>
			<section class="field">
				<label class="label col-sm-2"><?php echo __('CONTACT_TEXT_4')?><span class="required">*</span></label>
				<label class="input col-sm-10">
					<i class="icon-prepend fa fa-envelope"></i>
					<?php
					echo $this->Form->input ( 'email', array ('name' => 'email','id' => 'email','label' => false,'div' => false,'type' => 'text',
																'placeholder' => __ ( 'CONTACT_TEXT_5' ) 
					) );
					?>
				</label>
			</section>
			<section class="field">
				<label class="label col-sm-2"><?php echo __('CONTACT_TEXT_6')?></label>
				<label class="input col-sm-10">
					<i class="icon-prepend fa fa-phone"></i>
					<?php
					echo $this->Form->input ( 'phoneNumber', array ('name' => 'phoneNumber','id' => 'phoneNumber','label' => false,'div' => false,
																	'type' => 'text','placeholder' => __ ( 'CONTACT_TEXT_7' ) 
					) );
					?>
				</label>
			</section>
			<section class="field">
				<label class="label col-sm-2"><?php echo __('CONTACT_TEXT_8')?></label>
				<label class="input col-sm-10">
					<i class="icon-prepend fa fa-building"></i>
					<?php
					echo $this->Form->input ( 'company', array ('name' => 'company','id' => 'company','label' => false,'div' => false,'type' => 'text'
					) );
					?>
				</label>
			</section>
			
			<section class="field">
				<label class="label col-sm-2"><?php echo __('CONTACT_TEXT_14')?></label>
				<label class="input col-sm-10">
					<i class="icon-prepend fa fa-ellipsis-v"></i>
					<?php
					
					$option = array ('recruit' => __ ( 'CONTACT_TEXT_15_1' ),'other' => __ ( 'CONTACT_TEXT_15_2' ) 
					);
					
					echo $this->Form->select ( 'contactType', $option, array ('name' => 'contactType','id' => 'contactType','label' => false,'div' => false,
																				'empty' => __ ( 'CONTACT_TEXT_15' ) 
					) );
					?>
					<i class="icon-append fa fa-sort"></i>
				</label>
			</section>
			<section class="field">
				<label class="label col-sm-2"><?php echo __('CONTACT_TEXT_16')?></label>
				<label class="input col-sm-10">
					<i class="note-textarea icon-prepend fa fa-comment"></i>
					<?php
					echo $this->Form->textarea ( 'note', array ('name' => 'note','id' => 'note','label' => false,'div' => false,'row' => '3',
																'placeholder' => __ ( 'CONTACT_TEXT_17' ) 
					) );
					?>
				</label>
			</section>
		</fieldset>
		<footer class="margin-bottom-20">
			<button type="submit" class="btn-send"><?php echo __('CONTACT_TEXT_18')?></button>
		</footer>
		<!-- <div class="message-response">
			<i class="rounded-x fa fa-check"></i>
			<p>Your contact was successfully sent!</p>
		</div> -->
	</div>
</div>
