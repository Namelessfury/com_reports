<?php

defined('_JEXEC') or die('Restricted Access');

use Joomla\CMS\Factory;

//deletes all reports when the red button is pressed 
if(isset($_POST['deleteReports']))
{
    $db = JFactory::getDbo();
    $query = $db->getQuery(true);
    $query = "DELETE FROM reports";
    $db->setQuery($query)->execute();
    echo 'The reports have been deleted';
}
?>

<html>
    <body>
        <br><br>
        <h2>Delete Reports</h2>

        <p>This button will <b>delete all reports</b> currently in the system</p>
        <p>BE VERY CAREFUL!</p>
        
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="checkboxConfirm" onchange="document.getElementById('deleteReports').disabled = !this.checked;">
            <label class="form-check-label" for="checkboxConfirm">Yes, I want to delete all reports</label>
        </div>

        <br>

        <form method="post">
            <input class="btn btn-danger" type="submit" name="deleteReports" id="deleteReports" value="Delete All Reports" disabled/>
        </form>
    </body>
</html>