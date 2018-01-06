
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
                               {{ 93 }}


                            </div>
                            <span class="f22">Substitutes</span>
                          </div>
                          <div class="dash_sq">
                              <div class="dash_num">
                                  @foreach ($jobsComing as $job)
                                  @endforeach
                                   {{ 4 }}
                              </div>
                            <span class="f22">Unfilled Positions</span>
                          </div>

                              <div class="dash_list">
                                .<br><br><p><h3>Canceled Jobs Less than 24 Hours</h3></p>
                                <table class='jobs_table4'>
                                  <tr style="background-color:#eee;">
                                    <th>District</th>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th>Contact</th>
                                  </tr>

                              @foreach ($allusers as $alluser)

                                  <?php

                                  $peoplelist = "<tr><td>";
                                  $a=array("Millville","Ocean City","Salem","Pleasantville","West Deptford");
                                  $random_keys=array_rand($a,3);
                                  $peoplelist .= $a[$random_keys[0]];
                                  $peoplelist .= "</td><td><strong>";
                                  $peoplelist .= $alluser->first;
                                  $peoplelist .= " ";
                                  $peoplelist .= $alluser->name;
                                  $peoplelist .= "</td></strong><td> ";
                                  $peoplelist .= "<a>Details</a>";
                                  $peoplelist .= "</td><td>";


                                    $peoplelist .= "<a>Contact</a></td></tr>";

                                  echo $peoplelist
                                  ?>
                            @endforeach
                            </table>
                            <br>


                  </div>
                  <br><br><p><h3>Top Performers</h3></p>

                  @foreach ($allusers as $alluser)
                    <?php
                  $snap = "<div class='snapshot'><img src='$alluser->pic' height=100><div class='sideprofile'>Name: <span ><strong>";
                  $snap .= $alluser->first;
                  $snap .= " ";
                  $snap .= $alluser->name;
                  $snap .= "</span></strong><br> Today's Job: <span>";
                  $snap .= $alluser->job_title;
                  $snap .= "</span><br>Primary Phone: <span >";
                  $snap .= $alluser->primary_phone;
                  $snap .= "</span><br><span style='color:blue; font-size:9pt;'><a>CONTACT QuickSub ABOUT THIS PERSON</a></span></div></div>";
                  echo $snap;
                  ?>
                  @endforeach
                  </div>

                </div>



                    <!--M2-->
                    <div class="cell_content m2">
                      <p><h3>Reports</h3></p>

                      <div class="abform">
                        Report:
                        <select name="reason">
                          <option value="sick">Late Cancelations</option>
                          <option value="personal">All Cancelations</option>
                          <option value="professional">Highest Rated</option>
                            <option value="professional">Lowest Rated</option>
                              <option value="professional">Last Minute Acceptance</option>
                                <option value="professional">Frequently Requested</option>
                                  <option value="professional">Asked Not to Return</option>
                          <option value="All Available">All Available Substitutes</option>
                        </select><br><br>
                        Date Range:
                        <select name="reason">
                          <option value="sick">Last 24 Hours</option>
                          <option value="personal">Past 7 Days</option>
                          <option value="professional">Past 30 Days</option>
                            <option value="professional">Past 6 Months</option>
                              <option value="professional">YTD</option>

                        </select><br><br>
                        District:
                        <select name="reason">
                          <option value="sick">All</option>
                          <option value="personal">Millville</option>
                          <option value="professional">Salem</option>
                            <option value="professional">Pleasantville</option>
                              <option value="professional">Ocean City</option>
                                <option value="professional">West Deptford</option>

                        </select><br><br>
                        <br><div class="sub_but"><a href="/admin">Run</a></div>

                      </div>
                    </div>

                    <!--M3-->
                    <div class="cell_content m3">
                      <p><h3>Outreach</h3></p>

                      <div class="abform">
                        Outreach to Whom:
                        <select name="reason">
                          <option value="sick">Late Cancelations</option>
                          <option value="personal">All Cancelations</option>
                          <option value="professional">Highest Rated</option>
                            <option value="professional">Lowest Rated</option>
                              <option value="professional">Last Minute Acceptance</option>
                                <option value="professional">Frequently Requested</option>
                                  <option value="professional">Asked Not to Return</option>
                          <option value="All Available">All Available Substitutes</option>
                        </select><br><br>
                        Date Range:
                        <select name="reason">
                          <option value="sick">Last 24 Hours</option>
                          <option value="personal">Past 7 Days</option>
                          <option value="professional">Past 30 Days</option>
                            <option value="professional">Past 6 Months</option>
                              <option value="professional">YTD</option>

                        </select><br><br>
                        District:
                        <select name="reason">
                          <option value="sick">All</option>
                          <option value="personal">Millville</option>
                          <option value="professional">Salem</option>
                            <option value="professional">Pleasantville</option>
                              <option value="professional">Ocean City</option>
                                <option value="professional">West Deptford</option>

                        </select><br><br>
                        <br><div class="sub_but"><a href="/admin">Create Message</a></div>

                      </div>
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
      <item id="opt0">Today</item>
      <item id="opt2">Reports</item>
      <item id="opt3">Outreach</item>
      <item id="opt4">Database</item>
    <div class="seperate"></div>

      <item id="opt5">School Contacts</item>
      <item id="opt6"></item>

    <div class="seperate"></div>

      <item id="feedback">Feedback</item>
      <item id="MessageCenter">Message Center</item>

</div>
@endsection
