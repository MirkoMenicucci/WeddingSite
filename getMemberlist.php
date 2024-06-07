<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Cognome = $_POST['cognome'];
        $Nome = $_POST['nome'];

        // Esegui le operazioni desiderate con i dati, ad esempio salvarli in un database
        // ...

        // Invia una risposta
        echo "Dati ricevuti: Cognome - $Cognome, Nome - $Nome";
    } else {
        echo "Metodo di richiesta non valido.";
    }
?>
