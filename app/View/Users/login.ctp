<div class="apollo">
	<div class="apollo-container clearfix">
		<div class="apollo-facebook">
			<div class="apollo-image">
				<img src="/img/logo/logolachong.png" width="100%">
			</div>
		</div>

		<div class="error alignCenter mgbt10">
			<?php echo $this->Session->flash(); ?>
		</div>

		<div class="apollo-login">
			<a href="http://vietoregon-tech.com/?lang=vn" class="btn btn-block btn-facebook btn-lg" target="_blank">Thiết kế bởi <strong>Việt Oregon</strong></a>
			<p class="apollo-seperator mgbt20">&nbsp</p>
			<form action="login" id="UserLoginForm" method="post" accept-charset="utf-8" class="form-signin">
				<div class="form-group">
					<input name="data[User][username]" maxlength="50" type="text" id="UserUsername" required="required" class="form-control username">
				</div>
				<div class="form-group input password required">
					<input name="data[User][password]" type="password" id="UserPassword" required="required" class="form-control">
				</div>
				<div class="submit">
					<input class="btn btn-lg btn-signin btn-block" value="Đăng nhập" type="submit">
				</div>
			</form>
		</div>
	</div>
</div>