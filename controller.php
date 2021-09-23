<?php
include 'connection.php';


 if(isset($_POST['update_request'])){

      $fullname = $_POST['fname'];
      $loan_amount = $_POST['loan_amount'];
      $spread = $_POST['spread'];
      $id2 = $_POST['id'];

      

      
      
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
      
      $query2 = "UPDATE clients SET fullname = '$fullname', loan_amount = '$loan_amount', rate = '$rate', interest_amount = '$interest_amount', total_payable = '$total_payable', spread = '$spread' WHERE id = $id2";
      $result2 = mysqli_query($connect, $query2);

      // die(var_dump($result2));
      if($result2){
          header('location: home.php');
      }else{
            echo 'Unable to Update records';
      }

  }
?>