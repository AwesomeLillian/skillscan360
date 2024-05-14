<!DOCTYPE html>
<html>
<head>
    <title>Personality Test Rules</title>
</head>
<body>
    <h2>Personality Test Rules</h2>
    <p>These are the rules of the personality test...</p>
    <p>You must use a functioning webcam and microphone</p>
    <p>No cell phones or other secondary devices in the room or test area</p>
    <p>Your desk/table must be clear of any materials except your test-taking device</p>
    <p>No one else can be in the room with you</p>
    <p>No talking</p>
    <p>The testing room must be well-lit and you must be clearly visible</p>
    <p>No dual screens/monitors</p>
    <p>You ONLY HAVE 1 HOUR to complete each test</p>

    <button onclick="cancel()">Cancel</button>
    <button onclick="agree()">Agree</button>

    <script>
        function cancel() {
            // Redirect to a cancel page or back to the dashboard
            window.location.href = 'dashboard.php';
        }

        function agree() {
            // Redirect to the personality test page
            window.location.href = 'personality.php';
        }
    </script>
</body>
</html>
