
<h1>Handling Multiple Environments</h1>

<p>
    Developers often desire different system behavior depending on whether
    an application is running in a development or production
    environment. For example, verbose error output is something that would
    be useful while developing an application, but it may also pose a security issue when "live".
</p>

<h2>The ENVIRONMENT Constant</h2>

<p>
    By default, CodeIgniter comes with the environment constant set to
    '<kbd>development</kbd>'. At the top of index.php, you will see:
</p>

<code>
define('<var>ENVIRONMENT</var>', '<var>development</var>');
</code>

<p>
    In addition to affecting some basic framework behavior (see the next section),
    you may use this constant in your own development to differentiate
    between which environment you are running in.
</p>

<h2>Effects On Default Framework Behavior</h2>

<p>
    There are some places in the CodeIgniter system where the <kbd>ENVIRONMENT</kbd>
    constant is used. This section describes how default framework behavior is
    affected.
</p>

<h3>Error Reporting</h3>

<p>
    Setting the <kbd>ENVIRONMENT</kbd> constant to a value of '<kbd>development</kbd>' will
    cause all PHP errors to be rendered to the browser when they occur. Conversely,
    setting the constant to '<kbd>production</kbd>' will disable all error output. Disabling
    error reporting in production is a <a href="security.html">good security practice</a>.
</p>

<h3>Configuration Files</h3>

<p>
    Optionally, you can have CodeIgniter load environment-specific
    configuration files. This may be useful for managing things like differing API keys
    across multiple environments. This is described in more detail in the
    environment section of the <a href="../libraries/config.html#environments">Config Class</a> documentation.
</p>