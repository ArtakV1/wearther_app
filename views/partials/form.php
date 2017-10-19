<form action="forecast.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="location">Location <i class="fa fa-search" aria-hidden="true"></i></label>
    <input type="text" class="form-control" id="location" aria-describedby="location-help" placeholder="Location" name="location" value="<?php echo (isset($_POST['location']) ? $_POST['location'] : '') ?>">
  </div>
  <button type="submit" name="submit" class="btn sr-only" >Submit</button>
</form>