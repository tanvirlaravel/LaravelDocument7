<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h1 class="my-4 text-info text-center display-3">Database: Getting Started</h1>
<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Introduction</a>

            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">Running Raw SQL Queries</a>

            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">Listening For Query Events</a>

            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Database Transactions</a>

        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Introduction</h4>

                <h5 class="text-primary">Defination</h5>

                <p><strong class="text-primary">raw SQL:</strong> Just a SQL statement you code, The Standard Sql is developed on In MySql-web designs-PHP,MysQl</p>



                <p><strong class="text-primary">ORM:</strong> ORM stands for Object-Relational Mapping (ORM) is a programming technique for converting data between relational databases and object oriented programming languages such as Java, C#, etc.</p>
                <code>SELECT * FROM users WHERE email = 'test@test.com';</code>

                <ul>
                    <li>Object-relational-mapping is the idea of being able to write queries like the one above, as well as much more complicated ones, using the object-oriented paradigm of your preferred programming language.</li>
                    <li>Long story short, we are trying to interact with our database using our language of choice instead of SQL.</li>
                    <li></li>
                </ul>
                <p>Here’s where the Object-relational-mapper comes in. When most people say “ORM” they are referring to a library that implements this technique.</p>
                <ul>
                    <li><code>var orm = require('generic-orm-libarry');</code></li>
                    <li><code>var user = orm("users").where({ email: 'test@test.com' });</code></li>
                </ul>

                <p>As you can see, we are using an imaginary ORM library to execute the exact same query, except we can write it in JavaScript (or whatever language you’re using). </p>
                <pre class="text-danger">
book_list = new List();
sql = "SELECT book FROM library WHERE author = 'Linus'";
data = query(sql); // I over simplify ...
                </pre>
                <code>book_list = BookTable.query(author="Linus");</code>

                <p><strong class="text-primary">Eloquent ORM:</strong> An ORM is an object-relational mapper, and Laravel has one that you will absolutely love! It is named <strong><code>"Eloquent"</code></strong> because it allows you to work with your database objects and relationships using an eloquent and expressive syntax.</p>

                <p><strong class="text-primary">Query Builder:</strong> Query Builder enables you to select data from the database based on one or more conditions. A query builder is used to generate SQL query. Query Builder is a flexible tool that is used to query class objects that are defined in the PeopleSoft HCM metadata repository.With Query Builder, we can perform numerous operations like Join, Union, Order, Group, Offset, etc. </p>
                <p>some commonly used queries for CRUD operations:</p>
                <ul>
                    <li>Laravel Query Builder provides a method insert()</li>
                    <li>Table method of the DB facade can be used to begin a query. It allows chaining of multiple constraints onto the query before getting the final result using get method. get() method returns the results as a collection.</li>
                    <code>$conditional= DB::table('posts')->where('category', 'laravel')->get();</code>
                    <li>Laravel Query Builder also has a method update() to update the existing records.</li>
                    <pre class="text-danger">
    DB::table('posts')
         ->where('id', 1)
         ->update(['title' => 'New title']);
</pre>
                </ul>

                <hr>
                <h5>Laravel supports four databases:</h5>
                <ol>
                    <li>MySQL 5.6+ (Version Policy)</li>
                    <li>PostgreSQL 9.4+ (Version Policy)</li>
                    <li>SQLite 3.8.8+</li>
                    <li>SQL Server 2017+ (Version Policy)</li>
                </ol>


                later
            </div>



            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Input Trimming & Normalization</h4>
                <p>By default, Laravel includes the TrimStrings and ConvertEmptyStringsToNull middleware in your application's global middleware stack. These middleware are listed in the stack by the App\Http\Kernel class. These middleware will automatically trim all incoming string fields on the request, as well as convert any empty string fields to null. This allows you to not have to worry about these normalization concerns in your routes and controllers.</p>
                <p>If you would like to disable this behavior, you may remove the two middleware from your application's middleware stack by removing them from the $middleware property of your App\Http\Kernel class.</p>


            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Retrieving Input</h4>


                <pre class="p-3 text-white-50 bg-dark">
               $input = $request->all();
                </pre>

                <p>Using a few simple methods, you may access all of the user input from your Illuminate\Http\Request instance without worrying about which HTTP verb was used for the request. Regardless of the HTTP verb, the input method may be used to retrieve user input:</p>
                <pre class="p-3 text-white-50 bg-dark">
               $name = $request->input('name');
               
               default value 
               $name = $request->input('name', 'Sally');
               
               When working with forms that contain array inputs, use "dot" notation to access 
               the arrays:
               
               $name = $request->input('products.0.name');

               $names = $request->input('products.*.name');
               
               input method to retrieve all of the input values as an associative array:
               $input = $request->input();
                </pre>

                <h3>Retrieving Input From The Query String</h3>
                <pre class="p-3 text-white-50 bg-dark">
               $name = $request->query('name');
               
               If the requested query string value data is not present, the second argument to 
               this method will be returned:
               $name = $request->query('name', 'Helen');
               
               query method without any arguments in order to retrieve all of the query string 
               values as an associative array:
               $query = $request->query();
                </pre>

                <h3>Retrieving Input Via Dynamic Properties</h3>
                <p>if one of your application's forms contains a name field, you may access the value of the field like so:</p>
                <pre class="p-3 text-white-50 bg-dark">
                $name = $request->name;
                </pre>
                <p>When using dynamic properties, Laravel will first look for the parameter's value in the request payload. If it is not present, Laravel will search for the field in the route parameters.</p>


                <h3>Retrieving JSON Input Values</h3>
                <p>When sending JSON requests to your application, you may access the JSON data via the <code>input</code> method as long as the <code>Content-Type</code> header of the request is properly set to <code>application/json</code>.</p>
                <pre class="p-3 text-white-50 bg-dark">
                $name = $request->input('user.name');
                </pre>


                <h3>Retrieving Boolean Input Values</h3>
                <p>When dealing with HTML elements like checkboxes, your application may receive "truthy" values that are actually strings. For example, "true" or "on". For convenience, you may use the boolean method to retrieve these values as booleans. The boolean method returns true for 1, "1", true, "true", "on", and "yes". All other values will return false:</p>
                <pre class="p-3 text-white-50 bg-dark">
                $archived = $request->boolean('archived');
                </pre>


                <h3>Retrieving A Portion Of The Input Data</h3>
                <pre class="p-3 text-white-50 bg-dark">

                </pre>
                <h3>Retrieving Input From The Query String</h3>
                <pre class="p-3 text-white-50 bg-dark">
                $input = $request->only(['username', 'password']);

                $input = $request->only('username', 'password');

                $input = $request->except(['credit_card']);

                $input = $request->except('credit_card');
                </pre>


                <h3>Determining If An Input Value Is Present</h3>
                <pre class="p-3 text-white-50 bg-dark">
                if ($request->has('name')) {}
                
                if ($request->has(['name', 'email'])) {}
                
                if ($request->hasAny(['name', 'email'])) {}
                
                If you would like to determine if a value is present on the request and is not empty, 
                you may use the filled method:
                if ($request->filled('name')) {}
                
                To determine if a given key is absent from the request, you may use the missing method:
                if ($request->missing('name')) {}
                </pre>


                <h3>Retrieving Old Input</h3>
                <p>To retrieve flashed input from the previous request, use the old method on the Request instance. The old method will pull the previously flashed input data from the session:</p>
                <pre class="p-3 text-white-50 bg-dark">
                $username = $request->old('username');
                
                If no old input exists for the given field, null will be returned:
                &lt;input type="text" name="username" value="{{ old('username') }}"&gt;
                </pre>


                <h3>Cookies</h3>
                <pre class="p-3 text-white-50 bg-dark">
                $value = $request->cookie('name');
                
                use Illuminate\Support\Facades\Cookie;
                $value = Cookie::get('name');
                </pre>

                later
            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Files</h4>

                <h3>Retrieving Uploaded Files</h3>
                <p>You may access uploaded files from a Illuminate\Http\Request instance using the file method </p>
                <pre class="p-3 text-white-50 bg-dark">
$file = $request->file('photo');

$file = $request->photo;

if ($request->hasFile('photo')) {
    //
}
</pre>

                <h3>Validating Successful Uploads</h3>
                <p>In addition to checking if the file is present</p>
                <pre class="p-3 text-white-50 bg-dark">
if ($request->file('photo')->isValid()) {
    //
}
</pre>

                <h3>File Paths & Extensions</h3>

                <pre class="p-3 text-white-50 bg-dark">
$path = $request->photo->path();

$extension = $request->photo->extension();
</pre>
                <a href="https://api.symfony.com/3.0/Symfony/Component/HttpFoundation/File/UploadedFile.html" target="_blank">Other File Methods</a>

                <h3>Storing Uploaded Files</h3>
                <p>To store an uploaded file, you will typically use one of your configured filesystems. The UploadedFile class has a store method which will move an uploaded file to one of your disks, which may be a location on your local filesystem or even a cloud storage location like Amazon S3.</p>
                <pre class="p-3 text-white-50 bg-dark">
 This path should not contain a file name, since a unique ID will automatically be generated to 
 serve as the file name.
 
$path = $request->photo->store('images');
$path = $request->photo->store('images', 's3');

If you do not want a file name to be automatically generated, you may use the storeAs method, 
which accepts the path, file name, and disk name as its arguments:

$path = $request->photo->storeAs('images', 'filename.jpg');
$path = $request->photo->storeAs('images', 'filename.jpg', 's3');
</pre>

                <h3>Configuring Trusted Proxies</h3>
                later



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
