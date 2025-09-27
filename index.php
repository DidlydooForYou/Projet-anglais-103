<!DOCTYPE html>
<html lang="fr">
<?php include_once 'template/head.php'; ?>
<body>
    
    <!--Contenant principal pour largeur du contenu-Main container-->
    <div class="container">
        <!--Bannière-Banner-->
            <img src="/public/img/swimmer.jpg" class="img-fluid" alt="Le meilleur projet d'anglais 103 !">     
        <!--Bloc Navigation Menu principal-Navigation Block Top Menu-->
        <?php include_once 'template/header.php'; ?>
        <!--Bloc Navigation Menu principal-Navigation Block Top Menu-->
        <main>
            <h1 class="py-3 mt-3">Swimmers</h1>

            <!--Ligne qui contient des colonnes-Row-->
            <?php include_once 'template/products.php'; ?>
            <!--Ligne-->                       

        </main>
        
        <!--Bloc pied de page-Footer block-->
        <?php include_once 'template/footer.php'; ?>
        <!--Bloc pied de page-Footer block-->
        
    </div>
    <!--Contenant principal-->
   
</body>
</html>