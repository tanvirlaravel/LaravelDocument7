<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Iterables</h2>

<h1>Later</h1>


<p>An array in PHP is actually an ordered map. A map is a type that associates values to keys. This type is optimized for several different uses; it can be treated as an array, list (vector), hash table (an implementation of a map), dictionary, collection, stack, queue, and probably more.</p>



<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Syntax</h4>

<p>The key can either be an integer or a string. The value can be of any type.</p>
<p>The key is optional. If it is not specified, PHP will use the increment of the largest previously used integer key.</p>
<p>It is possible to specify the key only for some elements and leave it out for others:</p>

<pre class="bg-dark p-3 text-white">

    $array = array(
         "a",
         "b",
    6 => "c",
         "d",
    );
    var_dump($array);
    
    array(4) {
    [0]=>
    string(1) "a"
    [1]=>
    string(1) "b"
    [6]=>
    string(1) "c"
    [7]=>
    string(1) "d"
    }
    
</pre>
<p class="bg-warning p-3 text-white">
    Note: Attempting to access an array key which has not been defined is the same as accessing any other undefined variable: an E_NOTICE-level error message will be issued, and the result will be NULL.
</p>


<pre class="bg-dark p-3 text-white">
    $arr[key] = value;
    $arr[] = value;    
</pre>

<p>If $arr doesn't exist yet, it will be created, so this is also an alternative way to create an array. </p>
<p class="bg-warning p-3 text-white">
    Note: As of PHP 7.1.0, applying the empty index operator on a string throws a fatal error. Formerly, the string was silently converted to an array.
</p>

<p>To change a certain value, assign a new value to that element using its key. To remove a key/value pair, call the unset() function on it.</p>
<pre class="bg-dark p-3 text-white">
    $arr = array(5 => 1, 12 => 2);

    $arr[] = 56; // This is the same as $arr[13] = 56;
    // at this point of the script

    $arr["x"] = 42; // This adds a new element to
    // the array with key "x"

    unset($arr[5]); // This removes the element from the array

    unset($arr);    // This deletes the whole array   
</pre>

<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Useful functions</h4>
<p>The unset() function allows removing keys from an array. Be aware that the array will not be reindexed.</p>
<pre class="bg-dark p-3 text-white">
    $a = array(1 => 'one', 2 => 'two', 3 => 'three');
    unset($a[2]);
    /* will produce an array that would have been defined as
    $a = array(1 => 'one', 3 => 'three');
    and NOT
    $a = array(1 => 'one', 2 =>'three');
    */

    $b = array_values($a);
    // Now $b is array(0 => 'one', 1 =>'three')  
</pre>
later




<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.types.integer.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
