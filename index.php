<?php
     if($conn = libvirt_connect('qemu+ssh://cdpalibvirt@jupiter03.cdpa.tw/system', false))
	echo 'QAQ';
     else
	echo '1919';
     $doms = libvirt_list_domains($conn);
?>
