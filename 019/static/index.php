<?php

require __DIR__ ."/Tevas.php";
require __DIR__ ."/Vaikas.php";

echo "Is vaiko pizicijos ka skrolina vaikas: <br>";
Vaikas::kaSkrolinaVaikas();

echo "Is vaiko pizicijos ka skrolina tevukas: <br>";
Vaikas::kaSkrolinaTevukas();

echo "Is tevuko pizicijos ka skrolina tevukas: <br>";
Tevas::kaSkrolinaTevukas();


/* 
Is vaiko pizicijos ka skrolina vaikas:
Skrolinu TikTok
Is vaiko pizicijos ka skrolina tevukas:
Skrolinu Facebook
Skrolinu TikTok
Is tevuko pizicijos ka skrolina tevukas:
Skrolinu Facebook
Skrolinu Facebook
*/