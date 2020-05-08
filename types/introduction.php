<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Introduction</h2>

<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">PHP supports ten primitive types.</h4>

<p>Four scalar types:</p>
<ol>
    <li>boolean</li>
    <li>integer</li>
    <li>float (floating-point number, aka double)</li>
    <li>string</li>
    <li></li>
</ol>


<p>Four compound types:</p>
<ol>
    <li>array</li>
    <li>object</li>
    <li>callable</li>
    <li>iterable</li>
</ol>

<p>And finally two special types:</p>
<ol>
    <li>resource</li>
    <li>NULL</li>
</ol>

<p>Consider double the same as float; the two names exist only for historic reasons</p>

<p>The type of a variable is not usually set by the programmer; rather, it is decided at runtime by PHP depending on the context in which that variable is used.</p>

<p>gettype()</p>

<pre class="bg-dark p-3 text-white">
    &lt;?php
    $a_bool = TRUE;   // a boolean
    $a_str  = "foo";  // a string
    $a_str2 = 'foo';  // a string
    $an_int = 12;     // an integer

    echo gettype($a_bool); // prints out:  boolean
    echo gettype($a_str);  // prints out:  string
</pre>

<p>To forcibly convert a variable to a certain type, either cast the variable or use the settype() function on it.</p>



<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.types.intro.php">user contributions note</a>



<?php include_once '../inc/footer.php' ?>
