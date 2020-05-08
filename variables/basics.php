<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Basics</h2>


<p>By default, variables are always assigned by value. That is to say, when you assign an expression to a variable, the entire value of the original expression is copied into the destination variable. This means, for instance, that after assigning one variable's value to another, changing one of those variables will have no effect on the other. </p>
<p>PHP also offers another way to assign values to variables: assign by reference. This means that the new variable simply references (in other words, "becomes an alias for" or "points to") the original variable. Changes to the new variable affect the original, and vice versa.</p>
<pre class="bg-dark p-3 text-white">

    $foo = 'Bob';              // Assign the value 'Bob' to $foo
    $bar = &$foo;              // Reference $foo via $bar.
    $bar = "My name is $bar";  // Alter $bar...
    echo $bar;                 // My name is Bob
    echo $foo;                 // My name is Bob
    
</pre>
<p>It is not necessary to initialize variables in PHP however it is a very good practice. Uninitialized variables have a default value of their type depending on the context in which they are used - booleans default to FALSE, integers and floats default to zero, strings (e.g. used in echo) are set as an empty string and arrays become to an empty array.</p>

<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.variables.basics.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
