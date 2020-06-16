
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/logo.png" type="imag/x-icon"/ >
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <title>EVA</title>
</head>
<body>
  <div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger"><div></div></div>
    <div class="menu">
      <div>
        <div>
          <ul>
            <li><a class="<?php if($page=='home'){echo 'active';} ?>" href="index.php">Home</a></li>
            <li><a class="<?php if($page=='login'){echo 'active';} ?>" href="login.php">Sign In</a></li>
            <li><a class="<?php if($page=='signup'){echo 'active';} ?>" href="signup.php">Sign Up</a></li>
            <li><a class="<?php if($page=='contact'){echo 'active';} ?>" href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
