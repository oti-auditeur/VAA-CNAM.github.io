<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Messages de langue pour la validation
    |--------------------------------------------------------------------------
    |
    | Les lignes de langue suivantes contiennent les messages d'erreur par défaut
    | utilisés par la classe de validation. Certains de ces règlements ont
    | plusieurs versions, tels que les règles de taille. N'hésitez pas à ajuster
    | chacun de ces messages ici.
    |
    */

    'accepted' => 'Le champ :attribute doit être accepté.',
    'accepted_if' => 'Le champ :attribute doit être accepté lorsque :other est :value.',
    'active_url' => 'Le champ :attribute n\'est pas une URL valide.',
    'after' => 'Le champ :attribute doit être une date après :date.',
    'after_or_equal' => 'Le champ :attribute doit être une date après ou égale à :date.',
    'alpha' => 'Le champ :attribute ne doit contenir que des lettres.',
    'alpha_dash' => 'Le champ :attribute ne doit contenir que des lettres, chiffres, tirets et underscores.',
    'alpha_num' => 'Le champ :attribute ne doit contenir que des lettres et chiffres.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'before' => 'Le champ :attribute doit être une date avant :date.',
    'before_or_equal' => 'Le champ :attribute doit être une date avant ou égale à :date.',
    'between' => [
        'array' => 'Le champ :attribute doit avoir entre :min et :max éléments.',
        'file' => 'Le champ :attribute doit être entre :min et :max kilo-octets.',
        'numeric' => 'Le champ :attribute doit être entre :min et :max.',
        'string' => 'Le champ :attribute doit être entre :min et :max caractères.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation du champ :attribute ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'Le champ :attribute n\'est pas une date valide.',
    'date_equals' => 'Le champ :attribute doit être une date égale à :date.',
    'date_format' => 'Le champ :attribute ne correspond pas au format :format.',
    'declined' => 'Le champ :attribute doit être refusé.',
    'declined_if' => 'Le champ :attribute doit être refusé lorsque :other est :value.',
    'different' => 'Le champ :attribute et :other doivent être différents.',
    'digits' => 'Le champ :attribute doit avoir :digits chiffres.',
    'digits_between' => 'Le champ :attribute doit avoir entre :min et :max chiffres.',
    'dimensions' => 'Le champ :attribute a des dimensions d\'image invalides.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'email' => 'Le champ :attribute doit être une adresse e-mail valide.',
    'ends_with' => 'Le champ :attribute doit se terminer par l\'un des éléments suivants : :values.',
    'enum' => 'La :attribute sélectionnée est invalide.',
    'exists' => 'La :attribute sélectionnée est invalide.',
    'file' => 'Le champ :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'array' => 'Le champ :attribute doit avoir plus de :value éléments.',
        'file' => 'Le champ :attribute doit être supérieur à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être supérieur à :value.',
        'string' => 'Le champ :attribute doit être supérieur à :value caractères.',
    ],
    'gte' => [
        'array' => 'Le champ :attribute doit avoir :value éléments ou plus.',
        'file' => 'Le champ :attribute doit être supérieur ou égal à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être supérieur ou égal à :value.',
        'string' => 'Le champ :attribute doit être supérieur ou égal à :value caractères.',
    ],
    'image' => 'Le champ :attribute doit être une image.',
    'in' => 'La :attribute sélectionnée est invalide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => 'Le champ :attribute doit être un entier.',
    'ip' => 'Le champ :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le champ :attribute doit être une chaîne JSON valide.',
    'lt' => [
        'array' => 'Le champ :attribute doit avoir moins de :value éléments.',
        'file' => 'Le champ :attribute doit être inférieur à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être inférieur à :value.',
        'string' => 'Le champ :attribute doit être inférieur à :value caractères.',
    ],
    'lte' => [
        'array' => 'Le champ :attribute ne doit pas avoir plus de :value éléments.',
        'file' => 'Le champ :attribute doit être inférieur ou égal à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être inférieur ou égal à :value.',
        'string' => 'Le champ :attribute doit être inférieur ou égal à :value caractères.',
    ],
    'mac_address' => 'Le champ :attribute doit être une adresse MAC valide.',
    'max' => [
        'array' => 'Le champ :attribute ne doit pas avoir plus de :max éléments.',
        'file' => 'Le champ :attribute ne doit pas être supérieur à :max kilo-octets.',
        'numeric' => 'Le champ :attribute ne doit pas être supérieur à :max.',
        'string' => 'Le champ :attribute ne doit pas être supérieur à :max caractères.',
    ],
    'mimes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'mimetypes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'min' => [
        'array' => 'Le champ :attribute doit avoir au moins :min éléments.',
        'file' => 'Le champ :attribute doit être d\'au moins :min kilo-octets.',
        'numeric' => 'Le champ :attribute doit être d\'au moins :min.',
        'string' => 'Le champ :attribute doit être d\'au moins :min caractères.',
    ],
    'multiple_of' => 'Le champ :attribute doit être un multiple de :value.',
    'not_in' => 'La :attribute sélectionnée est invalide.',
    'not_regex' => 'Le format du champ :attribute est invalide.',
    'numeric' => 'Le champ :attribute doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le champ :attribute doit être présent.',
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdit lorsque :other est :value.',
    'prohibited_unless' => 'Le champ :attribute est interdit sauf si :other est dans :values.',
    'prohibits' => 'Le champ :attribute interdit :other d\'être présent.',
    'regex' => 'Le format du champ :attribute est invalide.',
    'required' => 'Le champ :attribute est requis.',
    'required_array_keys' => 'Le champ :attribute doit contenir des entrées pour :values.',
    'required_if' => 'Le champ :attribute est requis lorsque :other est :value.',
    'required_unless' => 'Le champ :attribute est requis sauf si :other est dans :values.',
    'required_with' => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est requis lorsque :values sont présents.',
    'required_without' => 'Le champ :attribute est requis lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis lorsque aucun des :values n\'est présent.',
    'same' => 'Le champ :attribute et :other doivent correspondre.',
    'size' => [
        'array' => 'Le champ :attribute doit contenir :size éléments.',
        'file' => 'Le champ :attribute doit être de :size kilo-octets.',
        'numeric' => 'Le champ :attribute doit être de :size.',
        'string' => 'Le champ :attribute doit être de :size caractères.',
    ],
    'starts_with' => 'Le champ :attribute doit commencer par l\'un des éléments suivants : :values.',
    'string' => 'Le champ :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le champ :attribute doit être un fuseau horaire valide.',
    'unique' => 'Le champ :attribute a déjà été pris.',
    'uploaded' => 'Le chargement du champ :attribute a échoué.',
    'url' => 'Le champ :attribute doit être une URL valide.',
    'uuid' => 'Le champ :attribute doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Messages de validation personnalisés
    |--------------------------------------------------------------------------
    |
    | Ici, vous pouvez spécifier des messages de validation personnalisés pour les attributs en utilisant la
    | convention "attribute.rule" pour nommer les lignes. Cela permet de spécifier rapidement un message
    | de langue spécifique pour une règle d'attribut donnée.
    |
    */

    'custom' => [
        'nom-de-lattribut' => [
            'nom-de-la-regle' => 'message-personnalise',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Attributs personnalisés pour la validation
    |--------------------------------------------------------------------------
    |
    | Les lignes de langue suivantes sont utilisées pour échanger notre espace réservé d'attribut par quelque chose de plus lisible.
    | tel que "Adresse e-mail" au lieu de "email". Cela nous aide simplement à rendre notre message plus expressif.
    |
    */

    'attributes' => [],

];
