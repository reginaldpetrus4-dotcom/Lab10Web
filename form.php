<?php
/**
 * Class Form
 * Class library untuk membuat form input sederhana
 */

class Form
{
    private $fields = array();
    private $action;
    private $submit;
    private $jumField = 0;

    public function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function addField($name, $label)
    {
        $this->fields[$this->jumField]['name']  = $name;
        $this->fields[$this->jumField]['label'] = $label;
        $this->jumField++;
    }

    public function displayForm()
    {
        echo "<form action='".$this->action."' method='POST'>";
        echo "<table border='0'>";
        foreach ($this->fields as $field) {
            echo "<tr>
                    <td align='right'>{$field['label']}</td>
                    <td><input type='text' name='{$field['name']}'></td>
                  </tr>";
        }
        echo "<tr>
                <td colspan='2'>
                    <input type='submit' value='".$this->submit."'>
                </td>
              </tr>";
        echo "</table></form>";
    }
}
?>
