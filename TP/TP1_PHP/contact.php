<?php
    $titre="Contact";
    require_once 'header.php';
?>
<body>
    <form action ="traitement_contact.php" method="get">
        Prenom :<input type="text" name="prenom"><br>
        Nom :<input type="text" name="nom"><br>
        Email :<input type="email" name="email"><br>
        Sujet :<input type="text" name="sujet"><br>
        Message :<input type="textarea" name="message"><br>
        En validant ce formulaire, vous acceptez d'être contacté :<input type="checkbox" name="condition"><br>
        <input type="submit">
</body>