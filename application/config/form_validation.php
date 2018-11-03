<?php

$config = array(

    'pages/connexion' => array(
        array(
            'field' => 'pseudo',
            'label' => '"pseudo"',
            'rules' => 'required',
        ),
        array(
            'field' => 'password',
            'label' => '"password"',
            'rules' => 'required|min_length[5]|max_length[12]',

        )
    )
);    