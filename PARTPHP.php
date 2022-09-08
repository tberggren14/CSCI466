<html>
    <head>
        <title>Suppliers and Parts</title>
    </head>
    <body>
    <pre>
<?php
include("secrets.php");

try {
    $dsn = "mysql:host=courses;dbname=z1906236";
    $pdo = new PDO($dsn, $username, $password);

    $rs = $pdo->query("SELECT * FROM Suppliers;");
    $row = $rs->fetchALL(PDO::FETCH_ASSOC);

    function draw_table($row){
    echo "<table border=1 cellspacing=1>";
        echo "<tr>";
        foreach ($row[0] as $key => $item) {
        echo "<th>$key</th>";
        }
        echo "</tr>";
        foreach ($row as $row) {
            echo "<tr>";
        foreach ($row as $key => $item) {
            echo "<td>$item</td>";
    }
    echo "</tr>";
    }
    echo "</table>";
}
    
    draw_table($row);

    $rs = $pdo->query("SELECT * FROM Parts;");
    $row = $rs->fetchALL(PDO::FETCH_ASSOC);

    draw_table($row);

}
catch (PDOexception $e) {
   echo " Connection to database failed: " . $e->getmessage();
}

?>

<form action="http://students.cs.niu.edu/~z1906236/Partform.php" method="post">
    <div>
    <label for="Part">Choose a Part:</label>
    <select name="Parts" id="Parts">
    <option value="nut">Nut</option>
    <option value="bolt">Bolt</option>
    <option value="screw">Screw</option>
    <option value="cam">Cam</option>
    <option value="cog">Cog</option>
    </div>
    <input type="submit" value="submit">
</form>

<br>

<form action="http://students.cs.niu.edu/~z1906236/Supplierform.php" method="post">
    <div>
    <label for="Supplier">Choose a Supplier:</label>
    <select name="Supplier" id="Supplier">
    <option value="Smith">Smith</option>
    <option value="Jones">Jones</option>
    <option value="Blake">Blake</option>
    <option value="Clark">Clark</option>
    <option value="Adams">Adams</option>
    </div>
    <input type="submit" value="submit">
</form>

<br>

<form name="Getform"method="POST">
    <label for="NewPart">Add a new part:</label><br>
    <input type="text" name="NewPart" ><br>
    <?php
try {
    $dsn = "mysql:host=courses;dbname=z1906236";
    $pdo = new PDO($dsn, $username, $password);
    $sql = $pdo->exec("ALTER TABLE Parts ADD NewP CHAR(20)");
}
catch (PDOexception $e) {
   echo " Connection to database failed: " . $e->getmessage();
}
?>
</form>

<form name="Getform"method="POST">
    <label for="NewSupplier">Add a new Supplier:</label><br>
    <input type="text" name="NewSupplier"><br>
</form>

<?php
try {
    $dsn = "mysql:host=courses;dbname=z1906236";
    $pdo = new PDO($dsn, $username, $password);
    $sql = $pdo->exec("ALTER TABLE Suppliers ADD SNAME CHAR(20)");
}
catch (PDOexception $e) {
   echo " Connection to database failed: " . $e->getmessage();
}
?>





