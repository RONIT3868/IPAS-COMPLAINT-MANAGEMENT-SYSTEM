<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title>register complaint page</title>  
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
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    

</head>    
<body>    
    <center> <h2> REGISTER COMPLAINT </h2> </center>
    <form action="connection.php" method="POST">   
    
        <div class="container">
            
            <form id="complaintForm">
                <h3> <label for="division">Division:</label>
              <input type="text" name="division" id="division" required>
        
              <label for="hq">HQ Section:</label>
              <input type="text" name="hq" id="hq" required>
        
              <label for="userid">User ID:</label>
              <input type="text" name="userid" id="userid" required>
        
              <label for="name">Name:</label>
              <input type="text" name="username" id="username" required>
        
              <label for="mobile">Mobile:</label>
              <input type="text" name="mobile" id="mobile" required>
        
              <label for="complaint">Complaint Description:</label>
              <textarea name="complaint" id="complaint" required></textarea></h3>
        
              <h1><button type="submit">Submit</button>
               <button type="button" onclick="clearForm()">Clear</button></h1>
            </form>
    </form>    
        
            <div id="output"></div>
          </div>   
       
</body>     
</html>