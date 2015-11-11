<form class="row" action="sendemail.php" method="post" name="mailingList" style="padding:60px;background:#212121;">

  <div>
      <h1>Join My Mailing List</h1>
  </div>
  <span>
    <input class="gate" id="nameGate" type="text" name="name" placeholder="Your prefered name!" data-role="none"/ required><label for="class">Name</label>
  </span>
  <span>
    <input class="gate" id="emailGate" type="email" name="email" placeholder="Your favorite email!" data-role="none"/ required><label for="element">Email</label>
  </span>
  <span>
    <input class="gate" id="phoneGate" type="tel" name="telephone" placeholder="Phone (Not Required)" data-role="none"/><label for="move">Phone</label>
  </span>
  <br>
  <span>
    <button id="submit_mail_list" class="submit" type="submit" value="Join Now" name="submit" data-role="none">Join Now</button>
  </span>
  <br>

</form>
