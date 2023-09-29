<?php
echo "Miasto: " . $_GET["Miasto"] . "<br>";
echo "Ulica: " . $_GET["Ulica"] . "<br>";
echo "Mieszkanie: " . $_GET["DomMieszkanie"] . "<br>";

echo "<br>" . "Rodzaj Chleba: " . $_GET["chleb"] . "<br>";

echo "<br>" . "Skladniki:" . "<br>";

if(!empty($_GET["kurczak"])) echo "- " . "paski z kurczaka" . "<br>";
if(!empty($_GET["wolowina"])) echo "- " . "wolowina" . "<br>";
if(!empty($_GET["ser"])) echo "- " . "ser" . "<br>";
if(!empty($_GET["salami"])) echo "- " . "salami" . "<br>";
if(!empty($_GET["jajo"])) echo "- " . "jajko" . "<br>";
if(!empty($_GET["szynka"])) echo "- " . "szynka" . "<br>";
if(!empty($_GET["serB"])) echo "- " . "ser mozzarella" . "<br>";
if(!empty($_GET["feta"])) echo "- " . "ser feta" . "<br>";

echo "<br>" . "Sosy i Dodatki:" . "<br>";

if(!empty($_GET["bbq"])) echo "- " . "sos bbq" . "<br>";
if(!empty($_GET["keczup"])) echo "- " . "keczup" . "<br>";
if(!empty($_GET["sosOstry"])) echo "- " . "sos ostry" . "<br>";
if(!empty($_GET["slodkaCebula"])) echo "- " . "slodka cebulka" . "<br>";
if(!empty($_GET["wieloziarnista"])) echo "- " . "mieszanka wieloziarnista" . "<br>";
if(!empty($_GET["chili"])) echo "- " . "platki chili" . "<br>";

echo "<br>" . "Picie: <br> - " . $_GET["picie"] . "<br><br>";

?>