<?php
require_once 'src/Page.php';
require_once 'src/initialization.php';

const ACTIVE_PAGE = Page::Home;
?>

<!DOCTYPE html>
<html lang="fr">
<?php include_once TEMPLATE . '/head.php'; ?>
<body>
    
    <!--Contenant principal pour largeur du contenu-Main container-->
    <div class="container">
        <!--Bannière-Banner-->
            <img src="/public/img/banner.jpg" class="img-fluid" alt="La meilleure boutique informatique !">     
        <!--Bloc Navigation Menu principal-Navigation Block Top Menu-->
        <?php include_once TEMPLATE . '/header.php'; ?>
        <!--Bloc Navigation Menu principal-Navigation Block Top Menu-->
        <main>
            <h1 class="py-3 mt-3">Intro</h1>                   

        </main>
        
        <!--Bloc pied de page-Footer block-->
        <?php include_once TEMPLATE . '/footer.php'; ?>
        <!--Bloc pied de page-Footer block-->
        
    </div>
    <!--Contenant principal-->
   
</body>
</html>