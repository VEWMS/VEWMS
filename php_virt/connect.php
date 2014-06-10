<?php

class connect{

	var $conn = NULL;

	public function connect_service($url){
		$this->conn = libvirt_connect($url, false);
		if($this->conn == NULL)
			return $this->libvirt_get_last_error();
		else
			return $this->conn;
	}	

	//$conn = libvirt_connect('qemu+ssh://cdpalibvirt@jupiter03.cdpa.tw/system', false);
	//$doms = libvirt_connect_get_hostname($conn);
	//print_r($doms);

}

?>
