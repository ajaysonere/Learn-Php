<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="favicon1.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            width: 100%;
            height: 1000px;
            background-color:#ccc;
        }
        .form_input > form{
            width: 500px;
            height: 350px;
            background-color: white;
            margin: 150px auto; 
            box-shadow: 5px 5px 10px black; 
            border-radius: 20px;    
        }
        form > h1{
            font-size: 30px;
            font-weight: 600;
            font-family: Arial, Helvetica, sans-serif;
            margin:auto;
            text-align: center;
            padding-top: 20px;
        }
       form div{
        text-align: center;
        margin: 30px;
       }
      
       form >div > input{
        width: 80%;
        height: 45px;
        padding-left: 20px;
        font-size: 25px;
        font-weight: 500;
        font-family: Arial, Helvetica, sans-serif;
        outline:none;
       }
       input{
         border-radius: 20px;
         box-shadow: 3px 2px 5px skyblue;
         border-color: white;
       }
       input:hover{
        border: 2px solid skyblue;
       }
       form > div > .btn {
          width: 85%;
          height: 45px; 
          padding-left: 15px;
          margin-top: 15px;
          font-size: 30px;
          font-weight: 500;
          font-family: Arial, Helvetica, sans-serif;
          color:crimson;
          border: none;
          letter-spacing: 1px;
          text-transform: uppercase;
          cursor: pointer;
         border-radius: 20px;
         border: 2px solid crimson;
       }
       form > div > .btn:hover{
        color: white;
        background-color: crimson;
       }
    </style>
    <title>Courses </title>
</head>
<body>
    <div class="container">
      <div class="form_input">
         <form action="process.php" method="POST">
            <h1>ANDROID DEVELOPMENT </h1>
            <div class="form-group">
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="uname" required>
           </div>
          <div class="form-group">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required>
          </div>
         <div>
           <button type="submit" class="btn btn-primary form-control" value="login"> Submit </button>
         </div>
      </form>
    </div>
  </div>
</body>
</html>