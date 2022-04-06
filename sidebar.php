<?php

function createNavItem($label, $icon) {
    echo '
    <li class="navigation-list-item">
        <a class="navigation-link href="/">
            <div class="row">
                <div class="col-2">
                <i class="' . $icon .'"></i>
            </div>
                <div class="col-10">
                    ' . $label . '
                </div>
            </div>
        </a>
    </li>
    ';
}

?>