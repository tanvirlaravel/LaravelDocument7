<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h1 class="my-4 text-info text-center display-3">HTTP Session</h1>
<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Introduction</a>

            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">Using The Session</a>

            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">Session Blocking</a>

            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Adding Custom Session Drivers</a>




        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Introduction</h4>
                <p>Since HTTP driven applications are stateless, sessions provide a way to store information about the user across multiple requests. </p>
                <p>Support for popular backends such as <code>Memcached, Redis</code> </p>

                <h3>Configuration</h3>
                later

                <h3>Driver Prerequisites</h3>
                later

                <h3>Radis</h3>
                later



            </div>



            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Using The Session</h4>

                <h3>Retrieving Data</h3>
                <p>There are two primary ways of working with session data in Laravel</p>
                <ol>
                    <li><code>Request</code> instance.</li>
                    <li>global <code>session</code> helper</li>
                </ol>

                <h3>Request instance</h3>

                <pre class="p-3 text-white-50 bg-dark">
public function show(Request $request, $id)
{
    $value = $request->session()->get('key');
}
               
$value = $request->session()->get('key', 'default');

$value = $request->session()->get('key', function () {
    return 'default';
});
                </pre>

                <h3>The Global Session Helper</h3>

                <pre class="p-3 text-white-50 bg-dark">
Route::get('home', function () {
// Retrieve a piece of data from the session...
$value = session('key');

// Specifying a default value...
$value = session('key', 'default');

// Store a piece of data in the session...
session(['key' => 'value']);
});
                </pre>

                <h3>Retrieving All Session Data</h3>
                <code>$data = $request->session()->all();</code>

                <h3>Determining If An Item Exists In The Session</h3>
                <code>if ($request->session()->has('users')) { }</code>
                <code>if ($request->session()->exists('users')) { }</code>

                <h3>Storing Data</h3>
                <pre class="p-3 text-white-50 bg-dark">
// Via a request instance...
$request->session()->put('key', 'value');

// Via the global helper...
session(['key' => 'value']);
                </pre>

                <h3>Pushing To Array Session Values</h3>
                <code>$request->session()->push('user.teams', 'developers');</code>

                <h3>Flash Data</h3>
                <code>$request->session()->flash('status', 'Task was successful!');</code>

                <p>If you need to keep your flash data around for several requests, you may use the <code>reflash</code> method, which will keep all of the flash data for an additional request. If you only need to keep specific flash data, you may use the <code>keep</code> method:</p>
                <pre class="p-3 text-white-50 bg-dark">
$request->session()->reflash();

$request->session()->keep(['username', 'email']);
</pre>
                <h3>Deleting Data</h3>
                <p>The <code>forget</code> method will remove a piece of data from the session. If you would like to remove all data from the session, you may use the <code>flush</code> method:</p>
                <pre class="p-3 text-white-50 bg-dark">
// Forget a single key...
$request->session()->forget('key');

// Forget multiple keys...
$request->session()->forget(['key1', 'key2']);

$request->session()->flush();
</pre>
                <h3>Regenerating The Session ID</h3>
                later
            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Session Blocking</h4>
                later



            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Adding Custom Session Drivers</h4>
                later

            </div>

        </div>
    </div>
</div>




<?php include_once '../inc/footer.php' ?>
