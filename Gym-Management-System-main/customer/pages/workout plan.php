<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user inputs
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $fitness_level = $_POST['fitness_level'];
    $goal = $_POST['goal'];

    // Implement your workout plan recommendation logic here
    // You can use if statements or a database to determine the workout plan
    $workout_plan = generateWorkoutPlan($age, $gender, $fitness_level, $goal);

    // Display the recommendation to the user
    echo "<h2>Workout Plan Recommendation</h2>";
    echo "<p>Your personalized workout plan:</p>";
    echo "<pre>$workout_plan</pre>";
}

function generateWorkoutPlan($age, $gender, $fitness_level, $goal) {
    // Replace this with your workout plan generation logic
    // You might have predefined workout plans in a database or use algorithms
    // Here, we'll provide a simple example

    $plan = "Based on your inputs:\n";
    $plan .= "Age: $age\n";
    $plan .= "Gender: $gender\n";
    $plan .= "Fitness Level: $fitness_level\n";
    $plan .= "Fitness Goal: $goal\n";
    $plan .= "\nYour workout plan:\n";

    // Generate a basic workout plan based on the user's inputs
    if ($fitness_level === 'beginner') {
        $plan .= "- Warm-up: 10 minutes of light cardio\n";
        $plan .= "- Strength training: 3 sets of bodyweight exercises (push-ups, squats, planks)\n";
        $plan .= "- Cardio: 20 minutes of brisk walking or jogging\n";
    } elseif ($fitness_level === 'intermediate') {
        $plan .= "- Warm-up: 10 minutes of light cardio\n";
        $plan .= "- Strength training: 4 sets of weightlifting exercises (bench press, deadlift, squats)\n";
        $plan .= "- Cardio: 30 minutes of high-intensity interval training (HIIT)\n";
    } elseif ($fitness_level === 'advanced') {
        $plan .= "- Warm-up: 15 minutes of light cardio\n";
        $plan .= "- Strength training: 5 sets of advanced weightlifting exercises (clean and jerk, snatch, front squat)\n";
        $plan .= "- Cardio: 40 minutes of intense cardio (running, cycling, swimming)\n";
    }

    return $plan;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Workout Plan Recommendation</title>
</head>
<body>
    <h1>Workout Plan Recommendation</h1>
    <p>Fill out the form below to receive a personalized workout plan.</p>

    <form action="recommendation.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br><br>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>

        <label for="fitness_level">Fitness Level:</label>
        <select name="fitness_level" required>
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select><br><br>

        <label for="goal">Fitness Goal:</label>
        <select name="goal" required>
            <option value="weight_loss">Weight Loss</option>
            <option value="muscle_gain">Muscle Gain</option>
            <option value="general_fitness">General Fitness</option>
        </select><br><br>

        <input type="submit" value="Get Workout Plan">
    </form>
</body>
</html>
