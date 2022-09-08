  <?php
  include("secrets.php");
try {
    $dsn = "mysql:host=courses;dbname=z1906236";
    $pdo = new PDO($dsn, $username, $password);
}
catch (PDOexception $e) {
   echo " Connection to database failed: " . $e->getmessage();
}
switch ($_POST['Parts']) {
	case 'nut':
		$sql = "SELECT * FROM Parts WHERE PNAME = 'Nut';";
    $result = $pdo->query($sql);
        echo "<table>";
            echo "<tr>";
                echo "<th>PNAME</th>";
                echo "<th>COLOR</th>";
                echo "<th>WEIGHT</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['PNAME'] . "</td>";
                echo "<td>" . $row['COLOR'] . "</td>";
                echo "<td>" . $row['WEIGHT'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
		break;

	case 'bolt':
		$sql = "SELECT * FROM Parts WHERE PNAME = 'Bolt';";
    $result = $pdo->query($sql);
        echo "<table>";
            echo "<tr>";
                echo "<th>PNAME</th>";
                echo "<th>COLOR</th>";
                echo "<th>WEIGHT</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['PNAME'] . "</td>";
                echo "<td>" . $row['COLOR'] . "</td>";
                echo "<td>" . $row['WEIGHT'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
		break;

	case 'screw':
		$sql = "SELECT * FROM Parts WHERE PNAME = 'Screw';";
    $result = $pdo->query($sql);
        echo "<table>";
            echo "<tr>";
                echo "<th>PNAME</th>";
                echo "<th>COLOR</th>";
                echo "<th>WEIGHT</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['PNAME'] . "</td>";
                echo "<td>" . $row['COLOR'] . "</td>";
                echo "<td>" . $row['WEIGHT'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
		break;

	case 'cam':
		$sql = "SELECT * FROM Parts WHERE PNAME = 'Cam';";
    $result = $pdo->query($sql);
        echo "<table>";
            echo "<tr>";
                echo "<th>PNAME</th>";
                echo "<th>COLOR</th>";
                echo "<th>WEIGHT</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['PNAME'] . "</td>";
                echo "<td>" . $row['COLOR'] . "</td>";
                echo "<td>" . $row['WEIGHT'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
		break;

    case 'cog':
		$sql = "SELECT * FROM Parts WHERE PNAME = 'Cog';";
    $result = $pdo->query($sql);
        echo "<table>";
            echo "<tr>";
                echo "<th>PNAME</th>";
                echo "<th>COLOR</th>";
                echo "<th>WEIGHT</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['PNAME'] . "</td>";
                echo "<td>" . $row['COLOR'] . "</td>";
                echo "<td>" . $row['WEIGHT'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
		break;

	default:
		$message = 'You are not authorized to access this page';
}
  
    ?>