<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<script type="text/JavaScript">

$(document).ready(function() {
	var bg_color;
        $('table, tr, td').hover(function(){
		/////light bar
	});

});


</script>

</head>
<style type="text/css">
table,th,td
{
border:1px solid black;
border-collapse:collapse;
}
</style>
<body>
<center>
<div>
VM List
</div>
<div>
Hostname:JupiterTest.cdpa.tw
</div>
<table width="500">
<tr>
  <td>機器名稱</td>
  <td>狀態</td> 
  <td>操作</td>
</tr>
<tr class="VM">
  <td>testVM1</td>
  <td class="stat">up</td> 
  <td><button class="btn">shutdown</button></td>
</tr>
<tr class="VM">
  <td>testVM2</td>
  <td class="stat">down</td>
  <td><button class="btn">start</button></td>
</tr>
<tr class="VM">
  <td>testVM3</td>
  <td class="stat">up</td>
  <td><button class="btn">shutdown</button></td>
</tr>
<tr class="VM">
  <td>testVM4</td>
  <td class="stat">up</td>
  <td><button class="btn">shutdown</button></td>
</tr>
<tr class="VM">
  <td>testVM5</td>
  <td class="stat">down</td>
  <td><button class="btn">start</button></td>
</tr>

</table>
</center>
</body>

</html>
