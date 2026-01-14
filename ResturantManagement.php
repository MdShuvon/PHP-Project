<?php
session_start();

// Handle form submissions
if (!isset($_SESSION['items'])) $_SESSION['items'] = [];

if (isset($_POST['add'])) {
    $item = $_POST['item'];
    $price = floatval($_POST['price']);
    $qty = intval($_POST['quantity']);
    if ($item && $price > 0 && $qty > 0) {
        $_SESSION['items'][] = "$item - $price x $qty";
    }
}

if (isset($_POST['clear'])) {
    $_SESSION['items'] = [];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Management System</title>
    <style>
        body 
        { 
            font-family: Calibri; 
            background-color: #f0f0f0; 
            padding: 20px; 
        }
        .container 
        { 
            width: 700px; 
            margin: auto; 
            background: #fff; 
            padding: 20px; 
            border-radius: 10px; 
        }
        h2 
        { 
            text-align: center; 
            color: white; 
            background-color: #006666; 
            padding: 15px; 
            border-radius: 10px; 
        }
        label, select, input 
        { 
            display: block; 
            width: 100%; 
            margin: 10px 0; 
            font-size: 18px; 
        }
        textarea 
        { 
            width: 100%;
            height: 100px; 
            margin-top: 10px; 
            font-size: 16px; 
        }
        button 
        { 
            padding: 10px 20px; 
            background-color: #009999; 
            color: white; 
            font-size: 18px; 
            border: none; 
            cursor: pointer; 
            margin-right: 10px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Restaurant Management System</h2>
        <form method="post">
            <label for="item">Select Item:</label>
            <select name="item" required>
                <option value="">Menu</option>
                <option value="Sharma Burger">Sharma Burger</option>
                <option value="Shingara">Shingara</option>
                <option value="Samosa">Samosa</option>
                <option value="Tehri">Tehri</option>
                <option value="Pasta">Pasta</option>
                <option value="Roll">Roll</option>
                <option value="Pakora">Pakora</option>
                <option value="Bhel Puri">Bhel Puri</option>
                <option value="Chips">Chips</option>
                <option value="Water">Water</option>
                <option value="Mojo">Mojo</option>
                <option value="Cha">Cha</option>
                <option value="Tissue Packet">Tissue Packet</option>
            </select>

            <label for="price">Item Price:</label>
            <input type="number" step="0.01" name="price" required>

            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" required>

            <button type="submit" name="add">Add Item</button>
            <button type="submit" name="clear">Clear</button>
        </form>

        <?php
        if (!empty($_SESSION['items'])) {
            echo "<h3>Items Ordered:</h3><ul>";
            $total = 0;
            foreach ($_SESSION['items'] as $entry) {
                echo "<li>$entry</li>";
                preg_match('/- ([0-9.]+) x (\d+)/', $entry, $matches);
                $price = floatval($matches[1]);
                $qty = intval($matches[2]);
                $total += $price * $qty;
            }
            echo "</ul>";
            echo "<h3>Total Order Price: $" . number_format($total, 2) . "</h3>";
        }
        ?>
    </div>
</body>
</html>