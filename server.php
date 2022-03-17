
<?php

if(isset($_POST['submit'])){

    $connection = mysqli_connect('localhost','root','','company_database');
    if (!$connection) {
        echo "connection failed";
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['mobile'];
    $pincode = $_POST['pincode'];
    $describes = $_POST['describes'];
    $gender = $_POST['gender'];
    $framwork = $_POST['languages'];
    $storages = $_POST['database'];
        $insert_query = "INSERT INTO student_data(Name, Email, Contact, Pin_Code, Describes, Gender, Gender, Framwork, Medium) 
VALUES
('$name', '$email', '$contact', '$pincode', '$describes', '$gender', '$framwork', '$storages')";
        if(mysqli_query($connection,$insert_query)){
            ?>
            <script>
                alert("Data inserted successfully");
            </script>

            <?php
        }
        else{
            ?>
            <script>
                alert("Data Not Inserted Properly");
            </script>
            <script>location.href='patient.html'</script>
            <?php

    }
}

?>