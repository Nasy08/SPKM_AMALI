<?php
include('config.php'); 

if(isset($_POST['no_kp'])) {    
    $nokp = $_POST['no_kp'];
    $name = $_POST['nama_pekerja'];
    $gender = $_POST['jantina'];
    $nohp = $_POST['no_hp'];
    
    $sql = "INSERT INTO pekerja (no_kp,nama_pekerja,jantina,no_hp)
    VALUES ('$nokp','$name','$nohp','$gender')";
    $result = mysqli_query($db, $sql); 
    if ($result){
        echo "<script>alert('Berjaya kemaskini')</script>";
        echo "<script>window.location='index.php'</script>";
    }else{
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
        echo "<script>window.location='create.php'</script>";
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-600">
    <button onClick="history.back()" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Back</button>
    <h1 class="p-5 text-lg font-bold text-left text-gray-100">TAMBAH PEKERJA</h1>
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <form class="space-y-6" action="create.php" method="POST">
                <table>       
                    <div class="mb-6">
                        <label for= "no_kp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> IC </label>
                        <input type="text" name="no_kp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for= "nama_pekerja" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> NAMA </label>
                        <input type="text" name="nama_pekerja" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> 
                    </div>           
                    <div class="mb-6">
                        <label for= "no_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> HP </label>
                        <input type="text" name="no_hp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> 
                    </div>        
                    <div class="mb-6">
                        <label for= "jantina" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> JANTINA </label>
                        <input type="text" name="jantina" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> 
                    </div>
                </table>
                <button type="Submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">DONE</button>
                <button type="reset" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">CLEAR</button>
            </form>
        </div>
    </div>
    </section>
</body>
</html>