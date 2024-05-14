<?php
require_once('fpdf184/fpdf.php');

class PDF extends FPDF {
    public $heading; // Define a public property to hold the heading
    public $name; // Define a public property to hold the name

    // Page header
    function Header() {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, strtoupper($this->heading), 0, 1, 'C'); // Convert heading to uppercase
        $this->Ln(10);
        $this->Cell(0, 10, 'Name: ' . $this->name, 0, 1); // Add the name to the header
    }

    // Page footer
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $heading = $_POST["heading"];
    $question1 = $_POST["question1"];
    $question1Ans = $_POST["q1_option1"];
    $question2 = $_POST["question2"];
    $question2Ans = $_POST["q2_option1"];
    $question3 = $_POST["question3"];
    $question3Ans = $_POST["q3_option1"];
    $question4 = $_POST["question4"];
    $question4Ans = $_POST["q4_option1"];
    $question5 = $_POST["question5"];
    $question5Ans = $_POST["q5_option1"];
    $question6 = $_POST["question6"];
    $question6Ans = $_POST["q6_option1"];
    $question7 = $_POST["question7"];
    $question7Ans = $_POST["q7_option1"];
    $question8 = $_POST["question8"];
    $question8Ans = $_POST["q8_option1"];
    $question9 = $_POST["question9"];
    $question9Ans = $_POST["q9_answer"];
    $question10 = $_POST["question10"];
    $question10Ans = $_POST["q10_answer"];
    $question11 = $_POST["question11"];
    $question11Ans = $_POST["q11_answer"];
    $question12 = $_POST["question12"];
    $question12Ans = $_POST["q12_answer"];
    $question13 = $_POST["question13"];
    $question13Ans = $_POST["q13_answer"];
    $question14 = $_POST["question14"];
    $question14Ans = $_POST["q14_answer"];
    $question15 = $_POST["question15"];
    $question15Ans = $_POST["q15_answer"];
    $question16 = $_POST["question16"];
    $question16Ans1 = $_POST["q16_answer1"];
    $question16Ans2 = $_POST["q16_answer2"];

    // Define the path to the folder where you want to save the PDF
    $folder_path = 'pdfTestFiles/';

    // Create PDF
    $pdf = new PDF();
    $pdf->heading = $heading; // Set the heading property
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 12);

    // Use MultiCell to display answers as paragraphs
    $pdf->MultiCell(0, 10, $question1, 0, 1);
    $pdf->MultiCell(0, 10, $question1Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question2, 0, 1);
    $pdf->MultiCell(0, 10, $question2Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question3, 0, 1);
    $pdf->MultiCell(0, 10, $question3Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question4, 0, 1);
    $pdf->MultiCell(0, 10, $question4Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question5, 0, 1);
    $pdf->MultiCell(0, 10, $question5Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question6, 0, 1);
    $pdf->MultiCell(0, 10, $question6Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question7, 0, 1);
    $pdf->MultiCell(0, 10, $question7Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question8, 0, 1);
    $pdf->MultiCell(0, 10, $question8Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question9, 0, 1);
    $pdf->MultiCell(0, 10, $question9Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question10, 0, 1);
    $pdf->MultiCell(0, 10, $question10Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question11, 0, 1);
    $pdf->MultiCell(0, 10, $question11Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question12, 0, 1);
    $pdf->MultiCell(0, 10, $question12Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question13, 0, 1);
    $pdf->MultiCell(0, 10, $question13Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question14, 0, 1);
    $pdf->MultiCell(0, 10, $question14Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question15, 0, 1);
    $pdf->MultiCell(0, 10, $question15Ans, 0, 1);
    $pdf->MultiCell(0, 10, $question16, 0, 1);
    $pdf->MultiCell(0, 10, $question16Ans1, 0, 1);
    $pdf->MultiCell(0, 10, $question16Ans2, 0, 1);

    // Output PDF to a file in the specified folder
    $pdf->Output($folder_path . $name . '.pdf', 'F');

    echo "Test submitted successfully!";
} else {
    echo "Invalid request.";
}
?>