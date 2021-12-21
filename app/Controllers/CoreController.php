<?php

class CoreController
{
    // Fonction qui affiche le template voulu
    // Avec les données associées à ce template
    protected function show($viewName, $viewVars = [])
    {
        function url(){
            return sprintf(
              "%s://%s",
              isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
              $_SERVER['HTTP_HOST']
            );
          }
          
        // dd($_SERVER);
        $absoluteURL = url();
        // On récupère notre variable $router créé "au niveau global de PHP" càd dans index.php
        global $router;      
                
            
        require __DIR__ . '/../views/header.tpl.php';
        // Inclusion du template pour rendu HTML renvoyé par le serveur
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        // Pied de page
        require __DIR__ . '/../views/footer.tpl.php';
    }
}
