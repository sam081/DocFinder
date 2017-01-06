<?php
       $button = $_POST [ 'submit' ];
       $search = $_POST [ 'search' ]; 
 
       if( !$button )
             echo "you didn't submit a keyword";
       else {
             if( strlen( $search ) <= 1 )
                    echo "Search term too short";
             else {
                    echo "You searched for <b> $search </b> <hr size='1' > </ br > ";
                    $link=mysqli_connect( 'localhost') ; 
                    mysqli_select_db($link,'doctorfinder');
 
                /*    $search_exploded = explode ( " ", $search );
                    $x = 0; 
                    foreach( $search_exploded as $search_each ) {
                           $x++;
                           $construct = "";
                           if( $x == 1 )
                                  $construct .="login_id LIKE '%$search_each%'";
                           else
                                  $construct .="AND login_id LIKE '%$search_each%'";
                    }*/
                    $qry = "SELECT * FROM doctor WHERE username like '%$search%'";
                    $run = mysqli_query($link,$qry);
 
                    $foundnum = mysqli_num_rows($run);
 
                    if ($foundnum == 0)
                           echo "No search result found"; 
                    else {
                           echo "$foundnum results found !<p>";
 
                           while( $row = mysqli_fetch_assoc($run) ) {
                                  echo '<br>'.$row['l'].'<br> <hr>'.$row['password'];                                 
                          }
                    }
 
             }
       }
 ?>