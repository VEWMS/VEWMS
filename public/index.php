<html>
<head>

<script type="text/javascript" src="jquery-1.11.1.min.js"></script>

<script type="text/JavaScript">
$(document).ready(function() {
		//	$( "#myframe" ).load( "../pic/coverpic03.png" );
		////////////////////////
		$("#main_index").click(function(){
			$( "#myframe" ).load();
			});
		$("#vm_link").click(function(){
			
			$( "#myframe" ).load( "VM_Manager/VM_list.php" );
			});
		///////////////////////
		$("#ovs_link").click(function(){
			$( "#myframe" ).load( "OVS_Manager/OVS_main_page.php" );
			});
		/////////////////////
		//friend
		$("#friend").click(function(){
			$( "#myframe" ).load( "link.php" );
			});
		//////////////////////

		});
</script>

</head>
<style type="text/css">
body {
color: black;
       background-color: #FFFFFF }

#title{
width:250px;
height:180px;
position:absolute;
top:30;
left:30;
color:yellow;
}

#main_index{
width:500px;
height:500px;
position:absolute;
top:0;
left:0;
     background-image: url("pic/coverpic01.png");
}
/*
#b{
width:100px;
height:100px;
position:absolute;
top:145;
left:70;
background-color: rgba(0,0,0,.5);
}
#c{
width:165px;
height:165px;
position:absolute;
top:20;
left:20;
background-color: rgba(0,0,0,.5);
}
#d{
width:40px;
height:40px;
position:absolute;
top:230;
left:190;
background-color: rgba(0,0,0,.5);
}
 */
/*
#tool{
width:75%;
height:28px;
position:absolute;
top:40px;
right:0px;
background-color: rgba(255,255,255,.5);
border-radius:5px 0px 0px 5px;
}*/
/*#btnSet{
left:0px;
bottom:0px;
}
 */
#myframe{
width:500px;
height:500px;
position:absolute;
top:10%;
left:35%;
     background-image: url("pic/coverpic03.png");
}

#footer {
width:100%;
height:20px;
position:absolute;
bottom:0;
left:0;
background:#8000FA;
}
/*.btn{
width:160px;
margin-left: 5px;
background:#611BA3;
border-radius:0px 10px 0px 10px

}*/
#VM_link {
width:200px;
height:200px;
position:absolute;
bottom:50px;
left:30%;
     background-image: url("pic/bee01.png");
}
#ovs_link {
width:200px;
height:200px;
position:absolute;
bottom:50px;
left:45%;
     background-image: url("pic/bee0202.png");
}
#friend {
width:200px;
height:200px;
position:absolute;
bottom:50px;
left:60%;
     background-image: url("pic/bee03.png");
}

</style>
<body>


<div id ="main_index">
</div>
<!--
<div id = "title">
<font size="5">Virtual Equip</font></br></br>
<font size="5">Webpage</font></br></br>
<font size="5">Management System</font></br>
</div>
-->
<div id = "tool">

<div class="btn" id="vm_link"><font color=white>虛擬機器管理介面</font></div>
<div class="btn" id="ovs_link"><font color=white>虛擬交換器管理介面</font></div>
<div class="btn" id="friend"><font color=white>友善連結</font></div>
</div>

<div id = "myframe">

</div>

</div>
</body>
</html>

