<?php include "app/views/header.php"; ?>
  <div id="login">
    <div class="flip">
      <div class="form-signup">
        <h1>Регистрация</h1>
        <fieldset>
        <p class="login-msg"></p>
          <form action="/register" method="post">
            <input type="email" name="email" placeholder="Введите Ваш email адрес..." required />
            <input type="password" name="pass" placeholder="Ваш сложный пароль..." required />
            <input type="text" name="name" placeholder="Имя пользователя" required />
            <input type="submit" value="Зарегистрироваться" />
          </form>
          <a href="/login" class="flipper">Уже зарегистрированы? Войти.</a>
        </fieldset>
      </div>
    </div>
  </div>
<?php include "app/views/footer.php"; ?>