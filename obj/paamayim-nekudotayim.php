<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Scope Resolution Operator (::) </h2>
<p>The Scope Resolution Operator or in simpler terms, the double colon, is a <span class="bg-warning px-2">token</span> that allows <span class="bg-warning px-2">access</span> to <code>static, constant</code>, and <code>overridden properties or methods</code> of a class.</p>
<p>When referencing these items from outside the class definition, use the name of the class.</p>


<pre class="bg-dark p-3 text-white-50 bordern">
    class MyClass {
        const CONST_VALUE = 'A constant value';
    }

    $classname = 'MyClass';
    echo $classname::CONST_VALUE; // As of PHP 5.3.0

    echo MyClass::CONST_VALUE;
</pre>
<p>Three special keywords self, parent and static are used to access properties or methods from inside the class definition.</p>

<pre class="bg-dark p-3 text-white-50">
    class OtherClass extends MyClass
    {
        public static $my_static = 'static var';

        public static function doubleColon() {
            echo parent::CONST_VALUE . "\n";
            echo self::$my_static . "\n";
        }
    }

    $classname = 'OtherClass';
    $classname::doubleColon(); // As of PHP 5.3.0

    OtherClass::doubleColon();
</pre>

<p>When an extending class overrides the parents definition of a method, PHP will not call the parent's method. It's up to the extended class on whether or not the parent's method is called. This also applies to Constructors and Destructors, Overloading, and Magic method definitions.</p>

<pre class="bg-dark p-3 text-white-50">
    class MyClass
    {
        protected function myFunc() {
            echo "MyClass::myFunc()\n";
        }
    }

    class OtherClass extends MyClass
    {
        // Override parent's definition
        public function myFunc()
        {
            // But still call the parent function
            parent::myFunc();
            echo "OtherClass::myFunc()\n";
        }
    }

    $class = new OtherClass();
    $class->myFunc();
</pre>






<a class="btn btn-outline-warning" target="_blank" href="https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php">user contributions note</a>


<?php include_once '../inc/footer.php' ?>
