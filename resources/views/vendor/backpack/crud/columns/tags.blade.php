{{-- enumerate the values in an array  --}}
<td>
    <?php
    $value = $entry->{$column['name']};
    $values = explode(",", $value);
    foreach ($values as $vkey => $vvalue) {
        echo '<a class="btn btn-xs btn-default"><i class="fa fa-tag"></i> ' . $vvalue . '</a>';
    }
    ?>
</td>
