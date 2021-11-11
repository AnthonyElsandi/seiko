<?php

class Flasher {

    public static function setFlash($message)
    {
        // var_dump($message);
        $_SESSION['flash'] = [
            'message' => $message
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo "

            <script>
                alert('" . $_SESSION['flash']['message'] ."');
            </script>
            
            ";
            unset($_SESSION['flash']);
        }
    }
}