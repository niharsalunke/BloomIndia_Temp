<a id="login-button" href="<?= 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>">
<img src="<?php echo public_img_url();?>googlebutton.png" class="img-responsive center-block" width="300" alt="Login with Google">
</a>

<a id="login-button" href="<?php base_url();?>fbLogin">
<img src="<?php echo public_img_url();?>fbbutton.png" class="img-responsive center-block" width="325" alt="Login with Facebook">
</a>
