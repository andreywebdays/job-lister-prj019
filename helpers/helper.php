<?php

// redirect to page
function redirect($page = false, $message = null, $message_type = null)
{
    if (is_string($page)) 
    {
        $location = $page;
    }
    else
    {
        $location = $_SERVER['SCRIPT_NAME'];
    }

    // check for message
    if ($message != null) 
    {
        // set message
        $_SESSION['message'] = $message;
    }

    // check for message type
    if ($message_type != null) 
    {
        // set message type
        $_SESSION['message_type'] = $message_type;
    }

    // redirect
    header('Location: ' . $location);
    exit();
}

// display message
function showMessage()
{
    if (!empty($_SESSION['message'])) 
    {
        // assign message var
        $message = $_SESSION['message'];

        if (!empty($_SESSION['message_type'])) 
        {
            // assign message type var
            $message_type = $_SESSION['message_type'];

            // create output
            if ($message_type == 'error') 
            {
                echo '<div class="alert alert-danger">' . $message . '</div>';
            }
            else
            {
                echo '<div class="alert alert-success">' . $message . '</div>';
            }
        }

        // unset message
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    }
    else
    {
        echo "";
    }
}