<?php

class Form
{
    private $fields = [];
    private $action;
    private $submit;

    public function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function addField($name, $label, $type = "text", $options = [])
    {
        $this->fields[] = [
            "name" => $name,
            "label" => $label,
            "type" => $type,
            "options" => $options
        ];
    }

    public function display()
    {
        echo "<form action='$this->action' method='POST'>";
        echo "<table>";

        foreach ($this->fields as $f) {
            echo "<tr><td><b>{$f['label']}</b></td><td>";

            switch ($f['type']) {
                case "textarea":
                    echo "<textarea name='{$f['name']}'></textarea>";
                    break;

                case "select":
                    echo "<select name='{$f['name']}'>";
                    foreach ($f['options'] as $val => $lab) {
                        echo "<option value='$val'>$lab</option>";
                    }
                    echo "</select>";
                    break;

                case "radio":
                    foreach ($f['options'] as $val => $lab) {
                        echo "<label><input type='radio' name='{$f['name']}' value='$val'> $lab</label> ";
                    }
                    break;

                case "checkbox":
                    foreach ($f['options'] as $val => $lab) {
                        echo "<label><input type='checkbox' name='{$f['name']}[]' value='$val'> $lab</label> ";
                    }
                    break;

                default:
                    echo "<input type='{$f['type']}' name='{$f['name']}'>";
            }

            echo "</td></tr>";
        }

        echo "<tr><td colspan='2'><button type='submit'>$this->submit</button></td></tr>";
        echo "</table></form>";
    }
}

?>
