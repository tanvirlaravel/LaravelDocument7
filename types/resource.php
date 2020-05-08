<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Resource</h2>


<p>A resource is a special variable, holding a reference to an external resource. Resources are created and used by special functions.</p>
<p>A common example of using the resource data type is a database call.</p>

<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Converting to resource</h4>
<p>As resource variables hold special handles to opened files, database connections, image canvas areas and the like, converting to a resource makes no sense.</p>
<hr>

<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Freeing resources</h4>
<p>Thanks to the reference-counting system being part of Zend Engine, a resource with no more references to it is detected automatically, and it is freed by the garbage collector. For this reason, it is rarely necessary to free the memory manually.</p>

<p class="bg-warning p-2 text-white">
    Note: Persistent database links are an exception to this rule. They are not destroyed by the garbage collector. See the persistent connections section for more information.
</p>

<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.types.resource.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
