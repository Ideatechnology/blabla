

<h1>Cookie Helper</h1>

<p>The Cookie Helper file contains functions that assist in working with cookies.</p>


<h2>Loading this Helper</h2>

<p>This helper is loaded using the following code:</p>
<code>$this->load->helper('cookie');</code>

<p>The following functions are available:</p>

<h2>set_cookie()</h2>

<p>This helper function gives you view file friendly syntax to set browser cookies.  Refer to the <a href="../libraries/input.html">Input class</a> for a description of use, as this function is an alias to $this->input->set_cookie().</p>

<h2>get_cookie()</h2>

<p>This helper function gives you view file friendly syntax to get browser cookies.  Refer to the <a href="../libraries/input.html">Input class</a> for a description of use, as this function is an alias to $this->input->cookie().</p>


<h2>delete_cookie()</h2>

<p>Lets you delete a cookie.  Unless you've set a custom path or other values, only the name of the cookie is needed:</p>

<code>delete_cookie("name");</code>

<p>This function is otherwise identical to <dfn>set_cookie()</dfn>, except that it does not have the value and expiration parameters.  You can submit an array
of values in the first parameter or you can set discrete parameters.</p>

<code>delete_cookie($name, $domain, $path, $prefix)</code>

