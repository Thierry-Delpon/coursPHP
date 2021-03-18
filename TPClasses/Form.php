<?php


class Form
{
    private $form;

    /**
     * Form constructor.
     * @param $form
     */
    public function __construct()
    {
        $this->form = "<form><fieldset>";
    }

    public function rajouterUnInput($id, $class = "")
    {
        $this->form .= "<input type='text' id='$id' class='$class'>";
    }

    public function __toString()
     {
        $this->form .= "<input type='submit' value='Envoyer'></fieldset></form>";
        return $this->form;
    }
}

// Je vais appeller une méthode et ça va m'afficher ça :
//<form><feildset><input type="text"></fieldset></form>

