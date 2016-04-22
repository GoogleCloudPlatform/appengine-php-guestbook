<html>
  <!-- [START csslink] -->
  <head>
    <link type="text/css" rel="stylesheet" href="/stylesheets/main.css" />
  </head>
  <!-- [END csslink] -->
  <body>
    <?php
    // [START formprocessing]
    if (array_key_exists('content', $_POST)) {
        echo "You wrote:<pre>\n";
        echo htmlspecialchars($_POST['content']);
        echo "\n</pre>";
    }
    // [END formprocessing]
    ?>
    <form action="/sign" method="post">
      <div><textarea name="content" rows="3" cols="60"></textarea></div>
      <div><input type="submit" value="Sign Guestbook"></div>
    </form>
  </body>
</html>
