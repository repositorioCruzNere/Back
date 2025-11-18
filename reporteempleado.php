<?php
require('fpdf186/fpdf.php');
include("basedatos.php");

$conexionbd = conectar_bd();
$query = "SELECT id_Empleado, nombre, edad FROM empleado";
$resultado = mysqli_query($conexionbd, $query);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

$pdf->Cell(0, 10, 'Reporte de Empleados', 0, 1, 'C');
$pdf->Ln(5);

$pdf->SetFont('Arial', '', 12);

// Encabezado de tabla
$pdf->Cell(20, 10, 'ID', 1);
$pdf->Cell(80, 10, 'Nombre', 1);
$pdf->Cell(30, 10, 'Edad', 1);
$pdf->Ln();

while ($fila = mysqli_fetch_assoc($resultado)) {
    $pdf->Cell(20, 10, $fila['id_Empleado'], 1);
    $pdf->Cell(80, 10, $fila['nombre'], 1);
    $pdf->Cell(30, 10, $fila['edad'], 1);
    $pdf->Ln();
}

mysqli_close($conexionbd);

// Forzar la descarga
$pdf->Output('D', 'reporte_empleados.pdf');
?>