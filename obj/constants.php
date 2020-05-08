<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Constants</h2>
<p>The default visibility of class constants is public.</p>
<p>The special ::class constant allows for fully qualified class name resolution at compile time, this is useful for namespaced classes:</p>

<pre class="text-white-50 bg-dark p-3">
    namespace foo {
    class bar {
    }

    echo bar::class; // foo\bar
    }    
</pre>


<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.oop5.autoload.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
