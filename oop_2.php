<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style3.css">
    
    <title>Document</title>
</head>
<body>

    <?php

    class Shape {
        // A class constant named SHAPE_TYPE with a value of 1.
        const SHAPE_TYPE = 1;

        // Four properties with different visibilities: a public name, a protected length and width, and a private id.
        public $name;
        protected $length;
        protected $width;
        private $id;

        // A constuctor which accepts a length and width parameter to initialize the respective properties.
        public function __construct($length, $width) {
            $this->length = $length;
            $this->width = $width;
            // The constructor shoudl also initialize the id property to a unique id. (hint: use PHP's uniqid())
            $this->id = uniqid();
        }

        // Getter and Setter methods for the name property.
        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
            return $name;
        }

        // A Getter method for the id property.
        public function getId() {
            return $this->id;
        }

        // A public area method which calculates and returns the area of the Shape object.
        public function area() {
            $area = $this->length * $this->width;
            return $area;
        }

        // A public static getTypeDescription method which returns the string Type: with the SHAPE_TYPE concatenated to the end.
        public static function getTypeDescription() {
            return "Type: ".self::SHAPE_TYPE;
        }

        // A public getFullDescription method which returns the string: Shape<#id>: name - length x width with variables id, name, length, and width substituted the objects values.
        public function getFullDescription() {
            return "get_class($this)<#$this->id>: $this->name - $this->length x $this->width";
        }
    }

    class Rectangle extends Shape {
        // A class constant named SHAPE_TYPE with a value of 2.
        const SHAPE_TYPE = 2;
    }

    class Circle extends Shape {
        // A class constant named SHAPE_TYPE with a value of 3.
        const SHAPE_TYPE = 3;

        // A protected radius property.
        protected $radius;

        // A constuctor which accepts a radius parameter and initializes the radius property. **Don't forget to call the Shape class constructor.
        public function __construct($radius) {
            parent::__construct($length = null, $width = null);
            $this->radius = $radius;
        }

        // A public area method which calculates and returns the area of the Circle object.
        public function area() {
            $pi = pi();
            $area = $pi * pow($this->radius, 2);
            return $area;
        }

        // A public getFullDescription method which returns the string: Circle<#id>: name - radius with variables id, name, and radius substituted the objects values.
        public function getFullDescription() {
            return "get_class($this)<#$this->getId()>: $this->name - $this->radius";
        }
    }

    $shape = new Shape(100, 50);
    echo $shape::getTypeDescription()
    
?>
</body>
</html>