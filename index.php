<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <title>Login to Unity Party Game!</title>
</head>

<body id="body" onload="setbackground()">
  <div class="links" id="links">
    <a href="https://www.instagram.com/" target="_blank">Instagram</a>
    <a href="https://twitter.com/" target="_blank">Twitter</a>
    <a href="https://twitch.tv/" target="_blank">Twitch</a>
  </div>

  <div class="login">
    <div class="title">
      Project UPG!
    </div>

    <div class="form" id="form">
      <form action="javascript:submit()">
        <ul class="flex-outer">
          <li>
            <label for="code">Code</label>
            <input class="field" type="number" id="code" placeholder="0000" required max="9999" min="1000">
          </li>
          <li>
            <label for="name">Name</label>
            <input class="field" type="text" id="name" placeholder="Name" required maxlength="12">
          </li>
        </ul>
        <div class="row">
          <button type="submit" id="submit">Join Game</button>
        </div>
      </form>
    </div>
  </div>

  <div>
    <img class="svg" id="svg">
    <img class="svg2" id="svg2">
  </div>

  <script>
    //submitting form
    function submit() {
      localStorage.setItem("name", document.getElementById("name").value);
      console.log(localStorage.getItem("name"));
      setCookie();
    }
    function loadName() {
      var nameInput = document.getElementById("name");
       nameInput.value = localStorage.getItem("name");
    }
    loadName();
  </script>
    <!-- saving form to cookies -->
    <script src="cookie.js"></script>
  <!-- changing backgrounds script -->
  <script src="background.js"></script>

</body>

</html>