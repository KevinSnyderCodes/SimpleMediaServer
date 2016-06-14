<?php

include 'global.php';

session_unset();
session_destroy();

include 'header.php';

?>

<p>You have been logged out.</p>

<?php

include 'footer.php';

?>