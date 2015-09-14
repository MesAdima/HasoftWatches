<?php


echo "psst";
                          $servername = "http://192.168.170.15";
                          $username = "76692";
                          $password = "8mbRDSfZe";
                          $dbname = "db76692";

                            // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                          if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                              } 

                          $sql = "SELECT category_name FROM Categories";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                                // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    echo  $row["category_name"]. "  " ."<br>";
                                }
                            } 
                          else {
                                echo "0 results";
                            }
                            $conn->close();
                        ?>