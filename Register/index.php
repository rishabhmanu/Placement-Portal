<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="process.php" method="post">
      
        <h1>Student Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="usn">USN:</label>
          <input type="text" id="usn" name="usn" required>

          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>

          <label for="branch">Branch:</label>
          <!-- <input type="text" id="branch" name="branch" required> -->
          <!-- <label for="basics">Branch:</label> -->
          <select id="branch" name="branch">
          	<option value="CSE">CSE</option>
          	<option value="ISE">ISE</option>
          	<option value="ME">ME</option>
          	<option value="CVL">CVL</option>
          	<option value="ECE">ECE</option>
          	<option value="EEE">EEE</option>
          	<option value="IP">IP</option>
        </select>


          
          <label for="mobile">Mobile No:</label>
          <input type="text" id="mobile" name="mobile" pattern=".{5,10}" required title="Max 10 digits are allowed">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email" required>
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password">
          
          <label>Gender:</label>
          <input type="radio" id="m" value="m" name="gender" checked="checked"><label for="m" class="light">Male</label><br>
          <input type="radio" id="f" value="f" name="gender"><label for="f" class="light">Female</label><br>
          <input type="radio" id="n" value="n" name="gender"><label for="n" class="light">Non Binary</label><br>
        </fieldset>

        <fieldset>
          <legend><span class="number">2</span>Your Skills(Rate Yourself)</legend>
          <label for="skills">C:</label>
          <select id="c" name="c">
          	<option value="0">0</option>
          	<option value="1">1</option>
          	<option value="2">2</option>
          	<option value="3">3</option>
          	<option value="4">4</option>
          	<option value="5">5</option>
          	<option value="6">6</option>
          	<option value="7">7</option>
          	<option value="8">8</option>
          	<option value="9">9</option>
          	<option value="10">10</option>
         
        </select>


        <label for="skills">C++:</label>
          <select id="cpp" name="cpp">
          	<option value="0">0</option>
          	<option value="1">1</option>
          	<option value="2">2</option>
          	<option value="3">3</option>
          	<option value="4">4</option>
          	<option value="5">5</option>
          	<option value="6">6</option>
          	<option value="7">7</option>
          	<option value="8">8</option>
          	<option value="9">9</option>
          	<option value="10">10</option>
         
        </select>
	

        <label for="skills">Data Structures:</label>
          <select id="ds" name="ds">
          	<option value="0">0</option>
          	<option value="1">1</option>
          	<option value="2">2</option>
          	<option value="3">3</option>
          	<option value="4">4</option>
          	<option value="5">5</option>
          	<option value="6">6</option>
          	<option value="7">7</option>
          	<option value="8">8</option>
          	<option value="9">9</option>
          	<option value="10">10</option>
         
        </select>


        <label for="skills">Java:</label>
          <select id="java" name="java">
          	<option value="0">0</option>
          	<option value="1">1</option>
          	<option value="2">2</option>
          	<option value="3">3</option>
          	<option value="4">4</option>
          	<option value="5">5</option>
          	<option value="6">6</option>
          	<option value="7">7</option>
          	<option value="8">8</option>
          	<option value="9">9</option>
          	<option value="10">10</option>
         
        </select>


        <label for="skills">Python:</label>
          <select id="python" name="python">
          	<option value="0">0</option>
          	<option value="1">1</option>
          	<option value="2">2</option>
          	<option value="3">3</option>
          	<option value="4">4</option>
          	<option value="5">5</option>
          	<option value="6">6</option>
          	<option value="7">7</option>
          	<option value="8">8</option>
          	<option value="9">9</option>
          	<option value="10">10</option>
         
        </select>


        <label for="skills">Database Management System:</label>
          <select id="dbms" name="dbms">
          	<option value="0">0</option>
          	<option value="1">1</option>
          	<option value="2">2</option>
          	<option value="3">3</option>
          	<option value="4">4</option>
          	<option value="5">5</option>
          	<option value="6">6</option>
          	<option value="7">7</option>
          	<option value="8">8</option>
          	<option value="9">9</option>
          	<option value="10">10</option>
         
        </select>


        <label for="skills">Algorithm:</label>
          <select id="ada" name="ada">
          	<option value="0">0</option>
          	<option value="1">1</option>
          	<option value="2">2</option>
          	<option value="3">3</option>
          	<option value="4">4</option>
          	<option value="5">5</option>
          	<option value="6">6</option>
          	<option value="7">7</option>
          	<option value="8">8</option>
          	<option value="9">9</option>
          	<option value="10">10</option>
         
        </select>

        
        <label for="skills">Operating System:</label>
          <select id="os" name="os">
          	<option value="0">0</option>
          	<option value="1">1</option>
          	<option value="2">2</option>
          	<option value="3">3</option>
          	<option value="4">4</option>
          	<option value="5">5</option>
          	<option value="6">6</option>
          	<option value="7">7</option>
          	<option value="8">8</option>
          	<option value="9">9</option>
          	<option value="10">10</option>
         
        </select>


	</fieldset>

	<fieldset>
          <legend><span class="number">3</span>Academics</legend>
          <label for="Xth">10th(percentage):</label>
           <input type="text" id="Xth" name="Xth" required>
           
           <label for="XIIth">12th(percentage):</label>
           <input type="text" id="XIIth" name="XIIth" required>

           <label for="sem1">1st sem(GPA):</label>
           <input type="text" id="sem1" name="sem1" required>


           <label for="sem2">2nd sem(GPA):</label>
           <input type="text" id="sem2" name="sem2" required>

           <label for="sem3">3rd sem(GPA):</label>
           <input type="text" id="sem3" name="sem3" required>

           <label for="sem4">4th sem(GPA):</label>
           <input type="text" id="sem4" name="sem4" required>

           <label for="sem5">5th sem(GPA):</label>
           <input type="text" id="sem5" name="sem5" required>

           <label for="sem6">6th sem(GPA):</label>
           <input type="text" id="sem6" name="sem6" required>

           <label for="cgpa">CGPA(till 6th sem):</label>
           <input type="text" id="cgpa" name="cgpa" required>

        


      
        <fieldset>
          <legend><span class="number">4</span>About Yourself</legend>
          <label for="bio">Bio:</label>
          <textarea id="bio" name="bio"></textarea>
        </fieldset>

        <button type="submit" value="submit">Sign Up</button>
      </form>
      
    </body>
</html>

  
</body>
</html>
