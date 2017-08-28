
<h1>Using CodeIgniter Drivers</h1>


<p>Drivers are a special type of Library that has a parent class and any number of potential child classes.  Child classes have access to the parent class, but not their siblings.  Drivers provide an elegant syntax  in your <a href="controllers.html">controllers</a> for libraries that benefit from or require being broken down into discrete classes.</p>

<p>Drivers are found in the <dfn>system/libraries</dfn> folder, in their own folder which is identically named to the parent library class.  Also inside that folder is a subfolder named <kbd>drivers</kbd>, which contains all of the possible child class files.</p>

<p>To use a driver you will initialize it within a controller using the following initialization function:</p>

<code>$this->load->driver('<var>class name</var>'); </code>

<p>Where <var>class name</var> is the name of the driver class you want to invoke.  For example, to load a driver named "Some Parent" you would do this:</p>

<code>$this->load->driver('<var>some_parent</var>');</code>

<p>Methods of that class can then be invoked with:</p>

<code>$this->some_parent->some_method();</code>

<p>The child classes, the drivers themselves, can then be called directly through the parent class, without initializing them:</p>

<code>$this->some_parent->child_one->some_method();<br />
$this->some_parent->child_two->another_method();</code>

<h2>Creating Your Own Drivers</h2>

<p>Please read the section of the user guide that discusses how to <a href="creating_drivers.html">create your own drivers</a>.</p>
