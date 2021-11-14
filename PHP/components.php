<?php 

function inputElement($icon, $placeholder, $name, $value){
    echo "
        <div class='input-group mb-2'>
            <div class='input-group-prepend bg-warning'>
                <div class='input-group-text bg-warning'>$icon</div>
            </div>
            <input type='text' name='$name' class='form-control' id='inlineFormInputGroup' placeholder='$placeholder' value='$value'>
        </div>
    ";
}

function buttonElement($btnid, $styleclass, $text, $name, $attr){
    echo "
        <button id='$btnid' class='$styleclass' name='$name' '$attr'>$text</button>
    ";
}

?>