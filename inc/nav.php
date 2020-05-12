<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= $path ?>index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Prologue
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= $path ?>basicSyntax/php-tags.php">PHP Tags</a>
                    <a class="dropdown-item" href="<?= $path ?>basicSyntax/Escaping-HTML .php">Escaping from HTML</a>
                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Getting Started
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= $path ?>types/introduction.php">Introduction</a>
                    <a class="dropdown-item" href="<?= $path ?>types/Booleans.php">Booleans</a>
                    <a class="dropdown-item" href="<?= $path ?>types/Integers.php">Integers </a>
                    <a class="dropdown-item" href="<?= $path ?>types/Floating-point-numbers.php">Floating point numbers</a>
                    <a class="dropdown-item" href="<?= $path ?>types/String.php">String</a>
                    <a class="dropdown-item" href="<?= $path ?>types/Arrays.php">Arrays</a>
                    <a class="dropdown-item" href="<?= $path ?>types/Iterables.php">Iterables</a>
                    <a class="dropdown-item" href="<?= $path ?>types/Objects.php">Objects</a>
                    <a class="dropdown-item" href="<?= $path ?>types/resource.php">Resource</a>
                    <a class="dropdown-item" href="<?= $path ?>types/null.php">Null</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Architecture Concepts
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= $path ?>variables/basics.php">basics</a>
                    <a class="dropdown-item" href="<?= $path ?>variables/predefined.php">predefined</a>
                    <a class="dropdown-item" href="<?= $path ?>variables/scope.php">scope</a>
                    <a class="dropdown-item" href="<?= $path ?>variables/external.php">Variables From External Sources</a>

                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    The Basics
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= $path ?>Basics/Routing.php">Routing</a>
                    <a class="dropdown-item" href="<?= $path ?>functions/arguments.php">Function arguments</a>
                    <a class="dropdown-item" href="<?= $path ?>functions/returning-values.php">Returning values</a>
                    <a class="dropdown-item" href="<?= $path ?>functions/variable-functions.php">Variable functions </a>
                    <a class="dropdown-item" href="<?= $path ?>functions/internal.php">Internal (built-in) functions</a>
                    <a class="dropdown-item" href="<?= $path ?>functions/anonymous.php">Anonymous functions</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Control Structures
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= $path ?>controlstructures/intro.php">
                        Introduction
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>controlstructures/if.php">
                        If
                    </a>

                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Classes & Objects
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= $path ?>obj/intro.php">
                        Introduction
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/basic.php">
                        Basic
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/properties.php">
                        Properties
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/constants.php">
                        Class Constants
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/autoload.php">
                        Autoloading Classes
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/decon.php">
                        Constructors and Destructors
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/visibility.php">
                        Visibility
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/inheritance.php">
                        Object Inheritanc
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/paamayim-nekudotayim.php">
                        Scope Resolution Operator (::)
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/static.php">
                        Static Keyword
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/abstract.php">
                        Class Abstraction
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/interfaces.php">
                        Object Interfaces
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/traits.php">
                        Traits
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/anonymous.php">
                        Anonymous classes
                    </a>

                    <a class="dropdown-item" href="<?= $path ?>obj/overloading.php">
                        Overloading
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/iterations.php">
                        Object Iteration
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/magic.php">
                        Magic Methods
                    </a>

                    <a class="dropdown-item" href="<?= $path ?>obj/final.php">
                        Final Keyword
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/cloning.php">
                        Object Cloning
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/object-comparison.php">
                        Comparing Objects
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/late-static-bindings.php">
                        Late Static Bindings
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/references.php">
                        Objects and references
                    </a>
                    <a class="dropdown-item" href="<?= $path ?>obj/serialization.php">
                        Object Serialization
                    </a>


                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    W3Schools
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= $path ?>w3/home.php">Home</a>
                    <a class="dropdown-item" href="<?= $path ?>w3/general.php">General</a>



                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= $path ?>online.php">Online</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= $path ?>glossory.php">Glossory</a>
            </li>

        </ul>
        <!--
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
-->
    </div>
</nav>


<div class="container">
    <div class="row">

        <div class="col-md-12">
