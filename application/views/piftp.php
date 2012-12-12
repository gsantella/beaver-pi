<p>I chose to setup vsftp to serve as my FTP daemon.  This allows file access from <b>Filezilla</b> and <b>Notepad++</b> for easy file manipulation
on the <b>Pi</b>.  Initialization was easy, and I used <a href="http://www.instructables.com/id/Raspberry-Pi-Web-Server/step9/Install-an-FTP-server/">
this</a> webpage as a guide to do it.  I followed the configuration directions exactly as shown here to establish the server.</p>

<p>I edit this site from <b>Notepad++</b>.  It includes the <b>NppFTP plugin</b>, which uploads files to my <b>Pi</b> anytime I save them from the IDE.</p>

<p>I use <b>Filezilla</b> to upload images and other files to my <b>Pi</b>.  I noticed that each time I upload a new file to my webserver, I must change
the file permissions to make that file accessible from the web browser.  I can easily change file permissions from within <b>Filezilla</b>.</p> 