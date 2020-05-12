<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Variable functions</h2>
<p>PHP supports the concept of variable functions. This means that if a variable name has parentheses appended to it, PHP will look for a function with the same name as whatever the variable evaluates to, and will attempt to execute it. Among other things, this can be used to implement callbacks, function tables, and so forth.</p>

<pre class="bg-dark p-3 text-white">
        function foo() {
            echo "In foo();
        }

        function bar($arg = '')
        {
            echo "In bar(); argument was '$arg'.";
        }

        // This is a wrapper function around echo
        function echoit($string)
        {
            echo $string;
        }

        $func = 'foo';
        $func();        // This calls foo()

        $func = 'bar';
        $func('test');  // This calls bar()

        $func = 'echoit';
        $func('test');  // This calls echoit() 
</pre>

<pre class="bg-dark p-3 text-white">
        class Foo
        {
            function Variable()
            {
                $name = 'Bar';
                $this->$name(); // This calls the Bar() method
            }

            function Bar()
            {
                echo "This is Bar";
            }
        }

        $foo = new Foo();
        $funcname = "Variable";
        $foo->$funcname();  // This calls $foo->Variable()
</pre>






<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/functions.variable-functions.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
