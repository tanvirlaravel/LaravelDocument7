<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Booleans</h2>

<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">When converting to boolean, the following values are considered FALSE:</h4>


<ol>
    <li>the boolean FALSE itself</li>
    <li>the integers 0 and -0 (zero)</li>
    <li>the floats 0.0 and -0.0 (zero)</li>
    <li>the empty string, and the string "0"</li>
    <li>an array with zero elements</li>
    <li>the special type NULL (including unset variables)</li>
    <li>SimpleXML objects created from empty tags</li>
</ol>

<p>Every other value is considered TRUE (including any resource and NAN).</p>

<p class="bg-warning p-2">Warning
    -1 is considered TRUE, like any other non-zero (whether negative or positive) number!</p>



<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.types.boolean.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
