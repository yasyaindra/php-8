<?php

function validate(string $name) {
    return trim($name, 'oo');
};

echo validate('Indra Maulana');