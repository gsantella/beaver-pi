<?php $mem = shell_exec(" free | grep Mem | mawk '{ print \$2 }' ");
	  $disk = shell_exec(" df | grep rootfs | mawk '{ print \$2 }' ");
			
		echo json_encode( array("memory"=>$mem, "disk"=>$disk) );
?>
