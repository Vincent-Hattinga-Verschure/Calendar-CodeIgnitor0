<?php
echo "<h1>" . "Create new birthday:" . "</h1>";
?>


<fieldset>

<div class="container">
    <form action="calendar/CreateExtra" method="post">

<label>First Name</label><br>
<input required type="text" name="person" placeholder="First Name"><br>
<br>
<label>Date</label><br>
<input required type="number" name="day" min="1" max="31" placeholder="Day">
<label>-</label>
<input required type="number" name="month" min="1" max="12" placeholder="Month">
<label>-</label>
<input required type="number" name="year" min="1910" max="2050" placeholder="Year"><br><br>

 <input type="submit" name="submit" value="Registreer Client">


</form>

</div>

</fieldset>
<br>
<br>
<a href="http://localhost/Calendar-CodeIgnitor0/calendar/show">Back to home!</a>

