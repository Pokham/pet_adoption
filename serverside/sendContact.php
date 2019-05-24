<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset = "utf-8">
        <title>Contact</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    
    <body>
        <div id = "container">
            <!--
            <header>
                <nav>
                    <ul>
                        <li><a href="main.html">Home</a></li>
                        <li><a href="About.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </header>
            -->
        <div class="holder_content2">
          <section class="group6">
            <h3>Contact Us</h3>
            
    <?php
        $servername = "localhost";
	      $username = "root";
	      $password = "";
	      $dbname = "AnimalShelters";

	      $conn = mysqli_connect($servername, $username, $password, $dbname);
	      if (!$conn)
		        die("Connection failed: " . mysqli_connect_error());
		        
		    $name = $_POST["name"];
		    $email = $_POST["email"];
		    $comments = $_POST["comments"];
		    
		    $sql = "INSERT INTO Contacts (Name, Email, Message) VALUES ('$name', '$email', '$comments')";
        if ($conn->query($sql) === TRUE)
            echo '<p>Thank you! Your feedback is greatly appreciated!</p>';
        else
            echo '<p>Sorry, an error occured.</p>';
            
        $conn->close();
    ?>
            
          </section>
        </div>
      </div>
    </body>
</html>