<?php

function smarty_variablefilter_taintwarning($source, $smarty)
{
    if (!$source instanceof Smarty_StringValue || $source->tainted) {
        trigger_error('taintwarning: Outputting tainted value: ' . $source, E_USER_WARNING);
    }
    return $source;
}
