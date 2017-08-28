
<h1>Installation Instructions</h1>

<p>CodeIgniter is installed in four steps:</p>

<ol>
<li>Unzip the package.</li>
<li>Upload the CodeIgniter folders and files to your server.  Normally the index.php file will be at your root.</li>
<li>Open the <dfn>application/config/config.php</dfn> file with a text editor and set your base URL.  If you intend to use encryption or sessions, set your encryption key.</li>
<li>If you intend to use a database, open the <dfn>application/config/database.php</dfn> file with a text editor and set your database settings.</li>
</ol>

<p>If you wish to increase security by hiding the location of your CodeIgniter files you can rename the <dfn>system</dfn> and <dfn>application</dfn> folders
to something more private.  If you do rename them, you must open your main <kbd>index.php</kbd> file and set the <samp>$system_folder</samp> and <samp>$application_folder</samp>
variables at the top of the file with the new name you've chosen.</p>

<p>For the best security, both the <dfn>system</dfn> and any <dfn>application</dfn> folders should be placed above web root so that they are not directly accessible via a browser.  By default, .htaccess files are included in each folder to help prevent direct access, but it is best to remove them from public access entirely in case the web server configuration changes or doesn't abide by the .htaccess.</p>

<p>After moving them, open your main <kdb>index.php</kbd> file and set the <samp>$system_folder</samp> and <samp>$application_folder</samp> variables, preferably with a full path, e.g. '<dfn>/www/MyUser/system</dfn>'.</p>

<p>
    One additional measure to take in production environments is to disable
    PHP error reporting and any other development-only functionality. In CodeIgniter,
    this can be done by setting the <kbd>ENVIRONMENT</kbd> constant, which is
    more fully described on the <a href="../general/security.html">security page</a>.
</p>

<p>That's it!</p>

<p>If you're new to CodeIgniter, please read the <a href="../overview/getting_started.html">Getting Started</a> section of the User Guide to begin learning how
to build dynamic PHP applications. Enjoy!</p>

