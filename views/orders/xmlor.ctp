<?php
//pr($train);
    header ("content-type: text/xml");
    header('Content-Disposition: attachment; filename="downloaded.xml"');
    echo '<trains>';
    print_r($this->Xml->serialize($train));
    echo '</trains>';
?>
