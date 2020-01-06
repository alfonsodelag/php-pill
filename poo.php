<?php

class Person {
    private $name;
    private $lastname;
    private $nationality;
    private $id;

    //Now we initialize the constructor
    public function __construct(){
      
    }

    //Filled constructor
    public function __construct($name, $lastname, $nationality, $id){
        $this->name=$name;
        $this->lastname=$lastname;
        $this->nationality=$nationality;
        $this->id=$id;
    }

    //Get method to access the name attribute
    public function __getName(){
        return $this->name;
    }
    //Set method to access the name attribute
    public function __setName($name) { 
    $this->name=$name;
    }

    //Get method to access the lastname attribute
    public function __getLastName(){
        return $this->lastname;
    }
    
    //Set method to access the name attribute
    public function __setLastName($lastname, $value) { 
        $this->lastname=$lastname;
    }

    //Get method to access the nationality attribute
    public function __getNationality(){
        return $this->$nationality
    }
    
    //Set method to access the name attribute
    public function __setNationality($nationality) { 
        $this->nationality=$nationality;
    }

    //Get method to access the id attribute
    public function __getId(){
        return $this->id;
    }

    //Set method to access the name attribute
    public function __setId($id) { 
    $this->$id= $id;
    }

    //This duplicate the instance of a class (it creates another)
    public function __clone() {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->nationality = $nationality;
        $this->id = $id;
    }

    //This is the destruct method to destroy an Instance of a class
    public function __destruct() {
        print "destroy" . $this->name . "\n";
        print "destroy" . $this->lastname . "\n";
        print "destroy" . $this->nationality . "\n";
        print "destroy" . $this->id . "\n";
        
    }

    //This is used to convert attributes to Strings
    public function __toString() {
        return $this->name;
        return $this->lastname;
        return $this->nationality;
        return $this->id;
    }
}

class Dog {
    private $race;
    private $eyecolor;
    private $size;


    //Now we initialize the constructor
    public function __construct(){
      
    }

    //Filled constructor
    public function __construct($race, $eyecolor, $size){
        $this->race=$name;
        $this->eyecolor=$eyecolor;
        $this->size=$size;
    }

    //Get method to access the race attribute
    public function __getRace(){
        return $this->race;
    }
    //Set method to access the race attribute
    public function __setRace($race) { 
    $this->race=$race;
    }

    //Get method to access the eyecolor attribute
    public function __getEyeColor(){
        return $this->$eyeColor;
    }
    
    //Set method to access the eyecolor attribute
    public function __setEyeColor($eyecolor) { 
        $this->eyecolor=$eyecolor;
    }

    //Get method to access the size attribute
    public function __getSize(){
        return $this->$size
    }
    
    //Set method to access the size attribute
    public function __set($size) { 
        $this->size=$size;
    }

    //This duplicate the instance of a class (it creates another)
    public function __clone() {
        $this->race = $race;
        $this->eyecolor = $eyecolor;
        $this->size = $size;

    }

    //This is the destruct method to destroy an Instance of a class
    public function __destruct() {
        print "destroy" . $this->race . "\n";
        print "destroy" . $this->eyecolor . "\n";
        print "destroy" . $this->size . "\n";        
    }

    //This is used to convert attributes to Strings
    public function __toString() {
        return $this->race;
        return $this->eyecolor;
        return $this->size;
    }
}

    class Country {
    private $name;
    private $location;
    private $population;


    //Now we initialize the constructor
    public function __construct(){
      
    }

    //Filled constructor
    public function __construct($name, $location, $population){
        $this->name=$name;
        $this->location=$location;
        $this->population=$population;
    }

    //Get method to access the name attribute
    public function __getName(){
        return $this->name;
    }
    //Set method to access the name attribute
    public function __setName($name) { 
    $this->name=$name;
    }

    //Get method to access the location attribute
    public function __getLocation(){
        return $this->$location;
    }
    
    //Set method to access the location attribute
    public function __setLocation($location) { 
        $this->location=$location;
    }

    //Get method to access the population attribute
    public function __getPopulation(){
        return $this->$population
    }
    
    //Set method to access the population attribute
    public function __setPopulation($population) { 
        $this->population=$population;
    }

    //This duplicate the instance of a class (it creates another)
    public function __clone() {
        $this->name = $name;
        $this->location = $location;
        $this->population = $population;

    }

    //This is the destruct method to destroy an Instance of a class
    public function __destruct() {
        print "destroy" . $this->name . "\n";
        print "destroy" . $this->location . "\n";
        print "destroy" . $this->population . "\n";        
    }

    //This is used to convert attributes to Strings
    public function __toString() {
        return $this->name;
        return $this->location;
        return $this->population;
    }

}

    class Computer {
        private $brand;
        private $price;
    
        //Now we initialize the constructor
        public function __construct(){
          
        }
    
        //Filled constructor
        public function __construct($brand, $price){
            $this->brand=$brand;
            $this->price=$price;
        }
    
        //Get method to access the name attribute
        public function __getBrand(){
            return $this->$brand;
        }
        //Set method to access the name attribute
        public function __setBrand($brand) { 
        $this->brand=$brand;
        }
    
        //Get method to access the location attribute
        public function __getPrice(){
            return $this->$price;
        }
        
        //Set method to access the location attribute
        public function __setPrice($price) { 
            $this->price=$price;
        }
    
        //This duplicate the instance of a class (it creates another)
        public function __clone() {
            $this->name = $name;
            $this->location = $location;
            $this->population = $population;
    
        }
    
        //This is the destruct method to destroy an Instance of a class
        public function __destruct() {
            print "destroy" . $this->name . "\n";
            print "destroy" . $this->location . "\n";
            print "destroy" . $this->population . "\n";        
        }
    
        //This is used to convert attributes to Strings
        public function __toString() {
            return $this->name;
            return $this->location;
            return $this->population;
        }
    }
    

    