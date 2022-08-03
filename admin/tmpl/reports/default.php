<?php

defined('_JEXEC') or die('Restricted Access');

use Joomla\CMS\Factory;

?>

<html>
    <body>

        <h2>Delete Reports</h2>

        <p>This button will delete ALL reports in the system.</p>
        <p>BE VERY CAREFUL!</p>

        <script>
            function deleteReports() {
            let text = "Are you sure you want to delete all the reports?\nEither OK or Cancel.";
            
            if (confirm(text) == true)
            {
                <?php
                    $db = JFactory::getDbo();
                    $query = $db->getQuery(true);
                    $query = "DELETE FROM reports";
                    $db->setQuery($query)->execute();
                ?>

                text = "All reports have been deleted.";
            }
            else
            {
                text = "You canceled.";
            }
            document.getElementById("response").innerHTML = text;
            }
        </script>

        <button class="btn btn-danger" onclick="deleteReports()">Delete All Reports</button>

        <p id="response"></p>

    </body>
</html>