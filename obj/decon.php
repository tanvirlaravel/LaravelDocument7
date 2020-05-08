<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Constructors and Destructors</h2>


<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Constructors</h4>
<p>Classes which have a constructor method call this method on each newly-created object, so it is suitable for any initialization that the object may need before it is used.</p>

<p class="bg-warning p-2">
    Note: Parent constructors are not called implicitly if the child class defines a constructor. In order to run a parent constructor, a call to parent::__construct() within the child constructor is required. If the child does not define a constructor then it may be inherited from the parent class just like a normal class method (if it was not declared as private).
</p>

<pre class="bg-dark p-3 text-white">
    class BaseClass {
        function __construct() {
            print "In BaseClass constructor\n";
        }
    }

    class SubClass extends BaseClass {
        function __construct() {
            parent::__construct();
            print "In SubClass constructor\n";
        }
    }
</pre>

<hr>
<h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Destructors</h4>
<p> destructor concept similar to that of other object-oriented languages, such as C++. The destructor method will be called as soon as there are no other references to a particular object, or in any order during the shutdown sequence.</p>
<p>The destructor will be called even if script execution is stopped using exit(). Calling exit() in a destructor will prevent the remaining shutdown routines from executing.</p>




<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.oop5.decon.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
