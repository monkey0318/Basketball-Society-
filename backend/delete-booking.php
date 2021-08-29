<div>
    <?php 
    require_once('includes/helper-booking.php');
    
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $id = strtoupper(trim($_GET['id']));
        $con = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $id = $con->real_escape_string($id);
        $sql = "SELECT * FROM bookings WHERE StudentID = '$id'";
        
        $result = $con->query($sql);
        if($row = $result->fetch_object()){
            $id = $row->StudentID;
            $name = $row->StudentName;
            $gender = $row->Gender;
            $program = $row->Program;
            
            printf('
                    <p>
                    Are you sure you want to delete the following student?
                    </p>
                    <table border="1" cellpadding="5" cellspaacing="0">
                    <tr>
                    <td>Student ID:</td>
                    <td>%s</td>
                    </tr>
                    <tr>
                        <td>Student Name :</td>
                        <td>%s</td>
                    </tr>
                    <tr>
                        <td>Gender :</td>
                        <td>%s</td>
                    </tr>
                    <tr>
                        <td>Program :</td>
                        <td>%s</td>
                    </tr>
                    </table>
                    <form action="" method="post">
                    <input type="hidden" name="id" value="%s"/>
                    <input type="hidden" name="name" value="%s" />
                    <input type="submit" name="yes" value="Yes" />
                    <input type="button" value="Cancel"
                    oneclick="location=\' list-booking.php\'" />
                    </form>',
                    $id,$name,$GENDERS[$gender],$PROGRAMS[$program],
                    $id,$name);
        }else{
            echo'<div class="error">
            Opps. Record not found.
            [ <a href="list-booking.php">Back to list</a>]
            </div>
            ';  
        }
        $result->free();
        $con->close();
    }
    else{
        $id= strtoupper(trim($_POST['id']));
        $name = trim($_POST['name']);
        $con = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        
        $sql='
              DELETE FROM bookings
              WHERE StudentID = ?
              ';
        $stm=$con->prepare($sql);
        $stm->bind_param('s', $id);
        $stm->execute();
        
        if($stm->affected_rows > 0){
            printf('
                   <div class="info">
                   Student<strong>%s</strong> has been deleted.
                   [<a href="list-booking.php">Back to list</a>]
                   </div>',
                    $name);
        }else{
            echo '
                <div class="error">
                Opps. Database issue. Record not deleted.
                </div>
            ';
        }
        $stm->close();
        $con->close();
    }
    
    ?>
    <p>
        [<a href="index1.php">Index</a>
    </p>
</div>
