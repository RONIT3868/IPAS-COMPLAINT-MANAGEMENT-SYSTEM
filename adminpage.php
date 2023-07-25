<?php

require_once('retrieve.php');
$query= "SELECT * FROM details";
$query2= "SELECT * FROM details2";
$result = mysqli_query($connection,$query);
$result2= mysqli_query($connection,$query2);
?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Admin page</title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  

button {  
   
       background-color: #36de68;   
       width: 49%;  
        color: rgb(123, 85, 14);   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   

         form {   
        border: 4px solid #f1f1f1;   
    }   

    input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 3px solid green;   
        box-sizing: border-box;   
    }  

    button:hover {   
        opacity: 0.7;   
    }   
  
    .container {
      
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #7acb83;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
      text-align: left;
      margin-top: 0;
      height: 20px;
    }
    
    .scroll-container {
      height: 300px;
      overflow-y: scroll;
      
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      border: 1px solid #ddd;
      background-color: #a6aba7;
      padding: 10px;
      text-align: left;
    }
    
    th {
      background-color: #84dbdc;
    }
    
    .review-button {
      background-color: #4CAF50;
      color: rgb(209, 201, 201);
      border: none;
      padding: 6px 12px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      cursor: pointer;
    }
    
    .review-button:hover {
      background-color: #45a049;
    }
    
    .form-container {
      background-color: #f2f2f2;
      padding: 20px;
      margin-top: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    
    .form-input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }
    
    .form-submit {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .form-submit:hover {
      background-color: #45a049;
    }


</style> 
<body>

  <div class="container">
    <h1> Complaints Recived from User</h1>
    <div class="scroll-container">
      <table>
        <thead>
          <tr>
            <th>SI No.</th>
            <th>Com. ID</th>
            <th>Division</th>
            <th>Section</th>
            <th>Complaint Desc.</th>
            <th>Process</th>
            
          </tr>
        </thead>
        <tr>
          <?php
            
           while($row= mysqli_fetch_assoc($result)) 
           {
           ?>
           <td><?php echo $row['sl'];?></td>
           <td><?php echo $row['userid'];?></td>
           <td><?php echo $row['division'];?></td>
           <td><?php echo $row['hq'];?></td>
           <td><?php echo $row['complaint'];?></td>
           <td><button class="review-button">Review</button></td>

           </tr>
           <?php

           }

          ?>
        
        <tbody>

      
          <!-- Add data rows here -->
 





        <!--<tr>
            <td>1</td>
            <td><a href="retrieve.php">COM-001</a></td>
            <td>Division A</td>
            <td>Section X</td>
            <td>Complaint 1 description</td>
            <td><button class="review-button">Review</button></td>
        </tr>
        
        <tr>
          <td>2</td>
          <td><a href="retrieve.php">COM-002</a></td>
          <td>Division B</td>
          <td>Section Y</td>
          <td>Complaint 2 description</td>
          <td><button class="review-button">Review</button></td>
        </tr>

        <tr>
          <td>3</td>
          <td><a href="retrieve.php">COM-003</a></td>
          <td>Division B</td>
          <td>Section Y</td>
          <td>Complaint 2 description</td>
          <td><button class="review-button">Review</button></td>
        </tr> 


         Add more rows if needed -->
      </tbody>
    </table>
  </div>
  
  <br>
  
  <h1>Returned from Dealer</h1>
  <div class="scroll-container">
    <table>
      <thead>
        <tr>
          <th>SI No.</th>
          <th>Com. ID</th>
          <th>Division</th>
          <th>Section</th>
          <th>Reply from Dealer.</th>
          <th>Process</th>
        </tr>
      </thead>
      <tr>
          <?php
            
           while($row2= mysqli_fetch_assoc($result2)) 
           {
           ?>
           <td><?php echo $row2['sl'];?></td>
           <td><?php echo $row2['comid'];?></td>
           <td><?php echo $row2['division'];?></td>
           <td><?php echo $row2['section'];?></td>
           <td><?php echo $row2['complaint'];?></td>
           <td><button class="review-button">Review</button></td>

           </tr>
           <?php

           }

          ?>
      <tbody>
        <!-- Add data rows here 
        <tr>
          <td>1</td>
          <td><a href="retrieve.php">COM-001</a></td>
          <td>Division C</td>
          <td>Section Z</td>
          <td>Complaint 1 description</td>
          <td><button class="review-button">Review</button></td>
        </tr>

        <tr>
          <td>2</td>
          <td><a href="retrieve.php">COM-002</a></td>
          <td>Division C</td>
          <td>Section Z</td>
          <td>Complaint  description</td>
          <td><button class="review-button">Review</button></td>
        </tr>-->
      </tbody>
      </table>
</form>
</body>
</html>  