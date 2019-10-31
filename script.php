<?php
include 'db_connection.php';
$conn = OpenCon();
session_start();
$a = 0;
echo "<table>";
$rownum=0;
function updatenews(){
        $conn = OpenCon();
        $sql = "SELECT * FROM `flight` LIMIT 5 OFFSET ".$GLOBALS['a']; 
        $result = $conn->query($sql);
        $GLOBALS['rownum'] = $result->num_rows; 
        if ($result->num_rows > 0) {
        // output data of each row\
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>". $row["FLIGHT_CODE"]. "</td><td>". $row["ARRIVAL"]. "</td><td>" . $row["STATUS"] . "</td></tr>";
        }
        } else {
            echo "0 results";
        }
}
while(TRUE){
        updatenews();
        if($GLOBALS['a']<$GLOBALS['rownum'])
        $GLOBALS['a'] +=5;
}
echo "</table>";
echo $rownum;
?>