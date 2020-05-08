<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">The Basic</h2>



<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">class </h4>
<p>The pseudo-variable $this is available when a method is called from within an object context</p>
<p>$this is a reference to the calling object(usually the object to which the method belongs, but possibly another object, if the method is called statically from the context of a secondary object).</p>

<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">new </h4>
<p>If a string containing the name of a class is used with new, a new instance of that class will be created. If the class is in a namespace, its fully qualified name must be used when doing this.</p>


<p>PHP treats objects in the same way as references or handles, meaning that each variable contains an object reference rather than a copy of the entire object</p>

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





<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.variables.external.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
