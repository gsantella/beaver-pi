<p>The best lesson I've learned so far while using <b>Linux</b> is that, <i>If something isn't working the way you think it should be, it's probably
a permissions issue.</i>  With that said, permissions are basically a set of rules belonging to every file and directory on your system.  They determine
who can have access to each file or directory, and also how much access they receive.</p>

<p>This is a learning experience for me, and I'm not a <b>Linux</b> expert; but I know enough to get around and I can figure out how to solve a problem
I encounter.  The <b>Pi</b> allows a user to experiment with file permissions without actually putting a complete system in danger.</p>

<p>I had to play around with the <b>/var/www</b> directory permissions and also each individual file's permissions to get the files accessible
where I wanted them.  This server has the <b>/var/www</b> owned by the user and group <b>www-data</b>.  I am editting this page right now
from Notepad++ on my Windows 7 laptop PC.  When I click save on the menubar uptop, it automatically loads the file to my <b>Pi</b> via FTP as user
<b>pi</b>.  I'm not sure how the <b>SD</b> card is going to handle the repeated updating, since I've read about how a <b>swap</b> partition can 
destroy the card.</p>

<p>Aside from that, I've also added my user <b>pi</b> to the <b>www-data</b> user group.</p>

<p>Currently I need to determine why I do not have the access for my <b>pi</b> user through <b>FTP</b> the same as I do in <b>SSH</b>.