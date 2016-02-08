<?php

header('Content-Type: application/json');

$allowed = ['png', 'jpg','mp4'];
$processed = [];

foreach ($_FILES['files']['name'] as $key => $name) {

    if ($_FILES['files']['error'][$key] === 0) {
        $temp = $_FILES['files']['tmp_name'][$key];
        
        $ext = explode('.', $name);
        $ext = strtolower(end($ext));
        
        $file = uniqid('' . true) . time() . '.' . $ext;

        if (in_array($ext, $allowed) && move_uploaded_file($temp, 'uploads/' . $file)) {
            $processed[] = [
                'name' => $name,
                'file' => $file,
                'uploaded' => true
            ];
        } else {
            $processed[] = [
                'name' => $name,
                'uploaded' => FALSE
            ];
        }
    }
    
}
echo json_encode($processed); 