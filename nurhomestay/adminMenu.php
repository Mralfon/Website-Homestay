<html>
<head>
 <title>Main Menu for Admin</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
       <!-- Header -->
       <header class="header">
            <a href="#" class="logo">NURHOMESTAY MANAGEMENT - ADMIN MENU</a>
        </header>
        <!-- end -->
    
    <!-- AdminMenu -->
    <section class="adminmenu">          
<form action="registration.html" method="post">
<p><input type="submit" value="Update Record" name="cmdRecord"></p>
</form>

<form action="bookingList.php" method="post">
<p><input type="submit" value="View Record" name="cmdView"></p>
</form>

<form action="searchRecord.php" method="post">
<p><input type="submit" value="Search Record" name="cmdSearch"></p>
</form>

<form action="deleteList.php" method="post">
<p><input type="submit" value="Delete Record" name="cmdDelete"></p>
</form>

<form action="logout.php" method="post">
<p><input type="submit" value="Log Out" name="cmdlogout"></p>
</form>
</section>
<!-- end -->

</body>
</html>