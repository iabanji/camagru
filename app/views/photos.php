    <div class="div-foto">
        <?php
          $url = 'url';
          $i = 0;
          foreach ($data as $key => $value) {
            if ($i > 8)
              break;
            echo "<img src='$value[$url]'>";
            $i++;
          }
        ?>
    </div>
</div>