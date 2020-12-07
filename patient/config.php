						<?php	$servername = "localhost";
								$username = "urafnghd_root";
								$password = "reniertrenuela9";
								$dbname = "urafnghd_moral";

								// Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) {
								    die("Connection failed: " . $conn->connect_error);
								}
						?>	