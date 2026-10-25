<?php
require 'validate.inc.php'; if
(validateName($_POST, 'surname')) {
    echo "Data OK! <br>";
} else {
    echo "Data invalid <br>";
}
foreach ($_POST as $key => $value) {
    echo "($key) => ($value)<br>";
}

// Surname = $_POST['surname'];
?>