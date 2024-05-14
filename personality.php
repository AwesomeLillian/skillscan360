<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personality Test</title>
    <link rel="stylesheet" href="dash.css">
    <style>
        section {
            margin-top: 30px;
            margin-bottom: 80px;
            margin-left: 25px;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            text-align: center;
        }

        .button-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        
        <h1>Personality Test</h1>
    </header>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <h2>Welcome to the Personality Test</h2>
            <p>Click the button below to start the test.</p>
            <div class="button-container">
                <button id="startTestButton" data-start-time="" onclick="startTest()">Start Test</button>
            </div>

        </div>
    </div><div id="timer"></div>
    </div>
    <section>
        <form id="personalityTestForm" action="process_personality_test.php" method="post" style="display: none; onsubmit="recordFinishTime()>

        <section>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Enter you name in full"><br><br>

            <!-- Heading -->
            <label style="display:none;" for="heading">Test Heading:</label><br>
            <input type="hidden" id="heading" name="heading" value="Personality Test">         
            
            <label for="question1">Question 1: How would you describe yourself?</label><br>
            <input type="hidden" id="question1" name="question1" value="Question 1: How would you describe yourself?" required><br>
            <input type="radio" id="q1_option1" name="q1_option1" value="Introverted" required>
            <label for="q1_option1">Introverted</label><br>
            <input type="radio" id="q1_option1" name="q1_option1" value="Extroverted">
            <label for="q1_option1">Extroverted</label><br><br>
            
            <label for="question2">Question 2: How do you handle stress?</label><br>
            <input type="hidden" id="question2" name="question2" value="Question 2: How do you handle stress?" required><br>
            <input type="radio" id="q2_option1" name="q2_option1" value="Avoid it" required>
            <label for="q2_option1">Avoid it</label><br>
            <input type="radio" id="q2_option1" name="q2_option1" value="Confront it">
            <label for="q2_option1">Confront it</label><br><br>

            
            <label for="question3">Question 3: Do you prefer to work alone?</label><br>
            <input type="hidden" id="question3" name="question3" value="Question 3: Do you prefer to work alone?" required><br>
            <input type="radio" id="q3_option1" name="q3_option1" value="Yes" required>
            <label for="q3_option1">Yes</label><br>
            <input type="radio" id="q3_option1" name="q3_option1" value="No">
            <label for="q3_option1">No</label><br><br>

            <label for="question4">Question 4: Are you comfortable with public speaking?</label><br>
            <input type="hidden" id="question4" name="question4" value="Question 4: Are you comfortable with public speaking?" required><br>
            <input type="radio" id="q4_option1" name="q4_option1" value="Yes" required>
            <label for="q4_option1">Yes</label><br>
            <input type="radio" id="q4_option1" name="q4_option1" value="No">
            <label for="q4_option1">No</label><br><br>

            <label for="question5">Question 5: Do you enjoy taking risks?</label><br>
            <input type="hidden" id="question5" name="question5" value="Question 5: Do you enjoy taking risks?" required><br>
            <input type="radio" id="q5_option1" name="q5_option1" value="Yes" required>
            <label for="q5_option1">Yes</label><br>
            <input type="radio" id="q5_option1" name="q5_option1" value="No">
            <label for="q5_option1">No</label><br><br>

            <label for="question6">Question 6: Do you prefer routine and stability in your life?</label><br>
            <input type="hidden" id="question6" name="question6" value="Question 6: Do you prefer routine and stability in your life?" required><br>
            <input type="radio" id="q6_option1" name="q6_option1" value="Yes" required>
            <label for="q6_option1">Yes</label><br>
            <input type="radio" id="q6_option1" name="q6_option1" value="No">
            <label for="q6_option1">No</label><br><br>

            <label for="question7">Question 7: Are you good at adapting to new situations?</label><br>
            <input type="hidden" id="question7" name="question7" value="Question 7: Are you good at adapting to new situations?" required><br>
            <input type="radio" id="q7_option1" name="q7_option1" value="Yes" required>
            <label for="q7_option1">Yes</label><br>
            <input type="radio" id="q7_option1" name="q7_option1" value="No">
            <label for="q7_option1">No</label><br><br>

            <label for="question8">Question 8: Do you enjoy meeting new people?</label><br>
            <input type="hidden" id="question8" name="question8" value="Question 8: Do you enjoy meeting new people?" required><br>
            <input type="radio" id="q8_option1" name="q8_option1" value="Yes" required>
            <label for="q8_option1">Yes</label><br>
            <input type="radio" id="q8_option1" name="q8_option1" value="No">
            <label for="q8_option1">No</label><br><br>

            <label for="question9">Question 9: Describe a time when you had to work as part of a team to achieve a goal.</label><br>
            <input type="hidden" id="question9" name="question9" value="Question 9: Describe a time when you had to work as part of a team to achieve a goal." required><br>
            <textarea id="q9_answer" name="q9_answer" rows="4" cols="50" required></textarea><br><br>

            <label for="question10">Question 10: How do you handle failure?</label><br>
            <input type="hidden" id="question10" name="question10" value="Question 10: How do you handle failure?" required><br>
            <textarea id="q10_answer" name="q10_answer" rows="4" cols="50" required></textarea><br><br>

            <label for="question11">Question 11: Describe a situation where you had to deal with a difficult person.</label><br>
            <input type="hidden" id="question11" name="question11" value="Question 11: Describe a situation where you had to deal with a difficult person." required><br>
            <textarea id="q11_answer" name="q11_answer" rows="4" cols="50" required></textarea><br><br>

            <label for="question12">Question 12: How do you handle stress?</label><br>
            <input type="hidden" id="question12" name="question12" value="Question 12: How do you handle stress?" required><br>
            <textarea id="q12_answer" name="q12_answer" rows="4" cols="50" required></textarea><br><br>

            <label for="question13">Question 13: What motivates you?</label><br>
            <input type="hidden" id="question13" name="question13" value="Question 13: What motivates you?" required><br>
            <textarea id="q13_answer" name="q13_answer" rows="4" cols="50" required></textarea><br><br>

            <label for="question14">Question 14: Describe a time when you had to work under pressure</label><br>
            <input type="hidden" id="question14" name="question14" value="Question 14: What motivates you?" required><br>
            <textarea id="q14_answer" name="q14_answer" rows="4" cols="50" required></textarea><br><br>

            <label for="question15">Question 15: Describe a situation where you had to solve a complex problem</label><br>
            <input type="hidden" id="question15" name="question15" value="Question 15: What motivates you?" required><br>
            <textarea id="q15_answer" name="q15_answer" rows="4" cols="50" required></textarea><br><br>

            <label for="question16">Question 16: Please select the essay topic you want to answer: 300-500 words</b></label><br>
            <input type="hidden" id="question16" name="question16" value="Question 16: What motivates you?" required><br>
            <select id="question16" name="q16_answer1" required>
                <option value="" disabled selected>Select an option</option>
                <option value="My career aspirations and goals">My career aspirations and goals</option>
                <option value="The impact of technology on society">The impact of technology on society</option>
                <option value="he impact of enviromental conservation on future generations">The impact of enviromental conservation on future generations</option>
            </select><br><br>
            <textarea id="q16_answer" name="q16_answer2" rows="4" cols="50" required></textarea><br><br>
    </section>
            <input type="hidden" id="start_time" name="start_time" value="">
            <input type="submit" value="Submit">
        </form>
</section>
        
    <footer>
        <p>&copy; 2024 K-Tel Solution (010 800 1786)</p>
    </footer>

    <script>

        document.getElementById('personalityTestForm').addEventListener('submit', function(event) {
            const answerTextarea = document.getElementById('q16_answer');
            const wordCount = answerTextarea.value.trim().split(/\s+/ ).length;

            if (wordCount <3) {
                event.preventDefault(); // Prevent form submission
                alert('Please provide a longer answer (at least 300 words)');
            }
        });
       
        var modal = document.getElementById("myModal");

        // Display the modal
        modal.style.display = "block";

        // Close the modal and redirect to the home page
        function cancel() {
            modal.style.display = "none";
            window.location.href = 'index.php'; // Redirect to the home page
        }

        // Agree to the rules and show the test form
        function agree() {
            modal.style.display = "none";
            document.getElementById('personalityTestForm').style.display = "block";
        }
        function startTest() {
        // Record the start time
        var startTime = new Date().toISOString().slice(0, 19).replace('T', ' ');
        document.getElementById('startTestButton').setAttribute('data-start-time', startTime);

        // Set the start time value in the hidden input field
        document.getElementById('start_time').value = startTime;

        // Hide the modal and display the test form
        modal.style.display = "none";
        document.getElementById('personalityTestForm').style.display = "block";

        // Start the countdown timer
        countdown();
        countdownInterval = setInterval(countdown, 1000);
    }

    ///////
    let timeLeft = 3600; // 1 hour in seconds
    const timerDisplay = document.getElementById('timer');

    const timer = setInterval(() => {
      const minutes = Math.floor(timeLeft / 60);
      let seconds = timeLeft % 60;

      if (seconds < 10) {
        seconds = '0' + seconds;
      }

      timerDisplay.textContent = `Time remaining: ${minutes}:${seconds}`;

      if (timeLeft === 0) {
        clearInterval(timer);
        alert('Time is up! Test submitted.');
        // Add code here to submit the test
      } else {
        timeLeft--;
      }
    }, 1000);

    // Disable right-click context menu
    window.addEventListener('contextmenu', function (e) {
      e.preventDefault();
    });

    // Disable keyboard shortcuts
    document.onkeydown = function (e) {
      if (e.ctrlKey || e.metaKey) {
        return false;
      }
    };

    let tabSwitchCount = 0;
  let testTerminated = false;

  window.addEventListener("beforeunload", function (e) {
      if (testTerminated) {
          return null; // This will prevent the default confirmation message
      }
      return "Are you sure you want to leave the page? Your progress will be lost.";
  });

  window.addEventListener("blur", function () {
      setTimeout(function() {
          if (!document.hasFocus()) {
              tabSwitchCount++;
              if (tabSwitchCount >= 2) {
                  alert("You have switched tabs too many times. Your test will be terminated.");
                  testTerminated = true;
                  // Implement test termination logic here
                  // For example, redirect to a test summary page or display a message
                  // You can add specific actions to handle the test termination
              } else {
                  alert("You are not allowed to open other tabs. Your test will be blocked.");
                  window.focus();
              }
          }
      }, 0);
  });

    
    </script>
</body>
</html>
