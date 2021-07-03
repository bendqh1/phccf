$topic = $_POST['topic']; # Required;

$name = $_POST['name'];   # Required;
$email = $_POST['email']; # Required;

$phone = $_POST['phone'];
$url = $_POST['url']; # Name attribute is "url" but input type is "text" because "url" obligates http:// or https:// which users normally don't input;

$notes = $_POST['notes']; # Normally turned off to prevent spam;

$date = $_POST['date'];
$time = $_POST['time'];
