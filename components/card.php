<?php
function printUserCard($user) {
  if (!isset($user)) {
    return;
  }

  $userImg = $user["img"];
  $userTitle = $user["title"];
  $userAuthor = $user["author"];
  $userYears = $user["years"];

?>




<!DOCTYPE html>
<body>
  <div class="col">
    <div class="background-card">
      <img class="my-img" src="<?php echo $userImg ?>" alt="...">
      <div class="my-card-body">
        <h3 class="text-center text-white text-uppercase"><?php echo $userTitle ?></h3>
        <div class="subtitle-container">
          <h5><?php echo $userAuthor ?></h5>
          <h5><?php echo $userYears ?></h5>
        </div>
      </div>
    </div>
  </div>

  <?php
  }
  ?>
</body>
</html>