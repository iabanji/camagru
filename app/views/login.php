<?php include "app/views/header.php"; ?>
      <div id="login">
        <div class="form-singup">
          <h1>Авторизация</h1>
          <fieldset>
            <form action="" method="post">
              <input type="email" name="email" placeholder="Email" required />
              <input type="password" name="pass" placeholder="Пароль" required />
              <input type="submit" value="ВОЙТИ" />
            </form>
            <p><a href="/register" class="flipper">Нет аккаунта? Регистрация.</a><br>
            <a href="/resetpass">Забыли пароль?</a></p>
          </fieldset>
        </div>
      </div>
<?php include "app/views/footer.php"; ?>