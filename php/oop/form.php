<?php

/**
 * library of form helper functions
 */
class form
{
    public static function select($name, $options, $selected = null, $tag_html = '')
    {
        $html = '';
        $html .= '<select name="'.$name.'" '.$tag_html.'>';
        foreach($options as $value => $label)
        {
            if($value == $selected)
            {
                $attribute = ' selected';
            }
            else
            {
                $attribute = '';
            }

            $html .= '<option value="'.$value.'"'.$attribute.'>'.$label.'</option>';
        }
        $html .= '</select>';

        return $html;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">

        <?php echo form::select(
                'color', 
                ['red' => 'Red', 'blue' => 'Blue', 'green' => 'Green'], 
                'blue', 
                'id="color_select"'
        ); ?>

        <h2>Select Bond information</h2>
        <?php echo form::select('info', array_flip([
            'first_name' => 'James',
            'last_name' => 'Bond',
            'gun' => 'Walther PPK',
            'car' => 'Aston Martin',
            'enemy' => 'Stavro Blofeld',
            'relationship_status' => 'widower',
            'cases' => 24
        ]), 'Walther PPK'); ?>

        <input type="submit" value="save">

    </form>

</body>
</html>