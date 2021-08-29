<div>
    <h1>List Student</h1>

    <!-- Add a form tag to cover the table -->
    <form action="" method="post">

        <?php
        require_once('includes/helper-member.php');

        if (isset($_POST['delete'])) { // If "delete" button is clicked.
            $checked = $_POST['checked'];


            if (!empty($checked)) { // If at least 1 checkbox is checked.
                $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                // Real escape all StudentID.
                foreach ($checked as $value) {
                    $escaped[] = $con->real_escape_string($value);
                }

                // SQL with WHERE field IN (...) clause.
                $sql = "DELETE FROM member WHERE StudentID IN ('" .
                        implode("','", $escaped) . "')";

                if ($con->query($sql)) {
                    printf('
                    <div class="info">
                    <strong>%d</strong> record(s) has been deleted.
                    </div>',
                            $con->affected_rows);
                }

                $con->close();
            }
        }

        $headers = array(
            'StudentID' => 'Student ID',
            'StudentName' => 'Student Name',
            'Gender' => 'Gender',
            'Program' => 'Program'
        );

// Validate sort, order and filter.
        if (!isset($_GET['sort'])) {
            $sort = 'StudentID';
        } else {
            $sort = (array_key_exists($_GET['sort'], $headers) ? $_GET['sort'] : 'StudentID');
        }

        if (!isset($_GET['order'])) {
            $order = 'ASC';
        } else {
            $order = ($_GET['order'] == 'DESC' ? 'DESC' : 'ASC');
        }

        if (!isset($_GET['program'])) {
            $program = '%';
        } else {
            $program = (array_key_exists($_GET['program'], $PROGRAMS) ? $_GET['program'] : '%');
        }

        echo '<p>Filter : ';
        printf('<a href="?sort=%s&order=%s">All Programs</a> ', $sort, $order);
        foreach ($PROGRAMS as $key => $value) {
            printf('| <a href="?sort=%s&order=%s&program=%s">%s</a> ',
                    $sort, $order, $key, $key);
        }
        echo '</p>';

        echo '<table border="1" cellpadding="5" cellspacing="0">';
        echo '<tr>';
        echo '<th>&nbsp;</th>'; // <-- Addtion column header (empty).
        foreach ($headers as $key => $value) {
            if ($key == $sort) { // The sorted field.
                printf('
                <th>
                <a href="?sort=%s&order=%s&program=%s">%s</a>
                <img src="img/%s" alt="%s" />
                </th>',
                        $key,
                        $order == 'ASC' ? 'DESC' : 'ASC',
                        $program,
                        $value,
                        $order == 'ASC' ? 'asc.png' : 'desc.png',
                        $order == 'ASC' ? 'Ascending' : 'Descending');
            } else { // Non-sorted field.
                printf('
                <th>
                <a href="?sort=%s&order=ASC&program=%s">%s</a>
                </th>',
                        $key,
                        $program,
                        $value);
            }
        }
        echo '<th>&nbsp;</th>'; // <-- Addtion column header (empty).
        echo '</tr>';

        $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sql = "SELECT * FROM member WHERE Program LIKE '$program' ORDER BY $sort $order";

        if ($result = $con->query($sql)) {
            while ($row = $result->fetch_object()) {
                printf('
                <tr>
                <td>
                    <input type="checkbox" name="checked[]" value="%s" />
                </td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>
                    <a href="edit-member.php?id=%s">Edit</a> |
                    <a href="delete-member.php?id=%s">Delete</a>
                </td>
                </tr>',
                        $row->StudentID, // <-- Value of the checkboxes.
                        $row->StudentID,
                        $row->StudentName,
                        $GENDERS[$row->Gender],
                        $row->Program . ' - ' . $PROGRAMS[$row->Program],
                        $row->StudentID,
                        $row->StudentID);
            }
        }

        printf('
        <tr>
        <td colspan="6">
            %d record(s) returned.
            [ <a href="insert-member.php">Insert Member</a> ]
        </td>
        </tr>',
                $result->num_rows);
        echo '</table>';

        $result->free();
        $con->close();
        ///////////////////////////////////////////////////////////////////////
        ?>

        <!-- Submit button for multiple deletion -->
        <br />
        <input type="submit" name="delete" value="Delete Checked"
               onclick="return confirm('This will delete all checked records.\nAre you sure?')" />
    </form>
    <!-- End of form -->

    <p>
        [ <a href="index.php">Index</a> ]
    </p>
</div>
<!-- End of content -->
