<div>
    <h1>Edit Member</h1>
    <?php
    require_once('includes/helper-member.php');

    $hideForm = false;

    // --> Retrieve Student record based on the passed StudentID.
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        // http://localhost/Practical5/edit-student.php?id=10abc00003
        // Read query string --> StudentID.
        $id = strtoupper(trim($_GET['id']));

        $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $id = $con->real_escape_string($id); // escape those character that sensitive in sql query statement
        $sql = "SELECT * FROM member WHERE StudentID = '$id'";

        $result = $con->query($sql);
        if ($row = $result->fetch_object()) {
            $id = $row->StudentID;
            $name = $row->StudentName;
            $gender = $row->Gender;
            $program = $row->Program;
        } else {
            echo '
                <div class="error">
                Opps. Record not found.
                [ <a href="list-member.php">Back to list</a> ]
                </div>
                ';

            $hideForm = true; // Flag, "true" to hide the form.
        }

        $result->free();
        $con->close();
    }
    // --> Update the record.
    else {
        $id = strtoupper(trim($_POST['id']));
        $name = trim($_POST['name']);
        $gender = trim($_POST['gender']);
        $program = trim($_POST['program']);

        // Validations:
        // ------------
        // Validation functions are defined at "helper.php".
        // I don't validate StudentID (PK) as it is not being updated.
        // Can check the existence of the StudentID if wanted to.
        $error['name'] = validateStudentName($name);
        $error['gender'] = validateGender($gender);
        $error['program'] = validateProgram($program);
        $error = array_filter($error);

        if (empty($error)) {
            $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            $sql = '
                UPDATE member SET
                StudentName = ?, Gender = ?, Program = ?
                WHERE StudentID = ?
            ';
            $stm = $con->prepare($sql);
            $stm->bind_param('ssss', $name, $gender, $program, $id);

            if ($stm->execute()) {
                printf('
                    <div class="info">
                    Student <strong>%s</strong> has been updated.
                    [ <a href="list-member.php">Back to list</a> ]
                    </div>',
                        $name);
            } else {
                echo '
                    <div class="error">
                    Opps. Database issue. Record not updated.
                    </div>
                    ';
            }

            $stm->close();
            $con->close();
        } else {
            // Validation failed. Display error message.
            echo '<ul class="error">';
            foreach ($error as $value) {
                echo "<li>$value</li>";
            }
            echo '</ul>';
        }
    }
    ?>
    <?php if ($hideForm == false) : // Hide or show the form.  ?>

        <form action="" method="post">
            <table cellpadding="5" cellspacing="0">
                <tr>
                    <td><label for="id">Student ID :</label></td>
                    <td>
                        <?php echo $id ?>
                        <?php htmlInputHidden('id', $id) // Hidden field. ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="name">Student Name :</label></td>
                    <td>
                        <?php htmlInputText('name', $name, 30) ?>
                    </td>
                </tr>
                <tr>
                    <td>Gender :</td>
                    <td>
                        <?php htmlRadioList('gender', $GENDERS, $gender) ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="program">Program :</label></td>
                    <td>
                        <?php htmlSelect('program', $PROGRAMS, $program, '-- Select One --') ?>
                    </td>
                </tr>
            </table>
            <br />
            <input type="submit" name="update" value="Update" />
            <input type="button" value="Cancel" onclick="location = 'list-member.php'" />
        </form>
    <?php endif ?>
    <p>
        [ <a href="index.php">Index</a> ]
    </p>
</div>