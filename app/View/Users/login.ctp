<div class="apollo">
	<div class="apollo-container clearfix">
		<div class="apollo-facebook">
			<div class="apollo-image">
				<img src="https://scontent-hkg3-1.xx.fbcdn.net/v/t1.0-9/12348116_783924005070645_4446486889320328393_n.jpg?oh=5510ab5356d0a428daef00bd024dc614&oe=579A235D" width="100%">
			</div>
		</div>

		<div class="error alignCenter mgbt10">
			<?php echo $this->Session->flash(); ?>
		</div>

		<div class="apollo-login">
			<a href="http://vietoregon-tech.com/?lang=vn" class="btn btn-block btn-facebook btn-lg" target="_blank"> <strong>VOTC Company</strong></a>
			<p class="apollo-seperator mgbt20">&nbsp</p>
			<form action="login" id="UserLoginForm" method="post" accept-charset="utf-8" class="form-signin">
				<div class="form-group">
					<input name="data[User][username]" maxlength="50" type="text" id="UserUsername" required="required" class="form-control username" placeholder="Username">
				</div>
				<div class="form-group input password required">
					<input name="data[User][password]" type="password" id="UserPassword" required="required" class="form-control" placeholder="Password">
				</div>
				<div class="submit">
					<input class="btn btn-lg btn-signin btn-block" value="Đăng nhập" type="submit">
				</div>
			</form>
		</div>
	</div>
</div>