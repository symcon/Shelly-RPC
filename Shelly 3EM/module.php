<?php

declare(strict_types=1);

require_once(__DIR__ . "/values.php");

class Shelly3EM extends IPSModule
{
    use Shelly3EMValues;

    private function fieldsToIdent($fieldA, $fieldB) {
        $ident = sprintf("%s_%s", $fieldA, $fieldB);
        return str_replace(":", "_", $ident);
    }

    public function Create()
    {
        parent::Create();

        $this->RegisterPropertyString("IPAddress", "");
        $this->RegisterPropertyInteger("Interval", 60);

        $position = 0;
        foreach (self::$values as $fieldA => $valueA) {
            foreach ($valueA as $fieldB => $valueB) {
                $this->MaintainVariable(
                    $this->fieldsToIdent($fieldA, $fieldB),
                    $this->Translate($valueB["name"]),
                    $valueB["type"],
                    $valueB["profile"],
                    $position++,
                    true
                );
            }
        }

        $this->RegisterTimer("Update", 0, 'SRPC_Update($_IPS[\'TARGET\']);');
    }

    public function ApplyChanges()
    {
        parent::ApplyChanges();
        
        if ($this->ReadPropertyString("IPAddress")) {
            $this->SetTimerInterval("Update", $this->ReadPropertyInteger("Interval") * 1000);
        }
        else {
            $this->SetTimerInterval("Update", 0);
        }
    }

    public function Update()
    {
        $data = file_get_contents(sprintf("http://%s/rpc/Shelly.GetStatus", $this->ReadPropertyString("IPAddress")));
        $json = json_decode($data, true);

        foreach (self::$values as $fieldA => $valueA) {
            foreach ($valueA as $fieldB => $valueB) {
                $this->SetValue(
                    $this->fieldsToIdent($fieldA, $fieldB),
                    $json[$fieldA][$fieldB]
                );
            }
        }
    }

}