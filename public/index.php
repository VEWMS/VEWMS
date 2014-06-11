<html>
<head>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<script type="text/JavaScript">
$(document).ready(function() {
	$( "#myframe" ).load( "welcom.php" );
////////////////////////
//VS
///////////////////////
	$("#ovs_link").click(function(){
		$( "#myframe" ).load( "test.html" );
	});
/////////////////////
//friend
//////////////////////

});
</script>

</head>
<style type="text/css">
body {
    color: purple;
    background-color: #C991FF }

#title{
width:250px;
height:180px;
position:absolute;
top:30;
left:30;
color:yellow;
}

#main_index{
width:85px;
height:85px;
position:absolute;
top:90;
left:120;
background-color: rgba(0,0,0,.5);
}
#b{
width:60px;
height:60px;
position:absolute;
top:130;
left:90;
background-color: rgba(0,0,0,.5);
}
#c{
width:140px;
height:140px;
position:absolute;
top:20;
left:20;
background-color: rgba(0,0,0,.5);
}


#tool{
width:75%;
height:28px;
position:absolute;
top:40px;
right:0px;
background-color: rgba(255,255,255,.5);
border-radius:5px 0px 0px 5px;
}
#btnSet{
left:10px;
}

#myframe{
width:80%;
height:80%;
position:absolute;
top:100px;
right:0;
background-color: rgba(255,255,255,.5);
border-radius:10px 0px 0px 10px;
}

#footer {
width:100%;
height:50px;
position:absolute;
bottom:0;
left:0;
background:#8000FA;
}
.btn{
width:160px;
margin-left: 5px;
background:#611BA3;
border-radius:0px 10px 0px 10px

}
</style>
<body>


<div id ="main_index">
</div>
<div id ="b">
</div>
<div id ="c">
</div>
<div id = "title">
<font size="5">Virtual Equipment</font></br></br>
<font size="5">Webpage</font></br></br>
<font size="5">Management System</font></br>
</div>
<div id = "tool">
<div name="btnSet">   
	<button class="btn" id="vm_link"><font color=white>虛擬機器管理介面</font></button>
	<button class="btn" id="ovs_link"><font color=white>虛擬交換器管理介面</font></button>
	<button class="btn" id="friend"><font color=white>友善連結</font></button>
</div>
</div>
<div id = "myframe">

</div>
<div id="footer">
<center>維護人員:White19</center>
<center>國立中山大學 CDPA 宿舍米蟲</center>

</div>
</body>
</html>

