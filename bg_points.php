<html>
<head>
<title> Music Cafe </title>
		<link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />

</head>
<body>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?PHP require_once("includes/header.php"); ?>

<table id="structure">
	<tr>
		<td id="navigation">
			<?php echo public_navigation($sel_subject, $sel_page); ?>
			<a href="/bg_points_diss.php">BG Points</a>
		</td>
<td id ="page">
		<div class="page-content"><div align="left">
<font size = "3px" color = "red"> <b>
This is the asiest points posting system ever to have been set up,<br />
There is no editing needed in your posts simply finish your tournament then copy the results straight from NJ's,<br />
i want you to copy everything from the start down to and including the line "STOP POINTS" then hit submit,<br />
if your not sure what you need follow my Example below.<br />
<br />
</b></font>
</font><br />


				<br /><br />
				<form method = "post" action = "points_processing1.php" >
				
				Player Points:<br /> 
				<textarea id="points" name="points" placeholder = "Nojoks's Tourney Bracket Tool Version 1.2.1.84
Tournament:  3/5 Backgammon 11.30am
Date:  01/18/2017
Day:  Wednesday
Scheduled Start:  11.30am PST
Actual Start:  19:31:18
Closed:  19:40:21
Host:  Waiter ()
Number of Players:  18

1st place:  UBG_Borntwice
1st place email:  davval@talktalk.net
2nd place:  UBG_CHARRM5
2nd place email:  snezhanagrozeva@gmail.com
3rd place:  pacofac
3rd place email:  

START POINTS
BEAUTIFULSTAR 5
chacal49 5
EU_DK_BHR 5
Litigolfer 5
MC_Vicky 5
MRC_Melisa_ 5
nanatravels 5
PR_Steele_Mag 5
RG_BOMMELY 5
TxFatDaddy03 5
UBG_BONITA 5
UBG_Imagdrider 5
victor54 5
Emily2017 10
merceaviles 10
pacofac 65
UBG_CHARRM5 95
UBG_Borntwice 125
STOP POINTS
"
				 rows="20" cols="80" required></textarea>
				<br /><br />
				<input type = "submit" name = "submit" value = "Post Results" > 
<br />
</form>
		</td>
		</td>
	</tr>
</table>

</body>
</html>