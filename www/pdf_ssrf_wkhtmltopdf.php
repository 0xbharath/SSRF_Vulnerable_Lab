<?php

echo '
<html>
<head>
<link href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLfLXmLeMSTt0jOXREfgvdp8IYWnE9_t49PpAiJNvwHTqnKkL4" rel="icon" type="image/x-icon"/>
</script>
<title>IndiShell SSRF Lab</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<STYLE>
body {
}
.side-pan {
   margin: 0;
   border:0px;
   
   width:200px;
   padding: 5px 23px;
   margin:0px;
   -webkit-border-radius: 0px;
   -moz-border-radius: 0px;
   border-radius: 0px;
   border-bottom: 1px solid black;
   color: white;
   font-size: 20px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: left;
   align:left;
   }
   div#left {
    width: 100%;
    height: 50px;
    float: left;
	}
div#right {
    margin-left: 20%;
    height: 50px;
	color: white;
    font-size: 20px;
    font-family: Georgia, serif;
	}
.main div {
  float: left;
  clear: none; 
	}
input {
border			: solid 2px ;
border-color		: black;
BACKGROUND-COLOR: #444444;
font: 8pt Verdana;
color: white;
}
submit {
BORDER:  buttonhighlight 2px outset;
BACKGROUND-COLOR: Black;
width: 30%;
color: #FFF;
}
#t input[type=\'submit\']{
	COLOR: White;
	border:none;
	BACKGROUND-COLOR: black;
}
#t input[type=\'submit\']:hover {
	
	BACKGROUND-COLOR: #ff9933;
	color: black;
	
}
tr {
BORDER: dashed 1px #333;
color: #FFF;
}
td {
BORDER: dashed 0px ;
}

table {
BORDER: dashed 2px #333;
BORDER-COLOR: #333333;
BACKGROUND-COLOR: #191919;;
color: #FFF;
}
textarea {
border			: dashed 2px #333;
BACKGROUND-COLOR: Black;
font: Fixedsys bold;
color: #999;
}
A:link {
border: 1px;
	COLOR: red; TEXT-DECORATION: none
}
A:visited {
	COLOR: red; TEXT-DECORATION: none
}
A:hover {
	color: White; TEXT-DECORATION: none
}
A:active {
	color: white; TEXT-DECORATION: none
}

</STYLE>
<script type="text/javascript">
<!--
    function lhook(id) {
       var e = document.getElementById(id);
       if(e.style.display == \'block\')
          e.style.display = \'none\';
       else
          e.style.display = \'block\';
    }
//-->
</script>

<table width="100%" cellspacing="0" cellpadding="0" class="tb1" >	
           </table>
       </table> ';


		echo '<div id="left"><div class="main"><table align=center  cellspacing="0" cellpadding="0" style="border-collapse: collapse;border:0px;">
		<tr>
		<form method=post action="index.php">
		<td align=right style="padding:0px; border:0px; margin:0px;">
				<input type=submit name=home value="Home" class="side-pan">
		</td>
		
				</form></tr></table></div></div>
				<div id="right"></div><div align=center>';	
				
				
echo '
		<table width="35%" style=" border:0px;background-color: #191919; opacity: 0.9; padding: 20px;" >
			<form method=post>
		<tr><td align=center  colspan="2"> 	Member Info  </td></tr>
       <tr>
	   <td align=right>Customer name : </td><td><input type=text name=handle> </td>
	   </tr>
		
		<tr><td align=center  colspan="2"> <input type=submit name=insert value="Generate >:D<">  </td></tr>
       </table> 
	   <br><br>
	   
'; 				

if(isset($_POST['insert']))
{				


$data=$_POST['handle'];

$html='<html><STYLE>
body {
	font-family: Tahoma;
}

div#right {
    margin-left: 20%;
    height: 50px;
	color: white;
    font-size: 20px;
    font-family: Georgia, serif;
	}
.main div {
  float: left;
  clear: none; 
	}

tr {
BORDER: solid 1px #333;
color: black;
}
td {
BORDER: dashed 0px ;
}
table {
BORDER: solid 2px #333;
BORDER-COLOR: #333333;

}
</STYLE>        
 <thead>
 <div id="left"><div class="main"><table align=center  cellspacing="0" cellpadding="0" style="border-collapse: collapse;border:2px;">
  <tr>
   <th colspan="3">Invoice #123456789</th>
   <th>14 January 2025
  </tr>
  <tr>
   <td colspan="2">
    <strong>Pay to:</strong><br>
    Acme Billing Co.<br>
    123 Main St.<br>
    Cityville, NA 12345
   </td>
   <td colspan="2">
    <strong>Customer:</strong><br>
    '.$data.'<br>
    321 Willow Way<br>
    Southeast Northwestershire, MA 54321
   </td>
  </tr>
 </thead>
 <tbody>
  <tr>
   <th>Name / Description</th>
   <th>Qty.</th>
   <th>@</th>
   <th>Cost</th>
  </tr>
  <tr>
   <td>Paperclips</td>
   <td>1000</td>
   <td>0.01</td>
   <td>10.00</td>
  </tr>
  <tr>
   <td>Staples (box)</td>
   <td>100</td>
   <td>1.00</td>
   <td>100.00</td>
  </tr>
 </tbody>
 <tfoot>
  <tr>
   <th colspan="3">Subtotal</th>
   <td> 110.00</td>
  </tr>
  <tr>
   <th colspan="2">Tax</th>
   <td> 8% </td>
   <td>8.80</td>
  </tr>
  <tr>
   <th colspan="3">Grand Total</th>
   <td>Rs. 118.80</td>
  </tr>
 </tfoot>
</table>
';

$tost='test';

$all=fopen('sample.html','w');
fwrite($all,$html);


//$path_pdf_converter='C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf.exe'; /*remove the comment if you want to use it on Windows machine*/
//passthru('"'.$path_pdf_converter.'" -T 0 -R 0 -B 0 -L 0 --orientation Portrait --page-size A4 sample.html output4.pdf'); /*remove the comment if you want to use it on Windows machine*/
 passthru('xvfb-run wkhtmltopdf -T 0 -R 0 -B 0 -L 0 --orientation Portrait --page-size A4 --quiet sample.html output4.pdf 2>&1'); //comment this line if you want to use code on Windows
 
 
 echo '<table width="35%" style=" border:0px;background-color: #191919; opacity: 0.8; padding: 20px;" >
			<form method=post>
		<tr><td align=center  colspan="2">Hello '.htmlentities($data).', please download the generated PDF. Click <a href="output4.pdf">Here</a></td></tr></table>';
}

?>


