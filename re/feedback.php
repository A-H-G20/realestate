
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Feedback Form</title>
    <link rel="stylesheet" href="feedback.css">
</head>
<body>
    <div class="container">
        <h1>Hotel Feedback</h1>
        <link rel="icon" type="image/x-icon" href="favic.ico">
        <form action="process_feedback.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="rating">Rating:</label>
            
            <html>
 
 <head>
     <meta charset="utf-8" />
     <title>Star Rating</title>
     <meta name="viewport"
           content="width=device-width, 
                    initial-scale=1" />
     <link rel="stylesheet"
           href="styles.css" />
 </head>
  
 <body>
     <div class="card">
         <br />
         <span onclick="gfg(1)"
               class="star">★
         </span>
         <span onclick="gfg(2)"
               class="star">★
         </span>
         <span onclick="gfg(3)"
               class="star">★
         </span>
         <span onclick="gfg(4)"
               class="star">★
         </span>
         <span onclick="gfg(5)"
               class="star">★
         </span>
         <h3 id="output">
               Rating is: 0/5
           </h3>
     </div>
     <script src="script.js"></script>
 </body>
  
 </html>

            </select>
            <script>
                let stars = 
    document.getElementsByClassName("star");
let output = 
    document.getElementById("output");
 
// Funtion to update rating
function gfg(n) {
    remove();
    for (let i = 0; i < n; i++) {
        if (n == 1) cls = "one";
        else if (n == 2) cls = "two";
        else if (n == 3) cls = "three";
        else if (n == 4) cls = "four";
        else if (n == 5) cls = "five";
        stars[i].className = "star " + cls;
    }
    output.innerText = "Rating is: " + n + "/5";
}
 
// To remove the pre-applied styling
function remove() {
    let i = 0;
    while (i < 5) {
        stars[i].className = "star";
        i++;
    }
}
            </script>

            <label for="comments">Comments:</label>
            <textarea name="comments" rows="4" required></textarea>

            <input type="submit" value="Submit Feedback">
        </form>
    </div>
</body>
</html>
<?php
include 'jana.php';
include('conn.php');
echo "<form method='post'> ";
extract($_POST);
if(isset($submit)){
   $res=mysqli_query($con, "INSERT INTO Feedbacks VALUES ('$_POST[FID]','$_POST[Ffr]','$_POST[fto]','$_POST[pr]','$_POST[Fh]'");
   if(!$res){
      die('Record not added ...'.mysqli_error($con));
   } else {
      echo "New Record is added to the Feedbacks table";
   }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $rating = $_POST["Rating"];
    $comments = $_POST["Comments"];
    $query = "INSERT INTO Feedbacks (Name, Email, Rating, Comments) 
              VALUES ('$name', '$email', '$rating', '$comments')";


} 

?>
