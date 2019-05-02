<?php
$xml= new DOMDocument();
$xml->load("test1.xml", LIBXML_NOBLANKS); // Or load if filename required
if (!$xml->schemaValidate("test.xsd")) // Or schemaValidateSource if string used.
{
  echo "Vai! Vai! Vai!";
} else {
echo "Is's OK!";    
}
        ?>

