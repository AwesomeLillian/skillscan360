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
    <title>Marketing Management</title>
</head>
<body>

<h1>Marketing Management</h1>
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
        <label for="q1">Question 1: Which of the following is NOT a part of the marketing mix?</label><br>
        <input type="hidden" id="q1" name="q1" value="Question1: Which of the following is NOT a part of the marketing mix?" placeholder="Answer for Question 1"><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="A. Product">
        <label for="A. Product">A. Product</label><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="B. Price">
        <label for="B. Price">B. Price</label><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="C. People">
        <label for="C. People">C. People</label><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="D. Promotion">
        <label for="D. Promotion">D. Promotion</label><br><br>
        
        <label for="q2">Question 2: SWOT analysis in marketing management stands for:</label><br>
        <input type="hidden" id="q2" name="q2" value="Question2: SWOT analysis in marketing management stands for:" placeholder="Answer for Question 2"><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="A. Strengths, Weaknesses, Opportunities, Threats">
        <label for="A. Strengths, Weaknesses, Opportunities, Threats">A. Strengths, Weaknesses, Opportunities, Threats</label><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="B. Sales, Weaknesses, Objectives, Targets">
        <label for="B. Sales, Weaknesses, Objectives, Targets">B. Sales, Weaknesses, Objectives, Targets</label><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="C. Strategy, Workforce, Objectives, Timeframe">
        <label for="C. Strategy, Workforce, Objectives, Timeframe">C. Strategy, Workforce, Objectives, Timeframe</label><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="D. None of the above">
        <label for="D. None of the above">D. None of the above</label><br><br>

        <label for="q2">Question 3: Market segmentation involves dividing a market into distinct groups of buyers who have:</label><br>
        <input type="hidden" id="q3" name="q3" value="Question3: Market segmentation involves dividing a market into distinct groups of buyers who have:" placeholder="Answer for Question 3"><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="A. Similar lifestyles">
        <label for="A. Similar lifestyles">A. Similar lifestyles</label><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="B. Similar needs and preferences">
        <label for="B. Similar needs and preferences">B. Similar needs and preferences</label><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="C. Similar income levels">
        <label for="C. Similar income levels">C. Similar income levels</label><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="D. Similar geographical locations">
        <label for="D. Similar geographical locations">D. Similar geographical locations</label><br><br>

        <label for="q2">Question 4: Which of the following is NOT a stage in the product life cycle?</label><br>
        <input type="hidden" id="q4" name="q4" value='Question4: Which of the following is NOT a stage in the product life cycle?' placeholder="Answer for Question 4"><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="A. Introduction">
        <label for="A. Introduction">A. Introduction</label><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="B. Growth">
        <label for="B. Growth">B. Growth</label><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="C. Maturity">
        <label for="C. Maturity">C. Maturity</label><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="D. Saturation">
        <label for="D. Saturation">D. Saturation</label><br><br>

        <label for="q5">Question 5: A marketing strategy that involves offering a low price for a product initially to gain a large market share is known as:</label><br>
        <input type="hidden" id="q5" name="q5" value="Question 5: A marketing strategy that involves offering a low price for a product initially to gain a large market share is known as:" placeholder="Answer for Question 5"><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="A. Market penetration">
        <label for="A. Market penetration">A. Market penetration</label><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="B. Market development">
        <label for="B. Market development">B. Market development</label><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="C. Product development">
        <label for="C. Product development">C. Product development</label><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="D. Diversification">
        <label for="D. Diversification">D.Diversification</label><br><br>

        <label for="q5">Question 6: The process of selecting and interpreting information to evaluate and select market opportunities is known as:</label><br>
        <input type="hidden" id="q6" name="q6" value="Question 6: The process of selecting and interpreting information to evaluate and select market opportunities is known as:" placeholder="Answer for Question 6"><br>
        <input type="radio" id="q6_option1" name="q6_option1" value="A. Marketing research">
        <label for="A. Marketing research">A. Marketing research</label><br>
        <input type="radio" id="q6_option1" name="q6_option1" value="B. Market analysis">
        <label for="B. Market analysis">B. Market analysis</label><br>
        <input type="radio" id="q6_option1" name="q6_option1" value="C. Environmental scanning">
        <label for="C. Environmental scanning">C. Environmental scanning</label><br>
        <input type="radio" id="q6_option1" name="q6_option1" value="D. Market segmentation">
        <label for="D. Market segmentation">D. Market segmentation</label><br><br>

        <label for="q7">Question 7: In marketing, the term "brand equity" refers to:</label><br>
        <input type="hidden" id="q7" name="q7" value='Question 7: In marketing, the term "brand equity" refers to:' placeholder="Answer for Question 7"><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="A. The financial value of a brand">
        <label for="A. The financial value of a brand">A. The financial value of a brand</label><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="B. The total sales revenue of a brand">
        <label for="B. The total sales revenue of a brand">B. The total sales revenue of a brand</label><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="C. The consumer perception and value of a brand">
        <label for="C. The consumer perception and value of a brand">C. The consumer perception and value of a brand</label><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="D. The market share of a brand">
        <label for="D. The market share of a brand">D. The market share of a brand</label><br><br>

        <label for="q8">Question 8: Which of the following is NOT a component of the marketing environment?</label><br>
        <input type="hidden" id="q8" name="q8" value="Question 8: Which of the following is NOT a component of the marketing environment?" placeholder="Answer for Question 8"><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="A. Economic factors">
        <label for="A. Economic factors">A. Economic factors</label><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="B. Competitive factors">
        <label for="B. Competitive factors">B. Competitive factors</label><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="C. Technological factors">
        <label for="C. Technological factors">C. Technological factors</label><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="D. Internal factors">
        <label for="D. Internal factors">D. Internal factors</label><br><br>

        <label for="q8">Question 9: Which of the following is a characteristic of a product-oriented company?</label><br>
        <input type="hidden" id="q9" name="q9" value="Question 9: Which of the following is a characteristic of a product-oriented company?" placeholder="Answer for Question 9"><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="A. Focus on customer needs and preferences">
        <label for="A. Focus on customer needs and preferences">A. Focus on customer needs and preferences</label><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="B. Constantly adapting products to changing market demands">
        <label for="B. Constantly adapting products to changing market demands">B. Constantly adapting products to changing market demands</label><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="C. Emphasis on product features and quality">
        <label for="C. Emphasis on product features and quality">C. Emphasis on product features and quality</label><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="D. Flexibility in product development">
        <label for="D. Flexibility in product development">D. Flexibility in product development</label><br><br>

        <label for="q8">Question 10: Which marketing concept emphasizes building long-term relationships with customers by providing value and satisfaction?</label><br>
        <input type="hidden" id="q10" name="q10" value="Question 10: Which marketing concept emphasizes building long-term relationships with customers by providing value and satisfaction?" placeholder="Answer for Question 10"><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="A. Production concept">
        <label for="A. Production concept">A. Production concept</label><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="B. Product concept">
        <label for="B. Product concept">B. Product concept</label><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="C. Selling concept">
        <label for="C. Selling concept">C. Selling concept</label><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="D. Marketing concept">
        <label for="D. Marketing concept">D. Marketing concept</label><br><br>

        <br><br>
        <input type="submit" name="generate" value="Submit">
    </form>
</body>
</html>