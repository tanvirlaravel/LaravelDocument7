<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h1 class="my-4 text-info text-center display-3">Routing</h1>
<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Basic Routing</a>

            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">Route Parameters</a>

            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">Route Groups</a>

            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Route Model Binding</a>

            <a class="nav-link" data-toggle="pill" href="#Fallback-Routes">Fallback Routes</a>

            <a class="nav-link" data-toggle="pill" href="#Rate-Limiting">Rate Limiting</a>

            <a class="nav-link" data-toggle="pill" href="#Form-Method-Spoofing">Form Method Spoofing</a>

            <a class="nav-link" data-toggle="pill" href="#Accessing-The-Current-Route">Accessing The Current Route</a>

            <a class="nav-link" data-toggle="pill" href="#CORS">Cross-Origin Resource Sharing (CORS)</a>


        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Basic Routing</h4>

                <p><button class="btn btn-outline-warning">Closure</button> => a closure in PHP is a function that can be created without a specified name - an anonymous function</p>
                <p>All Laravel routes are automatically loaded by the framework. </p>
                <p>The <code>routes/web.php</code> file defines routes that are for your web interface. These routes are assigned the <code>web middleware</code> group, which provides features like <code>session state</code> and <code>CSRF protection</code>. The routes in <code>routes/api.php</code> are stateless and are assigned the <code>api middleware</code> group.</p>
                <p class="bg-danger p-2 text-white">Routes defined in the routes/api.php file are nested within a route group by the RouteServiceProvider. Within this group, the /api URI prefix is automatically applied so you do not need to manually apply it to every route in the file. You may modify the prefix and other route group options by modifying your RouteServiceProvider class</p>

                <p>HTTP verbs</p>
                <button class="btn btn-outline-warning">get</button>
                <button class="btn btn-outline-success">post</button>
                <button class="btn btn-outline-danger">put</button>
                <button class="btn btn-outline-info">patch</button>
                <button class="btn btn-outline-primary">delete</button>

                <p class="pt-4">Available Router Methods</p>
                <ul>
                    <li>Route::<code>get</code>( $uri, $callback);</li>
                    <li>Route::<code>post</code>( $uri, $callback);</li>
                    <li>Route::<code>put</code>( $uri, $callback);</li>
                    <li>Route::<code>patch</code>( $uri, $callback);</li>
                    <li>Route::<code>delete</code>( $uri, $callback);</li>
                    <li>Route::<code>options</code>( $uri, $callback);</li>
                    <p>Sometimes you may need to register a route that responds to multiple HTTP verbs. You may do so using the match method. Or, you may even register a route that responds to all HTTP verbs using the any method:</p>
                    <li>Route::<code>match</code>code>(['get', 'post'], '/', function () {});</li>
                    <li>Route::<code>any</code>code>('/', function () {});</li>
                </ul>
                <h4>CSRF Protection</h4>
                <p>Any HTML forms pointing to POST, PUT, PATCH, or DELETE routes that are defined in the web routes file should include a CSRF token field. </p>
                <code>@csrf</code>
                <p></p>

                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Redirect Routes</h4>
                <p>By default, Route::redirect returns a 302 status code. You may customize the status code using the optional third parameter:</p>
                <code>Route::redirect('/here', '/there', 301);</code>
                <p>You may use the Route::permanentRedirect method to return a 301 status code:</p>
                <code>Route::permanentRedirect('/here', '/there');</code>
                <p></p>



                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">View Routes</h4>
                <p>Nothing</p>

            </div>



            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Required Parameters</h4>
                <p>Route parameters are always encased within <code>{}</code> braces and should consist of alphabetic characters, and may not contain a <code>- </code>character. Instead of using the <code>-</code> character, use an underscore <code>(_)</code>. Route parameters are injected into route callbacks / controllers based on their order - the names of the callback / controller arguments do not matter.</p>

                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Regular Expression Constraints</h4>
                <pre class="p-3 text-white-50 bg-dark">
                Route::get('user/{name}', function ($name) {
                //
                })->where('name', '[A-Za-z]+');

                Route::get('user/{id}', function ($id) {
                //
                })->where('id', '[0-9]+');

                Route::get('user/{id}/{name}', function ($id, $name) {
                //
                })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
                </pre>
                <h5>Global Constraints</h5>
                <p>If you would like a route parameter to always be constrained by a given regular expression, you may use the pattern method. You should define these patterns in the <code>boot</code> method of your <code>RouteServiceProvider</code>:</p>
                <pre class="p-3 text-white-50 bg-dark">
                 Route::pattern('id', '[0-9]+');
                 
                 
                 Once the pattern has been defined, it is automatically applied to all routes using 
                 that parameter name:
                 
                 Route::get('user/{id}', function ($id) {
                    // Only executed if {id} is numeric...
                });
                </pre>
                <p class="bg-danger p-2 text-white">Encoded Forward Slashes</p>
            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <p>Route groups allow you to share route attributes, such as middleware or namespaces, across a large number of routes without needing to define those attributes on each individual route.</p>

                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Middleware</h4>
                <pre class="p-3 text-white-50 bg-dark">
                Route::middleware(['first', 'second'])->group(function () {
                    Route::get('/', function () { });
                    Route::get('user/profile', function () { });
                });
                </pre>

                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Namespaces</h4>
                <pre class="p-3 text-white-50 bg-dark">
                Route::namespace('Admin')->group(function () {
                    // Controllers Within The "App\Http\Controllers\Admin" Namespace
                });                
                </pre>

                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Subdomain Routing</h4>
                <pre class="p-3 text-white-50 bg-dark">
                Route::domain('{account}.myapp.com')->group(function () {
                    Route::get('user/{id}', function ($account, $id) {
                        //
                    });
                });               
                </pre>


                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Route Prefixes</h4>
                <pre class="p-3 text-white-50 bg-dark">
                Route::prefix('admin')->group(function () {
                    Route::get('users', function () {
                        // Matches The "/admin/users" URL
                    });
                });               
                </pre>

                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Route Name Prefixes</h4>
                <pre class="p-3 text-white-50 bg-dark">
                Route::name('admin.')->group(function () {
                    Route::get('users', function () {
                        // Route assigned name "admin.users"...
                    })->name('users');
                });              
                </pre>




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
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-danger d-inline-block">Rate Limiting</h4>
                <p></p>
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




<?php include_once '../inc/footer.php' ?>
