<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> VIIT Login </title>  
<style>   
Body {  
    font-family: 'Courier New', monospace;  
    background-color:   #6A5ACD;  
}  
button {   
       background-color: #6A5ACD;   
       width: 100%;  
        color: white;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
  
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid rgb(116, 112, 196);   
        box-sizing: border-box;   
    }  s
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }  

        
     
 .container {   
        padding: 50px;
        background-color: white;  
        width: 20%;
        
    }   
</style>   
</head>    
<body>    
    <center> <img src="https://4.bp.blogspot.com/-B_FDaf2-iSM/Ws194ee51lI/AAAAAAAA65U/gv2nodyVaCEf9clh_eBTIqnpxuTehKJXACLcBGAs/s1600/Vignan%2BLogo.png">   
    <form  method="POST" action="login_php.php">  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            
            <button type="submit" >Login</button>  
            <?php
    if(isset($_GET['msg']))
    {
      ?>
      <span style="color:red">login failed! pls enter correct details</span>
      <?php
    }
  ?>
             <a href="#">Forgot password? </a>   
        </div>   
    </form>  
    </center>   
</body>     
</html> 
