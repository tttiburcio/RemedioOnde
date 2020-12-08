<?php
require("conecta.php");

function parseToXML($htmlStr)
{
    $xmlStr = str_replace('<', '&lt;', $htmlStr);
    $xmlStr = str_replace('>', '&gt;', $xmlStr);
    $xmlStr = str_replace('"', '&quot;', $xmlStr);
    $xmlStr = str_replace("'", '&#39;', $xmlStr);
    $xmlStr = str_replace("&", '&amp;', $xmlStr);
    return $xmlStr;
}

$code = $_GET['code'];

// Select all the rows in the markers table
$result_markers = "";
if ($code == -1) {
    $result_markers = "SELECT * FROM markers";
    $resultado_markers = mysqli_query($conn, $result_markers);
} else {
    $result_markers = "SELECT * FROM tbmedicamento_ubs mu inner join markers m on mu.codUbs = m.codUbs where mu.codMedicamento = $code";
    $resultado_markers = mysqli_query($conn, $result_markers);
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row_markers = mysqli_fetch_assoc($resultado_markers)) {
    // Add to XML document node
    echo '<marker ';
    echo 'name="' . parseToXML($row_markers['name']) . '" ';
    echo 'address="' . parseToXML($row_markers['address']) . '" ';
    echo 'lat="' . $row_markers['lat'] . '" ';
    echo 'lng="' . $row_markers['lng'] . '" ';
    echo 'type="' . $row_markers['type'] . '" ';
    echo '/>';
}

// End XML file
echo '</markers>';
