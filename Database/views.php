<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h1 class="my-4 text-info text-center display-3">Views</h1>
<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Creating Views</a>

            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">Passing Data To Views</a>

            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">View Composers</a>

            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Optimizing Views</a>



        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">View</h4>

                <h3>Determining If A View Exists</h3>

                <pre class="p-3 text-white-50 bg-dark">
use Illuminate\Support\Facades\View;

if (View::exists('emails.customer')) {
    //
}
</pre>

                <h3>Creating The First Available View</h3>

                <pre class="p-3 text-white-50 bg-dark">
return view()->first(['custom.admin', 'admin'], $data);

use Illuminate\Support\Facades\View;

return View::first(['custom.admin', 'admin'], $data);
</pre>

            </div>



            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Passing Data To Views</h4>

                <h3>Sharing Data With All Views</h3>
                documentaion


            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">View Composers</h4>
                <p>View composers are <code>callbacks or class methods</code> that are called when a view is rendered.</p>

                <p>later</p>

            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Optimizing Views</h4>

                later




            </div>


        </div>
    </div>
</div>




<?php include_once '../inc/footer.php' ?>
