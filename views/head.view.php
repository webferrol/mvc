<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach($this->styles as $style): ?>
    <link rel="stylesheet" href="<?=htmlspecialchars($style); ?>">
    <?php endforeach;?>
    <title><?=$this->title;?></title>
</head>
<body>
    <div class="container">