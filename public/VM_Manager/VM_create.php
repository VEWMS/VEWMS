<html>
 <style type="text/css">
  </style>
   <body>
    <center>
	
	請輸入機器名稱 : <input type="text" name="machine_name">
	請輸入需要的CPU上限 (上限為2) :
		<select name=”cpu”>
     		 <opction Value=”1”>1</opction>
		 <opction Value=”2”>2</opction>
		 <opction Value=”4”>4</opction>
    		</select>
	請輸入記憶體大小 (M) :
		<select name=”memory”>
     		 <opction Value=”128”>128</opction>
		 <opction Value=”512”>512</opction>
    		</select>
	請輸入配置硬碟大小 (G) :
		<select name=”size”>
     		 <opction Value=”128”>128</opction>
		 <opction Value=”256”>256</opction>
    		</select>	
	請輸入要載入的開機光碟 :
		<select name=”os”>
     		 <opction Value=”ubuntu”>Ubuntu 12.04</opction>
		 <opction Value=”gentoo”>Gentoo-install</opction>
    		</select>

	<input type="submit" name="button" value ="送出">

    <center>
   </body>
</html>
