<?php
echo "<h1>Difference between single and double quotes,</h1>";
echo <<<tekst
<br>The difference between the single and the double quotes in PHP is that the single quote is </br>
<br>literally what you type in between the two single quotes (that is what is will show you).</br>
<br>The double quot is interpreted so it will not show you exactly what you type in between </br>
<br>the quotes. For example if you have $ name= Sanne and you type in echo I'm, $ name and you use </br>
<br>the single quotes, then what will happen is you'll see I'm, $ name because ' shows everything literally.</br>
<br>But if you use the double quotes you'll see I'm, Sanne because it will set $ name into the name Sanne.</br>
tekst;



?>