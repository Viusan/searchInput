<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SearchBar</title>
  <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
  </script>
  <script src="ajax.js"></script>
</head>
<body>
  <div class="content">
    <h1>Search after a user</h1>
    <input type="text" name="name" 
    name="q"
    autocapitalize="off"
    autocomplete="off"
    autocorrect="off"
    spellcheck="false"
    title="Rechercher"> <!-- Attributes to hide autofill -->
    <div id="test"></div><!-- Display data -->
  </div>
 
</body>
</html>