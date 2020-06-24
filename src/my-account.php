<?php include("header.php") ?>
    <!-- main -->
    <main >
      <section style="margin-top:2em; margin-left:2em;" id="section-about">
        <div class="section-about font-rale">
          <h2>Please sign in to you account!</h2>
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
                <div class="form-box" style="margin-top:2em;">
                  <button type="submit" name="sign_in" class="btn font-rale font-size-16">Sign in now</button>
                </div>
                <?php include("extra/sign-in.php"); ?>

              </form>
          </div>
        </div>
      </section>
    </main>
    <!-- !main -->
<?php include("footer.php") ?>