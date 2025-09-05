<!DOCTYPE html>
<html lang="en">
<head>
  <title>City Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f6f8;
      color: #333;
    }

    header {
      background-color: #1e293b;
      padding: 30px;
      text-align: center;
      font-size: 35px;
      color: #ffffff;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    section {
      display: flex;
      min-height: 90vh;
    }

    nav {
      flex: 1;
      background: #0f172a;
      padding: 20px;
      color: #fff;
    }

    nav ul {
      list-style-type: none;
    }

    nav li {
      margin-bottom: 15px;
    }

    nav a {
      color: #cbd5e1;
      text-decoration: none;
      font-size: 18px;
      padding: 10px 15px;
      display: block;
      border-radius: 5px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    nav a:hover {
      background-color: #1e40af;
      color: #fff;
    }

    article {
      flex: 3;
      background-color: #ffffff;
      padding: 30px;
      box-shadow: inset 0 1px 4px rgba(0,0,0,0.05);
    }

    footer {
      background-color: #1e293b;
      padding: 10px;
      text-align: center;
      color: #cbd5e1;
    }

    @media (max-width: 768px) {
      section {
        flex-direction: column;
      }

      nav {
        text-align: center;
      }

      nav ul {
        padding: 0;
      }

      nav a {
        display: inline-block;
        margin: 5px;
      }
    }
  </style>
</head>
<body>

<header>
  <h2>City Dashboard</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="homepage.php?page=cagayan">Cagayan</a></li>
      <li><a href="homepage.php?page=manila">Manila</a></li>
      <li><a href="homepage.php?page=cebu">Cebu</a></li>
    </ul>
  </nav>

  <article>
    <?php
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
      switch ($page) {
        case 'cagayan':
          include 'modular/cagayan.php';
          break;
        case 'manila':
          include 'modular/manila.php';
          break;
        case 'cebu':
          include 'modular/cebu.php';
          break;
      }
    } else {
      echo "<h2>Welcome to the City Dashboard</h2>";
      echo "<p>Please select a city from the menu.</p>";
    }
    ?>
  </article>
</section>
</body>
</html>
