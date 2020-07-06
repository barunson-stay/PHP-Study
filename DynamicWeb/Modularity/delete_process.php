<?php
unlink('data/'.$_POST['id']);
header('Location: /PHP-Study/DynamicWeb/Modularity/index.php');
?>