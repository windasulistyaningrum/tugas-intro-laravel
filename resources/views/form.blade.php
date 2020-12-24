<!DOCTYPE html>
<html>
    <head>
        <Title> form </Title>
    </head>
    <body>
        <form action="/welcome" method= "POST">
        @csrf
        <div>
            <h1>Buat Accout Baru!</h1>
            <h2> Sign Up Form</h2>
           <label>First Name:</label> <br> <br>
           <input type="text" name="first_name"> <br> <br>
           <label>Last Name:</label> <br> <br>
           <input type="text" name="last_name"> <br> <br>
           
        </div>
        <div>
            <label> Gender</label> <br> <br>
            <input type="radio"name="Gender" value="0"> Male <br>
            <input type="radio"name="Gender" value="1"> Female<br>
            <input type="radio"name="Gender" value="0"> Other <br> <br>

        </div>
        <div>
            <label>Nationality:</label> <BR> <br>
            <select>
                <option value="Ind">Indonesian</option>
                <option value="Sing">Singaporean</option>
                <option value="Malay">Malaysian</option>
                <option value="aus">Australian</option>
            </select>
            <br>
            <br>
        </div>
        <div>
            <label> Language Spoken:</label> <br> <br>
            <input type="checkbox" name="bahasa" value="0"> Bahasa Indonesia <br>
            <input type="checkbox" name="bahasa" value="1"> English<br>
            <input type="checkbox" name="bahasa" value="2"> Other<br>
            <br>
        </div>
        <div>
            <lable> Bio:</lable><br>
            <textarea cols="30" row="100"></textarea><br>
            
            <input type="submit" value= "Sign Up"> 
           
        </div>

    </form>

    </body>
</html>