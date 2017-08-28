
<h1>Running via the CLI</h1>

<p>
	As well as calling an applications <a href="./controllers.html">Controllers</a> via the URL in a browser they can also be loaded via the command-line interface (CLI).
</p>


<ul>
<li><a href="#what">What is the CLI?</a></li>
<li><a href="#why">Why use this method?</a></li>
<li><a href="#how">How does it work?</a></li>
</ul>


<a name="what"></a>
<h2>What is the CLI?</h2>

<p><dfn>The command-line interface is a text-based method of interacting with computers.</dfn> For more information, check the <a href="http://en.wikipedia.org/wiki/Command-line_interface">Wikipedia article</a>.</p>

<a name="why"></a>

<h2>Why run via the command-line?</h2>

<p>
	There are many reasons for running CodeIgniter from the command-line, but they are not always obvious.</p>

<ul>
	<li>Run your cron-jobs without needing to use wget or curl</li>
	<li>Make your cron-jobs inaccessible from being loaded in the URL by checking for <kbd>$this->input->is_cli_request()</kbd></li>
	<li>Make interactive "tasks" that can do things like set permissions, prune cache folders, run backups, etc.</li>
	<li>Integrate with other applications in other languages. For example, a random C++ script could call one command and run code in your models!</li>
</ul>

<a name="how"></a>
<h2>Let's try it:&nbsp; Hello World!</h2>

<p>Let's create a simple controller so you can see it in action. Using your text editor, create a file called <dfn>tools.php</dfn>, and put the following code in it:</p>

<textarea class="textarea" style="width:100%" cols="50" rows="10">
&lt;?php
class Tools extends CI_Controller {

	public function message($to = 'World')
	{
		echo "Hello {$to}!".PHP_EOL;
	}
}
?&gt;
</textarea>

<p>Then save the file to your <dfn>application/controllers/</dfn> folder.</p>

<p>Now normally you would visit the your site using a URL similar to this:</p>

<code>example.com/index.php/<var>tools</var>/<var>message</var>/<var>to</var></code>

<p>Instead, we are going to open Terminal in Mac/Lunix or go to Run > "cmd" in Windows and navigate to our CodeIgniter project.</p>

<blockquote>
	$ cd /path/to/project;<br/>
	$ php index.php tools message
</blockquote>

<p>If you did it right, you should see <samp>Hello World!</samp>.</p>

<blockquote>
	$ php index.php tools message "John Smith"
</blockquote>

<p>Here we are passing it a argument in the same way that URL parameters work. "John Smith" is passed as a argument and output is: <samp>Hello John Smith!</samp>.</p>

<h2>That's it!</h2>

<p>That, in a nutshell, is all there is to know about controllers on the command line. Remember that this is just a normal controller, so routing and _remap works fine.</p>


