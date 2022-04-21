<?php
session_start();
$message = empty($_SESSION['message']) ? "Nenhuma mensagem enviada." : $_SESSION['message'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="section_wrapper">
            <h1>Mensagem</h1>
            <p><?php echo $message; ?></p>
            <?php
            require 'footer.php';
            ?>
        </div>
    </div>
</body>

</html>