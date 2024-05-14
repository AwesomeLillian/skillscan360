<?php
require_once('fpdf184/fpdf.php');

class PDF extends FPDF {
    public $heading; // Define a public property to hold the heading

    // Page header
    function Header() {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, strtoupper($this->heading), 0, 1, 'C'); // Convert heading to uppercase
        $this->Ln(10);
    }

    // Page footer
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

if (isset($_POST['generate'])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $province = $_POST["province"];
    $field_of_study = $_POST["field_of_study"];
    $heading = $_POST["heading"];
    $q1 = $_POST["q1"];
    $q1_option1 = $_POST["q1_option1"];
    $q2 = $_POST["q2"];
    $q2_option1 = $_POST["q2_option1"];
    $q3 = $_POST["q3"];
    $q3_option1 = $_POST["q3_option1"];
    $q4 = $_POST["q4"];
    $q4_option1 = $_POST["q4_option1"];
    $q5 = $_POST["q5"];
    $q5_option1 = $_POST["q5_option1"];
    $q6 = $_POST["q6"];
    $q6_option1 = $_POST["q6_option1"];
    $q7 = $_POST["q7"];
    $q7_option1 = $_POST["q7_option1"];
    $q8 = $_POST["q8"];
    $q8_option1 = $_POST["q8_option1"];
    $q9 = $_POST["q9"];
    $q9_option1 = $_POST["q9_option1"];
    $q10 = $_POST["q10"];
    $q10_option1 = $_POST["q10_option1"];

    
    // Define the path to the folder where you want to save the PDF
    $folder_path = 'pdfTestFiles/';

    // Create PDF
    $pdf = new PDF();
    $pdf->heading = $heading; // Set the heading property
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 12);

    $pdf->Cell(0, 7, 'Name: ' . $name, 0, 1);
    $pdf->Cell(0, 7, 'Surname: ' . $surname, 0, 1);
    $pdf->Cell(0, 7, 'Email: ' . $email, 0, 1);
    $pdf->Cell(0, 7, 'Province: ' . $province, 0, 1);
    $pdf->Cell(0, 7, 'Field Of study: ' . $field_of_study, 0, 1);
    $pdf->Ln();
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12); // Set a smaller font size for the questions and answers
    $pdf->MultiCell(0, 10, $q1, 0, 1);
    $pdf->MultiCell(0, 10, $q1_option1, 0, 1);
    $pdf->MultiCell(0, 10, $q2, 0, 1);
    $pdf->MultiCell(0, 10, $q2_option1, 0, 1);
    $pdf->MultiCell(0, 10, $q3, 0, 1);
    $pdf->MultiCell(0, 10, $q3_option1, 0, 1);
    $pdf->MultiCell(0, 10, $q4, 0, 1);
    $pdf->MultiCell(0, 10, $q4_option1, 0, 1);
    $pdf->MultiCell(0, 10, $q5, 0, 1);
    $pdf->MultiCell(0, 10, $q5_option1, 0, 1);
    $pdf->MultiCell(0, 10, $q6, 0, 1);
    $pdf->MultiCell(0, 10, $q6_option1, 0, 1);
    $pdf->MultiCell(0, 10, $q7, 0, 1);
    $pdf->MultiCell(0, 10, $q7_option1, 0, 1);
    $pdf->MultiCell(0, 10, $q8, 0, 1);
    $pdf->MultiCell(0, 10, $q8_option1, 0, 1);
    $pdf->MultiCell(0, 10, $q9, 0, 1);
    $pdf->MultiCell(0, 10, $q9_option1, 0, 1);
    $pdf->MultiCell(0, 10, $q10, 0, 1);
    $pdf->MultiCell(0, 10, $q10_option1, 0, 1);

    // Output PDF to a file in the specified folder
    $pdf->Output($folder_path . $name.'.pdf', 'F');
    exit;

} else {
    echo "Invalid request.";
}
?>