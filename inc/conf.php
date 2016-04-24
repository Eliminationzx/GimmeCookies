<?PHP
// Protection against unauthorized access
if (!defined('GimmeCookie')) {
    header('Location: ./main');
    die;
}

// Control panel settings
$cp = array(
    'login' => 'qwerty',  // Login
    'password' => 'qwerty'  // Password
);

// Site settings
$site = array(
    'titl' => 'GimmeCookie',  // Site name
    'mail' => 'GimmeCookie@mail.com' // Your e-mail
);