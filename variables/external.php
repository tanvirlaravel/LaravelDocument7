<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Variables From External Sources</h2>


<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">HTML Forms (GET and POST) </h4>
<p>When a form is submitted to a PHP script, the information from that form is automatically made available to the script. There are few ways to access this information,</p>

<pre class="bg-dark p-3 text-white">
    echo $_POST['username'];
    echo $_REQUEST['username'];   
</pre>
<p>Using a GET form is similar except you'll use the appropriate GET predefined variable instead. GET also applies to the QUERY_STRING (the information after the '?' in a URL). So, for example, http://www.example.com/test.php?id=3 contains GET data which is accessible with $_GET['id']. See also $_REQUEST.</p>

<p class="bg-warning text-white p-3">
    Note: Dots and spaces in variable names are converted to underscores. For example &lt;input name="a.b" /&gt; becomes $_REQUEST["a_b"].
</p>

<p>PHP also understands arrays in the context of form variables </p>

<pre class="bg-dark p-3 text-white">
    print_r($_POST, true));
     [beer] => Array
        (
            [0] => guinness
        )
    &lt;select multiple name="beer[]"&gt;
        &lt;option value="warthog"&gt;Warthog&lt;/option&gt;
        &lt;option value="guinness"&gt;Guinness&lt;/option&gt;
        &lt;option value="stuttgarter"&gt;Stuttgarter Schwabenbräu&lt;/option&gt;
    &lt;/select&gt;
</pre>


<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">HTTP Cookies </h4>
<p>PHP transparently supports HTTP cookies as defined by » RFC 6265. Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set cookies using the setcookie() function. Cookies are part of the HTTP header, so the SetCookie function must be called before any output is sent to the browser. This is the same restriction as for the header() function. Cookie data is then available in the appropriate cookie data arrays, such as $_COOKIE as well as in $_REQUEST.</p>

<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Determining variable types</h4>
<p>Because PHP determines the types of variables and converts them (generally) as needed, it is not always obvious what type a given variable is at any one time. PHP includes several functions which find out what type a variable is, such as: gettype(), is_array(), is_float(), is_int(), is_object(), and is_string(). See also the chapter on Types.</p>
<p>HTTP being a text protocol, most, if not all, content that comes in Superglobal arrays, like $_POST and $_GET will remain as strings. PHP will not try to convert values to a specific type. In the example below, $_GET["var1"] will contain the string "null" and $_GET["var2"], the string "123".</p>

<pre class="bg-dark p-3 text-white">
    /index.php?var1=null&var2=123
</pre>




<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.variables.external.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
