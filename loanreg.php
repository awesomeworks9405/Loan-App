<?php 
    include 'inc/header.php';
    include 'connection.php';

    if(isset($_POST['make_request'])){

        $fullname = $_POST['fname'];
        $loan_amount = $_POST['loan_amount'];
        $spread = $_POST['spread'];
        
        function interestCal($loan_amount, $spread){

            switch ($loan_amount) {
                //Loan1
                case ($loan_amount >= 5000 && $loan_amount <= 9999): 
                        $loanRate = 2.5;
                        $init = $loan_amount * $loanRate * $spread;
                        $interest = $init / 100;
                        return $interest;
                        break;
                //Loan2
                case ($loan_amount <= 19999): 
                        $loanRate = 3.5;
                        $init = $loan_amount * $loanRate * $spread;
                        $interest = $init / 100;
                        return $interest;
                        break;
                //Loan3
                case ($loan_amount <= 49999): 
                        $loanRate = 4;
                        $init = $loan_amount * $loanRate * $spread;
                        $interest = $init / 100;
                        return $interest;
                        break;
                //Loan4
                case ($loan_amount >= 50000): 
                        $loanRate = 6;
                        $init = $loan_amount * $loanRate * $spread;
                        $interest = $init / 100;
                        return $interest;
                default:
                    echo "Invalid amount. Please insert the correct amount";
            }
        
        };

        function rate($loan_amount){

            switch ($loan_amount) {
                //Loan1
                case ($loan_amount >= 5000 && $loan_amount <= 9999): 
                        $loanRate = 2.5;
                        return $loanRate;
                        break;
                //Loan2
                case ($loan_amount <= 19999): 
                        $loanRate = 3.5;
                        return $loanRate;
                        break;
                //Loan3
                case ($loan_amount <= 49999): 
                        $loanRate = 4;
                        return $loanRate;
                        break;
                //Loan4
                case ($loan_amount >= 50000): 
                        $loanRate = 6;
                        return $loanRate;
                default:
                    echo "Invalid amount. Please insert the correct amount";
            }
        
        };

        $interest_amount = interestCal($loan_amount, $spread);
        $total_payable = $loan_amount + $interest_amount;
        $rate = rate($loan_amount);
        
        $query = "INSERT INTO clients (fullname, loan_amount, rate, interest_amount, total_payable, spread) 
        VALUES ('$fullname', '$loan_amount', '$rate', '$interest_amount', '$total_payable', '$spread')";
        $result = mysqli_query($connect, $query);

        if($result){
            header('location: home.php');
        }

    }
    
?>
<br>
<h1>Request A Loan</h1>
<br>

<form name="user_input" action="loanreg.php" method="POST">
    <fieldset>
    <legend>Loan Request Form</legend>
        <label>Full Name:</label><br>
        <input type="text" name="fname" required minlength="5" maxlength="45"><br>
        <label>Loan Amount:</label><br>
        <input type="number" id="amount" name="loan_amount" onkeyup=calInterest(); min="5000" required><br>
        <label>Interest Rate (in %):</label><br>
        <input type="text" id="new_rate" name="rate" value="2.5%" disabled><br>
        <label>Spread: (Number of Months)</label><br>
        <input type="number" name="spread" required><br>

         <button type="submit" name="make_request">Make Request</button><br><br>
    </fieldset>
</form>

<?php include 'inc/footer.php' ?>

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

    // function allLetter(inputtxt)
    //   { 
    //   var letters = /^[A-Za-z]+$/;
    //   if(inputtxt.value.match(letters))
    //   {
    //   alert('Your name have accepted : you can try another');
    //   return true;
    //   }
      
    //   }
</script>