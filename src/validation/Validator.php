<?php
namespace Acme\Validation;

use Respect\Validation\Validator as Valid;

class Validator
{
    public function isValid(Array $validation_data)
    {
        $errors = [];

        foreach ($validation_data as $name => $value) {
            $new_name = str_replace('_', ' ', $name);

            if (isset($_REQUEST[$name])) {
                $rules = explode("|", $value);

                foreach ($rules as $rule) {
                    $exploded = explode(":", $rule);

                    switch ($exploded[0]) {
                        case 'min':
                            $min = $exploded[1];
                            if (Valid::string()->length($min)->validate($_REQUEST[$name]) == false) {
                                $errors[] = $new_name . " must be at least " . $min . " Characters long!.";
                            }
                            break;

                        case 'email':
                            if (Valid::email()->validate($_REQUEST[$name]) == false) {
                                $errors[] = $new_name . " must be a valid email address.";
                            }
                            break;

                        case 'equalTo':
                            if (Valid::equals($_REQUEST[$name])->validate($_REQUEST[$exploded[1]]) == false) {
                                $errors[] = "Value does not match vertification value";
                            }
                            break;

                        default:
                            // do nothing
                    }
                }
            } else {
                $errors[] = "No Value Found!";
            }
        }

        return $errors;
    }
}
