




<div class="absform"><h4>Create an Absence</h4>
  <form>

    @include('jobs/picker')


    <br>
      <input type="radio" name="wholehalf" value="full" checked> Full Day<br>
      <input type="radio" name="wholehalf" value="am"> Half Day AM<br>
      <input type="radio" name="wholehalf" value="pm"> Half Day PM<br><br>
    Reason:
    <select name="reason">
      <option value="sick">Sick</option>
      <option value="personal">Personal</option>
      <option value="professional">Professional</option>
      <option value="FMLA">FMLA</option>
    </select><br><br>
    Substitute Required:
    <select name="subyn">
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
  </form>
  <a href="#"><div style="height 20px;width:70px;padding:10px;background-color:#95D5FB">SUBMIT</div></a>
</div><br>
