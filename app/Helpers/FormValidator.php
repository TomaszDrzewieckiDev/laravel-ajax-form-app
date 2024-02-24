<?php

namespace App\Helpers;

use Exception;

class FormValidator
{

    public function isValidName($name)
    {
        if (strlen($name) <= 100) {
            return true;
        } else {
            throw new Exception(Constans::TO_LONG_NAME);
        }
    }

    public function isValidTelephone($telephone)
    {
        if (ctype_digit($telephone)) {
            return true;
        } else {
            throw new Exception(Constans::ONLY_DIGITS_ACCEPTED);
        }
    }

    public function isValidEmail($email)
    {
        if (isset($email)) {
            $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
            if (preg_match($regex, $email)) {
                return true;
            } else {
                throw new Exception(Constans::INVALID_EMAIL);
            }
        }
    }

    public function isValidContenet($content)
    {
        if (strlen($content) <= 500) {
            return true;
        } else {
            throw new Exception(Constans::TO_LONG_CONTENT);
        }
    }

    public function isValidFileType($file)
    {
        $location = storage_path() . '/app/public/' . $file;
        if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
            $mime_type = mime_content_type($location);

            if (($mime_type == "application/pdf") || ($mime_type == "image/jpeg")) {
                return true;
            } else {
                unlink($location);
                throw new Exception(Constans::INVALID_FILE_TYPE);
            }
        }
    }

    public function isValidFileSize($file)
    {
        if (isset($file)) {
            $location = storage_path() . '/app/public/' . $file;
            move_uploaded_file($_FILES['file']['tmp_name'], $location);
            if (filesize($location) <= 5242880) {
                return true;
            } else {
                unlink($location);
                throw new Exception(Constans::FILESIZE_EXCEEDED);
            }
        }
    }
}
