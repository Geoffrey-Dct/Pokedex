<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=$absoluteURL?>/css/style.css">
  <title>Pokedex</title>
</head>
<body>
  <header>
    <h1 class="title">Pokedex</h1>
    <div class="header-link-container">
      <a href="<?=$router->generate('home')?>" class="header-link">List</a>
      <a href="<?=$router->generate('types')?>" class="header-link">Types</a>
    </div>  
  </header>
  
