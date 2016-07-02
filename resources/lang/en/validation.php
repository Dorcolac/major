<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute mora biti prihvaćen.',
    'active_url'           => ':attribute nije validna adresa.',
    'after'                => ':attribute mora biti datum nakon :date.',
    'alpha'                => ':attribute sme da sadrži samo slova.',
    'alpha_dash'           => ':attribute sve da sadrži samo slova, brojeve i povlake.',
    'alpha_num'            => ':attribute may only contain letters and numbers.',
    'array'                => ':attribute mora biti niz.',
    'before'               => ':attribute mora biti datum pre :date.',
    'between'              => [
        'numeric' => ':attribute mora biti između :min i :max.',
        'file'    => ':attribute mora biti između :min i :max kilobajta.',
        'string'  => ':attribute mora biti između :min i :max karaktera.',
        'array'   => ':attribute mora biti između :min i :max stavki.',
    ],
    'boolean'              => 'Polje :attribute mora biti tačno ili netačno.',
    'confirmed'            => 'Ponovljena :attribute se ne podudara.',
    'date'                 => ':attribute nije validan datum.',
    'date_format'          => ':attribute se ne podudara sa formatom :format.',
    'different'            => ':attribute i :other moraju biti različiti.',
    'digits'               => ':attribute mora imati :digits cifara.',
    'digits_between'       => ':attribute mora biti između :min i :max cifara.',
    'dimensions'           => ':attribute nema validne dimenzije slike.',
    'distinct'             => ':attribute field has a duplicate value.',
    'email'                => ':attribute mora biti validna e-mail adresa.',
    'exists'               => 'Odabrani :attribute nije validan.',
    'filled'               => ':attribute polje je obavezno.',
    'image'                => ':attribute mora biti slika.',
    'in'                   => 'Odabrani :attribute nije validan.',
    'in_array'             => 'Polje :attribute ne postoji u :other.',
    'integer'              => ':attribute mora biti ceo broj.',
    'ip'                   => ':attribute mora biti validna IP adresa.',
    'json'                 => ':attribute mora biti validni JSON string.',
    'max'                  => [
        'numeric' => ':attribute ne sme biti veći od :max.',
        'file'    => ':attribute ne sme biti veći od :max kilobajta.',
        'string'  => ':attribute ne sme biti veći od :max karaktera.',
        'array'   => ':attribute ne sme imati više od :max stavki.',
    ],
    'mimes'                => ':attribute mora biti tip fajla: :values.',
    'min'                  => [
        'numeric' => ':attribute mora biti najmanje :min.',
        'file'    => ':attribute mora biti najmanje :min kilobajta.',
        'string'  => ':attribute mora imati najmanje :min karaktera.',
        'array'   => ':attribute mora imati najmanje :min stavki.',
    ],
    'not_in'               => 'Odabrani :attribute nije validan.',
    'numeric'              => ':attribute mora biti broj.',
    'present'              => 'Polje :attribute mora biti prisutno.',
    'regex'                => 'Format :attribute nije validan.',
    'required'             => 'Polje :attribute je obavezno.',
    'required_if'          => 'Polje :attribute je obavezno kada je :other = :value.',
    'required_unless'      => 'Polje :attribute je obavezno osim kada :other je u :values.',
    'required_with'        => 'Polje :attribute je obavezno kada je :values prisutno.',
    'required_with_all'    => 'Polje :attribute je obavezno kada je :values je prisutno.',
    'required_without'     => 'Polje :attribute je obavezno kada :values nije prisutno.',
    'required_without_all' => 'Polje :attribute je obavezno kada nijedna od vrednosti :values nisu prisutne.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => ':attribute mora biti :size.',
        'file'    => ':attribute mora biti :size kilobajta.',
        'string'  => ':attribute mora imati :size karaktera.',
        'array'   => ':attribute mora sadržati :size stavki.',
    ],
    'string'               => ':attribute mora biti string.',
    'timezone'             => ':attribute mora biti validna zona.',
    'unique'               => ':attribute je već zauzet.',
    'url'                  => 'Format :attribute nije validan.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
