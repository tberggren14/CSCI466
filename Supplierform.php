  <?php
  include("secrets.php");
try {
    $dsn = "mysql:host=courses;dbname=z1906236";
    $pdo = new PDO($dsn, $username, $password);
}
catch (PDOexception $e) {
   echo " Connection to database failed: " . $e->getmessage();
}

switch ($_POST['Supplier']) {
	case 'Smith':
		$sql = "SELECT * FROM Suppliers WHERE SNAME = 'Smith';";
    $result = $pdo->query($sql);
        echo "<table>";
            echo "<tr>";
                echo "<th>SNAME</th>";
                echo "<th>STATUS</th>";
                echo "<th>CITY</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['SNAME'] . "</td>";
                echo "<td>" . $row['STATUS'] . "</td>";
                echo "<td>" . $row['CITY'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
		break;

	case 'Jones':
		$sql = "SELECT * FROM Suppliers WHERE SNAME = 'Jones';";
    $result = $pdo->query($sql);
        echo "<table>";
            echo "<tr>";
                echo "<th>SNAME</th>";
                echo "<th>STATUS</th>";
                echo "<th>CITY</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['SNAME'] . "</td>";
                echo "<td>" . $row['STATUS'] . "</td>";
                echo "<td>" . $row['CITY'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
		break;

	case 'Blake':
		$sql = "SELECT * FROM Suppliers WHERE SNAME = 'Blake';";
    $result = $pdo->query($sql);
        echo "<table>";
            echo "<tr>";
                echo "<th>SNAME</th>";
                echo "<th>STATUS</th>";
                echo "<th>CITY</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['SNAME'] . "</td>";
                echo "<td>" . $row['STATUS'] . "</td>";
                echo "<td>" . $row['CITY'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
		break;

	case 'Clark':
		$sql = "SELECT * FROM Suppliers WHERE SNAME = 'Clark';";
    $result = $pdo->query($sql);
        echo "<table>";
            echo "<tr>";
                echo "<th>SNAME</th>";
                echo "<th>STATUS</th>";
                echo "<th>CITY</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['SNAME'] . "</td>";
                echo "<td>" . $row['STATUS'] . "</td>";
                echo "<td>" . $row['CITY'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
		break;

    case 'Adams':
		$sql = "SELECT * FROM Suppliers WHERE SNAME = 'Adams';";
    $result = $pdo->query($sql);
        echo "<table>";
            echo "<tr>";
                echo "<th>SNAME</th>";
                echo "<th>STATUS</th>";
                echo "<th>CITY</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['SNAME'] . "</td>";
                echo "<td>" . $row['STATUS'] . "</td>";
                echo "<td>" . $row['CITY'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
		break;

	default:
		$message = 'You are not authorized to access this page';
}
  
    ?>