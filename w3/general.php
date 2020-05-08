<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Lot of pages</h2>


<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Introduction</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Syntax</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">echo & print</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Introduction</h4>
                <p>PHP code is executed on the server, and the result is returned to the browser as plain HTML</p>
                <p>PHP code is executed on the server, and the result is returned to the browser as plain HTML</p>

                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">What Can PHP Do?</h4>
                <ul>
                    <li>PHP can generate dynamic page content</li>
                    <li>PHP can create, open, read, write, delete, and close files on the server</li>
                    <li>PHP can collect form data</li>
                    <li>PHP can send and receive cookies</li>
                    <li>PHP can add, delete, modify data in your database</li>
                    <li>PHP can be used to control user-access</li>
                    <li>PHP can encrypt data</li>
                </ul>


            </div>


            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Introduction</h4>
                <p>A PHP script is executed on the server, and the plain HTML result is sent back to the browser.</p>


                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">PHP Case <Sensitivity></Sensitivity>
                </h4>
                <p>In PHP, NO keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are case-sensitive.</p>
                <p> all variable names are case-sensitive!</p>
            </div>


            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">PHP echo and print Statements</h4>
                <p>The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.</p>

            </div>


            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>


        </div>
    </div>
</div>


w3school.com <br>
loop






<?php include_once '../inc/footer.php' ?>
