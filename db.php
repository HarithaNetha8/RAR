<?php
$conn =mysqli_connect(
    'localhost',
    'root','','rent-a-ride'
    )
)
if ($conn) {
     echo "Connection sucess"
}
else {
    echo " unsuccessful"
}