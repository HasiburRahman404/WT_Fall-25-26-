<!DOCTYPE html>
<html>
    <head>
        <title>Registration form</title>
        <style>
            body{
                font-family: Arial,sans-serif;
                padding:30px;
                background-color: #f0f8ff;

            }
            h2{
                text-align:center;
                
            }
            form{
                background-color:#ffffff;
                padding: 20px;
                width: 300px;
                margin: 0 auto;
                box-shadow: 0 0 10px rgba(0,0,0,0.1)

            }
            input,button{
                width:100%;
                padding:8px;
                margin-top:10px;
                border-radius:5px;
                border: 1px solid #ccc;



            }
            button{
                background-color: #003366;
                color:white;
                
            }
            #output{
                margin-top: 20px;
                text-align: center;
                font-size: 16px;
                color: #003366;
            }
            #error{
                margin-top:10px;
                color:red;
                text-align:center;
            }


            </style>
            </head>
            <body>
                <h2>Student Registration</h2>
                <form onsubmit="return handleSubmit()">
                    <label>Full Name:</label>
                    <input type="text" id="name" />

                    <label>Email:</label>
                    <input type="text" id="email" />

                    <label>Password</label>
                    <input type="text" id="password" />

                    <label>Confirm Password</label>
                    <input type="text" id="confirmpassword" />

                    <button type="submit">Register</button>
                    
</form>
<!--Output Section -->
<div id="error"></div>
<div id="output"></div>

<form onsubmit="return add()">
    <h2>Course Registration</h2>
    <label>Course Name:</label>
    <input type="text" id="coursename" />

    <button type ="submit">Add Course</button>
    <select id="addcourse">
        <option value="webtech">Webtech</option>
        <option value="oop2">OOP2</option>
        <option value="ML">ML</option>
        </select>
        </form>
<script>
    function handleSubmit(){
        var name = document.getElementById("name").value.trim();
        var email =document.getElementById("email").value.trim();
        var password = document.getElementById("password").value.trim();
        var confirmpassword = document.getElementById("confirmpassword").value.trim();

        var errorDiv= document.getElementById("error");
        var outputDiv=document.getElementById("output");

        errorDiv.innerHTML ="";
        outputDiv.innerHTML="";

        if(name==""|| email===""||password===""||confirmpassword===""){
            errorDiv.innerHTML ="please Fill all the fields.";
            return false;
        }
        if(password !==confirmpassword){
            errorDiv.innerHTML="Password Do not match"
            return false;
        }
        
        var flag =false;
        for(var i=0;i<email.length;i++){
            if(email[i]==="@"){
                flag=true;
                break;
            }
                
            

        }
        if(flag===false){
            errorDiv.innerHTML="Email must contain '@'.";
            return false;
        }
        
         outputDiv.innerHTML = `
        <strong>Registration Successfull!</strong><br><br>
        Name: ${name}<br>
        Email:${email}
      `;
 

        return false;



    }


    </script>
</body>
</html>
