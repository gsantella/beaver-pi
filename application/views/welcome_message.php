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

	<div id="body">
		<div id="usage">

		<div id="memory" class="sys_specs">
			<span class="titles">Mem Total:  </span><span id="mem_total">calculating ...</span><br />
			<span class="titles">Mem Free:   </span><span id="mem_free">calculating ...</span>
		</div>
	
		<div id="storage" class="sys_specs">
			<span class="titles">SD Card:  </span><span id="disk_total">calculating ...</span><br />
			<span class="titles">Free Mem:   </span><span id="disk_free">calculating ...</span>
		</div>
		
		<div id="cpu" class="sys_specs" style="border: none;">
			<span class="titles">CPU Idle:  </span><span id="cpu_idle">-</span>%<br />
			<span class="titles">Pi Temp: </span><span id="pi_cel">-</span>°C / <span id="pi_far">-</span>°F
		</div>
	
	</div>
			
			<p>Questions, comments, and discussion for this site and the <b>Raspberry Pi</b> can be found on <a href="http://www.reddit.com/r/raspberry_pi/comments/135q2a/i_got_a_server_on_my_pi_check_it_out/">
			<b>Reddit</b></a>.</p>
		<ul>
		
		<li><span id="piOverview" class="piLink" onClick="cbtoggle('#txtpiOverview')">Raspberry Pi Overview</span></li>
		<div id="txtpiOverview" style="display:none" class="piContent">
		<?php $this->load->view('overview'); ?></div>
		
		<li><span id="piConfig" class="piLink" onClick="cbtoggle('#txtpiConfig')">Pi Configuration</span></li>
		<div id="txtpiConfig" style="display:none" class="piContent">
		<?php $this->load->view('piconfig'); ?></div>
		
		<li><span id="piLamp" class="piLink" onClick="cbtoggle('#txtpiLamp')">Install LAMP</span></li>
		<div id="txtpiLamp" style="display:none" class="piContent">
		<?php $this->load->view('pilamp'); ?></div>
		
		<li><span id="piPermissions" class="piLink" onClick="cbtoggle('#txtpiPerm')">Folder Permissions</span></li>
		<div id="txtpiPerm" style="display:none" class="piContent">
		<?php $this->load->view('piperm'); ?></div>
		
		<li><span id="piVNC" class="piLink" onClick="cbtoggle('#txtpiVNC')">Install the VNC Daemon and have it start automatically on boot.</span></li>
		<div id="txtpiVNC" style="display:none" class="piContent">
		<?php $this->load->view('pivnc'); ?></div>
		
		<li><span id="piFTP" class="piLink" onClick="cbtoggle('#txtpiFTP')">Install FTP Daemon (Filezilla and Notepad++ Plugin - Access)</span></li>
		<div id="txtpiFTP" style="display:none" class="piContent">
		<?php $this->load->view('piftp'); ?></div>
		
		<li><span id="piDNS" class="piLink" onClick="cbtoggle('#txtpiDNS')">Router Configuration and DNS Routing</span></li>
		<div id="txtpiDNS" style="display:none" class="piContent">
		<?php $this->load->view('pidns'); ?></div>
		</ul>
		<br />
		<div class="pics">
		<span>
		<a href="/img/pi-server.jpg"><img src="/img/pi-server-thumb.jpg"></a>
		<a href="/img/pi-512.png"><img src="/img/pi-512-thumb.jpg"></a>
		<a href="/img/pi-both.jpg"><img src="/img/pi-both-thumb.jpg"></a>
		</span>
        </div>
		<p>Here is the <a href="/beaver-pi.zip">code</a> for the website as of 10:48pm EST on November 13, 2012</p>
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
