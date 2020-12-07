						<?php	
							$servername = "localhost";
							$username = "urafnghd_root";
							$password = "reniertrenuela9";
							$dbname = "urafnghd_moral";

							// Create connection
							$conn = mysqli_connect($servername, $username, $password, $dbname);
							// Check connection
							if (!$conn) {
							    die("Connection failed: " . $conn->connect_error);
							}
						?>	