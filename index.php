<?php
include "Tabularsheet.php";

$table = new Tabularsheet\Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Tabularsheet\Row();
$row->numCells = 3;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>

