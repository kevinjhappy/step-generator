<html>
<head>
<style type="text/css">

	
			#rounded-corner
			{
				font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
				font-size: 12px;
				
				
				text-align: left;
				border-collapse: collapse;
			}
			#rounded-corner thead th.rounded-company
			{
				background: #b9c9fe url('table-images/left.png') left -1px no-repeat;
			}
			#rounded-corner thead th.rounded-q4
			{
				background: #b9c9fe url('table-images/right.png') right -1px no-repeat;
			}
			#rounded-corner th
			{
				padding: 8px;
				font-weight: normal;
				font-size: 13px;
				color: #039;
				background: #b9c9fe;
			}
			#rounded-corner td
			{
				padding: 8px;
				background: #e8edff;
				border-top: 1px solid #fff;
				color: #669;
			}
			#rounded-corner tfoot td.rounded-foot-left
			{
				background: #e8edff url('table-images/botleft.png') left bottom no-repeat;
			}
			#rounded-corner tfoot td.rounded-foot-right
			{
				background: #e8edff url('table-images/botright.png') right bottom no-repeat;
			}
			
.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}

.ds_tbl {
	background-color: #FFF;
}

.ds_head {
	background-color: #333;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 2px;
}

.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}

.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	padding: 5px;
	cursor: pointer;
}

.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */
</style>

 <table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
        <tr><td id="ds_calclass">
        </td></tr>
 </table>

<title>Step Generator</title>

<!-- <link rel="stylesheet" href="style.css" type="text/css"> -->

</head>


<body bgcolor="white" >
<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
        <tr><td id="ds_calclass">
        </td></tr>
     </table>
 

<form action = "step.php" method ="POST">
    <div align="center">
	
<table id="rounded-corner">
	<thead style="width:600">
		<tr style="text-align:center;line-height:1;">
			
			<TH colspan="2" scope="col" class="rounded-q1"></TH>
			
		</tr>
    </thead>
            
    <tbody>
		<tr style="text-align:center">
            <TH colspan="2" scope="col" class="rounded-q1">
				<b>Step Generator</b>
			</TH>
		</tr>

		<tr>
			<td> 
				<p>Beats number to generate: </p>
			</td>
			<td>
				<input name="nbeat" type="int" maxlength=3  value=''/>
			</td>
		</tr>
		
		
		<tr>
			<td> 
				<p>Stream speed: </p>
			</td>
			<td >
				<SELECT name="galore" >
				<option value=16>16th
				<option value=24>24th
				<option value=32>32th
				<option value=4>4th
				<option value=8>8th
				<option value=12>12th

				</SELECT>
			</td>
		</tr>
		
		<tr>
			<td> 
				<p>First arrow of the stream: </p>
			</td>
			<td >
				<SELECT name="current" >
				<option value='0001'>Right
				<option value='0010'>Up
				<option value='0100'>Down
				<option value='1000'>Left
				</SELECT>
			</td>
		</tr>
		
		<tr>
			<td> 
				<p>Foot on the first arrow: </p>
			</td>
			<td >
				<SELECT name="foot" >
				<option value='d'>Right
				<option value='g'>Left
				</SELECT>
			</td>
		</tr>
	</tbody>
	
	<tfoot>
		
		<tr>
			<td colspan="2" align="center" >
			<input type="hidden" name="send" value="1" >
			
			<input name ="Envoyer" type="submit" value="Generate stepchart" />
			
			</td>
			
        </tr>
   	</tfoot>
</table>
</div>
</form>
