<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astrological FINDER</title>
    
</head>
<body style="text-align: center;">
     <div class="square">
      <div class="top-container">
         <h1 style="font-family: Ravie;">Birthstone And Zodiac</h1>
         <h1 style="font-family: Ravie;">Sign</h1>
         </div>

            <div class="middle-container">
                <form method="POST" action="stone.php">
                 <p id="Yname"> Complete Name</p>
                <input type="text" name="Name" id="name">

                 <p id="BM">Birthmonth</p>
                 <select  name="month" id="Birthmonth">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
                </select>
         <br></br>
                <div class="bottom-container">
                    <div id="btn">
                     <button >FIND OUT</button>
                </div>
                <div>
        </form>
    </div>
</body>
</html>