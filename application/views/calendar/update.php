<?php
echo "<h1>" . "Edit birthday:" . "</h1>";
?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">

<fieldset>

<div class="container">
    <form action="<?= "" ?>/Calendar-CodeIgnitor0/calendar/edit_save/<?= $birthdays->id;?>" method="post"> 
<!---------------------------------------------------------------------------------------->
    <label>First Name</label><br>
    <input required type="text" name="person" placeholder="First Name" value="<?= $birthdays->person;?>"><br>
    <br>                                <!--VOORBEELD <?= $client['client_firstname'] ?> VOORBEELD-->
    <label>Date</label><br>
    <input required type="number" name="day" min="1" max="31" placeholder="Day" value="<?= $birthdays->day;?>">
    <label>-</label>
    <input required type="number" name="month" min="1" max="12" placeholder="Month" value="<?= $birthdays->month;?>">
    <label>-</label>
    <input required type="number" name="year" min="1910" max="<?= date('Y');?>" placeholder="Year" value="<?= $birthdays->year;?>"><br><br>

    <input type="submit" name="submit" value="Update Client">


</form>

</div>

</fieldset>

<br>
<br>
<a href="http://localhost/Calendar-CodeIgnitor0/calendar/show"  class="btn btn-primary">Back to home!</a>