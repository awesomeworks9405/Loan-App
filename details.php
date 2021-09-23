<?php
    include 'connection.php';
    include 'inc/header.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM clients WHERE id = $id";
        $result = mysqli_query($connect, $query);
        $client = mysqli_fetch_assoc($result);
  
    }

?>
<br>

<center> <h1>Full Details</h1> </center>
    <br>
    <div class="container">
        <div class="card">
            <div class="client">
                <p><b>Full Name:</b> <?php echo $client['fullname']; ?></p>
                <p> <b>Loan Amount:</b> <?php echo $client['loan_amount'];?> </p>
                <p> <b>Rate:</b> <?php echo $client['rate']; ?>% </p>
                <p> <b>Interest Payable:</b> <?php echo $client['interest_amount']; ?> </p>
                <p> <b>Amount Payable:</b> <?php echo $client['total_payable'] ?> </p>
                <p> <b>Spread:</b> <?php echo $client['spread']; ?> Months </p>
                <p> <b>Date:</b> <?php echo $client['created_at']; ?> </p>
            </div>
        </div>
    </div>

<?php include 'inc/footer.php' ?>