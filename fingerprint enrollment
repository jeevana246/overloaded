<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2 class="headcolor">REGISTRATION</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>
          <label>User ID</label>
        <input type="text"
                 name="userid" 
                 placeholder="User ID"><br>

          <label for="cars">Gender</label>
  <select name="gender" id="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
  </select><br><br>
          
          <label>Address</label>
        <input type="text" 
                 name="address" 
                 placeholder="Address"><br>
       
                 <label>Blood Group</label>
        <input type="text" 
                 name="bg" 
                 placeholder="Blood group"><br>

                 <label>Phone number</label>
        <input type="text" 
                 name="phone" 
                 placeholder="Phone Number"><br>

                 <label>Person name to contact (emergency)</label>
        <input type="text" 
                 name="name_em" 
                 placeholder="Person name"><br>
                 

                 <label>Person number to contact (emergency)</label>
        <input type="text" 
                 name="number_em" 
                 placeholder="Person number"><br>

                 <label>Alternate phone number 2</label>
        <input type="text" 
                 name="altph" 
                 placeholder="Alternate phone number 2"><br>


                 <label>Complication</label>
        <input type="text" 
                 name="compli" 
                 placeholder="Complication"><br>
          <label>Hospital Name</label>
          <?php if (isset($_GET['hname'])) { ?>
               <input type="text" 
                      name="hname" 
                      placeholder="Hospital name"
                      value="<?php echo $_GET['hname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="hname" 
                      placeholder="Hospital Name"><br>
          <?php }?>


     	

     	<button type="submit">Submit</button>
     </form>
</body>
</html>
