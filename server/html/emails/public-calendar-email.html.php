<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="img/favicon.png">
      <style>img[alt="www.000webhost.com"]{display:none;}</style>
</head>
<body>
    <div>

        <p>
            Your friend,
            <a target="_blank" href="#">narcismorar@gmail.com</a>, has sent you the following Event Calendar and included this message:
        </p>
        <p> <?php echo $message; ?> </p>
        <p>
            <a target="_blank" href="<?php echo $link; ?>">View calendar</a>
        </p>
    </div>
</body>
</html>
<?php
$publicCalendarEmail = ob_get_clean();
?>
