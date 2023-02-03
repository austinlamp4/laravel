<?php

    namespace App\Models; //Allows for usage in other files.

    class Listing {
        private static $data = [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Some random stuff that would work well as a description'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Some MORE random stuff that would work well as a description'
            ]   
        ];

        public static function all() {
            return self::$data;
        }

        public static function find_listing($id) {
            foreach(self::$data as $listing) {
                if($listing['id'] == $id) {
                    return $listing;
                }
            }
        }
    }

?>