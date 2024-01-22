<?php

namespace App\Core;

class Validation
{
    public static function validation($data = [], $rule = [])
    {
        foreach ($rule as $field => $ruleSet) {
            $ruleArray = explode("|", $ruleSet);

            foreach ($ruleArray as $rule) {
                $parts = explode(':', $rule, 2);
                $ruleName = $parts[0];
                $parameter = $parts[1] ?? null;
            }
        }
    }
}