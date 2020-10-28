<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Samoyed',
            'description' => 'Samoyed dog named after the Siberian nomad Samoyed, originated in the Russian Arctic, originated in the 17th century.',
            'country'=>'Siberia',
            'Max weight'=>'27kg',
            'Hair Color'=>'White',
            'image' => 'Samoyed.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Border Collie',
            'description' => 'Border Collie, native to the Scottish border, is a collie collie with a strong shepherd instinct.',
            'country'=>'Scottish Borders',
            'Max weight'=>'14-20kg',
            'Hair Color'=>'White | Black',
            'image' => 'BorderCollie.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'The Labrador Retriever',
            'description' => 'Labrador, also known as the retriever, is a large and medium-sized dog. It is very suitable to be used as guide dog.',
            'country'=>'Canana',
            'Max weight'=>'15-20kg',
            'Hair Color'=>'White | Black | Yellow ',
            'image' => 'd3.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Chinese garden dog',
            'description' => 'Chinese garden dog, traditionally called "native dog", is also called "Chai dog" in some places in the north. It belongs to a mammal of Carnivora, Canidae and caninus.',
            'country'=>'China',
            'Max weight'=>'10-30kg',
            'Hair Color'=>'Yellow | White | Black',
            'image' => 'd4.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'welsh corgi pembroke',
            'description' => 'Welsh Corgi Pembroke is a kind of small dog. It is brave and alert. It can guard the home with high vigilance. It is one of the most popular small guard dogs.',
            'country'=>'Welsh',
            'Max weight'=>'10-12kg',
            'Hair Color'=>'Yellow | White',
            'image' => 'd5.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
