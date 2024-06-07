<?php
    // Definisci le costanti per la connessione al database
    define('DB_NAME', 'dbs12964479');
    define('DB_USER', 'dbu4085536');
    define('DB_PASSWORD', 'EPlSsOP5kG1q3Qpv');
    define('DB_HOST', 'db5015907351.hosting-data.io');
    define('DB_CHARSET', 'utf8');
    define('DB_COLLATE', '');

    // Connessione al database
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Controlla la connessione
    if ($mysqli->connect_error) {
        die("Connessione fallita: " . $mysqli->connect_error);
    }

    // Imposta il charset
    $mysqli->set_charset(DB_CHARSET);

    // Esegui la query
    $query = "SELECT * FROM lista_partecipanti";
    $result = $mysqli->query($query);

    // Verifica se la query ha avuto successo
    if ($result) {
        $participants = [];
        while ($row = $result->fetch_assoc()) {
            $participants[] = $row;
        }
        // Restituisci i dati in formato JSON
        echo json_encode($participants);
    } else {
        echo json_encode(['error' => 'Errore nella query: ' . $mysqli->error]);
    }

    // Chiudi la connessione
    $mysqli->close();
?>
