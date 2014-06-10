<?php
     $conn = libvirt_connect('qemu+ssh://cdpalibvirt@jupiter03.cdpa.tw/system', false);
	$domm =	libvirt_connect_get_hostname($conn);
	print_r($domm);
//	if(system('ssh cdpalibvirt@jupiter03.cdpa.nsysu.edu.tw'))
//	echo "QAQ!";
//	else
//	echo "1919!";
?>
