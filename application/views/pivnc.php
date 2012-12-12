<p>By installing a <b>VNC daemon</b>, one can access the graphical desktop of their <b>Raspberry Pi</b> from a remote computer.  Installation
is simple with a command from the shell, and then one can write a <b>Bash script</b> to automatically start the server on boot.</p>

<p>The setup is thoroughly documented on <a href="http://elinux.org/RPi_VNC_Server">this</a> website, which is the reference I used
to get my <b>Pi's VNC Server</b> up and running.  Another great resource I used for seeing this setup and client software to access the server
can be found <a href="http://myraspberrypiexperience.blogspot.com/p/setting-up-vnc.html">here</a>.</p>

<p>When I installed the script to run the server, I had difficulty getting the server to load.  I installed the software from my laptop
over <b>SSH</b>, and then I created the script to autoload it.  Make sure you make the script executable as detailed in the instructions, and also
after the first boot loading the server, I was required to establish a password again eventhough I did after manually loading it.  I don't think 
it required me to do it after loading the <b>OS</b> on another <b>SD card</b>, but I believe I may have initialized the boot script to run the server under
another user name (<i>root</i>) the first time around.  I now make note to not use the <i>root</i> account, and stay with <i>pi</i>.</p>