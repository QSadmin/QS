
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
                                   {{ 0 }}
                              </div>
                            <span class="f22">Unfilled Absences</span>
                          </div>

                              <div class="dash_list">
                                .<br><br><p><h3>Scheduled Absences</h3></p>
                                <table class='jobs_table4'>
                                  <tr style="background-color:#eee;">
                                    <th>Reason</th>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th>Contact</th>
                                  </tr>

                              @foreach ($allusers as $alluser)

                                  <?php

                                  $peoplelist = "<tr><td>";
                                  $a=array("Sick","PD","FMLA","Personal","Funeral");
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
                  <br><br><p><h3>Who to Expect</h3></p>

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
                      <div class="dash_list">
                        <h4>Absences This Week</h4><br>
                        <h4>Monday, October 30</h4><br>
                        <table class='jobs_table4'>
                          <tr style="background-color:#eee;">
                            <th>Reason</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Contact</th>
                          </tr>

                      @foreach ($allusers as $alluser)

                          <?php

                          $peoplelist = "<tr><td>";
                          $a=array("Sick","PD","FMLA","Personal","Funeral");
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
                    <h4>Tuesday, October 31</h4><br>
                    <table class='jobs_table4'>
                      <tr style="background-color:#eee;">
                        <th>Reason</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Contact</th>
                      </tr>

                    @foreach ($allusers as $alluser)

                      <?php

                      $peoplelist = "<tr><td>";
                      $a=array("Sick","PD","FMLA","Personal","Funeral");
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
                    <h4>Wednesday, November 1</h4><br>
                    <table class='jobs_table4'>
                      <tr style="background-color:#eee;">
                        <th>Reason</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Contact</th>
                      </tr>

                  @foreach ($allusers as $alluser)

                      <?php

                      $peoplelist = "<tr><td>";
                      $a=array("Sick","PD","FMLA","Personal","Funeral");
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
                <h4>Thursday, November 2</h4><br>
                <table class='jobs_table4'>
                  <tr style="background-color:#eee;">
                    <th>Reason</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Contact</th>
                  </tr>

              @foreach ($allusers as $alluser)

                  <?php

                  $peoplelist = "<tr><td>";
                  $a=array("Sick","PD","FMLA","Personal","Funeral");
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
            <h4>Friday, November 3</h4><br>
            <table class='jobs_table4'>
              <tr style="background-color:#eee;">
                <th>Reason</th>
                <th>Name</th>
                <th>Details</th>
                <th>Contact</th>
              </tr>

          @foreach ($allusers as $alluser)

              <?php

              $peoplelist = "<tr><td>";
              $a=array("Sick","PD","FMLA","Personal","Funeral");
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


          </div></div>




                    <!--M3-->
                    <div class="cell_content m3">
                      <p><h3>School Profile</h3></p>
                        <br><br>
          Name: <span class='blue'>Zeller Elementary School </span><br>

          Primary Phone: <span class='blue'>{{Auth::user()->primary_phone}}</span><br>
          Other Phone: <span class='blue'>{{Auth::user()->secondary_phone}}</span><br><br>
          Address:
          <span class='blue'>{{Auth::user()->address}}<br>
          {{Auth::user()->city}},
          {{Auth::user()->state}}<br>
          {{Auth::user()->zip}}</span><br><br><br><hr><br>
          Approved Admins: <span class='blue'>(select admins)</span><br>
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
      <item id="opt0">Today</item>
      <item id="opt2">This Week</item>
      <item id="opt2">This Month</item>
      <item id="opt2">Past Absences YTD</item>
    <div class="seperate"></div>

      <item id="opt3">Manage School</item>
      <item id="opt4"></item>

    <div class="seperate"></div>

      <item id="feedback">Feedback</item>
      <item id="MessageCenter">Message Center</item>

</div>
@endsection
