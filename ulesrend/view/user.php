<div class="col-md-6">

    <h3>Név</h3>
    <img src="uploads/15.jpg">
    <p>3. sor 5. hely</p>
    <?php 
  //require_once 'model/osztaly.php';

  $id = $_GET['id'];
  $data = $osztaly->getUser($id);
  echo $data;
     
    ?>
</div>