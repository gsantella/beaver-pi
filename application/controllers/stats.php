<?php $mem = shell_exec(" free | grep Mem | mawk '{ print \$4 }' ");
	  $cpu = shell_exec(" vmstat | grep 0 | mawk '{ print \$15 }' ");
	  $disk = shell_exec(" df | grep rootfs | mawk ' { print \$4 }' ");
	  $temperature = shell_exec(" cat /sys/class/thermal/thermal_zone0/temp ")/1000;
			
	echo json_encode( array("memory"=>$mem, "cpu"=>$cpu, "disk"=>$disk, "temperature"=>$temperature) );
?>
