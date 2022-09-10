<?php 

    define("WEB_URL","http://localhost:8001");

    // str_replace remplacer une chaine par une autre chaine
    // Pour le chargement d'une vue
    define("ROOT",str_replace("public","",$_SERVER['DOCUMENT_ROOT']));

    define("KEY_USER","user");

    define("ROLE_RP","ROLE_RP");

    define("ROLE_AC","ROLE_AC");

    define("ROLE_ETUDIANT","ROLE_ETUDIANT");

    define("ROLE_PROFESSEUR","ROLE_PROFESSEUR");
