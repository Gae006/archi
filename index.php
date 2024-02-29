<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Sith de e-commerce</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://kit.fontawesome.com/af78488ed9.js" crossorigin="anonymous"></script>
    </head>
<body>
        <!-- COMMENTAIRES --> 
    <?php
        
        //include("connect.php");
        include("nav.php");
        include("header.php");

        if($_GET['page']=='main') // faudra l'enlever à la fin
            include("main.php");
        else if($_GET['page']=='Onews')
            include("Onews.php");
        else if($_GET['page']=='Obestseller')
            include("Obestseller.php");
        else if($_GET['page']=='Oreconditionne')
            include("Oreconditionne.php");
        else if($_GET['page']=='account')
            include("account.php");
        else if($_GET['page']=='shopping-cart')
            include("shopping-cart.php");
        else
            include("main.php");
   
        include("footer.php");
    ?>  
</body>     
</html>