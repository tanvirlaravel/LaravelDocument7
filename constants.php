<?php include_once 'inc/header.php' ?>
<?php include_once 'inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Constants </h2>
<p>the scope of a constant is global</p>


<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Syntax </h4>
<p>When using the const keyword, only scalar data (boolean, integer, float and string) can be contained in constants prior to PHP 5.6. From PHP 5.6 onwards, it is possible to define a constant as a scalar expression, and it is also possible to define an array constant. It is possible to define constants as a resource, but it should be avoided, as it can cause unexpected results.</p>

<p class="bg-warning text-white p-3">
    Note:
    As opposed to defining constants using define(), constants defined using the const keyword must be declared at the top-level scope because they are defined at compile-time. This means that they cannot be declared inside functions, loops, if statements or try/ catch blocks.
</p>
<p class="bg-warning text-white p-3">
    Note:

    Constants defined using the const keyword are always case-sensitive, while constants defined using define() may be case-insensitive.</p>


<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Magic constants</h4>

<p>PHP provides a large number of predefined constants to any script which it runs. Many of these constants, however, are created by various extensions, and will only be present when those extensions are available, either via dynamic loading or because they have been compiled in.</p>
<p>There are nine magical constants that change depending on where they are used. For example, the value of __LINE__ depends on the line that it's used on in your script. All these "magical" constants are resolved at compile time, unlike regular constants, which are resolved at runtime.</p>

<ol>
    <li><b>__LINE__</b> The current line number of the file.</li>
    <li><b>__FILE__</b> The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.</li>
    <li><b>__DIR__</b> The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.</li>
    <li><b>__FUNCTION__</b> The function name, or {closure} for anonymous functions.</li>
    <li><b>__CLASS__</b>The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). Note that as of PHP 5.4 __CLASS__ works also in traits. When used in a trait method, __CLASS__ is the name of the class the trait is used in.</li>
    <li><b>__TRAIT__</b>The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar). </li>
    <li><b>__METHOD__</b>The class method name. </li>
    <li><b>__NAMESPACE__</b> The name of the current namespace.</li>
    <li><b>ClassName::class</b> The fully qualified class name. See also ::class.</li>

</ol>

<p>See also get_class(), get_object_vars(), file_exists() and function_exists().</p>





<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.constants.php">user contributions note</a>


<?php include_once 'inc/footer.php' ?>
