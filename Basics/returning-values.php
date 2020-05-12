<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Returning values</h2>
<p>Values are returned by using the optional return statement. Any type may be returned, including arrays and objects. This causes the function to end its execution immediately and pass control back to the line from which it was called. </p>
<p class="bg-warning text-white p-3">
    Note:<br>
    If the return is omitted the value NULL will be returned.
</p>


<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Use of return</h4>
<p>A function can not return multiple values, but similar results can be obtained by returning an array.</p>
<pre class="bg-dark p-3 text-white">
    function small_numbers()
    {
        return array (0, 1, 2);
    }
    list ($zero, $one, $two) = small_numbers();
</pre>
<p>To return a reference from a function, use the reference operator & in both the function declaration and when assigning the returned value to a variable:</p>
<pre class="bg-dark p-3 text-white">
    function &returns_reference()
    {
        return $someref;
    }

$newref =& returns_reference();
</pre>


<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Return type declarations</h4>
<p>Strict typing also has an effect on return type declarations. In the default weak mode, returned values will be coerced to the correct type if they are not already of that type. In strong mode, the returned value must be of the correct type, otherwise a TypeError will be thrown.</p>
<p>As of PHP 7.1.0, return values can be marked as nullable by prefixing the type name with a question mark (?). This signifies that the function returns either the specified type or NULL.</p>
<p class="bg-warning text-white p-3">
    Note: <br>
    When overriding a parent method, the child's method must match any return type declaration on the parent. If the parent doesn't define a return type, then the child method may do so.
</p>
<p>Returning an object</p>

<pre class="bg-dark p-3 text-white">
    class C {}

    function getC(): C {
    return new C;
    }

    var_dump(getC());
</pre>

<p>Nullable return type declaration (as of PHP 7.1.0)</p>

<pre class="bg-dark p-3 text-white">
    function get_item(): ?string {
        if (isset($_GET['item'])) {
            return $_GET['item'];
        } else {
            return null;
        }
    }
</pre>


<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/functions.returning-values.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
