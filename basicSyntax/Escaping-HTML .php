<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Escaping from HTML</h2>

<p>??? <code>PHP parser</code></p>

<pre class="bg-dark p-3 text-white">
&lt;p&gt;This is going to be ignored by PHP and displayed by the browser.&lt;/p&gt;
&lt;?php echo 'While this is going to be parsed.'; ?&gt;
&lt;p&gt;This will also be ignored by PHP and displayed by the browser.&lt;/p&gt;
</pre>

<p>
    This works as expected, because when the PHP interpreter hits the ?&gt; closing tags, it simply starts outputting whatever it finds (except for an immediately following newline - see instruction separation) until it hits another opening tag unless in the middle of a conditional statement in which case the interpreter will determine the outcome of the conditional before making a decision of what to skip over.
</p>



<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.basic-syntax.phpmode.php">user contributions note</a>



<?php include_once '../inc/footer.php' ?>
