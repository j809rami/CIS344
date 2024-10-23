<!DOCTYPE html>
<html>
  <head>
    <title>Joses Tutoring Services</title>
  </head>
  <body>
    <header>
        <h1>Appointment Options for Tutoring</h1>
        <nav>
            <ul>
                <li><a href="index.php">Tutoring Home Page </a></li>
                <li><a href="science.php">Science Service</a></li>
                <li><a href="math.php">Math Service</a></li>
                <li><a href="english.php">English Service</a></li>
                <li><a href="history.php">History Service</a></li>
                <li><a href="technology.php">Technology Service</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Joses Tutoring Services For Mathematics</h2>
        <p>Welcome to our tutoring page for Math. We offer tutoring in various math subjects including calculus, algebra, and geometry.</p>
        
        <h3>Order Form For Your Math Tutoring Session</h3>
        <form action="processorder.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="subject">Subject:</label>
            <select id="subject" name="subject"required>
                <option value="science">Science</option>
                <option value="math">Math</option>
                <option value="english">English</option>
                <option value="history">History</option>
                <option value="technology">Technology</option>
            </select><br>

            <label for="date">Tutoring Appointment Date:</label>
            <input type="date" id="date" name="date" required><br>

            <input type="submit" value="Confirm Session">
        </form>
    </main>
  </body>
</html>
