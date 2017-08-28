
<h1>Migration Class</h1>

<p>Migrations are a convenient way for you to alter your database in a structured and organized manner. You could edit fragments of SQL by hand but you would then be responsible for telling other developers that they need to go and run them. You’d also have to keep track of which changes need to be run against the production machines next time you deploy.</p>

<p>The database table <var>migration</var> tracks which migrations have already been run so all you have to do is update your application files and call <dfn>$this->migrate->current()</dfn> to work out which migrations should be run. The current version is found in <var>config/migration.php</var>.</p>

<h2>Create a Migration</h2>

<p>This will be the first migration for a new site which has a blog. All migrations go in the folder <var>application/migrations/</var> and have names such as: <kbd>001_add_blog.php</kbd>.</p>

<pre>
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_blog extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'blog_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'blog_title' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'blog_description' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			),
		));

		$this->dbforge->create_table('blog');
	}

	public function down()
	{
		$this->dbforge->drop_table('blog');
	}
</pre>

<p>Then in <var>application/config/migration.php</var> set <dfn>$config['migration_version'] = 1;</dfn>.

<h2>Usage Example</h2>

<p>In this example some simple code is placed in <var>application/controllers/migrate.php</var> to update the schema.</p>

<pre>
$this->load->library('migration');

if ( ! $this->migration->current())
{
	show_error($this->migration->error_string());
}
</pre>


<h1>Function Reference</h1>

<h2>$this->migration->current()</h2>

<p>The current migration is whatever is set for <dfn>$config['migration_version']</dfn> in <var>application/config/migration.php</var>.</p>


<h2>$this->migration->latest()</h2>

<p>This works much the same way as current() but instead of looking for the <dfn>$config['migration_version']</dfn> the Migration class will use the very newest migration found in the filesystem.</p>

<h2>$this->migration->version()</h2>

<p>Version can be used to roll back changes or step forwards programmatically to specific versions. It works just like current but ignores <dfn>$config['migration_version']</dfn>.</p>

<pre>
$this->load->library('migration');

$this->migration->version(5);
</pre>

<h2>Migration Preferences</h2>

<p>The following is a list of all the config options for migrations.</p>


<table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder">
<tr>
<th>Preference</th>
<th>Default&nbsp;Value</th>
<th>Options</th>
<th>Description</th>
</tr><tr>
<td class="td"><strong>migration_enabled</strong></td><td class="td">FALSE</td><td class="td">TRUE / FALSE</td><td class="td">Enable or disable migrations.</td>
</tr><tr>
<td class="td"><strong>migration_version</strong></td><td class="td">0</td><td class="td">None</td><td class="td">The current version your database should use.</td>
</tr><tr>
<td class="td"><strong>migration_path</strong></td><td class="td">APPPATH.'migrations/'</td><td class="td">None</td><td class="td">The path to your migrations folder.</td>
</tr>
</table>
