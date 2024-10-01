<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>

    <?php 
    
        include 'config.php';
        $id = $_GET['sid'];
        $query = mysqli_query($con,"SELECT * FROM records WHERE sid = '{$id}'") or die("query failed");

        while($row = mysqli_fetch_assoc($query)){
    ?>


    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname']?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress']?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select name="sclass">
              <option value="<?php echo $row['sclass']?>" selected><?php echo $row['sclass']?></option>
              <option value="BCA">BCA</option>
              <option value="BSC">BSC</option>
              <option value="B.TECH">B.TECH</option>
          </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone']?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
        }
    ?>
</div>
</div>
</body>
</html>
