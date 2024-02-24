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
            throw new Exception('Pole: Imie i Nazwisko - Za długi wpis');
        }
    }

    public function isValidTelephone($telephone)
    {
        if (ctype_digit($telephone)) {
            return true;
        } else {
             throw new Exception('Pole: Telefon - Akceptowane tylko cyfry');
        }
    }

    public function isValidEmail($email)
    {
        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        if (preg_match($regex, $email)) {
            return true;
        } else {
            throw new Exception('Pole: Email - Wpisz poprawnie email');
        }
    }

    public function isValidContenet($content)
    {
        if (strlen($content) <= 500) {
            return true;
        } else {
            throw new Exception('Pole: Treść - Za długi wpis');
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
                throw new Exception('Pole: Załącznik - Błędny typ plik. Akceptowane JPG i PDF');
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
                throw new Exception('Pole: Załącznik - Za duży rozmiar pliku. Akceptowana wielkość maksymalnie 5MB');
            }
        }
    }
}
