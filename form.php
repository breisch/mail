<?php

?>
<!doctype html>
<html>
    <head>
        <meta charset=utf-8>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Order</title>
        <link rel=stylesheet href="css/style.css">
        <link rel=author href="humans.txt">
        <script>
            
        function validateForm()
{
var antal=document.forms["detaljer"]["antal"].value;
if (antal===null || antal==="")
  {
  alert("Antal måste fyllas i.");
  return false;
  }
 var fornamn=document.forms["detaljer"]["fnamn"].value;
if (fornamn===null || fornamn==="")
  {
  alert("Förnamn måste fyllas i.");
  return false;
  }
var efternamn=document.forms["detaljer"]["enamn"].value;
if (efternamn===null || efternamn==="")
  {
  alert("Fill in your last name");
  return false;
  }
var email=document.forms["detaljer"]["email"].value;
var atpos=email.indexOf("@");
var dotpos=email.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
  {
  alert("Not a valid email adress");
  return false;
  }

var telefon=document.forms["detaljer"]["telefon"].value;
if (telefon===null || telefon==="")
  {
  alert("Phone must be filled in!");
  return false;
  }

}

        
        </script>
    </head>
    <body>
        <form name="detaljer" action="index.php" onsubmit="return validateForm();" 
              method="POST">
            <p>Ange önskad kaliber</p>
            <select name="kaliberCombo">
                <option value=".22">.22</option>
                <option value="9mm">9x19mm</option>
                <option value=".40">.40</option>
                <option value=".45">.45</option>
                <option value=".357">.357</option>
                </select>
            </br>
                <p>Declare number:</p>
                <input type="number" name="antal" min="100">
                <p>Name*:</p><input type="text" name="fnamn"><input type="text" name="enamn">
                <p>Email*:</p><input type="text" name="email">
<!--                <p>Verifikation av email:</p><input type="text" name="email2">-->
                <p>Adress:</p><input type="text" name="address">
                <p>Phone*:</p><input type="text" name="telefon">
                <br>
                <p>Add a comment</p>
                <textarea name="comment" rows="5" cols="50" maxlength="300">
                
                </textarea>
        <input type="submit" value="submit">
        <br><p>* required fields</p>
        
        </form>
        <script src="js/main.js"></script>
    </body>
</html>
