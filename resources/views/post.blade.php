<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post 1</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
<article class="articulos">
 <h1>   <?= $post->title; ?> </h1>
 <div>
     <?= $post->body;?>
 </div>
</article>
<p>Ángela Serantes</p>
<a href="/">Volver</a>
</body>
</html>

