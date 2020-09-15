<?php

$parametri = "drzava=Kina&glavniGrad=Peking&kontinent=Azija";
$akcija = "unesi";
$host = "localhost";
$port = 80;
$servis = "halidhajdarevic/xml/servisi/servis2.php";

$response = "";
$fp = fsockopen($host, $port);

//GET dio
if($akcija == "prikazi"){

    fputs($fp, "GET /{$servis} HTTP/1.1\r\n");
    fputs($fp, "Host: {$host}\r\n");
    fputs($fp, "Connection: close\r\n\r\n");

}else if($akcija == "prikaziPojedinacni"){

    fputs($fp, "GET /{$servis}?$parametri HTTP/1.1\r\n");
    fputs($fp, "Host: {$host}\r\n");
    fputs($fp, "Connection: close\r\n\r\n");

}else if($akcija == "unesi"){

    fputs($fp, "POST /{$servis}?$parametri HTTP/1.1\r\n");
    fputs($fp, "Host: {$host}\r\n");
    fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
    fputs($fp, "Content-length: " . strlen($parametri) . "\r\n");
    fputs($fp, "Connection: close\r\n\r\n");
    fputs($fp, $parametri);

}else if($akcija == "azuriraj"){

    fputs($fp, "PUT /{$servis}?$parametri HTTP/1.1\r\n");
    fputs($fp, "Host: {$host}\r\n");
    fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
    fputs($fp, "Content-length: " . strlen($parametri) . "\r\n");
    fputs($fp, "Connection: close\r\n\r\n");
    fputs($fp, $parametri);

}else if($akcija == "obrisi"){

    fputs($fp, "DELETE /{$servis}?$parametri HTTP/1.1\r\n");
    fputs($fp, "Host: {$host}\r\n");
    fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
    fputs($fp, "Content-length: " . strlen($parametri) . "\r\n");
    fputs($fp, "Connection: close\r\n\r\n");
    fputs($fp, $parametri);

}

while(!feof($fp)){

    $response .= fgets($fp);
}

fclose($fp);

$rezultat = explode("\r\n\r\n", $response);
$responseZaglavlje = explode("\r\n", $rezultat[0]);
$responseTijelo = $rezultat[1];
echo $responseTijelo;

?>