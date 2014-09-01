<html>
 <style type="text/css">
  </style>
   <body>
    <center>
	
	請輸入機器名稱 : <input type="text" name="machine_name" value="testVM5"></br>
	請輸入需要的CPU上限 :
		<select name="cpu">
     		 <option value="1">1</option></br>
		 <option Value="2">2</option></br>
		 <option Value="4">4</option></br>
    		</select></br>
	請輸入記憶體大小 (M) :
		<select name="memory">
     		 <option Value="128">128</option>
		 <option Value="512">512</option>
    		</select></br>
	請輸入配置硬碟大小 (G) :
		<select name="size"></br>
     		 <option Value=:128">128</option>
		 <option Value="256">256</option>
    		</select></br>	
	請輸入要載入的開機光碟 :
		<select name="System"></br>
     		 <option Value="ubuntu">Ubuntu 12.04</option>
		 <option Value="gentoo">Gentoo-install</option>
    		</select></br>

	<input type="submit" name="button" value ="送出">

    </center>
   </body>
</html>
