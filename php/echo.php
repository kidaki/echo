<?php

function echo_()
{
    for($i=0;$i<func_num_args();$i++)
    {
        $argument = func_get_arg($i);
        echo"<script>console.log('$argument')</script>";
        echo "<h4>$argument</h4>";
    }
}

echo_();
echo_('bla');
echo_('foo', 'bar', 'baz');
?>