
<h1>Creating Drivers</h1>

<h2>Driver Directory and File Structure</h2>

<p>Sample driver directory and file structure layout:</p>

<ul>
	<li>/application/libraries/Driver_name
		<ul>
			<li>Driver_name.php</li>
			<li>drivers
				<ul>
					<li>Driver_name_subclass_1.php</li>
					<li>Driver_name_subclass_2.php</li>
					<li>Driver_name_subclass_3.php</li>
				</ul>
			</li>
		</ul>
	</li>
</ul>

<p class="important"><strong>NOTE:</strong> In order to maintain compatibility on case-sensitive file systems, the <samp>Driver_name</samp> directory must be <var>ucfirst()</var></p>

<!-- @todo write this! -->
