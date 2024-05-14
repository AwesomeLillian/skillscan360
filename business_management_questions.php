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
    <title>Business Management</title>
</head>
<body>
    
<h1>Business Management</h1>
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
        <label for="q1">Question 1: What is the primary goal of strategic management?</label><br>
        <input type="hidden" id="q1" name="q1" value="Question1: What is the primary goal of strategic management?" placeholder="Answer for Question 1"><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="A. Maximizing shareholder wealth">
        <label for="A. Maximizing shareholder wealth">A. Maximizing shareholder wealth</label><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="B. Minimizing costs">
        <label for="B. Minimizing costs">B. Minimizing costs</label><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="C. Achieving competitive advantage">
        <label for="C. Achieving competitive advantage">C. Achieving competitive advantage</label><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="C. Increasing employee satisfaction">
        <label for="C. Increasing employee satisfaction">C. Increasing employee satisfaction</label><br>
        
        <label for="q2">Question 2: Which of the following is NOT one of Porter's generic strategies?</label><br>
        <input type="hidden" id="q2" name="q2" value="Question2: Which of the following is NOT one of Porter's generic strategies?" placeholder="Answer for Question 2"><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="A. Cost leadership">
        <label for="A. Cost leadership">A. Cost leadership</label><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="B. Differentiation">
        <label for="B. Differentiation">B. Differentiation</label><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="C. Focus">
        <label for="C. Focus">C. Focus</label><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="D. Integration">
        <label for="D. Integration">D. Integration</label><br><br>

        <label for="q2">Question 3: Which organizational structure is characterized by a clear hierarchy of authority and centralized To analyze the competitive landscape?</label><br>
        <input type="hidden" id="q3" name="q3" value="Question3: Which organizational structure is characterized by a clear hierarchy of authority and centralized To analyze the competitive landscape?" placeholder="Answer for Question 3"><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="A. Matrix structure">
        <label for="A. Matrix structure">A. Matrix structure</label><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="B. Divisional structure">
        <label for="B. Divisional structure">B. Divisional structure</label><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="C. Functional structure">
        <label for="C. Functional structure">C. Functional structure</label><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="D. Flat structure">
        <label for="D. Flat structure">D. Flat structure</label><br><br>

        <label for="q2">Question 4: Which financial statement provides information about a company's profitability over a specific period?</label><br>
        <input type="hidden" id="q4" name="q4" value='Question4: Which financial statement provides information about a company's profitability over a specific period? placeholder="Answer for Question 4"><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="A. Balance sheet">
        <label for="A. Balance sheet">A. Balance sheet</label><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="B.  Income statement">
        <label for="B.  Income statement">B.  Income statement</label><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="C. Cash flow statement">
        <label for="C. Cash flow statement">C. Cash flow statement</label><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="D. Statement of retained earnings">
        <label for="D. Statement of retained earnings">D. Statement of retained earnings</label><br><br>

        <label for="q5">Question 5: What is the purpose of market segmentation?</label><br>
        <input type="hidden" id="q5" name="q5" value="Question 5: What is the purpose of market segmentation?" placeholder="Answer for Question 5"><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="A. To reduce competition">
        <label for="A. To reduce competition">A. To reduce competition</label><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="B. To target specific customer groups">
        <label for="B. To target specific customer groups">B. To target specific customer groups</label><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="C. To increase product prices">
        <label for="C. To increase product prices">C. To increase product prices</label><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="D. To expand distribution channels">
        <label for="D. To expand distribution channels">D. To expand distribution channels</label><br><br>

        <label for="q5">Question 6: Which type of business ownership offers Limited liability company (LLC) to its owners?</label><br>
        <input type="hidden" id="q6" name="q6" value="Question 6: Which type of business ownership offers Limited liability company (LLC) to its owners?" placeholder="Answer for Question 6"><br>
        <input type="radio" id="q6_option1" name="q6_option1" value="A. Sole proprietorship">
        <label for="A. Sole proprietorship">A. Sole proprietorship</label><br>
        <input type="radio" id="q6_option1" name="q6_option1" value="B. Partnership">
        <label for="B. Partnership">B. Partnership</label><br>
        <input type="radio" id="q6_option1" name="q6_option1" value="C. Corporation">
        <label for="C. Corporation">C. Corporation</label><br>Limited liability company (LLC) 
        <input type="radio" id="q6_option1" name="q6_option1" value="D. ">
        <label for="D. Limited liability company (LLC) ">D. Limited liability company (LLC) </label><br><br>

        <label for="q7">Question 7: Which stage of the product life cycle is characterized by rapid market acceptance and increasing profits?</label><br>
        <input type="hidden" id="q7" name="q7" value="Question 7: Which stage of the product life cycle is characterized by rapid market acceptance and increasing profits?" placeholder="Answer for Question 7"><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="A. Introduction">
        <label for="A. Introduction">A. Introduction</label><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="B. Introduction">
        <label for="B. Introduction">B. Introduction</label><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="C. Maturity">
        <label for="C. Maturity">C. Maturity</label><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="D. Decline">
        <label for="D. Decline">D. Decline</label><br><br>

        <label for="q8">Question 8: Which of the following is NOT a component of the marketing mix?</label><br>
        <input type="hidden" id="q8" name="q8" value="Question 8: Which of the following is NOT a component of the marketing mix?" placeholder="Answer for Question 8"><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="A. Product">
        <label for="A. Product">A. Product</label><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="B. Promotion">
        <label for="B. Promotion">B. Promotion</label><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="C. Price">
        <label for="C. Price">C. Price</label><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="D. People">
        <label for="D. People">D. People</label><br><br>

        <label for="q8">Question 9: What is the purpose of a SWOT analysis?</label><br>
        <input type="hidden" id="q9" name="q9" value="Question 9: What is the purpose of a SWOT analysis?" placeholder="Answer for Question 9"><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="A. To evaluate an organization's internal strengths and weaknesses">
        <label for="A. To evaluate an organization's internal strengths and weaknesses">A. To evaluate an organization's internal strengths and weaknesses</label><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="B. To analyze the competitive landscape">
        <label for="B. To analyze the competitive landscape">B. To analyze the competitive landscape</label><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="C. To identify market opportunities and threats">
        <label for="C. To identify market opportunities and threats">C. To identify market opportunities and threats</label><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="D. All of the above">
        <label for="D. All of the above">D. All of the above</label><br><br>

        <label for="q8">Question 10: Which leadership style involves giving employees a high degree of autonomy in decision-making?</label><br>
        <input type="hidden" id="q10" name="q10" value="Question 10: Which leadership style involves giving employees a high degree of autonomy in decision-making?" placeholder="Answer for Question 10"><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="A. Autocratic">
        <label for="A. Autocratic">A. Autocratic</label><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="B. Democratic">
        <label for="B. Democratic">B. Democratic</label><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="C. Laissez-faire">
        <label for="C. Laissez-faire">C. Laissez-faire</label><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="D. Transactional">
        <label for="D. Transactional">D. Transactional</label><br><br>

        <br><br>
        <input type="submit" name="generate" value="Submit">
    </form>
</body>
</html>