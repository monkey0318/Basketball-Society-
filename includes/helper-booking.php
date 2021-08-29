<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'booking');

//Return an array
function getPrograms() {
    return array(
        'BTS' => 'Basketball Training Session',
        'BST' => 'Basketball Skill Talk'
    );
}

function getGenders() {
    return array(
        'F' => 'Female',
        'M' => 'Male'
    );
}

$PROGRAMS = getPrograms();
$GENDERS = getGenders();

function htmlSelect($name, $items, $selectedValue = '', $default = '') {
    printf('<select name="%s" id="%s">' . "\n",
            $name, $name);

    if ($default != null) {
        printf('<option value="">%s</option>', $default);
    }

    foreach ($items as $value => $text) {
        printf('<option value="%s" %s>%s</option>' . "\n",
                $value,
                $value == $selectedValue ? 'selected="selected"' : '',
                $text);
    }

    echo "</select>\n";
}

// Print a <input type="text"> element.
function htmlInputText($name, $value = '', $maxlength = '') {
    printf('<input type="text" name="%s" id="%s" value="%s" maxlength="%s" />' . "\n",
            $name, $name, $value, $maxlength);
}

// Print a <input type="password"> element.
function htmlInputPassword($name, $value = '', $maxlength = '') {
    printf('<input type="password" name="%s" id="%s" value="%s" maxlength="%s" />' . "\n",
            $name, $name, $value, $maxlength);
}

// Print a <input type="hidden"> element.
function htmlInputHidden($name, $value = '') {
    printf('<input type="hidden" name="%s" id="%s" value="%s" />' . "\n",
            $name, $name, $value);
}

// Print a group of <input type="radio"> elements.
function htmlRadioList($name, $items, $selectedValue = '', $break = false) {
    foreach ($items as $value => $text) {
        printf('
            <input type="radio" name="%s" id="%s" value="%s" %s />
            <label for="%s">%s</label>' . "\n",
                $name, $value, $value,
                $value == $selectedValue ? 'checked="checked"' : '',
                $value, $text);

        if ($break)
            echo "<br />\n";
    }
}

//Validate /Return nothing
function validateStudentID($id) {
    if ($id == null) {
        return 'Please enter <strong>Student ID</strong>.';
    } else if (!preg_match('/^\d{2}[A-Z]{3}\d{5}$/', $id)) {
        return '<strong>Student ID</strong> is of invalid format. Format: 99XXX99999.';
    } else if (isStudentIDExist($id)) {
        return '<strong>Student ID</strong> given already exist. Try another.';
    }
}

// Check if Student ID already exist.
// Used by function validateStudentID().
function isStudentIDExist($id) {
    $exist = false;

    $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $id = $con->real_escape_string($id);
    $sql = "SELECT * FROM bookings WHERE StudentID = '$id'";

    if ($result = $con->query($sql)) {
        if ($result->num_rows > 0) {
            $exist = true;
        }
    }

    $result->free();
    $con->close();

    return $exist;
}

// Validate Student Name.
// Return nothing if no error.
function validateStudentName($name) {
    if ($name == null) {
        return 'Please enter <strong>Student Name</strong>.';
    } else if (strlen($name) > 30) { // Prevent hacks.
        return '<strong>Student Name</strong> must not more than 30 letters.';
    } else if (!preg_match('/^[A-Za-z @,\'\.\-\/]+$/', $name)) {
        return 'There are invalid letters in <strong>Student Name</strong>.';
    }
}

// Validate Gender.
// Return nothing if no error.
function validateGender($gender) {
    if ($gender == null) {
        return 'Please select a <strong>Gender</strong>.';
    } else if (!array_key_exists($gender, getGenders())) { // Prevent hacks.
        return 'Invalid <strong>Gender</strong> code detected.';
    }
}

// Validate Program.
// Return nothing if no error.
function validateProgram($program) {
    if ($program == null) {
        return 'Please select a <strong>Program</strong>.';
    } else if (!array_key_exists($program, getPrograms())) { // Prevent hacks.
        return 'Invalid <strong>Program</strong> code detected.';
    }
}

?>
