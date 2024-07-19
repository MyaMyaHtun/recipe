<?php



// class UserValidator
// {
//     private $data;
//     private $errors = [];
//     private static $fields = ['name', 'email', 'password'];

//     public function __construct($post_data)
//     {
//         $this->data = $post_data;
//     }

//     public function validateForm()
//     {
//         foreach (self::$fields as $field) {            
//             if (!array_key_exists($field, $this->data)) {
//                 trigger_error($field . " is not present in data");
//                 return;
//             }
//         }
//         $this->validateUserName();
//         $this->validateEmail();
//         $this->validatePassword();
//         return $this->errors;
//     }

//     private function validateUserName()
//     {
//         $val = trim($this->data['name']);
//         $uppercase = preg_match('@[A-Z]@', $val);
//         $lowercase = preg_match('@[a-z]@', $val);
//         if (empty($val)) {
//             $this->addError('name-err', 'User name cannot be empty!');
//         } else {
//             if (!$uppercase || !$lowercase) {
//                 $this->addError('name-err', 'User name must be 6 to 25 chars & alphabetic!');
//             }
//         }
//     }

//     private function validateEmail()
//     {
//         $val = trim($this->data['email']);
//         if (empty($val)) {
//             $this->addError('email-err', 'Email cannot be empty!');
//         } else {
//             if (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
//                 $this->addError('email-err', 'Email must be a valid email!');
//             }
//         }
//     }

//     private function validatePassword()
//     {
//         $password = trim($this->data['password']);
//         $uppercase = preg_match('@[A-Z]@', $password);
//         $lowercase = preg_match('@[a-z]@', $password);
//         $number = preg_match('@[0-9]@', $password);
//         $specialChars = preg_match('@[^\w]@', $password);
//         if (empty($password)) {
//             $this->addError('password-err', 'Password cannot be empty.');
//         } else {
//             if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
//                 $this->addError('password-err', 'Password should be at least 8 characters, at least one upper case letter, one lower case letter, one number, and one special character.');
//             }
//         }
//     }

//     private function addError($key, $val)
//     {
//         $this->errors[$key] = $val;
//     }
// }

class UserValidator
{
    private $data;
    private $errors = [];
    private static $fields = ['name', 'email', 'password', 'confirm_password']; // Add 'confirm_password' to fields

    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validateForm()
    {
        foreach (self::$fields as $field) {            
            if (!array_key_exists($field, $this->data)) {
                trigger_error($field . " is not present in data");
                return;
            }
        }
        $this->validateUserName();
        $this->validateEmail();
        $this->validatePassword();
        $this->validateConfirmPassword(); // Add validation for confirm_password
        return $this->errors;
    }

    private function validateUserName()
    {
        $val = trim($this->data['name']);
        $uppercase = preg_match('@[A-Z]@', $val);
        $lowercase = preg_match('@[a-z]@', $val);
        if (empty($val)) {
            $this->addError('name-err', 'User name cannot be empty!');
        } else {
            if (!$uppercase || !$lowercase || strlen($val) < 6 || strlen($val) > 25) {
                $this->addError('name-err', 'User name must be 6 to 25 characters and alphabetic!');
            }
        }
    }

    private function validateEmail()
    {
        $val = trim($this->data['email']);
        if (empty($val)) {
            $this->addError('email-err', 'Email cannot be empty!');
        } else {
            if (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
                $this->addError('email-err', 'Email must be a valid email address!');
            }
        }
    }

    private function validatePassword()
    {
        $password = trim($this->data['password']);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        if (empty($password)) {
            $this->addError('password-err', 'Password cannot be empty!');
        } else {
            if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                $this->addError('password-err', 'Password should be at least 8 characters, with at least one uppercase letter, one lowercase letter, one number, and one special character.');
            }
        }
    }

    private function validateConfirmPassword()
    {
        $password = trim($this->data['password']);
        $confirmPassword = trim($this->data['confirm_password']);
        if (empty($confirmPassword)) {
            $this->addError('confirm_password-err', 'Please confirm your password.');
        } else {
            if ($password !== $confirmPassword) {
                $this->addError('confirm_password-err', 'Passwords do not match.');
            }
        }
    }

    private function addError($key, $val)
    {
        $this->errors[$key] = $val;
    }
}
