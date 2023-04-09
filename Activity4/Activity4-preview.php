<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Data</title>
</head>
<body>
    <h1>Form Data</h1>
    <?php
        if(empty($_GET['name']))
        {
            echo "Name: Not Provided <br>";
        }else{
            echo "Name: ".$_GET['name']."<br>";
        }

        if(empty($_GET['username']))
        {
            echo "Username: Not Provided <br>";
        }else{
            echo "Username: ".$_GET['username']."<br>";
        }

        if(empty($_GET['password']))
        {
            echo "Password: Not Provided <br>";
        }else{
            echo "Password: ".$_GET['password']."<br>";
        }

        if(empty($_GET['address']))
        {
            echo "Address: Not Provided <br>";
        }else{
            echo "Address: ".$_GET['address']."<br>";
        }

        if($_GET['countries'] == "none" )
        {
            echo "Country: Not Provided <br>";
        }else{
            echo "Country: ".$_GET['countries']."<br>";
        }
        
        if(empty($_GET['zip']))
        {
            echo "Zip Code: Not Provided <br>";
        }else{
            echo "Zip Code: ".$_GET['zip']."<br>";
        }

        if(empty($_GET['email']))
        {
            echo "Email: Not Provided <br>";
        }else{
            echo "Email: ".$_GET['email']."<br>";
        }

        if(empty($_GET['sex']))
        {
            echo "Sex: Not Provided <br>";
        }else{
            echo "Sex: ".$_GET['sex']."<br>";
        }

        if(empty($_GET['languages']))
        {
            echo "Language: Not Provided <br>";
        }else{
            echo "Language: ";
            foreach($_GET['languages'] as $item)
            {
                echo $item . " ";
            }
            echo "<br>";
        }

        if(empty($_GET['about']))
        {
            echo "About: Not Provided <br>";
        }else{
            echo "About: ".$_GET['about']."<br>";
        }
    ?>
</body>
</html>