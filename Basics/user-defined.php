<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">User-defined functions</h2>
<p>Any valid PHP code may appear inside a function, even other functions and class definitions.</p>
<p>Functions need not be defined before they are referenced, except when a function is conditionally defined</p>


<pre class="bg-dark p-3 text-white">
    $makefoo = true;

    /* We can't call foo() from here
    since it doesn't exist yet,
    but we can call bar() */

    bar();

    if ($makefoo) {
        function foo()
        {
            echo "I don't exist until program execution reaches me.\n";
        }
    }

    /* Now we can safely call foo()
    since $makefoo evaluated to true */

    if ($makefoo) foo();

    function bar()
    {
        echo "I exist immediately upon program start.\n";
    }
</pre>

<p>Functions within functions</p>
<pre class="bg-dark p-3 text-white">
   function foo() 
  {
          function bar()
          {
              echo "I don't exist until foo() is called.\n";
          }
    }

/* We can't call bar() yet
   since it doesn't exist. */

foo();

/* Now we can call bar(),
   foo()'s processing has
   made it accessible. */

bar();
</pre>

<p>All functions and classes in PHP have the global scope - they can be called outside a function even if they were defined inside and vice versa.</p>

<p>Both variable number of arguments and default arguments are supported in functions. See also the function references for func_num_args(), func_get_arg(), and func_get_args() for more information.</p>


<p class="bg-warning text-white p-3">
    Note: Recursive function/method calls with over 100-200 recursion levels can smash the stack and cause a termination of the current script. Especially, infinite recursion is considered a programming error.
</p>


<?php include_once '../inc/footer.php' ?>
