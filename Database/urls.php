<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h1 class="my-4 text-info text-center display-3">URL Generation</h1>
<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">The Basics</a>

            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">URLs For Named Routes</a>

            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">URLs For Controller Actions</a>

            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Default Values</a>

        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">The Basics</h4>

                <pre class="p-3 text-white-50 bg-dark">
echo url("/posts/{$post->id}");

// http://example.com/posts/1
                </pre>

                <h3>Accessing The Current URL</h3>
                <p>If no path is provided to the <code>url</code> helper, a <code>Illuminate\Routing\UrlGenerator</code> instance is returned, allowing you to access information about the current URL:</p>

                <pre class="p-3 text-white-50 bg-dark">
// Get the current URL without the query string...
echo url()->current();

// Get the current URL including the query string...
echo url()->full();

// Get the full URL for the previous request...
echo url()->previous();
               
Each of these methods may also be accessed via the URL facade:
               
use Illuminate\Support\Facades\URL;

echo URL::current();
                </pre>

            </div>



            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">URLs For Named Routes</h4>

                <h3>Signed URLs</h3>
                later

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block"> URLs For Controller Actions</h4>


                <pre class="p-3 text-white-50 bg-dark">
$url = action('HomeController@index');
               
use App\Http\Controllers\HomeController;

$url = action([HomeController::class, 'index']);
               
$url = action('UserController@profile', ['id' => 1]);
                </pre>




            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h3>Default Values</h3>
                later

            </div>

        </div>
    </div>
</div>




<?php include_once '../inc/footer.php' ?>
