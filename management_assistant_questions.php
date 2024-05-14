<?php
// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header('Location: index.php'); // Redirect to the login page if not logged in
    exit();
}

// Display the user's name
$name = $_SESSION['name'];
$surname = isset($_SESSION['surname']) ? $_SESSION['surname'] : '';

// Check if the 'province' key exists in $_SESSION
$province = isset($_SESSION['province']) ? $_SESSION['province'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Assistant</title>
</head>
<body>
    
<h1>Management Assistant</h1>
    <form style="display: block;" action="generate_pdf.php" method="post">

        <!-- Heading -->
        <label style="display:none;" for="heading">Test Heading:</label><br>
        <input type="hidden" id="heading" name="heading" value="Online Test Answersheet"><br><br>

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value= "<?php echo $name; ?>" placeholder="name"><br><br>
        <label for="surname">Surname:</label><br>
        <input type="text" id="surname" name="surname" value= "<?php echo $surname; ?>" placeholder="surname"><br><br>
        <input type="text" id="province" name="province" value ="<?php echo $province; ?>" placeholder="province"><br><br>
        
        <!-- Question 1 -->
        <label for="q1">Question 1: Which of the following is NOT one of the four functions of management?</label><br>
        <input type="hidden" id="q1" name="q1" value="Question1: Which of the following is NOT one of the four functions of management?" placeholder="Answer for Question 1"><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="A. Planning">
        <label for="A. Planning">A. Planning</label><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="B. Budgeting">
        <label for="B. Budgeting">B. Budgeting</label><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="C. Organizing">
        <label for="C. Organizing">C. Organizing</label><br>
        <input type="radio" id="q1_option1" name="q1_option1" value="C. Controlling">
        <label for="C. Controlling">C. Controlling</label><br>
        
        <label for="q2">Question 2: Which leadership style involves making decisions without consulting team members?</label><br>
        <input type="hidden" id="q2" name="q2" value="Question2: Which leadership style involves making decisions without consulting team members?" placeholder="Answer for Question 2"><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="A. Democratic">
        <label for="A. Democratic">A. Democratic</label><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="B. Autocratic">
        <label for="B. Autocratic">B. Autocratic</label><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="C. Laissez-faire">
        <label for="C. Laissez-faire">C. Laissez-faire</label><br>
        <input type="radio" id="q2_option1" name="q2_option1" value="D. Transformational">
        <label for="D. Transformational">D. Transformational</label><br><br>

        <label for="q2">Question 3: What is the primary purpose of SWOT analysis in management?</label><br>
        <input type="hidden" id="q3" name="q3" value="Question3: What is the primary purpose of SWOT analysis in management?" placeholder="Answer for Question 3"><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="A. To assess market share">
        <label for="A. To assess market share">A. To assess market share</label><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="B. To identify internal strengths and weaknesses">
        <label for="B. To identify internal strengths and weaknesses">B. To identify internal strengths and weaknesses</label><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="C. Balance sheet">
        <label for="C. Balance sheet">C. Balance sheet</label><br>
        <input type="radio" id="q3_option1" name="q3_option1" value="D. To analyze customer satisfaction">
        <label for="D. To analyze customer satisfaction">D. To analyze customer satisfaction</label><br><br>

        <label for="q2">Question 4: Which of the following is an example of non-verbal communication?</label><br>
        <input type="hidden" id="q4" name="q4" value='Question4: Which of the following is an example of non-verbal communication?' placeholder="Answer for Question 4"><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="A. Email">
        <label for="A. Email">A. Email</label><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="B.  Phone call">
        <label for="B.  Phone call">B.  Phone call</label><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="C. Facial expressions">
        <label for="C. Facial expressions">C. Facial expressions</label><br>
        <input type="radio" id="q4_option1" name="q4_option1" value="D. Team meeting">
        <label for="D. Team meeting">D. Team meeting</label><br><br>

        <label for="q5">Question 5: What is the first stage in Lewin's three-stage model of change?</label><br>
        <input type="hidden" id="q5" name="q5" value="Question 5: What is the first stage in Lewin's three-stage model of change?" placeholder="Answer for Question 5"><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="A. Unfreezing">
        <label for="A. Unfreezing">A. Unfreezing</label><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="B. Changing">
        <label for="B. Changing">B. Changing</label><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="C. Refreezing">
        <label for="C. Refreezing">C. Refreezing</label><br>
        <input type="radio" id="q5_option1" name="q5_option1" value="D. Adapting">
        <label for="D. Adapting">D. Adapting</label><br><br>

        <label for="q5">Question 6: Which theory of motivation suggests that individuals are motivated by a hierarchy of needs:</label><br>
        <input type="hidden" id="q6" name="q6" value="Question 6: Which theory of motivation suggests that individuals are motivated by a hierarchy of needs:" placeholder="Answer for Question 6"><br>
        <input type="radio" id="q6_option1" name="q6_option1" value="A. Equity theory">
        <label for="A. Equity theory">A. Equity theory</label><br>
        <input type="radio" id="q6_option1" name="q6_option1" value="B. Maslow's hierarchy of needs theory">
        <label for="B. Maslow's hierarchy of needs theory">B. Maslow's hierarchy of needs theory</label><br>
        <input type="radio" id="q6_option1" name="q6_option1" value="C. Working capital management">
        <label for="C. Working capital management">C. Working capital management</label><br>Two-factor theory
        <input type="radio" id="q6_option1" name="q6_option1" value="D. ">
        <label for="D. Two-factor theory">D. Two-factor theory</label><br><br>

        <label for="q7">Question 7: What is the purpose of management by objectives (MBO)?</label><br>
        <input type="hidden" id="q7" name="q7" value="Question 7: What is the purpose of management by objectives (MBO)?" placeholder="Answer for Question 7"><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="A. To increase employee turnover">
        <label for="A. To increase employee turnover">A. To increase employee turnover</label><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="B. To enhance employee job satisfaction">
        <label for="B. To enhance employee job satisfaction">B. To enhance employee job satisfaction</label><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="C. To improve organizational performance">
        <label for="C. To improve organizational performance">C. To improve organizational performance</label><br>
        <input type="radio" id="q7_option1" name="q7_option1" value="D. To reduce employee engagement">
        <label for="D. To reduce employee engagement">D. To reduce employee engagement</label><br><br>

        <label for="q8">Question 8: Which of the following is a programmed decision?</label><br>
        <input type="hidden" id="q8" name="q8" value="Question 8: Which of the following is a programmed decision?" placeholder="Answer for Question 8"><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="A. Market risk">
        <label for="A. Market risk">A. Market risk</label><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="B. Selecting a vendor for office supplies">
        <label for="B. Selecting a vendor for office supplies">B. Selecting a vendor for office supplies</label><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="C. Responding to a customer complaint">
        <label for="C. Responding to a customer complaint">C. Responding to a customer complaint</label><br>
        <input type="radio" id="q8_option1" name="q8_option1" value="D. Revising the company's mission statement">
        <label for="D. Revising the company's mission statement">D. Revising the company's mission statement</label><br><br>

        <label for="q8">Question 9: Emotional intelligence (EI) is most closely associated with which aspect of leadership?</label><br>
        <input type="hidden" id="q9" name="q9" value="Question 9: Emotional intelligence (EI) is most closely associated with which aspect of leadership?" placeholder="Answer for Question 9"><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="A. Strategic planning">
        <label for="A. Strategic planning">A. Strategic planning</label><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="B. Decision-making">
        <label for="B. Decision-making">B. Decision-making</label><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="C. Interpersonal skills">
        <label for="C. Interpersonal skills">C. Interpersonal skills</label><br>
        <input type="radio" id="q9_option1" name="q9_option1" value="D. Financial analysis">
        <label for="D. Financial analysis">D. Financial analysis</label><br><br>

        <label for="q8">Question 10: Which stage of group development involves conflict and disagreement among team members?</label><br>
        <input type="hidden" id="q10" name="q10" value="Question 10: Which stage of group development involves conflict and disagreement among team members?" placeholder="Answer for Question 10"><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="A. Forming">
        <label for="A. Forming">A. Forming</label><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="B. Storming">
        <label for="B. Storming">B. Storming</label><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="C. Norming">
        <label for="C. Norming">C. Norming</label><br>
        <input type="radio" id="q10_option1" name="q10_option1" value="D. Performing">
        <label for="D. Performing">D. Performing</label><br><br>

        <br><br>
        <input type="submit" name="generate" value="Submit">
    </form>
</body>
</html>