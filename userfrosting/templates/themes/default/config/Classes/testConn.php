<html>
<head></head>
<body>
<?php
require_once "Classes/PHPExcel.php";
$tmpfname = "sampleunit01.xlsx";
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		$excelObj = $excelReader->load($tmpfname);
		$worksheet = $excelObj->getSheet(0);
		$lastRow = $worksheet->getHighestRow();
		
		echo "<table>";
		for ($row = 1; $row <= $lastRow; $row++) {
			 echo "<tr><td>";
			 echo $worksheet->getCell('A'.$row)->getValue();
			 echo "</td><td>";
			 echo $worksheet->getCell('B'.$row)->getValue();
			 echo "</td><td>";
			  echo $worksheet->getCell('C'.$row)->getValue();
			 echo "</td><td>";
			  echo $worksheet->getCell('D'.$row)->getValue();
			 echo "</td><td>";
			  echo $worksheet->getCell('E'.$row)->getValue();
			 echo "</td><td>";
			  echo $worksheet->getCell('F'.$row)->getValue();
			 echo "</td><td>";
			  echo $worksheet->getCell('G'.$row)->getValue();
			 echo "</td><td>";
			  echo $worksheet->getCell('H'.$row)->getValue();
			 echo "</td><td>";
			  echo $worksheet->getCell('I'.$row)->getValue();
			 echo "</td><td>";
			  echo $worksheet->getCell('J'.$row)->getValue();
			 echo "</td></tr>";
		}
		echo "</table>"
?>

</body>
</html>


