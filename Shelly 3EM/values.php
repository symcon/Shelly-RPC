<?php

trait Shelly3EMValues
{
    static $values = [
        "em:0" => [
            "a_current" => [
                "type" => VARIABLETYPE_FLOAT,
                "name" => "Phase A current measurement value",
                "profile" => "~Ampere"
            ],
            "a_voltage" => [
                "type" => VARIABLETYPE_FLOAT,
                "name" => "Phase A voltage measurement value",
                "profile" => "~Volt"
            ],
            "a_act_power" => [
                "type" => VARIABLETYPE_FLOAT,
                "name" => "Phase A active power measurement value",
                "profile" => "~Watt"
            ],
            "b_current" => [
                "type" => VARIABLETYPE_FLOAT,
                "name" => "Phase B current measurement value",
                "profile" => "~Ampere"
            ],
            "b_voltage" => [
                "type" => VARIABLETYPE_FLOAT,
                "name" => "Phase B voltage measurement value",
                "profile" => "~Volt"
            ],
            "b_act_power" => [
                "type" => VARIABLETYPE_FLOAT,
                "name" => "Phase B active power measurement value",
                "profile" => "~Watt"
            ],
            "c_current" => [
                "type" => VARIABLETYPE_FLOAT,
                "name" => "Phase C current measurement value",
                "profile" => "~Ampere"
            ],
            "c_voltage" => [
                "type" => VARIABLETYPE_FLOAT,
                "name" => "Phase C voltage measurement value",
                "profile" => "~Volt"
            ],
            "c_act_power" => [
                "type" => VARIABLETYPE_FLOAT,
                "name" => "Phase C active power measurement value",
                "profile" => "~Watt"
            ],
            "total_act_power" => [
                "type" => VARIABLETYPE_FLOAT,
                "name" => "Sum of the active power on all phases",
                "profile" => "~Watt"
            ],
        ],
        "emdata:0" => [
            "a_total_act_energy" => [
                "type" => VARIABLETYPE_FLOAT,
                "name" => "Total active energy on phase A",
                "profile" => "~Electricity.Wh"
            ],
            "b_total_act_energy" => [
                "type" => VARIABLETYPE_FLOAT,
                "name" => "Total active energy on phase B",
                "profile" => "~Electricity.Wh"
            ],
            "c_total_act_energy" => [
                "type" => VARIABLETYPE_FLOAT,
                "name" => "Total active energy on phase C",
                "profile" => "~Electricity.Wh"
            ],
            "total_act" => [
                "type" => VARIABLETYPE_FLOAT,
                "name" => "Total active energy on all phases",
                "profile" => "~Electricity.Wh"
            ],
        ]
    ];
}