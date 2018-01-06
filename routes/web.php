<?php



use Illuminate\Support\Facades\Auth;
$user = Auth::user();
$id = Auth::id();

Route::get('/', function () {
    return view('welcome');
});

Route::get('sub', function () {

  $user = Auth::user();
  $id = Auth::id();
  $users = DB::table('users')->where('id', $id)->get();
  $date1 = date("Y-m-d");
  $allusers = DB::table('users')->orderBy('name', 'asc')->get();
  $jobs = DB::table('jobs')->where('assignedUUID', $id)->orderBy('startDate', 'asc')->get();
  $jobsPast = DB::table('jobs')->where('assignedUUID', $id)->where('startDate', '<', $date1)->orderBy('startDate', 'asc')->get();
  $jobsComing = DB::table('jobs')->where('assignedUUID', $id)->where('startDate', '>', $date1)->orderBy('startDate', 'asc')->get();
  $locations = DB::table('locations')->where('ULID', 2)->get();
  return view('sub', compact('users', 'jobs', 'jobsPast', 'jobsComing', 'locations', 'allusers' ));

});

Route::get('staff', function () {

  $user = Auth::user();
  $id = Auth::id();
  $users = DB::table('users')->where('id', $id)->get();
  $date1 = date("Y-m-d");
  $allusers = DB::table('users')->orderBy('name', 'asc')->get();
  $jobs = DB::table('jobs')->where('assignedUUID', $id)->orderBy('startDate', 'asc')->get();
  $jobsPast = DB::table('jobs')->where('assignedUUID', $id)->where('startDate', '<' ,$date1)->orderBy('startDate', 'asc')->get();
  $jobsComing = DB::table('jobs')->where('assignedUUID', $id)->where('startDate', '>' ,$date1)->orderBy('startDate', 'asc')->get();
  $locations = DB::table('locations')->where('ULID', 2)->get();
  return view('staff', compact('users', 'jobs', 'jobsPast', 'jobsComing', 'locations', 'allusers' ));

});
Route::get('school', function () {

  $user = Auth::user();
  $id = Auth::id();
  $users = DB::table('users')->where('id', $id)->get();
  $date1 = date("Y-m-d");
  $allusers = DB::table('users')->orderBy('name', 'asc')->get();
  $jobs = DB::table('jobs')->where('assignedUUID', $id)->orderBy('startDate', 'asc')->get();
  $jobsPast = DB::table('jobs')->where('assignedUUID', $id)->where('startDate', '<' ,$date1)->orderBy('startDate', 'asc')->get();
  $jobsComing = DB::table('jobs')->where('assignedUUID', $id)->where('startDate', '>' ,$date1)->orderBy('startDate', 'asc')->get();
  $locations = DB::table('locations')->where('ULID', 2)->get();
  return view('school', compact('users', 'jobs', 'jobsPast', 'jobsComing', 'locations', 'allusers' ));

});
Route::get('admin', function () {

  $user = Auth::user();
  $id = Auth::id();
  $users = DB::table('users')->where('id', $id)->get();
  $date1 = date("Y-m-d");
  $allusers = DB::table('users')->orderBy('name', 'asc')->get();
  $jobs = DB::table('jobs')->where('assignedUUID', $id)->orderBy('startDate', 'asc')->get();
  $jobsPast = DB::table('jobs')->where('assignedUUID', $id)->where('startDate', '<' ,$date1)->orderBy('startDate', 'asc')->get();
  $jobsComing = DB::table('jobs')->where('assignedUUID', $id)->where('startDate', '>' ,$date1)->orderBy('startDate', 'asc')->get();
  $locations = DB::table('locations')->where('ULID', 2)->get();
  return view('admin', compact('users', 'jobs', 'jobsPast', 'jobsComing', 'locations', 'allusers' ));

});


Route::get('/jobs', function () {


  $jobs = App\Job::all();
  return view('jobs.index', compact('jobs'));
});

Route::get('/jobs/show', function () {
  return view('jobs.show');
});

Route::get('/jobs/picker', function () {
  return view('jobs.picker');
});

Route::get('/cal', function () {

  return view('cal');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
