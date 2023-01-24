<html>
<body bgcolor="lighblue">
<h1><center><u><b> DREAM TEAM</b></center></u></h1>
<?php
$name=["VIRAT KOHLI","MS DHONI(c)","DINESH KARTHIK","R ASWIN","S DHAWAN","AB DEVILLIERS","SACHIN TENDULKAR","SANJU V SAMSON","DEVADATH PADIKKAL","UMESH YADHAV","BUMRA"];
$role=["RIGHT-HAND-BATSMAN","WICKET KEEPER","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","SPIN BOWLER ","SPIN BOWLER","ALL ROUNDER","MEDIUM PACE BOWLER","BOWLER","ALL ROUNDER"];
echo "<u>PLAYER 11</u>";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>
<th>ROLE</th>";
 
for ($i=0;$i<11;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>

