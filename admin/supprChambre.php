<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Le Château de Milan - Administration</title>
    <link rel="icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head> 
  <body>
    <header>
      <nav class="menu-horizontal">
        <a href="#" onclick="ouvrirMenu()" class="btn-ouvrir"><img src="../img/menu.svg" alt="Menu"/></a>
        <a href="index.php" class="logo">Administration</a>
        <a href="article.php" class="liens">Articles</a>
        <a href="chambre.php" class="liens">Chambres</a>
        <a href="../index.php" class="liens">Retourner sur le site</a>
      </nav>
      <nav id="menu-vertical" class="menu-vertical">
        <a href="#" onclick="fermerMenu()" class="btn-fermer">&times;</a>
        <a href="index.php">Administration</a>
        <a href="article.php" class="liens">Articles</a>
        <a href="chambre.php" class="liens">Chambres</a>
        <a href="../index.php">Retourner sur le site</a>
      </nav>
    </header>
  <div id="contenu">
    <section>
      <p>
<?php
  require "../inc/config.php";
  try {
    $sql = "DELETE FROM Chambre WHERE id_chambre={$_GET['id']}";
    $conn->exec($sql);
    echo "Chambre supprimé avec succès !<br/>";
  }
  catch(PDOException $e) {
    echo "<b>Erreur :</b> " . $e->getMessage();
  }

  // suppression de l'image
  $image = realpath(dirname(getcwd())) . '/img/chambre/' . $_GET['id'] . '.jpg';
  if(file_exists($image)){
      unlink($image);
      echo "Image supprimée avec succès.<br/>";
  }
  else{
      echo "<b>Erreur :</b> Image introuvable.<br/>";
  }
?>
      </p>
    </section>
    <?php require "../inc/footer.php"; ?>
    </div>
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/script.js"></script>
    <script>setTimeout(function(){ location.href='index.php'; }, 2000);</script>
    <script defer src="../js/fontawesome-all.min.js"></script>
  </body>
</html>