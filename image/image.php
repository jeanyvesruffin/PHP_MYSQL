<?php
header("Content-type: image/jpeg");
// chemin de l'image
$source = "couchersoleil.jpg";
// lecture de l'image
$photo = ImageCreateFromJpeg($source);
// affichage de l'image
imagejpeg($photo);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
</head>

<body>
</body>

</html>