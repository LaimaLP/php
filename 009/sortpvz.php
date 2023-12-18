<?php
echo '<pre>';

$farm = [
    [
        'name' => 'Cow',
        'sound' => 'Moo',
        'price' => 1000,
    ],
    [
        'name' => 'Pig',
        'sound' => 'Oink',
        'price' => 500,
    ],
    [
        'name' => 'Chicken',
        'sound' => 'Cluck',
        'price' => 250,
    ],
    [
        'name' => 'Horse',
        'sound' => 'Neigh',
        'price' => 5000,
    ],
    [
        'name' => 'Sheep',
        'sound' => 'Baa',
        'price' => 750,
    ],
];



// print_r($farm);
// veikia ant skaicu ant stringu
usort($farm, fn ($a, $b) => $a['name'] <=> $b['name']);
// print_r($farm);

function sortByPrice($a, $b){
    return $b['price'] <=> $a['price'];
}
usort($farm, 'sortByPrice');
// print_r($farm);

$persons = [
    [
        'name' => 'Paul',
        'wife' => 'Jane',
    ],
    [
        'name' => 'Peter',
        'wife' => 'Mary',
    ],
    [
        'name' => 'Paul',
        'wife' => 'Sue',
    ],
    [
        'name' => 'Mark',
        'wife' => 'Kate',
    ],
    [
        'name' => 'Paul',
        'wife' => 'Anne',
    ],
];

//sort by name and wife:

    usort($persons, function($a, $b){
        if($a['name'] == $b['name']){
            return $a['wife'] <=> $b['wife'];
        }
        return $a['name'] <=> $b['name'];
    });

    print_r($persons);

