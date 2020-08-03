<?php include_once 'inc/header.php' ?>

<?php include_once 'inc/nav.php' ?>
<h1 class="my-4 text-info text-center display-3">Laravel</h1>
<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Overview</a>

            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">Application Structure</a>

            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">Configuration</a>

            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Controllers</a>

            <a class="nav-link" data-toggle="pill" href="#Fallback-Routes">Controllers Routes</a>

            <a class="nav-link" data-toggle="pill" href="#Rate-Limiting">Rate Limiting</a>

            <a class="nav-link" data-toggle="pill" href="#Form-Method-Spoofing">Form Method Spoofing</a>

            <a class="nav-link" data-toggle="pill" href="#Accessing-The-Current-Route">Accessing The Current Route</a>

            <a class="nav-link" data-toggle="pill" href="#CORS">Cross-Origin Resource Sharing (CORS)</a>


        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Overview</h4>

                <p>Laravel reuses the existing components of different frameworks</p>
                <p>a website built in Laravel is secure and prevents several web attacks.</p>
                <hr>

                <h4>Advantages of Laravel</h4>
                <ul>
                    <li class="bg-danger">The web application becomes more scalable ? </li>
                    <li class="bg-danger">It includes namespaces and interfaces, thus helps to organize and manage resources. ? </li>
                </ul>
                <hr>
                <h4>Composer</h4>
                <p>Composer is a tool which includes all the dependencies and libraries. Third party libraries can be installed easily with help of composer.</p>
                <p>All the dependencies are noted in composer.json file </p>
                <hr>
                <h4>Artisan</h4>
                <p>Command line interface used in Laravel is called Artisan. It includes a set of commands which assists in building a web application. </p>
                <hr>
                <h4>
                    Features of Laravel
                </h4>
                <ul>
                    <li class="mb-2">
                        <h5>Modularity</h5>
                        Laravel provides 20 built in libraries and modules which helps in enhancement of the application
                    </li>

                    <li class="mb-2">
                        <h5>Testability</h5>
                    </li>
                    <li class="mb-2">
                        <h5>Routing</h5>
                    </li>
                    <li class="mb-2">
                        <h5>Configuration Management</h5>
                        A web application designed in Laravel will be running on different environments, which means that there will be a constant change in its configuration. Laravel provides a consistent approach to handle the configuration in an efficient way.
                    </li>
                    <li class="mb-2">
                        <h5>Query Builder and ORM</h5>
                    </li>
                    <li class="mb-2">
                        <h5>Schema Builder</h5>
                    </li>
                    <li class="mb-2">
                        <h5>Template Engine</h5>
                    </li>
                    <li>
                        <h5>E-mail</h5>
                    </li>
                    <li class="mb-2">
                        <h5>Authentication</h5>
                        it includes features such as register, forgot password and send password reminders.
                    </li>
                    <li class="mb-2">
                        <h5>Redis</h5>
                        Laravel uses Redis to connect to an existing session and general-purpose cache. Redis interacts with session directly.
                    </li>

                    <li class="mb-2">
                        <h5>Queues</h5>
                        Laravel includes queue services like emailing large number of users or a specified Cron job. These queues help in completing tasks in an easier manner without waiting for the previous task to be completed.
                    </li>
                    <li class="mb-2">
                        <h5>Event and Command Bus</h5>
                        which helps in executing commands and dispatch events in a simple way. The commands in Laravel act as per the application’s lifecycle.
                    </li>


                </ul>

            </div>



            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Application Structure</h4>
                <h4>App</h4>
                <p>It is the application folder and includes the entire source code of the project. It contains events, exceptions and middleware declaration. </p>
                <hr>

                <h4>Bootstrap</h4>
                <p>This folder encloses all the application bootstrap scripts. You can also find the file app.php, which initializes the scripts necessary for bootstrap.</p>
                <hr>

                <h4>Config</h4>
                <p>The config folder includes various configurations and associated parameters required for the smooth functioning of a Laravel application.</p>
                <hr>

                <h4>Database</h4>
                <ul>
                    <li>Seeds − This contains the classes used for unit testing database.</li>
                    <li>Migrations − This folder helps in queries for migrating the database used in the web application.</li>
                    <li>Factories − This folder is used to generate large number of data records.</li>
                </ul>
                <hr>

                <h4>Public</h4>
                <ul>
                    <li>.htaccess − This file gives the server configuration.</li>
                    <li>javascript and css − These files are considered as assets.</li>
                    <li>index.php − This file is required for the initialization of a web application.</li>
                </ul>
                <hr>

                <h4>Resources</h4>

                <hr>

                <h4>Storage</h4>

                <hr>

                <h4>Config</h4>
                <p>The config folder includes various configurations and associated parameters required for the smooth functioning of a Laravel application.</p>
                <hr>

                <h4>Storage</h4>
                <hr>

                <h4>Tests</h4>
                <hr>

                <h4>Vendor</h4>
                <hr>



            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Configuration</h4>


            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
               
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Controllers</h4>


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




<?php include_once 'inc/footer.php' ?>
