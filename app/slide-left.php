<div class="col-lg-3">
  <h1 class="my-4"><img src="http://localhost:8080/final-course/public/uploads/113.png" width="250" height="100"></h1>
  <div class="list-group">
  <h5 style="text-align: center; color: purple; font-size: 30px; border-style: outset; border-color: lightblue; border-radius: 20px;">HÃNG DI ĐỘNG</h5>
    <?php
        $sql = "select * from catalogs ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) { ?>
              <a href="catalogs.php?catalog_id=<?php echo $row["id"]; ?>"
                class="list-group-item" style="border-style: outset; border-color: blue; border-radius: 10px;"><img src="../public/uploads/114.png" width="12" height="12"> <?php echo $row["name"]; ?></a>
          <?php   }
        }
      ?>
  </div>
</div>

