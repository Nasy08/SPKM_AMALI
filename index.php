<?php
include_once "config.php";

$result = mysqli_query($db, "SELECT * FROM pekerja ORDER BY no_kp ASC");

if (isset($_POST['Submit'])){
    $name = $_POST['nama_pekerja'];
    $nokp = $_POST['no_kp'];
    $nohp = $_POST['no_hp'];
    $gender = $_POST['jantina'];

    $add = mysqli_query($db, "INSERT INTO pekerja (nama_pekerja,no_kp,no_hp,jantina) VALUES ('$name','$nokp','$nohp','$gender' NOW())");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-500">
    <center>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-bold text-center text-gray-200">
            SENARAI PEKERJA
        </caption>
        <thead class="text-sm text-gray-900 uppercase bg-gray-50 dark:bg-gray-400 dark:text-gray-800">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID 
                </th>
                <th scope="col" class="px-6 py-3">
                    NAMA PEKERJA
                </th>
                <th scope="col" class="px-6 py-3">
                    NO KP
                </th>
                <th scope="col" class="px-6 py-3">
                    NO HP
                </th>
                <th scope="col" class="px-6 py-3">
                    JANTINA
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>
            </tr>
        </thead>
        <?php
        $sql = "SELECT * FROM pekerja ORDER BY no_kp ASC";
        $data = mysqli_query($db, $sql);
        $id = 1;
            while ($r = mysqli_fetch_array($result)){
            ?>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-5 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $id ?>
                </td>
                <td class="px-5 py-3">
                    <?php echo $r['nama_pekerja']; ?>
                </td>
                <td class="px-5 py-3">
                    <?php echo $r['no_kp']; ?>
                </td>
                <td class="px-5 py-3">
                    <?php echo $r['no_hp']; ?>
                </td>
                <td class="px-5 py-3">
                    <?php echo $r['jantina']; ?>
                </td>
                <td class="px-4 py-2 text-center">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="update.php?no_kp=<?php echo $r['no_kp']?>">Update</a></button>
                <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800"><a href="delete.php?no_kp=<?php echo $r['no_kp']?>">Delete</a></button>
                </td>
            </tr>
        </tbody>
        <?php $id = $id + 1;
        } 
        ?>
    </table>
</div>
    </center>
    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><a href="create.php">ADD</a></button>
</body>
</html>