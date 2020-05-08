<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Internal (built-in) functions</h2>
<p>PHP comes standard with many functions and constructs. There are also functions that require specific PHP extensions compiled in, otherwise fatal "undefined function" errors will appear. For example, to use image functions such as imagecreatetruecolor(), PHP must be compiled with GD support. Or, to use mysqli_connect(), PHP must be compiled with MySQLi support.</p>

<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">How to read a function definition (prototype) </h4>
<p> strlen() as our first example</p>

<pre class="bg-dark p-3 text-white">
strlen

(PHP 4, PHP 5)
strlen -- Get string length

Description
strlen ( string $string ) : int

Returns the length of given string.
</pre>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">
                <Part></Part>
            </th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>strlen</td>
            <td>The function name.</td>
        </tr>
        <tr>
            <td>(PHP 4, PHP 5)</td>
            <td>strlen() has been around in all versions of PHP 4 and PHP 5</td>
        </tr>
        <tr>
            <td>( string $string )</td>
            <td>The first (and in this case the only) parameter/argument for this function is named string, and it's a string.</td>
        </tr>
        <tr>
            <td>int</td>
            <td>Type of value this function returns, which is an integer (i.e. the length of a string is measured in numbers).</td>
        </tr>

    </tbody>
</table>

<p>We could rewrite the above function definition in a generic way:</p>
<pre class="bg-dark p-3 text-white">
    function name    ( parameter type   parameter name ) : returned type
    
    in_array ( mixed $needle, array $haystack [, bool $strict = FALSE ] ) : bool
</pre>
<p>What does this mean? in_array() returns a boolean value, TRUE on success (if the needle was found in the haystack) or FALSE on failure (if the needle was not found in the haystack). The first parameter is named needle and it can be of many different types, so we call it "mixed". This mixed needle (what we're looking for) can be either a scalar value (string, integer, or float), or an array. haystack (the array we're searching in) is the second parameter. The third optional parameter is named strict. All optional parameters are seen in [ brackets ]. The manual states that the strict parameter defaults to boolean FALSE. </p>


<p>In addition the & (ampersand) symbol prepended to a function parameter allows the parameter to be passed by reference,</p>
<pre class="bg-dark p-3 text-white">
    preg_match ( string $pattern , string $subject [, array &$matches
      [, int $flags = 0 [, int $offset = 0 ]]] ) : int
</pre>





<?php include_once '../inc/footer.php' ?>
