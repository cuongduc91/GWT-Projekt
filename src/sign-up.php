<?php include("header.php") ?>
    <!-- main -->
    <main id="register-main" >
      <section id="section-register">
        <div class="register font-rale">
          <h2>Register with us!</h2>
          <hr style="margin-bottom: 3em;">
          <div class="form-group">
              <form action="" method="post">
                <div class="form-box">
                  <label class="font-rale"  for="">Username</label>
                  <input type="text" name="user_name" placeholder="Example: cuongduc" class="form-box-control" autocomplete="off" required>
                </div>
                <div class="form-box">
                  <label class="font-rale"  for="">Password</label>
                  <input type="password" name="user_pass" placeholder="Example: 12345678" class="form-box-control" autocomplete="off" required>
                </div>
                <div class="form-box">
                  <label class="font-rale"  for="">Re-enter password</label>
                  <input type="password" name="user_repass" placeholder="Example: 12345678" class="form-box-control" autocomplete="off" required>
                </div>
                <div class="form-box">
                  <label class="font-rale"  for="">Email</label>
                  <input type="email" name="user_email" placeholder="Example: example@email.com" class="form-box-control" autocomplete="off" required>
                </div>
                <div style="margin-top:1.5em;" class="form-term-box">
                  <input type="checkbox" required>
                  I accept the 
                  <a href="http://corndog.io">Terms of Use</a> 
                  &amp; 
                  <a href="http://www.fallingfalling.com/">Privacy Policy</a>
                </div>
                <div class="form-box" style="margin-top:2em;">
                  <button type="submit" name="sign_up" class="btn font-rale font-size-16">Sign up now</button>
                </div>
                <?php include("extra/register-check.php"); ?>

              </form>
          </div>
        </div>
      </section>
    </main>
    <!-- !main -->
<?php include("footer.php") ?>