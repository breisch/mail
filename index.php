<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
$kaliber=$_POST['kaliberCombo'];
$antal = $_POST['antal'];
$fornamn = $_POST['fnamn'];
$efternamn = $_POST['enamn'];
$mail = $_POST['email'];
$address = $_POST['address'];
$telefon = $_POST['telefon'];
$kommentar = $_POST['comment'];        
// Data för mailet
        
$sender = "Fredde";
$sendername = "nordicbullet@no-reply";
$recipient = "gbreisch@hotmail.com";
$recipientname = "nordicbullet";
$subject = "Bestallning!";
$message = "Bestallning \n
$fornamn $efternamn har beställt    
\n'$antal'st $kaliber \n
Email: $mail\n
Telefon: $telefon\n
Kommentar som gavs av kund: $kommentar";
 
// Generera datum och mailets id
$date = date(DATE_RFC2822);
$mid = "<" . sha1(microtime()) . "@" . $_SERVER['HTTP_HOST'] . ">";
 
// Ställ in rätt kodningstyp
mb_internal_encoding("UTF-8");
 
// Rätt kodning för avsändare och mottagares namn
$sendername = mb_encode_mimeheader($sendername);
$recipientname = mb_encode_mimeheader($recipientname);
 
// Sätt headers
$headers =<<<EOT
From: $sendername <$sender>
Date: $date
Message-ID: $mid
MIME-Version: 1.0 
Content-Type: text/plain; charset="UTF-8"
EOT;
 
// Skicka mail
$status = mb_send_mail("$recipientname <$recipient>", $subject, $message, $headers, "-f$sender");
if(!$status) {
        echo "Beställningen kunde inte skickas.";
}
else {
        echo "Beställningen är skickad! Vi återkommer snarast.";
}?>
    </body>
</html>
