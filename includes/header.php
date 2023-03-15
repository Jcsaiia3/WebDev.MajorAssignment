<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <body style="background-color:#CE7E00;">
  <title>Intro to Web Development</title>
  </head>
  <body>

    <header>
      <h1>My Blog</h1>
    </header>

      <nav>
        <ul>
          <!-- Need to use /~saiiaj15/ because of Elvis user directories -->
          <li><a href="/~saiiaj15/">Home</a></li>
          <?php if (Auth::isLoggedIn()): ?>

           <li><a href="/~saiiaj15/admin/">Admin</a></li>
           <li><a href="/~saiiaj15/logout.php">Log Out</a></li>

          <?php else: ?>

          <li><a href="/~saiiaj15/login.php">Log In</a></li>

          <?php endif; ?>

        </ul>
      </nav>


  <main>
