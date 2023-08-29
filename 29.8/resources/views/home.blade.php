<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Your Blue  </title>
  <style>
    /* Reset some default styles */
body, h1, h2, h3, p, ul, li {
  margin: 0;
  padding: 0;
}

/* Set the blue color theme */
body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  color: #333;
}

header, nav, main, footer {
  padding: 20px;
}

header {
  background-color: #0074d9;
  color: #fff;
}

nav ul {
  list-style: none;
  display: flex;
  justify-content: center;
  background-color: #3498db;
  padding: 10px 0;
}

nav a {
  color: #fff;
  text-decoration: none;
  padding: 5px 15px;
}

nav a:hover {
  background-color: #2980b9;
}

main {
  background-color: #ecf0f1;
  border-radius: 5px;
  padding: 20px;
}

footer {
  text-align: center;
  background-color: #34495e;
  color: #fff;
  padding: 10px 0;
}

  </style>
</head>
<body>
  <header>
    <h1>Welcome to My Blue Homepage</h1>
  </header>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
  <main>
    <section>
      <h1>{{$name}}</h1>
      <h2>About Us</h2>
      <p>We are dedicated to providing you with the best blue-themed content on the web!</p>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Your Blue Homepage. All rights reserved.</p>
  </footer>
</body>
</html>
