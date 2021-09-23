<?php 
    include 'connection.php'; 
    include 'inc/header.php'; 

    $query = 'SELECT * FROM clients';
    $result = mysqli_query($connect, $query);
    $clients = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
?>
<style>

    #clients {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
    margin-bottom: 20px;
    }

    #clients td, #clients th {
    border: 1px solid #ddd;
    padding: 8px;
    }

    #clients tr:nth-child(even){background-color: #f2f2f2;}

    #clients tr:hover {background-color: #ddd;}

    #clients th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
    } 

</style>

<br>
<center><h1>Welcome To Home Page</h1></center>

<table id="clients">
    <tr>
        <th>S/N</th>
        <th>Full Name</th>
        <th>Loan Amount</th>
        <th>Interest</th>
        <th>Actions</th>
    </tr>
    <?php
        $rank = 1;
        foreach($clients as $client) {

    ?>
    <tr>
        <td><?php echo $rank++ ?></td>
        <td><?php echo $client['fullname']; ?></td>
        <td>&#8358;<?php echo $client['loan_amount'] ?></td>
        <td><?php echo $client['rate'] ?>%</td>
        <td>
            <a id="button" href="details.php?id=<?php echo $client['id'] ?>">VIEW</a>
            <a style="background-color: darkred" id="button" href="delete.php?id=<?php echo $client['id'] ?>">DELETE</a>
            <a style="background-color: darkblue" id="button" href="update.php?id=<?php echo $client['id'] ?>">UPDATE</a>
        </td>
    </tr>
    <?php } ?>
</table>

<center><button><a href="loanreg.php">Take a Loan</a></button></center>
<br>
<?php include 'inc/footer.php' ?>

<!-- Developed by Samuel Uche -->