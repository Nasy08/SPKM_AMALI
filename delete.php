<?php
include 'config.php';

$nokp = $_GET['no_kp'];

$result = mysqli_query($db,"DELETE FROM pekerja WHERE no_kp = '$nokp'");
echo "Kamu berjaya memadam rekod ini";

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <script src="https://cdn.tailwindcss.com"></script>
 </head>
 <body>
    <br>
    <button class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"><a href="index.php">Yes, Sure</a></button>
 </body>
 </html>
 