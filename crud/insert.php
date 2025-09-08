<?php
    include('connection.php');
?>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];

        $query = "insert into form values('','$name', '$password', '$email', '$gender', '$address')";

        $data = mysqli_query($conn, $query);

        if($data){
            echo "data inserted";
        }
        else{
            echo "issue h";
        }
    }
?>