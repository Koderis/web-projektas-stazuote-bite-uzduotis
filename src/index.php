<?php
session_start();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['highest']) && isset($_POST['action'])) {
        $highest = intval($_POST['highest']);
        $action = $_POST['action'];

        // Increase the highest number by 5
        if ($action === 'increase') {
            $highest += 5;
        // Decrease the highest number by 5, ensuring it does not go below 0
        } elseif ($action === 'decrease') {
            $highest = max(0, $highest - 5);
        // Reset the highest number to the maximum value from the sorted list
        } elseif ($action === 'reset') {
            $numbers = file(__DIR__ . '/../data/input.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $numbers = array_map('intval', $numbers);
            sort($numbers);
            $highest = !empty($numbers) ? max($numbers) : 0;
        }

        // Store the updated highest number in the session
        $_SESSION['highest'] = $highest;
    }

    // Redirect to avoid form resubmission
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algorithm and Web Development Assessment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Sorted list of numbers</h1>
        <?php
        // Read integers from input.txt
        $numbers = file(__DIR__ . '/../data/input.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if ($numbers === false) {
            echo '<p>Error reading input file.</p>';
            exit;
        }
        $numbers = array_map('intval', $numbers);
        sort($numbers);
        
        // Get the highest number
        $highestNumber = !empty($numbers) ? max($numbers) : 0;
        if (isset($_SESSION['highest'])) {
            $highestNumber = $_SESSION['highest'];
        }

        // Display sorted list with the highest number highlighted
        echo '<ul>';
        foreach ($numbers as $number) {
            if ($number == $highestNumber) {
                echo '<li class="highlight">' . $number . '</li>';
            } else {
                echo '<li>' . $number . '</li>';
            }
        }
        echo '</ul>';
        ?>
        
        <h1>Highest Number</h1>
        <form action="index.php" method="post">
            <input type="number" name="highest" value="<?php echo $highestNumber; ?>" min="0" readonly>
            <button type="submit" name="action" value="decrease">-</button>
            <button type="submit" name="action" value="increase">+</button>
            <button type="submit" name="action" value="reset">Reset</button>
        </form>
    </div>
</body>
</html>