<?php
if (!function_exists('getUpdateUsersRules')){
    function getUpdateUsersRules(){
        return array(
            array(
                'field' => 'nombre',
                'label' => 'Nombre',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido',
                ),
            ),
            array(
                'field' => 'apellidos',
                'label' => 'Apellidos',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Sus %s es requerido',
                ),
            ),
            array(
                'field' => 'area',
                'label' => 'Area',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido',
                ),
            ),
            array(
                'field' => 'especialidad',
                'label' => 'Especialidad',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida',
                ),
            ),
            array(
                'field' => 'cedula',
                'label' => 'Cedula',
                'rules' => 'required|max_length[8]|numeric',
                'errors' => array(
                    'required' => 'La %s es requerido',
                    'max_length' => 'La %s es muy grande',
                    'numeric' => 'La %s debe contener solo numeros',
                ),
            ),

        );
    }
}
if (!function_exists('getCreateUserRules')) {
    function getCreateUserRules()
    {
        return array(
            array(
                'field' => 'user',
                'label' => 'Usuario',
                'rules' => 'required|max_length[100]',
                'errors' => array(
                    'required' => 'El %s es requerido',
                    'max_length' => 'El %s cadena es damasiado grande'
                ),
            ),
            array(
                'field' => 'correo',
                'label' => 'Correo',
                'rules' => 'required|valid_email',
                'errors' => array(
                    'required' => 'El %s es requerido',
                    'valid_email' => 'El $s tiene que contener una direcion valida',
                ),
            ),
            array(
                'field' => 'range',
                'label' => 'Rango',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido',
                ),
            ),
            array(
                'field' => 'name',
                'label' => 'Nombre',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido',
                ),
            ),
            array(
                'field' => 'lastname',
                'label' => 'Apellidos',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Sus %s es requerido',
                ),
            ),
            array(
                'field' => 'area',
                'label' => 'Area',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido',
                ),
            ),
            array(
                'field' => 'especialidad',
                'label' => 'Especialidad',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida',
                ),
            ),
            array(
                'field' => 'cedula',
                'label' => 'Cedula',
                'rules' => 'required|max_length[8]|numeric',
                'errors' => array(
                    'required' => 'La %s es requerido',
                    'max_length' => 'La %s es muy grande',
                    'numeric' => 'La %s debe contener solo numeros',
                ),
            ),

        );
    }
}
