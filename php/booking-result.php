<?php

function getbooks()
{
    return array(
        'BMD' => 'Basketball Members Day',
        'AGM' => 'Annual General Meeting',
        'BTS' => 'Basketball Training Session',
        'ROB' => 'Rules Of Basketball',
        'BST' => 'Basketball Skill Talk'
    );
}

   function detectInputError()
   {
      // Use the global variables.
     global $name,$phone,$books,$gender; 
    
     // For holding error messages.
     $error = array();
    
     // gender
     if ($gender == null)
     {
         $error['gender'] = 'Unisex? Please select your <strong>gender</strong>.';
     }
     // EXTRA: To prevent hacks.
     else if (!preg_match('/^[MF]$/', $gender))
     {
        $error['gender'] = '<strong>Gender</strong> can only be either M or F.';
     }
     
     // name
     if ($name == null)
     {
        $error['name'] = 'Nameless? Please enter your <strong>name</strong>.';
     }
     // EXTRA: To prevent hacks.
     else if (strlen($name) > 30)
     {
        $error['name'] = 'Your <strong>name</strong> is too long. It must be less than 30 characters.';
     }
     else if (!preg_match('/^[A-Za-z @,\'\.\-\/]+$/', $name))
     {
        $error['name'] = 'There are invalid characters in your <strong>name</strong>.';
     }
     
     // phone
     if ($phone == null)
     {
        $error['phone'] = 'Please enter your <strong>mobile phone</strong> number.';
     }
      // EXTRA: To prevent hacks.
      else if (!preg_match('/^01\d-\d{7}$/', $phone))
      {
        $error['phone'] = 'Your <strong>mobile phone</strong> number is invalid. Format: 999-9999999 and starts with 01.';
      }
    
     // clubs
        if ($books == null)
        {
            $error['books'] = 'Please select <strong>event</strong> that you want to booking.';
        }
     else if (count($books) > 1)
        {
            $error['books'] = 'You cannot select more than 1 <strong>event</strong>.';
        }
     // EXTRA: To prevent hacks.
        else if (array_diff($books, array_keys(getbooks())) != null)
        {
            $error['books'] = 'You have selected invalid <strong>event</strong>.';
        }
        
        if ($gender != null && $books != null)
    {
        if ($gender == 'M' && in_array('LD', $books))
        {
            
        }
        else if ($gender == 'F' && in_array('GT', $books))
        {
            
        }
    }
    return $error;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
        <title>Books Result</title>
        <link type="text/css" href="result.css" rel="stylesheet" />
    </head>
    <body style="font-size: 1.2em">
        <?php
        if (isset($_POST['submit'])) // POST with submit button pressed.
        {
            // Trim unwanted whitespaces.
            $gender = trim($_POST['gender']);
            $name   = trim($_POST['name']);
            $phone  = trim($_POST['phone']);
            $books  = $_POST['books']; // It is an array.
            
            $error = detectInputError();
            
            if (empty($error)) // If there is no error.
            {
                printf('
                    <h1>Thanks for joining</h1>
                    <p>
                        <strong style="font-size: larger">%s. %s</strong><br />
                        You have booked the following events:
                    </p>',
                    ($gender == 'M' ? 'Mr' : 'Ms'), $name);
                $allbooks = getbooks();
                echo '<ul>';
                
                foreach ($books as $value)
                {
                    echo "<li>$allbooks[$value] ($value)</li>";
                }
                echo '</ul>';

            }
            else // If error detected.
            {
                printf('
                    <h1>OOPS... There are input errors</h1>
                    <ul style="color: red"><li>%s</li></ul>
                    <p>[ <a href="javascript:history.back()">Back</a> ]</p>',
                    implode('</li><li>', $error));
            }
        }
        else // GET or hacks.
        {
            // JavaScript to redirect user to the right page.
            echo '
                <script type="text/javascript">
                location = "booking.php";
                </script>
                ';
        }
        ?>

    </body>
</html>
