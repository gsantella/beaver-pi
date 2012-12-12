<!DOCTYPE html>
<html lang="en">
<head>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="/js/pi.js"></script>
	
	<meta charset="utf-8">
	<title>Chris Beaver's Raspberry Pi</title>

	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="icon" href="/img/favicon.ico" type="image/x-icon"> 
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon"> 
	

</head>
<body>

<div id="container">
	<h1><img src="/img/pi_logo.jpg">Welcome to Chris Beaver's Raspberry Pi</h1>

	<div id="usage">

		<div id="memory" class="sys_specs">
			<span class="titles">Mem Total:  </span><span id="mem_total">calculating ...</span><br />
			<span class="titles">Mem Free:   </span><span id="mem_free">calculating ...</span>
		</div>
	
		<div id="storage" class="sys_specs">
			<span class="titles">SD Card Total:  </span><span id="disk_total">calculating ...</span><br />
			<span class="titles">Free Storage:   </span><span id="disk_free">calculating ...</span>
		</div>
		
		<div id="cpu" class="sys_specs" style="border: none;">
			<span class="titles">CPU Idle:  </span><span id="cpu_idle">-</span>%
		</div>
	
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
