<div class="login-page bk-img" >
	<div align="center" style="margin-top:20px;"><img width=30% src="<?php echo admin_img_url();?>logonew.png"></div>
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<div style="color:red; font-size:16px; padding:10px;"><?php echo $this->session->flashdata('message');?></div>
								<form method="post">

									<label for="" class="text-uppercase text-sm">Your Username </label>
									<input type="text" placeholder="Username" name="email_id" class="form-control mb">

									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" name="password" class="form-control mb">

								

									<input type="submit" class="btn btn-primary btn-block" name="submit" value="LOGIN">

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	