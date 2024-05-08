<!DOCTYPE htm>
<html>
<title>Welcome to Human Genome World!</title>

<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter the gene name you are looking for: <input type="text" name="gene">

<?php
ini_set('display_error', 1);
ini_set('diplay_startup_errors', 1);
error_reporting(E_ALL);


$server="localhost";
$username="aoludipe";
$database="aoludipe";

$connect = mysqli_connect($server,$username,"",$database);

if($connect->connect_error){
	echo "Something has gone terribly wrong";
	echo "Connection error:" .$connect->connect_error;
}else{
	echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Human Genome World</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 0;
                        padding: 0;
                    }

                    header {
                        background-color: #007bff;
                        color: #fff;
                        padding: 20px;
                        text-align: center;
                    }

                    h1 {
                        margin: 0;
                    }

                    form {
                        margin-top: 10px;
                    }

                    input[type='text'] {
                        padding: 5px;
                        width: 200px;
                    }

                    button {
                        padding: 5px 10px;
                        background-color: #4CAF50;
                        color: white;
                        border: none;
                        cursor: pointer;
                    }

                    .content {
                        padding: 20px;
                    }

                    .protein-sequence {
                        background-color: #f9f9f9;
                        padding: 20px;
                        margin-top: 20px;
                    }
                </style>
            </head>
            <body>
                <header>
                    <h1>Human Genome World</h1>
                    <form action='' method='GET'>
                        <input type='text' name='search' placeholder='Search genes...'>
                        <button type='submit'>Search</button>
                    </form>
                </header>
                <div class='content'>
                    <p>Welcome to Human Genome World!</p>";
}

$gene_name = isset($_GET['search']) ? $_GET['search'] : 'MT-RNRI';

$query = "SELECT protein_sequence FROM Genes g JOIN Proteins p on g.gene_id = p.gene_id WHERE gene_name = '$gene_name'";


$result = mysqli_query($connect, $query)
       	or trigger_error("Query Failed! SQL: $query - Error: "
       	. mysqli_error($connect), E_USER_ERROR);


if ($result = mysqli_query($connect, $query)) {
    while ($row = mysqli_fetch_row($result)) {
        printf("<br>%s", $row[0]);
    }
    mysqli_free_result($result);
}else{
	echo "No results";
}


mysqli_close($connect);
?>


