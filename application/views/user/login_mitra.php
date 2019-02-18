<section id="contact">
  <div class="container">

    <div class="form row">

      <div class="col-md-3">

      </div>

      <div class="col-md-6">
        <div class="section-header">
          <h2>Login Mitra</h2>
        </div>

        <?php
          if( $status != 0 ){
            ?>

          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fa fa-ban"></i> <?= $this->mylib->login_error[$status]?>
          </div>

        <?php
          }
         ?>

        <form action="/mitra/logedin" method="post" role="form">
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" />
          </div>
          <div class="text-right">
            <button type="submit" name="login" style="width:200px">Login</button><br><br>
            <a href="/lupapassword"><small>Lupa Password</small></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>
