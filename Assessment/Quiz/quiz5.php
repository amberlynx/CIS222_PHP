/**
 * quiz5.php
 *
 * Quiz 5 for your enjoyment
 *
 * @category   Quiz
 * @package    Quiz 5
 * @author     Amber Sakkinen <alsakkinen@hawkmail.hfcc.edu>
 * @version    2019.10.24
 * @grade       --
 */

// 1. (4pts) Define a simple class called Order.
// Your class should have a standard construct function, but it doesn't need to do anything yet.
// It should also have at least 3 private properties, one being order_id

    class Order
    {
        private $order_id;
        private $hardwareType;
        private $serialNum;

        function __construct()
        {
            $this->hardwareType = "computer";
        }
    }

// 2. (4pts) Add a get and set function for one of your classes properties above (any one is fine, order_id recommended).
// Hint: A get function returns a property, a set function saves data into it.

    public function getID()
    {
        return $this->order_id;
    }

    public function setID($order_id) {
        $this->ID = $order_id;
    }

// 3. (2pt) In a $myTransaction variable, create an instance of the class you created above.

    $myTransaction = new Order();

// B. (2pt) Explain how someone would update and use an object like this.
// Can you use it in your project?

    Objects are great for modularizing code and making it more compact and recyclable.
    A good way to use an object is to set a variable for something used repeatably,
    such as the website title, and then set it in the __construct() method as a starting variable
    for whatever you are using it for. This can be well implemented into my project yes, but
    objects are great for saving time in any project so long as you understand how they work
    they can save a lot of time. (I'm a big fan of objects, I've used them in C and Java a lot) :)

