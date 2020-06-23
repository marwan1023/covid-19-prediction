
<html>
    <head><meta charset="utf-8" /></head>
    <body>
        <center><h1>Prediction of COVID-2019 rise and fall with an improved prediction model</h1>
            <b>Shreshth Tuli</b> (Department of CSE, IIT Delhi)<br>
            <b>Shikhar Tuli</b> (Department of EE, IIT Delhi)<br>
		<b>Ruchi Verma</b> (PBEL, Hyderabad)<br>
            <b>Rakesh Tuli</b> (DIC, UIET, Panjab University)<br>

            <a href='https://www.sciencedirect.com/science/article/pii/S254266052030055X/pdfft?md5=147a70a74c8beb9ab6bd3ceed351dd94&pid=1-s2.0-S254266052030055X-main.pdf'>See published paper in the <i>Internet of Things Journal</i> for more details.</a> <br>

            <i>The graphs are updated daily using the <a href='https://ourworldindata.org/coronavirus-source-data'>Our World in Data</a> dataset. Last updated 
<?php
$myfile = fopen("plots/lastupdated.txt", "r");
echo fgets($myfile);
fclose($myfile);
?>. </i><br>
         

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/World_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/World_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/India_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/India_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/United States_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/United States_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/United Kingdom_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/United Kingdom_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Brazil_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Brazil_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Italy_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Italy_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/France_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/France_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Germany_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Germany_total.html"></iframe>

<hr>

<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Russia_pred.html"></iframe>
<iframe width="700" height="500" frameborder="0" scrolling="no" src="plots/Russia_total.html"></iframe>

<hr>

</center>
    </body>
</html>
