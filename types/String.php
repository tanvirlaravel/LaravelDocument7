<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Strings</h2>


<p>A string is series of characters, where a character is the same as a byte. This means that PHP only supports a 256-character set, and hence does not offer native Unicode support.</p>

<a href="https://www.php.net/manual/en/language.types.string.php">later</a>

<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Syntax</h4>

<ol>
    <li>Integers can be specified in decimal (base 10)</li>
    <li>hexadecimal (base 16)</li>
    <li>octal (base 8) or binary (base 2) notation</li>
    <li>The negation operator can be used to denote a negative integer.</li>
</ol>

<pre class="bg-dark p-3 text-white">

    $a = 1234; // decimal number
    $a = 0123; // octal number (equivalent to 83 decimal)
    $a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
    $a = 0b11111111; // binary number (equivalent to 255 decimal)
    $a = 1_234_567; // decimal number (as of PHP 7.4.0)
    
</pre>
<p>If PHP encounters a number beyond the bounds of the integer type, it will be interpreted as a float instead. Also, an operation which results in a number beyond the bounds of the integer type will return a float instead.</p>
<pre class="bg-dark p-3 text-white">

    $large_number = 2147483647;
    var_dump($large_number); // int(2147483647)

    $large_number = 2147483648;
    var_dump($large_number); // float(2147483648)

    $million = 1000000;
    $large_number = 50000 * $million;
    var_dump($large_number);                     // float(50000000000)
    
</pre>

<p>NULL is always converted to zero (0).</p>



<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.types.integer.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
