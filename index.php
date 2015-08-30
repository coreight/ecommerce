<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>e-commerce</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cerulean/bootstrap.min.css">
<?php
    include_once __DIR__.'/vendor/autoload.php';

    use Symfony\Component\Debug\Debug;
    use App\Decorator\RenderInBootstrapBg;
    use App\Decorator\RenderInBootstrapIcon;

    Debug::enable();
?>

</head>
<style>
    .navbar { z-index: 100001;}
    .bg {padding: 15px;}
</style>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand" href="#">e-commerce</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#Product">Product</a></li>
            <li><a href="#Declinaison">Déclinaison</a></li>
            <li><a href="#Users">User</a></li>
            <li><a href="#Panier">Panier</a></li>
        </ul>
    </div>
</nav>
<div class="container">


    <p id="Product">On créé deux produits</p>
    <?php
    $product1 = new \App\Product();
    $product1->setTitle("Nexus 5");
    $product1->setDescription("Le smartphone 5 pouces de Google");
    $product1->setMarque("Google / LG");
    $product1->setCouleur("noir");
    $product1->setPrixHT(250);
    $product1->setOs("Android");
    dump($product1);

    $product2 = new \App\Product();
    $product2->setTitle("Motorola Moto G");
    $product2->setDescription("Le smartphone d'entrée de gamme de Motorola");
    $product2->setMarque("Motorola");
    $product2->setCouleur("gris foncé");
    $product2->setPrixHT(150);
    $product2->setOs("Android");
    dump($product2);
    ?>


    <p>On créé deux images</p>
    <?php
    $image1 = new \App\Image();
    $image1->setUrl("http://www.google.com/nexus/new/images/nexus5/N5-android-bg.png");
    $image1->setProduct($product1);
    dump($image1);

    $image2 = new \App\Image();
    $image2->setUrl("http://www.google.com/nexus/new/images/nexus5/N5-grid2-l.jpg");
    $image2->setProduct($product1);
    dump($image2);
    ?>


    <p>On ajoute ces images au produit 1</p>
    <?php
    $product1->addImage($image1);
    $product1->addImage($image2);
    dump($product1);
    ?>


    <p id="Declinaison">On créé une déclinaison</p>
    <?php
    $declinaison1 = new \App\Declinaison();
    $declinaison1->setTitle("Nexus 5 blanc");
    $declinaison1->setMarque("Google / LG");
    $declinaison1->setCouleur("blanc");
    $declinaison1->setPoids("2");
    $declinaison1->setHauteur("20");
    $declinaison1->setProfondeur("10");
    $declinaison1->addImage($image2);
    dump($declinaison1);
    ?>


    <p id="Users">On affiche ses dimensions</p>
    <?php
    dump($declinaison1->dimensions());
    ?>


    <p>On créé un utilisateur et on teste ses méthodes</p>
    <?php
    $user1 = new \App\User();
    $user1->setFirstname("Don");
    $user1->setLastname("Draper");
    $user1->setVille("New York");
    $user1->setAge(35);
    dump($user1);
    dump($user1->inscription());
    dump($user1->inscriptionNewsletter());
    $user1->augmenterAge();
    dump($user1->getAge());
    dump($user1->majorite());
    ?>


    <p>On créé un administrateur</p>
    <?php
    $admin1 = new \App\Administrator();
    $admin1->setFirstname("Roger");
    $admin1->setLastname("Sterling");
    $admin1->setVille("New York");
    $admin1->setAge(50);
    dump($admin1);
    dump($admin1->administre($user1));
    ?>


    <p>On créé un commercial</p>
    <?php
    $salesman1 = new \App\Salesman();
    $salesman1->setFirstname("Pete");
    $salesman1->setLastname("Campbell");
    $salesman1->setVille("New York");
    $salesman1->setAge(25);
    dump($salesman1);
    ?>


    <p id="Panier">L'utilisateur 1 ajoute des produits dans son panier</p>
    <?php
    $panier1 = new \App\Panier();
    $panier1->setUser($user1);
    $panier1->addProduct($product1, 1);
    $panier1->addProduct($product2, 2);
    $panier1->prixCommandeHT();
    $panier1->prixCommandeTTC();
    dump($panier1);
    ?>


    <p>L'utilisateur 1 passe une commande</p>
    <?php
    $commande1 = new \App\Commande();
    $commande1->setUser($user1);
    $commande1->setId(1);
    $commande1->setReference("N500001");
    $date = new \DateTime("2015-08-22");
    $commande1->setDateLivraison($date);
    $commande1->addProduct($product1);
    $commande1->prixCommandeHT();
    $commande1->prixCommandeTTC();
    $commande1->etatLivraison();
    /*$commande1->isAvailable();*/
    dump($commande1);
    ?>


    <p>Le premier vendeur créé une promotion et une réduction</p>
    <?php
    /*
    $commercial = new \App\Commercials\CommercialFactory();

    $promotion1 = $salesman1->create($commercial, new \App\Commercials\Promotion());
    $promotion1->setNom("Promo 1");
    $promotion1->setDateActivation("2015-08-15");
    $promotion1->setDateFin("2015-08-31");
    $promotion1->setNatureReduc("fixe");
    $promotion1->setMontantReduc("30");
    dump($promotion1);

    $reduction1 = $salesman1->create($commercial, "reduction");
    $reduction1->setNom("Réduc 1");
    $reduction1->setDateActivation("2015-09-01");
    $reduction1->setDateFin("2015-09-30");
    $reduction1->setNatureReduc("pourcentage");
    $reduction1->setMontantReduc("5");
    dump($reduction1);
    */
    ?>
    <?php
    /*
    echo "<p>Test Factory "Export" : </p>";
    $darty = new \App\Export\DartyFactory();
    $productDarty1 = $darty->createProduct('Apple Watch', "A22EF", 14.00);
    dump($productDarty1->vente());

    $categorieDarty1 = $darty->createCategorie('Montres', "Montres connectées");
    dump($categorieDarty1->vente());
    */
    ?>
    <?php
    echo "<p>Test Factory Smartphone : </p>";

    $samsungfactory = new \App\Smartphone\SamsungFactory();
    $applefactory = new \App\Smartphone\AppleFactory();
    $sonyfactory = new \App\Smartphone\SonyFactory();

    $smartphone1 = $samsungfactory->createSmartphone("plastique", "black", 32, 220);
    $smartphone2 = $samsungfactory->createSmartphone("plastique", "white", 16, 160);
    $smartphone3 = $applefactory->createSmartphone("aluminium", "white", 16, 180);
    $smartphone4 = $applefactory->createSmartphone("aluminium", "gold", 32, 170);
    $smartphone5 = $sonyfactory->createSmartphone("plastique", "white", 16, 150);
    $smartphone6 = $sonyfactory->createSmartphone("plastique", "black", 32, 160);
    dump($smartphone1, $smartphone2, $smartphone3, $smartphone4, $smartphone5, $smartphone6);
    ?>


    <?php
    /*
    echo "<p>Test Decorator: </p>";
    $product1 = new \App\Decorator\Product("Apple Watch", "Description", 650);
    $product2 = new \App\Decorator\Product("Apple TV", "Description", 650);

    $json = new \App\Decorator\RenderInJson($product1);
    $xml = new \App\Decorator\RenderInXml($product2);
    $bootstrap = new RenderInBootstrapBg(new RenderInBootstrapBg($product1));

    dump($json->renderProduct());
    dump($xml->renderProduct());

    echo $bootstrap->bootstrap();
    Le cumul ne marche pas, à revoir
    */


    ?>

<?php

echo "<p>Test Adapter : </p>";
    $adapter1 = new \App\Social\Facebook\FbUserAdapter(new \App\Social\Facebook\FbUser());
    dump($adapter1->getImages());

    $adapter2 = new \App\Social\GooglePlus\GooglePlusUserAdapter(new \App\Social\GooglePlus\GooglePlusUser());
    dump($adapter2->getImages());
?>



<?php

echo "<p>Test Composite : </p>";

    /*On créé un dossier */
    $dossier1 = new \App\Composite\Dossier();
    $dossier1->setTitle("Folder1");
    $dossier1->setDescription("Mon premier dossier");
    $dossier1->setTaille(256);

    /* On créé 2 fichiers */
    $fichier1 = new \App\Composite\Fichier();
    $fichier1->setTitle("File1");
    $fichier1->setDescription("Mon premier fichier");
    $fichier1->setTaille(50);

    $fichier2 = new \App\Composite\Fichier();
    $fichier2->setTitle("File2");
    $fichier2->setDescription("Mon deuxième fichier");
    $fichier2->setTaille(75);

    // On ajoute ces deux fichiers dans le dossier
    $dossier1->ajouterFichier($fichier1);
    $dossier1->ajouterFichier($fichier2);

    dump($dossier1);
?>


























</div>


</body>
</html>


