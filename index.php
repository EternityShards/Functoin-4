<?php
function является_простым($число) {
    if ($число <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($число); $i++) {
        if ($число % $i === 0) {
            return false;
        }
    }
    return true;
}

$проверяемое_число = 17;
if (является_простым($проверяемое_число)) {
    echo $проверяемое_число . " - простое число";
} else {
    echo $проверяемое_число . " - не простое число";
}
?>