<div class="div-cont">
    <div class="change-forms" style="display: flex; flex-direction: column; justify-content: space-around;">
        <form action="" style="display: flex; flex-direction: column; justify-content: center; width: 300px;">
            <input type="hidden" id="log" value="<?php echo $_SESSION['login']; ?>">
            <input type="password" name="pass" id="pass" class="text-input" value="" placeholder="Введите Новый пароль">
            <input type="password" name="re-pass" id="re-pass" class="text-input" value="" placeholder="Повторите пароль">
            <input type="button" id="pass-button" value="Изменить пароль" class="booth-capture-button">
        </form>
        <form action="../../<?php echo $_SESSION['login']; ?>/changeEmail" method='post' style="display: flex; flex-direction: column; justify-content: center; width: 300px;">
            <input type="password" name="email" id="email" class="text-input" value="" placeholder="Введите Ваш новый e-mail">
            <input type="submit" id="email-button" value="Изменить e-mail" class="booth-capture-button">
        </form>
        <form action="../../<?php echo $_SESSION['login']; ?>/changeNik" method='post' style="display: flex; flex-direction: column; justify-content: center; width: 300px;">
            <input type="password" name="nik" id="nik" class="text-input" value="" placeholder="Введите Ваш новый никнейм">
            <input type="submit" id="nik-button" value="Изменить никнейм" class="booth-capture-button">
        </form>
    </div>