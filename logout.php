<?php
                if(isset($_SESSION["userid"]))
                {
                    destroy_session();
                    header("Location: frontpage.html");
                }
               
                
?>