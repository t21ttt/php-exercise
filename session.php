<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session start</title>
</head>
<body>
<?php
$_SESSION['favcolor ']='green';
$_SESSION['favanimal ']='cat';
echo 'session variable are set.';

?>
</body>
</html>