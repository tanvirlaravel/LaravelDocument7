<?php include_once './inc/header.php' ?>
<?php include_once './inc/nav.php' ?>

<h1 class="my-4 text-info text-center display-3">Defination</h1>
<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">A, B, C</a>

            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">D, E, F</a>

            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">G, H, I</a>

            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">J, K, L</a>

            <a class="nav-link" data-toggle="pill" href="#Fallback-Routes">M, N, O</a>

            <a class="nav-link" data-toggle="pill" href="#Rate-Limiting">P, Q, R</a>

            <a class="nav-link" data-toggle="pill" href="#Form-Method-Spoofing">S, T, U</a>

            <a class="nav-link" data-toggle="pill" href="#Accessing-The-Current-Route">V, W, X</a>

            <a class="nav-link" data-toggle="pill" href="#CORS">Y, Z</a>


        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">A, B, C</h4>
                <hr>
                <p><button class="btn btn-outline-warning">anonymous function</button> => a closure in PHP is a function that can be created without a specified name - an anonymous function</p>
                <hr>
                <p><button class="btn btn-outline-warning">Closure</button> => a closure in PHP is a function that can be created without a specified name - an anonymous function</p>

                <hr>
            </div>



            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">D, E, F </h4>
                <hr>
                <p><button class="btn btn-outline-warning">Dependency Injection</button> => Dependency injection is a procedure where one object supplies the dependencies of another object.</p>
                <p>The dependencies can be changed at run time as well as compile time</p>
                <ul>
                    <li><b>Modular:</b> The Dependency Injection helps create completely self-sufficient classes or modules</li>
                    <li><b>Testable:</b>It helps write testable code easily eg unit tests for example</li>
                    <li><b>Maintainable:</b> Since each class becomes modular, it becomes easier to manage it</li>
                </ul>
                <hr>
            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">G, H, I</h4>

                <hr>
                <p><button class="btn btn-outline-warning">HTTP verbs</button> => HTTP defines a set of request methods to indicate the desired action to be performed for a given resource</p>

                <p><button class="btn btn-outline-warning">get</button>
                    => The GET method requests a representation of the specified resource. Requests using GET should only retrieve data.</p>

                <p><button class="btn btn-outline-success">head</button>
                    => The HEAD method asks for a response identical to that of a GET request, but without the response body.</p>

                <p><button class="btn btn-outline-success">post</button> =>
                    The POST method is used to submit an entity to the specified resource, often causing a change in state or side effects on the server.</p>

                <p><button class="btn btn-outline-danger">put</button>=>
                    The PUT method replaces all current representations of the target resource with the request payload.</p>

                <p><button class="btn btn-outline-info">patch</button> =>
                    The PATCH method is used to apply partial modifications to a resource.</p>

                <p><button class="btn btn-outline-primary">delete</button> =>
                    The DELETE method deletes the specified resource.</p>

                <p><button class="btn btn-outline-primary">connect</button> =>
                    The CONNECT method establishes a tunnel to the server identified by the target resource.</p>

                <p><button class="btn btn-outline-primary">options</button> =>
                    The OPTIONS method is used to describe the communication options for the target resource.</p>

                <p><button class="btn btn-outline-primary">trace</button> =>
                    The TRACE method performs a message loop-back test along the path to the target resource.</p>
                <hr>




            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <p class="bg-success p-2 text-white"><a class="text-white" href="https://laravel.com/docs/7.x/routing#route-model-binding">Customizing The Key</a></p>

                <p class="bg-danger p-2 text-white"><a class="text-white" href="https://laravel.com/docs/7.x/routing#route-model-binding">Custom Keys & Scoping</a></p>

                <p class="bg-success p-2 text-white"><a class="text-white" href="https://laravel.com/docs/7.x/routing#route-model-binding">Customizing The Default Key Name</a></p>

                <p class="bg-danger p-2 text-white"><a class="text-white" href="https://laravel.com/docs/7.x/routing#route-model-binding">Explicit Binding</a></p>
                <p>The difference between implicit and explicit binding is you can additionally specify a customized logic into the <code>boot</code> method of the <code>RouteServiceProvider</code> class while doing explicit binding. Let’s check the following code:</p>

                <pre class="p-3 text-white-50 bg-dark">
public function boot()
{
    parent::boot();

    Route::bind('post', function ($value) {
        return App\Post::where('slug', $value)->first() ?? abort(404);
    });
}

//e.g. => http://myblog.com/posts/new-in-laravel
</pre>

                <p>Alternatively, you may override the<code>resolveRouteBinding</code> method on your Eloquent model.</p>

                <pre class="p-3 text-white-50 bg-dark">
// App\Post model

public function resolveRouteBinding($value)
{
    return $this->where('slug', $value)->first() ?? abort(404);
}
</pre>


            </div>

            <div class="tab-pane fade" id="Fallback-Routes">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Fallback Routes</h4>
                <p>online examle serach</p>
            </div>
            <div class="tab-pane fade" id="Rate-Limiting">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2  d-inline-block">P, Q, R</h4>
                <hr>
                <p><button class="btn btn-outline-warning">Run vs Compile times</button> => </p>
                <ul>
                    <li>PHP makes two passes (by default) anytime it runs a file.</li>
                    <li>Pass #1 parses the file and builds what is called operational(or machine) code. This is the raw binary format your computer will actually run and it is not human readable. In other languages (like C++, etc) this is called compiling. You can cache this step using various systems like Opcache, which saves you the overhead of compiling this every <time class=""></time></li>
                    <li>Syntax errors come from this portion of the execution.</li>
                    <li>Pass #2 executes the operational code from Pass #1. This is what is commonly called "run time", because your computer is actually executing the instructions.</li>
                    <li>Run-time errors (like exhausting memory, abnormal termination, etc) come from this level. These are considerably less common than syntax errors, however.</li>
                </ul>
                <hr>
            </div>
            <div class="tab-pane fade" id="Form-Method-Spoofing">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Form Method Spoofing</h4>
                <p>online examle serach</p>
            </div>
            <div class="tab-pane fade" id="Accessing-The-Current-Route">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Accessing The Current Route</h4>
                <p>Refer to the API documentation for both the <a href="https://laravel.com/api/7.x/Illuminate/Routing/Router.html"> underlying class</a> of the Route facade and Route instance to review all accessible methods.</p>
            </div>
            <div class="tab-pane fade" id="CORS">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-danger d-inline-block">Cross-Origin Resource Sharing (CORS)</h4>
                <p></p>
            </div>
        </div>
    </div>
</div>




<?php include_once './inc/footer.php' ?>
