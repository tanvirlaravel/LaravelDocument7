<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Function arguments</h2>
<p>PHP supports passing arguments by value (the default), passing by reference, and default argument values. Variable-length argument lists are also supported.</p>


<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Passing arguments by reference</h4>
<p>By default, function arguments are passed by value (so that if the value of the argument within the function is changed, it does not get changed outside of the function). To allow a function to modify its arguments, they must be passed by reference.</p>
<pre class="bg-dark p-3 text-white">
    function add_some_extra(&$string)
    {
        $string .= 'and something extra.';
    }    
    $str = 'This is a string, ';
    add_some_extra($str);
    echo $str;    // outputs 'This is a string, and something extra.'
</pre>


<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Default argument values</h4>
<p>PHP also allows the use of arrays and the special type NULL as default values</p>
<pre class="bg-dark p-3 text-white">
    function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL)
    {
        $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
        return "Making a cup of ".join(", ", $types)." with $device.\n";
    }
    echo makecoffee();
    echo makecoffee(array("cappuccino", "lavazza"), "teapot");
</pre>
<p>The default value must be a constant expression, not (for example) a variable, a class member or a function call.</p>
<p class="bg-warning text-white p-3">
    Note that when using default arguments, any defaults should be on the right side of any non-default arguments; otherwise, things will not work as expected.
</p>

<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Variable-length argument lists</h4>
<h1>Later</h1>



<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/functions.arguments.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
