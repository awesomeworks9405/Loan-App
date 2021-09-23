<?php
    include 'connection.php';
    include 'inc/header.php';

   
    $id = $_GET['id'];

    $query = "SELECT * FROM clients WHERE id=$id";
    $result = mysqli_query($connect, $query);
    $client = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<br>
<h1>Update Record</h1>
<br>
<form action="controller.php" method="POST">
    <fieldset>
    <legend>Loan Request Form</legend>
        <label>Full Name:</label><br>
        <input type="text" name="fname" value="<?php echo $client[0]['fullname']; ?>"><br>
        <label>Loan Amount:</label><br>
        <input type="number" id="amount" name="loan_amount" onkeyup=calInterest();  value="<?php echo $client[0]['loan_amount']; ?>"><br>
        <label>Interest Rate (in %):</label><br>
        <input type="text" id="new_rate" name="rate" value="<?php echo $client[0]['rate']; ?>" disabled><br>
        <label>Spread: (Number of Months)</label><br>
        <input type="number" name="spread" value="<?php echo $client[0]['spread']; ?>"><br>
        <input type="hidden" name="id" value="<?php echo $client[0]['id']; ?>" >
         <button type="submit" name="update_request">Update</button><br><br>
    </fieldset>
</form>


<?php include 'inc/footer.php'; ?>

<script>
    function calInterest(){
        const amount = document.getElementById('amount').value;

        if(amount <= 9999){
            document.getElementById('new_rate').value = '2.5%';
        } 
        else if(amount <= 19999){
            document.getElementById('new_rate').value = '3.5%';
        }
        else if(amount <= 49999){
            document.getElementById('new_rate').value = '4%';
        }
        else if(amount >= 50000){
            document.getElementById('new_rate').value = '6%';
        }
    }
</script>