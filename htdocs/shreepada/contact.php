<html>

<head>

  <link rel="stylesheet" type="text/css" href="contact.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>
  window.addEventListener("load", function () {
      const loader = document.querySelector(".loader");
      loader.className += " hidden"; // class "loader hidden"
  });

</script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body background="contact2.jpg">

  <div class="loader">
    <img src="255.gif" />
  </div>

<a href="index.html"><img class="home" src="home.png"></a>

  <div class="contact">
    <h3>Contact Us</h3>
  </div>

  <div class="container1">
    <h1 class="h1">K.N. Ananda Kumar</h1>
    <a target="_blank" href="https://maps.app.goo.gl/TdWZexsUP9SYfAai8"><img src="loc.png" style="max-width:10%;max-width:10%;width:auto;height:auto;position:relative;right:40%;"></a>
    <h3 class="h3">#1166, 4th Block, S.M.V. Layout, Jnanabharathi Post, Bengaluru-560056</h3>
    <img src="mail.png" style="max-height:10%;max-width:10%;width:auto;height:auto;position:relative;right:40%;">
    <h3 class="h3">ananda.sprss@gmail.com</h3>
    <h3 class="h3" style="position:relative;right:1.5%">shreepadrss@gmail.com</h3>
    <img src="call.png" style="max-height:10%;max-width:10%;width:auto;height:auto;position:relative;right:40%;">
    <h3 class="h3">+919663681554</h3>
  </div>

  <div class="container">
    <form method="post" action="contact.php">
      <div class="row">
        <div class="col-25">
          <label for="name">Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="name" name="name" placeholder="Name" pattern="[a-zA-Z]*" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="mail">Mail ID</label>
        </div>
        <div class="col-75">
          <input type="text" id="mail" name="mail" placeholder="example@gmail.com" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" required />
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="contact">Contact</label>
        </div>
        <div class="col-75">
          <input type="text" id="contact" name="contact" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="domain">Domain of Service</label>
        </div>
        <div class="col-75">
          <select name="domain">
            <option>Thermoplastic Road Marking</option>
            <option>Sign Boards</option>
            <option>Crash Barriers</option>
            <option>Traffic Items</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Purpose</label>
        </div>
        <div class="col-75">
          <textarea id="purpose" name="purpose" placeholder="Write something.." style="height:50px"></textarea>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit" name="submit">
        <input type="reset" value="Reset">
      </div>
    </form>
  </div>

  <footer>
    <p>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-linkedin"></a>
      <a href="#" class="fa fa-instagram"></a><i style="font-size:3.5vw;color:white;"> | </i><span style="color:white"> For queries about website, Contact: <a target="_blank" href="https://in.linkedin.com/in/kushal-kumar-k-a-7a0101151">KUSHAL KUMAR KA</a> or <a target="_blank" href='https://in.linkedin.com/in/shreevershith-k'>SHREEVERSHITH K</a</span>
    </p>
  </footer>

</body>
</html>
<?php
$host = "localhost";
$user = "root";
$password="";
$db = "roadsafety";
$conn = new mysqli($host, $user, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $contact = $_POST['contact'];
    $domain = $_POST['domain'];
    $purpose = $_POST['purpose'];

    $sql =  "INSERT INTO  contacts(name,mail,contact,domain,purpose)
VALUES ('$name','$mail',$contact,'$domain','$purpose')";
if ($conn->query($sql) === TRUE) {
  ?> <script type="text/javascript">alert("New record inserted Successfully!!")</script><?php
} else {
  ?> <script type="text/javascript">alert("ERROR while inserting the records......")</script><?php
}

    $conn->close();
}

?>
