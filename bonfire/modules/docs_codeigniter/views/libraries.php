
<h1>Using CodeIgniter Libraries</h1>


<p>All of the available libraries are located in your <dfn>system/libraries</dfn> folder.
In most cases, to use one of these classes involves initializing it within a <a href="controllers.html">controller</a> using the following initialization function:</p>

<code>$this->load->library('<var>class name</var>'); </code>

<p>Where <var>class name</var> is the name of the class you want to invoke.  For example, to load the form validation class you would do this:</p>

<code>$this->load->library('<var>form_validation</var>'); </code>

<p>Once initialized you can use it as indicated in the user guide page corresponding to that class.</p>

<p>Additionally, multiple libraries can be loaded at the same time by passing an array of libraries to the load function.</p>

<code>$this->load->library(array('<var>email</var>', '<var>table</var>'));</code>

<h2>Creating Your Own Libraries</h2>

<p>Please read the section of the user guide that discusses how to <a href="creating_libraries.html">create your own libraries</a></p>
