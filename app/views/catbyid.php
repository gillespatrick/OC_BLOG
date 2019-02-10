<?php include 'app/views/inc/header.php';?>;



<div class = "content">

<h1>CATEGORY BY ID</h1><HR/>

<?php

  foreach ($catbyid as $key => $value) {
    echo $value['title']."<br/>"; }

?>

</div>



<?php include 'app/views/inc/header.php';?>



