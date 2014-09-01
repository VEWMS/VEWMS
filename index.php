<?php
//     $conn1 = libvirt_connect('qemu+ssh://cdpalibvirt@jupiter03.cdpa.tw/system', false);
//	$domm1 =	libvirt_connect_get_hostname($conn1);
//	print_r($domm1);

     $conn = libvirt_connect('qemu+ssh://cdpalibvirt@jupiter.cdpa.tw/system', false);
        $domm = libvirt_connect_get_hostname($conn);
        print_r($domm);
	if(system('ssh cdpalibvirt@jupiter03.cdpa.nsysu.edu.tw'))
	echo "QAQ!";
	else
	echo "1919!";
?>
