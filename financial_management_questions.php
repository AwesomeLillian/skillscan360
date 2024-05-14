<?php

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header('Location: index.php'); // Redirect to the login page if not logged in
    exit();
}

// Display the user's name
$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$email = $_SESSION['email'];
$province = $_SESSION['province'];
$field_of_study = $_SESSION['field_of_study'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Management</title>
</head>
<body>

<h1>Financial Management</h1>
    <form style="display: block;" action="generate_pdf.php" method="post">

        <!-- Heading -->
        <label style="display:none;" for="heading">Test Heading:</label><br>
        <input type="hidden" id="heading" name="heading" value="Online Test Answersheet"><br><br>

        <label style="display:none;" for="name">Name:</label><br>
        <input type="hidden" id="name" name="name" value ="<?php echo $name; ?>"><br><br>
        <label style="display:none;" for="surname">Surname:</label><br>
        <input type="hidden" id="surname" name="surname" value ="<?php echo $surname; ?>"><br><br>
        <label style="display:none;" for="email">Email:</label><br>
        <input type="hidden" id="email" name="email" value ="<?php echo $email; ?>"><br><br>
        <label style="display:none;" for="province">province:</label><br>
        <input type="hidden" id="province" name="province" value ="<?php echo $province; ?>"><br><br>
        <label style="display:none;" for="field_of_study">Field of study:</label><br>
        <input type="hidden" id="field_of_study" name="field_of_study" value ="<?php echo $field_of_study; ?>"><br><br>
        
        <!-- Question 1 -->
        <label for="q1">Question 1: How do you aproach analyzing financial data or reports?</label><br>
        <input type="hidden" id="q1" name="q1" value="Question1: How do you aproach analyzing financial data or reports?" placeholder="Answer for Question 1" required><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="A. Break it down into smaller components and analyze each part systematically" required>
        <label for="A. Break it down into smaller components and analyze each part systematically">A. Break it down into smaller components and analyze each part systematically</label><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="B. Look for trends and patterns to derive insights">
        <label for="B. Look for trends and patterns to derive insights">B. Look for trends and patterns to derive insights</label><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="C. Use statistical methods to interpret data">
        <label for="C. Use statistical methods to interpret data">C. Use statistical methods to interpret data</label><br>
        
        <label for="q2">Question 2: What is the primary goal of financial management in a corporation?</label><br>
        <input type="hidden" id="q2" name="q2" value="Question2: What is the primary goal of financial management in a corporation?" placeholder="Answer for Question 2"><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="A. Maximizing shareholder wealth">
        <label for="A. Maximizing shareholder wealth">A. Maximizing shareholder wealth</label><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="B. Maximizing sales revenue">
        <label for="B. Maximizing sales revenue">B. Maximizing sales revenue</label><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="C. Maximizing market share">
        <label for="C. Maximizing market share">C. Maximizing market share</label><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="D. Maximizing profit">
        <label for="D. Maximizing profit">D. Maximizing profit</label><br><br>

        <label for="q2">Question 3: Which financial statement represents a firm's financial position at a specific point in time?</label><br>
        <input type="hidden" id="q3" name="q3" value="Question3: Which financial statement represents a firm's financial position at a specific point in time?" placeholder="Answer for Question 3"><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="A. Income statement">
        <label for="A. Income statement">A. Income statement</label><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="B. Statement of cash flows">
        <label for="B. Statement of cash flows">B. Statement of cash flows</label><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="C. Balance sheet">
        <label for="C. Balance sheet">C. Balance sheet</label><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="D. Retained earnings statement">
        <label for="D. Retained earnings statement">D. Retained earnings statement</label><br><br>

        <label for="q2">Question 4: What does the term "capital budgeting" refer to?</label><br>
        <input type="hidden" id="q4" name="q4" value='Question4: What does the term "capital budgeting" refer to?' placeholder="Answer for Question 4"><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="A. Managing the firm's day-to-day cash flows">
        <label for="A. Managing the firm's day-to-day cash flows">A. Managing the firm's day-to-day cash flows</label><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="B. Estimating future cash flows of a project">
        <label for="B. Estimating future cash flows of a project">B. Estimating future cash flows of a project</label><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="C. Determining the amount of financing needed for a project">
        <label for="C. Determining the amount of financing needed for a project">C. Determining the amount of financing needed for a project</label><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="D. Evaluating the profitability of long-term investment projects">
        <label for="D. Evaluating the profitability of long-term investment projects">D. Evaluating the profitability of long-term investment projects</label><br><br>

        <label for="q5">Question 5: Which of the following is NOT a financial ratio used to evaluate a company's performance?</label><br>
        <input type="hidden" id="q5" name="q5" value="Question 5: Which of the following is NOT a financial ratio used to evaluate a company's performance?" placeholder="Answer for Question 5"><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="A. Debt-to-equity ratio">
        <label for="A. Debt-to-equity ratio">A. Debt-to-equity ratio</label><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="B. Price-to-earnings ratio">
        <label for="B. Price-to-earnings ratio">B. Price-to-earnings ratio</label><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="C. Profit margin ratio">
        <label for="C. Profit margin ratio">C. Profit margin ratio</label><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="D. Inventory turnover ratio">
        <label for="D. Inventory turnover ratio">D. Inventory turnover ratio</label><br><br>

        <label for="q5">Question 6: The process of converting accounts receivable into cash is known as:</label><br>
        <input type="hidden" id="q6" name="q6" value="Question 6: The process of converting accounts receivable into cash is known as:" placeholder="Answer for Question 6"><br>
        <input type="radio" id="q6_option1" name="q6_option1" value="A. Liquidity management">
        <label for="A. Liquidity management">A. Liquidity management</label><br>
        <input type="radio" id="q6_option1" name="q6_option1" value="B. Inventory management">
        <label for="B. Inventory management">B. Inventory management</label><br>
        <input type="radio" id="q6_option1" name="q6_option1" value="C. Working capital management">
        <label for="C. Working capital management">C. Working capital management</label><br>
        <input type="radio" id="q6_option1" name="q6_option1" value="D. Accounts receivable management">
        <label for="D. Accounts receivable management">D. Accounts receivable management</label><br><br>

        <label for="q7">Question 7: What is the purpose of financial forecasting?</label><br>
        <input type="hidden" id="q7" name="q7" value="Question 7: What is the purpose of financial forecasting?" placeholder="Answer for Question 7"><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="A. Predicting future economic conditions">
        <label for="A. Predicting future economic conditions">A. Predicting future economic conditions</label><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="B. Estimating the future financial performance of a company">
        <label for="B. Estimating the future financial performance of a company">B. Estimating the future financial performance of a company</label><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="C. Analyzing historical financial data">
        <label for="C. Analyzing historical financial data">C. Analyzing historical financial data</label><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="D. Assessing the current financial position of a company">
        <label for="D. Assessing the current financial position of a company">D. Assessing the current financial position of a company</label><br><br>

        <label for="q8">Question 8: ich of the following is NOT a type of financial risk?</label><br>
        <input type="hidden" id="q8" name="q8" value="Question 8: ich of the following is NOT a type of financial risk?" placeholder="Answer for Question 8"><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="A. Market risk">
        <label for="A. Market risk">A. Market risk</label><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="B. Operational risk">
        <label for="B. Operational risk">B. Operational risk</label><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="C. Credit risk">
        <label for="C. Credit risk">C. Credit risk</label><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="D. Inventory risk">
        <label for="D. Inventory risk">D. Inventory risk</label><br><br>

        <label for="q8">Question 9: What is the formula for calculating the Weighted Average Cost of Capital (WACC)?</label><br>
        <input type="hidden" id="q9" name="q9" value="Question 9: What is the formula for calculating the Weighted Average Cost of Capital (WACC)?" placeholder="Answer for Question 9"><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="A. (Cost of debt + Cost of equity) / Total assets">
        <label for="A. (Cost of debt + Cost of equity) / Total assets">A. (Cost of debt + Cost of equity) / Total assets</label><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="B. (Cost of debt + Cost of equity) / Total equity">
        <label for="B. (Cost of debt + Cost of equity) / Total equity">B. (Cost of debt + Cost of equity) / Total equity</label><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="C. (Cost of debt * Weight of debt) + (Cost of equity * Weight of equity)">
        <label for="C. (Cost of debt * Weight of debt) + (Cost of equity * Weight of equity)">C. (Cost of debt * Weight of debt) + (Cost of equity * Weight of equity)</label><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="D. (Cost of debt * Weight of equity) + (Cost of equity * Weight of debt)">
        <label for="D. (Cost of debt * Weight of equity) + (Cost of equity * Weight of debt)">D. (Cost of debt * Weight of equity) + (Cost of equity * Weight of debt)</label><br><br>

        <label for="q8">Question 10: Which financial concept refers to the idea that a dollar today is worth more than a dollar in the future?</label><br>
        <input type="hidden" id="q10" name="q10" value="Question 10: Which financial concept refers to the idea that a dollar today is worth more than a dollar in the future?" placeholder="Answer for Question 10"><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="A. Time value of money">
        <label for="A. Time value of money">A. Time value of money</label><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="B. Present value">
        <label for="B. Present value">B. Present value</label><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="C. Future value">
        <label for="C. Future value">C. Future value</label><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="D. Discounting">
        <label for="D. Discounting">D. Discounting</label><br><br>

        <br><br>
        <input type="submit" name="generate" value="Submit">
    </form>
</body>
</html>