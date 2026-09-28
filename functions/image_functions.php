<?php

function checkImageProfile($image)
{
    if ($image['error'] != UPLOAD_ERR_OK) {
        header('Location: ../views/register.php?error=1');
        exit;
    }

    $alloweTypesImage = [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/gif'
    ];

    if (!in_array($image['type'], $alloweTypesImage)) {
        header('Location: ../views/register.php?error=2');
        exit;
    }

    $extension = match ($image['type']) {
        'image/jpeg' => 'jpg',
        'image/png' => 'png',
        'image/webp' => 'webp',
        'image/gif' => 'gif',
    };

    return uniqid() . '.' . $extension;
}

?>