
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
                              {{ Auth::user()->rating }}


                            </div>
                            <span class="f22">Overall Rating</span>
                          </div>
                          <div class="dash_sq">
                              <div class="dash_num">
                                  @foreach ($jobsComing as $job)
                                  @endforeach
                                   {{ count($jobsComing) }}
                              </div>
                            <span class="f22">Upcoming Jobs</span>
                          </div>
                          <? $x=0 ?>
                          @foreach ($jobs as $job)
                          <?$originalDate = $job->startDate;

                          $workday[$x++] = date("d", strtotime($originalDate));
                          ?>
                          @endforeach
                          <div class="cal"><br><br><br><br><br><br><br><br><br><br><br><br>
                            
                          </div><br>
                          <div class='calkey'><div id='sample1'></div> <span class="ckey">Full Day</span>  <div id='sample2'></div> <span class="ckey">Half Day</span></div>
                              <div class="dash_list">
                                <br><br><h4>Upcoming Jobs</h4><br>
                                <table class='jobs_table4'>
                                  <tr style="background-color:#eee;">
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Location</th>
                                    <th>Subbing For</th>
                                  </tr>

                              @foreach ($jobsComing as $jobc)

                                  <?php
                                  $originalDate = $jobc->startDate;
                                  $newDate = date("M d, Y ", strtotime($originalDate));
                                  $originalTime = $jobc->startTime;
                                  $newTime = date("H:i ", strtotime($originalTime));
                                  $joblist = "<tr><td><strong>";
                                  $joblist .= $newDate;
                                  $joblist .= "</td></strong><td> ";
                                  $joblist .= $newTime;
                                  $joblist .= "am</td><td>";
                                  foreach ($locations as $location) :
                                    $joblist .= $location->location;
                                    $joblist .= "</td><td>Grade 3</td></tr>";
                                  endforeach;
                                  echo $joblist
                                  ?>
                            @endforeach
                            </table>
                            <br>

                            <br><h4>Completed Jobs</h4><br>
                            <table class='jobs_table4'>
                              <tr style="background-color:#eee;">
                                <th>Date</th>
                                <th>Time</th>
                                <th>Location</th>
                                <th>Subbing For</th>
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
                              foreach ($locations as $location) :
                                $joblist .= $location->location;
                                $joblist .= "</td><td>Grade 3</td></tr>";
                              endforeach;
                              echo $joblist
                              ?>
                            @endforeach
                            </table>
                  </div></div>



                    <!--M1-->
                    <div class="cell_content m1">
                      <div class="cell_content m1">
    <span class="subtitle">Please Select your Current Availability</span>
    <div class="calendar">
      <h3>Select a Date Range<br></h3>
      <p>Begin Date: <input type="text" id="datepicker">  -  End Date: <input type="text" id="datepicker2"></p>
      <br>OR<br><br>
      <h3>Select Specific Dates</h3>


    <div id="calmonth"><input type="checkbox" name="month" value="month"> All Month </div>

    <div class="sub_but"><a href="/sub">Save</a></div>
    </div>
  </div>
                    </div>

                    <!--M2-->
                    <div class="cell_content m2">

                      <br><h4>Available Jobs</h4><br>
                      <table class='jobs_table'>
                        <tr style="background-color:#eee">
                          <th style="width:5px;">Select</th>
                          <th style="width:15px;">Date</th>
                          <th>Time</th>
                          <th>Location</th>
                          <th>Job</th>
                        </tr>

                      @foreach ($jobsPast as $job)

                        <?php
                        $originalDate = $job->startDate;
                        $newDate = date("M d, Y ", strtotime($originalDate));
                        $originalTime = $job->startTime;
                        $newTime = date("H:i ", strtotime($originalTime));
                        $joblist = "<tr><td><input type='checkbox' name='accept' value='accept'></td><td><strong> ";
                        $joblist .= $newDate;
                        $joblist .= "</td></strong><td> ";
                        $joblist .= $newTime;
                        $joblist .= "am</td><td>";
                        foreach ($locations as $location) :
                          $joblist .= $location->location;
                          $joblist .= "</td><td>Grade 3</td></tr>";
                        endforeach;
                        echo $joblist
                        ?>
                      @endforeach
                    </table><br><br><br><div class="sub_but"><a href="/sub">Save</a></div>
                    </div>

                    <!--M3-->

                    <div class="cell_content m3">
                      <div><p><h3>Manage Jobs</h3></p>
                      <div class="dash_list">
                        <br><br><h4>Upcoming Jobs</h4><br>
                        <table class='jobs_table4'>
                          <tr style="background-color:#eee;">
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Subbing For</th>
                          </tr>

                      @foreach ($jobsComing as $jobc)

                          <?php
                          $originalDate = $jobc->startDate;
                          $newDate = date("M d, Y ", strtotime($originalDate));
                          $originalTime = $jobc->startTime;
                          $newTime = date("H:i ", strtotime($originalTime));
                          $joblist = "<tr><td><strong>";
                          $joblist .= $newDate;
                          $joblist .= "</td></strong><td> ";
                          $joblist .= $newTime;
                          $joblist .= "am</td><td>";
                          foreach ($locations as $location) :
                            $joblist .= $location->location;
                            $joblist .= "</td><td>Grade 3</td><td><a>EDIT</a></td></tr>";
                          endforeach;
                          echo $joblist
                          ?>
                    @endforeach
                    </table>
                    <br>

                    <br><h4>Completed Jobs</h4><br>
                    <table class='jobs_table4'>
                      <tr style="background-color:#eee;">
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>Subbing For</th>
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
                      foreach ($locations as $location) :
                        $joblist .= $location->location;
                        $joblist .= "</td><td>Grade 3</td></tr>";
                      endforeach;
                      echo $joblist
                      ?>
                    @endforeach
                    </table>
                  </div></div></div>


                    <!--M4-->
                    <div class="cell_content m4">
                        <p><h3>Manage Locations</h3></p>No Locations Available
                    </div>

                    <!--M5-->
                    <div class="cell_content m5">
                      <p><h3>Substitute Profile</h3></p>
                      <img src=<?= Auth::user()->pic ?> height=200><br><br>
        Name: <span class='blue'>{{Auth::user()->first}} {{Auth::user()->name}} </span><br>
        Cert(s): <span class='blue'>{{Auth::user()->certs}}</span><br>
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

                    <!--M6-->
                    <div class="cell_content m6">
                        Here M6
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="left">
    <div class="menu menu_item">
        <item id="opt0">Dashboard</item>
        <item id="opt1">Set Availability</item>
        <item id="opt2">Find Available Jobs</item>

      <div class="seperate"></div>

        <item id="opt3">Manage Jobs</item>
        <item id="opt4">Manage Locations</item>
        <item id="opt5">Manage Profile</item>

      <div class="seperate"></div>

        <item id="feedback">Feedback</item>
        <item id="MessageCenter">Message Center</item>

</div>
@endsection
