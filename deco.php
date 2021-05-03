<?php

function deconnexionSession()
{
    session_start();
    unset($_SESSION["nom_user"]);
    session_destroy();
    header("location: index.php");
}
deconnexionSession();
