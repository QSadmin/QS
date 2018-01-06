
@extends('layouts.app')




@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


                <div class="panel-body">
                  <!--main content-->


                      <!--M0-->
                    <div class="cell_content m0">

                          <div class="dash_sq">
                            <div class="dash_num">
                              @foreach ($jobs as $job)
                              @endforeach
                               {{ count($jobs) }}


                            </div>
                            <span class="f22">Total Absences</span>
                          </div>
                          <div class="dash_sq">
                              <div class="dash_num">
                                  @foreach ($jobsComing as $job)
                                  @endforeach
                                   {{ count($jobsComing) }}
                              </div>
                            <span class="f22">Scheduled Absences</span>
                          </div>
                          <? $x=0 ?>
                          @foreach ($jobs as $job)
                          <?$originalDate = $job->startDate;

                          $workday[$x++] = date("d", strtotime($originalDate));
                          ?>
                          @endforeach
                          <div class="cal"><br><br><br><br><br><br><br><br><br><br><br><br>
                            <div id="cal1"><?include 'php/calendar.php' ?></div>

                            @include('jobs/show')

                          </div>
                              <br>

                            <div class='calkey1'><div id='sample1'></div> <span class="ckey">Full Day</span>  <div id='sample2'></div> <span class="ckey">Half Day</span></div>

                              <div class="dash_list1">
                                <h4>Scheduled Absences</h4><br>
                                <table class='jobs_table4'>
                                  <tr style="background-color:#eee;">
                                    <th>Date</th>
                                    <th>Full/Half</th>
                                    <th>Reason</th>
                                    <th>Edit</th>
                                  </tr>

                              @foreach ($jobsComing as $job)

                                  <?php
                                  $originalDate = $job->startDate;
                                  $newDate = date("M d, Y ", strtotime($originalDate));
                                  $originalTime = $job->startTime;
                                  $newTime = date("H:i ", strtotime($originalTime));
                                  $joblist = "<tr><td><strong>";
                                  $joblist .= $newDate;
                                  $joblist .= "</td></strong><td> ";
                                  $joblist .= $newTime;
                                  $joblist .= "am</td><td>";

                                    $joblist .= $job->reason;
                                    $joblist .= "</td><td><a>EDIT</a></td></tr>";

                                  echo $joblist
                                  ?>
                            @endforeach
                            </table>
                            <br>

                  </div></div>



                    <!--M2-->
                    <div class="cell_content m2">
                      <div class="dash_list">
                        <h4>Absence History</h4><br>
                        <table class='jobs_table4'>
                          <tr style="background-color:#eee;">
                            <th>Date</th>
                            <th>Full/Half</th>
                            <th>Reason</th>
                            <th>Details</th>
                          </tr>

                      @foreach ($jobsPast as $job)

                          <?php
                          $originalDate = $job->startDate;
                          $newDate = date("M d, Y ", strtotime($originalDate));
                          $originalTime = $job->startTime;
                          $newTime = date("H:i ", strtotime($originalTime));
                          $joblist = "<tr><td><strong>";
                          $joblist .= $newDate;
                          $joblist .= "</td></strong><td> ";
                          $joblist .= $newTime;
                          $joblist .= "am</td><td>";

                            $joblist .= $job->reason;
                            $joblist .= "</td><td><a>Details</a></td></tr>";

                          echo $joblist
                          ?>
                    @endforeach
                    </table>
                    <br>

          </div></div>




                    <!--M3-->
                    <div class="cell_content m3">
                      <p><h3>Staff Profile</h3></p>
                        <img src=<?= Auth::user()->pic ?> height=200><br><br>
          Name: <span class='blue'>{{Auth::user()->first}} {{Auth::user()->name}} </span><br>
          Job Title: <span class='blue'>{{Auth::user()->job_title}}</span><br>
          Overall Rating: <span class='blue'>{{Auth::user()->rating}}</span><br><br><hr><br>
          Primary Phone: <span class='blue'>{{Auth::user()->primary_phone}}</span><br>
          Other Phone: <span class='blue'>{{Auth::user()->secondary_phone}}</span><br><br>
          Address:
          <span class='blue'>{{Auth::user()->address}}<br>
          {{Auth::user()->city}},
          {{Auth::user()->state}}<br>
          {{Auth::user()->zip}}</span><br><br><br><hr><br>
          Password: <span class='blue'>*******  (reset password)</span><br>
                      </div>
                    </div>

                    <!--M4-->
                    <div class="cell_content m4">
                        <p><h3>Manage Favorites</h3></p>
                        <table class='jobs_table'>
                          <tr style="background-color:#eee;">
                            <th>Favorite</th>
                            <th>Name</th>
                            <th>Certificate</th>
                            <th>Contact</th>
                          </tr>

                      @foreach ($allusers as $alluser)

                          <?php

                          $peoplelist = "<tr><td><input type='checkbox' name='accept' value='accept'></td><td><strong>";
                          $peoplelist .= $alluser->first;
                          $peoplelist .= " ";
                          $peoplelist .= $alluser->name;
                          $peoplelist .= "</td></strong><td> ";
                          $peoplelist .= $alluser->certs;
                          $peoplelist .= "</td><td>";


                            $peoplelist .= "<a>Contact</a></td></tr>";

                          echo $peoplelist
                          ?>
                    @endforeach
                    </table>
                    </div>

                    <!--M5-->
                    <div class="cell_content m5">
                        COMING SOON
                    </div>

                    <!--M6-->
                    <div class="cell_content m6">
                        COMING SOON
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="left">
  <div class="menu menu_item">
      <item id="opt0">Create New Absence</item>
      <item id="opt2">Absence History</item>

    <div class="seperate"></div>

      <item id="opt3">Manage Profile</item>
      <item id="opt4">Manage Favorites</item>

    <div class="seperate"></div>

      <item id="feedback">Feedback</item>
      <item id="MessageCenter">Message Center</item>

</div>
@endsection
