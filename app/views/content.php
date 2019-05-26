<section>
    <div class="div-cont" style="display: flex; flex-direction: row; justify-content: space-between; border: 2px solid black; max-height: 75%;">
      <div class="booth">
       <video id="video" width="400" height="300" autoplay></video>
       <a href="#" id="capture" class="booth-capture-button">Сфотографировать</a>
       <canvas id="canvas" width="400" height="300"></canvas>
       <img src="http://goo.gl/qgUfzX" id="photo" alt="Ваша фотография">
       <form action="<?php echo $_SESSION['login']; ?>/savePhoto" method='post' style="display: flex; flex-direction: row; justify-content: center;">
        <input type="hidden" name="photo" id="hidden" value="0">
        <!-- <input type="submit" value="save" id="sub" disabled> -->
        <input type="submit" id="" value="Сохранить" class="booth-capture-button">
      </form>
      </div>

      <div class="div-foto">
        <?php
          $url = 'url';
          $i = 0;
          foreach ($data as $key => $value) {
            if ($i > 9)
              break;
            echo "<img src='$value[$url]'>";
            $i++;
          }
        ?>
      </div>
    </div>
</section>
