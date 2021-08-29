<div>
        <h1>Insert Member</h1>
        <?php
            require_once('includes/helper-member.php');
            $id      = '';
            $name    = '';
            $gender  = '';
            $program = '';
            
            if (!empty($_POST)) // Something posted back.
            {
                $id      = strtoupper(trim($_POST['id']));
                $name    = trim($_POST['name']);
                $gender  = trim($_POST['gender']);
                $program = trim($_POST['program']);
                // Validations.
                $error['id']      = validateStudentID($id);
                $error['name']    = validateStudentName($name);
                $error['gender']  = validateGender($gender);
                $error['program'] = validateProgram($program);
                $error = array_filter($error); // Remove null values.

                if (empty($error)) // If no error.
                {

                    $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                    $sql = '
                        INSERT INTO member (StudentID, StudentName, Gender, Program)
                        VALUES (?, ?, ?, ?)
                    ';
                    $stm = $con->prepare($sql);
                    $stm->bind_param('ssss', $id, $name, $gender, $program);
                    $stm->execute();
                    if ($stm->affected_rows > 0)
                    {
                        printf('
                            <div class="info">
                            Student <strong>%s</strong> has been inserted.
                            [ <a href="list-member.php">Back to list</a> ]
                            </div>',
                            $name);

                        // Reset fields.
                        $id = $name = $gender = $program = null;
                    }
                    else
                    {
                        // Something goes wrong.
                        echo '
                            <div class="error">
                            Opps. Database issue. Record not inserted.
                            </div>
                            ';
                    }
                   $stm->close();
                    $con->close();
                    ///////////////////////////////////////////////////////////////////
                }
                else // Input error detected. Display error message.
                {
                    echo '<ul class="error">';
                    foreach ($error as $value)
                    {
                        echo "<li>$value</li>";
                    }
                    echo '</ul>';
                }            
       
}
        ?>
        
        <form action="" method="post">
            <table cellpadding="5" cellspacing="0">
                <tr>
                    <td><label for="id">Student ID :</label></td>
                    <td>
          <?php
                        htmlInputText('id', $id, 10);
                        ?>
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
           <input type="submit" name="insert" value="Insert" />
            <input type="button" value="Cancel" onclick="location='list-member.php'" />
        </form>
    </div>
