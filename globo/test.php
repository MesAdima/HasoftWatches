<?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname = "db76692";

                            // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                          if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                              } 

                            //$sql = mysql_query("SELECT category_name FROM categories");
                             //$result = $conn->query($sql);
                                //while ($row = mysql_fetch_array($sql)){
                                //echo "<option value=\"Category\">" . $row['category_name'] . "</option>";
                              //}

                            //$conn->close();
                        ?>