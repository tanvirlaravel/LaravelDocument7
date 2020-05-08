<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Variable scope</h2>


<p>The scope of a variable is the context within which it is defined. For the most part all PHP variables only have a single scope. This single scope spans included and required files as well.</p>
<pre class="bg-dark p-3 text-white">
    $a = 1;
    include 'b.inc';    
</pre>

<p>Here the $a variable will be available within the included b.inc script. </p>



<pre class="bg-dark p-3 text-white">
    $a = 1;
    include 'b.inc';    
</pre>
<p>However, within user-defined functions a local function scope is introduced. Any variable used inside a function is by default limited to the local function scope.</p>
<pre class="bg-dark p-3 text-white">
    $a = 1; /* global scope */ 

    function test()
    { 
        echo $a; /* reference to local scope variable */ 
    } 
    test();    
</pre>
<p>This script will not produce any output because the echo statement refers to a local version of the $a variable, and it has not been assigned a value within this scope. You may notice that this is a little bit different from the C language in that global variables in C are automatically available to functions unless specifically overridden by a local definition. </p>



<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">The global keyword</h4>

<pre class="bg-dark p-3 text-white">
    $a = 1;
    $b = 2;

    function Sum()
    {
    global $a, $b;

    $b = $a + $b;
    }

    Sum();
    echo $b;   
</pre>


<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">References with global and static variables </h4>
<h1>later</h1>




<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.variables.scope.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
