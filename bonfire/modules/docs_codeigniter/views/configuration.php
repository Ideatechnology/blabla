
<h1>Database Configuration</h1>

<p>CodeIgniter has a config file that lets you store your database connection values (username, password, database name, etc.).
The config file is located at <samp>application/config/database.php</samp>. You can also set database connection values for specific <a href="../libraries/config.html">environments</a> by placing <strong>database.php</strong> it the respective environment config folder.</p>

<p>The config settings are stored in a multi-dimensional array with this prototype:</p>

<code>$db['default']['hostname'] = "localhost";<br />
$db['default']['username'] = "root";<br />
$db['default']['password'] = "";<br />
$db['default']['database'] = "database_name";<br />
$db['default']['dbdriver'] = "mysql";<br />
$db['default']['dbprefix'] = "";<br />
$db['default']['pconnect'] = TRUE;<br />
$db['default']['db_debug'] = FALSE;<br />
$db['default']['cache_on'] = FALSE;<br />
$db['default']['cachedir'] =  &quot;&quot;;<br />
$db['default']['char_set'] = "utf8";<br />
$db['default']['dbcollat'] = "utf8_general_ci";<br />
$db['default']['swap_pre'] = "";<br />
$db['default']['autoinit'] = TRUE;<br />
$db['default']['stricton'] = FALSE;</code>

<p>The reason we use a multi-dimensional array rather than a more simple one is to permit you to optionally store
multiple sets of connection values.  If, for example,  you run multiple environments (development, production, test, etc.)
under a single installation, you can set up a connection group for each, then switch between groups as needed.
For example, to set up a "test" environment you would do this:</p>

<code>$db['test']['hostname'] = "localhost";<br />
$db['test']['username'] = "root";<br />
$db['test']['password'] = "";<br />
$db['test']['database'] = "database_name";<br />
$db['test']['dbdriver'] = "mysql";<br />
$db['test']['dbprefix'] = "";<br />
$db['test']['pconnect'] = TRUE;<br />
$db['test']['db_debug'] = FALSE;<br />
$db['test']['cache_on'] = FALSE;<br />
$db['test']['cachedir'] =  &quot;&quot;;<br />
$db['test']['char_set'] = "utf8";<br />
$db['test']['dbcollat'] = "utf8_general_ci";<br />
$db['test']['swap_pre'] = "";<br />
$db['test']['autoinit'] = TRUE;<br />
$db['test']['stricton'] = FALSE;</code>


<p>Then, to globally tell the system to use that group you would set this variable located in the config file:</p>

<code>$active_group = "test";</code>

<p>Note: The name "test" is arbitrary.  It can be anything you want. By default we've used the word "default"
for the primary connection, but it too can be renamed to something more relevant to your project.</p>

<h3>Active Record</h3>

<p>The <a href="active_record.html">Active Record Class</a> is globally enabled or disabled by setting the $active_record variable in the database configuration file to TRUE/FALSE (boolean). If you are not using the active record class, setting it to FALSE will utilize fewer resources when the database classes are initialized.</p>

<code>$active_record = TRUE;</code>

<p class="important"><strong>Note:</strong> that some CodeIgniter classes such as Sessions require Active Records be enabled to access certain functionality.</p>

<h3>Explanation of Values:</h3>

<ul>
<li><strong>hostname</strong> - The hostname of your database server. Often this is "localhost".</li>
<li><strong>username</strong> - The username used to connect to the database.</li>
<li><strong>password</strong> - The password used to connect to the database.</li>
<li><strong>database</strong> - The name of the database you want to connect to.</li>
<li><strong>dbdriver</strong> - The database type. ie: mysql, postgres, odbc, etc. Must be specified in lower case.</li>
<li><strong>dbprefix</strong> - An optional table prefix which will added to the table name when running <a href="active_record.html">Active Record</a> queries.  This permits multiple CodeIgniter installations to share one database.</li>
<li><strong>pconnect</strong> - TRUE/FALSE (boolean) - Whether to use a persistent connection.</li>
<li><strong>db_debug</strong> - TRUE/FALSE (boolean) - Whether database errors should be displayed.</li>
<li><strong>cache_on</strong> - TRUE/FALSE (boolean) - Whether database query caching is enabled, see also <a href="caching.html">Database Caching Class</a>.</li>
<li><strong>cachedir</strong> - The absolute server path to your database query cache directory.</li>
<li><strong>char_set</strong> - The character set used in communicating with the database.</li>
<li><strong>dbcollat</strong> - The character collation used in communicating with the database. <p class="important"><strong>Note:</strong> For MySQL and MySQLi databases, this setting is only used as a backup if your server is running PHP &lt; 5.2.3 or MySQL &lt; 5.0.7 (and in table creation queries made with DB Forge). There is an incompatibility in PHP with mysql_real_escape_string() which can make your site vulnerable to SQL injection if you are using a multi-byte character set and are running versions lower than these. Sites using Latin-1 or UTF-8 database character set and collation are unaffected.</p></li>
<li><strong>swap_pre</strong> - A default table prefix that should be swapped with <var>dbprefix</var>. This is useful for distributed applications where you might run manually written queries, and need the prefix to still be customizable by the end user.</li>
<li><strong>autoinit</strong> - Whether or not to automatically connect to the database when the library loads. If set to false, the connection will take place prior to executing the first query.</li>
<li><strong>stricton</strong> - TRUE/FALSE (boolean) - Whether to force "Strict Mode" connections, good for ensuring strict SQL while developing an application.</li>
<li><strong>port</strong> - The database port number.  To use this value you have to add a line to the database config array.<code>$db['default']['port'] =  5432;</code>
</ul>

<p class="important"><strong>Note:</strong> Depending on what database platform you are using (MySQL, Postgres, etc.)
not all values will be needed.  For example, when using SQLite you will not need to supply a username or password, and
the database name will be the path to your database file. The information above assumes you are using MySQL.</p>

