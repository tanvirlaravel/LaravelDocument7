<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Floating point numbers</h2>


<p>Floating point numbers (also known as "floats", "doubles", or "real numbers")</p>

<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">NaN</h4>

<p>Some numeric operations can result in a value represented by the constant NAN. This result represents an undefined or unrepresentable value in floating-point calculations. Any loose or strict comparisons of this value against any other value, including itself, but except TRUE, will have a result of FALSE.</p>


<p>Because NAN represents any number of different values, NAN should not be compared to other values, including itself, and instead should be checked for using is_nan().</p>



<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.types.float.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
