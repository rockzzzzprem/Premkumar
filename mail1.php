# Try running this locally.
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-3ax6xnjp29jd6fds4gc373sgvjxteol0');
$domain = "samples.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
  array('from'    => 'Excited User <excited@samples.mailgun.org>',
        'to'      => 'Mailgun Devs <devs@mailgun.net>',
        'subject' => 'Hello',
        'text'    => 'Testing some Mailgun awesomeness!'));