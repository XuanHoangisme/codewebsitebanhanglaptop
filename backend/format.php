<?php
//format class
class format {
    public function formatdate($date) {
        return date('F j, g:i a', strtotime($date));
    }

    public function textshorten($text, $limit = 400) {
        $text = $text . "";
        if (strlen($text) > $limit) {
            $text = substr($text, 0, $limit);
            $text = substr($text, 0, strrpos($text, ' '));
            $text = $text . ".......";
        }
        return $text;
    }

    public function validation($data) {
        $data = trim($data);
        $data = stripslashes($data); // Correction from stripcslashes to stripslashes
        $data = htmlspecialchars($data);
        return $data;
    }

    public function title() {
        $path = $_SERVER['SCRIPT_FILENAME'];
        $title = basename($path, '.php');
        $title = str_replace('_', '', $title); // Reintroducing replacement of underscores
        if ($title == 'index') {
            $title = 'home';
        } elseif ($title == 'contact') { // Correcting from 'concact' to 'contact'
            $title = 'contact';
        }
        return ucfirst($title);
    }
}
?>
