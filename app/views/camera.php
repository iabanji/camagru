    <div class="div-cont">
      <div class="booth">
       <video id="video" width="400" height="300" autoplay></video>
       <a href="#" id="capture" class="booth-capture-button">Сфотографировать</a>
       <canvas id="canvas" width="400" height="300"></canvas>
       <!-- <img src="http://goo.gl/qgUfzX" id="photo" alt="Ваша фотография"> -->
       <img src="../img/no_name.jpg" id="photo" alt="Ваша фотография" width="400px" height="300px">
       <form action="../../<?php echo $_SESSION['login']; ?>/savePhoto" method='post' style="display: flex; flex-direction: row; justify-content: center;">
        <input type="hidden" name="photo" id="hidden" value="0">
        <!-- <input type="submit" value="save" id="sub" disabled> -->
        <input type="submit" id="" value="Сохранить" class="booth-capture-button">
        </form>
    </div>