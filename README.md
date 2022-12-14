# OOP-PHP

OOP PHP 8.0 Core Concepts &amp; Fundamentals

#### What is OOP Approach?

In OOP we combine related variables and functions into a cohesive unit which we call an OBJECT.

#### OOP Benefits

-   The data and the functions that operate on that data are grouped together (Encapsilation)
-   Reduce complexity
-   Allows for reuse
-   Changes only need to happen in one place
-   Code is better organized and more coherent
-   Makes it easy to visualize the design of your application

#### What is a Class?

In order to create an Object we use Class. A Class is a blueprint, capsule which defines what the object should look like & do. All Object characteristics are caplsulate in a Class.

#### Properties

Properties are like a variable which belong to a class.

#### Methoda

Methods are functions which belong to object and allow an object to perform a task.

#### Visibility keywords PHP

-   **public**
-   **protected**
-   **private**

#### Positional Arguments VS Named Arguments

PHP 8.0 supports optionally calling functions and class methods by specifying the parameter name, instead of calling them on the order of parameters that they are declared.

PHP, and many other programming languages, support positional parameters: The caller passes the parameters in the same order the function/method declares its parameters.

In PHP 8.0, Named Parameters support is added, which means it's now possible to call a function/method by setting the parameters by their name, not only by their order!.

**Positional Arguments**
`function str_contains(string $haystack, string needle){..code}`
`str_contains('FooBar', 'Foo');`

**Named Arguments**
`function str_contains(string $haystack, string $needle){}`
`str_contains(needle: 'Foo', haystack: 'FooBar');`

#### Constructors - Magic Methods

> You'll use constructors to do whatever should always be done - and done first - when an object of this class is made/initiated.
> Classes which have a constructor method call this method on each newly-created object, so it is suitable for any initialization that the object may need before it is used.

#### Primitive Types

**Strict Mode in PHP ????**
`declare(strict_types=1);`

-   boolean
-   integer
-   float
-   string
-   object
-   resource
-   array
-   null

`: void`

Typed Properties
`public string $title;`
Union Typed Properties
`public int|array $author;`

> void is a return-only type declaration indicating the **_function does not return a value_**, we don't expect return something from function/method.

---

#### Visibility Keywords

**_Public_** properties and methods can be accessed anywhere in your code.
**_Protected_** properties and methods can be accessed only be accessed within the declaring parent class & it's a child classes.
**_Private_** properties and methods can be accessed only be accessed within the declaring class. They are not visible anywhere else.

---

#### Global Constants | Class Constants

> Difference between STATIC & CONSTANT Values: we can only change static value!
> Constants belong to class scope/level, so we can access them directly off the class. No Object Needed ! ????

```
class Example
{
    const AGE = 21;
    const ERROR = 404;
}
print Example::AGE   // 21
print Example::ERROR // 404
```

---

#### Abstract Classes

> **An Abstract class is an template or base class that a child classes can extend from (PHP Inheritance concept). So, Abstract classes are classes which you don't instantiate themselves, instead they define interface for classes which extend them.**

> An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the this parent class. So, Abstract classes and methods are when the parent class has a named abstract method, but need its child class(es) to fill out/implement this methods.
> abstract class can not be instantiate, it can be only extended! So, U can not create objects directly from abstract class.

![example1](/slides/abstract1.png)
![example2](/slides/abstract2.png)
![example3](/slides/abstract3.png)

This is a TOOL, technic for writing cleaner & better logical structured code.

When we use abstract class? We use abstract class when we want to force the child classes to implement the methods where U provide some base functionally.

We use abstract classes when we want to commit the programmer (either oneself or someone else) to write a certain class method, but we are only sure about the name of the method, and not the details of how it should be written. To take an example, circles, rectangles, octagons, etc. may all look different, but are all 2D shapes nonetheless, and thus all possess the traits of area and circumference. So, it makes perfect sense to group the code that they have in common into one parent class. In this parent class, we would have the two properties of area and circumference, and we might even consider adding a method that calculates the area (which might be problematic since different shapes require different calculations). In these kinds of cases, when we need to commit the child classes to certain methods that they inherit from the parent class but we cannot commit about the code that should be used in the methods, we use abstract classes.

If U have an abstract class where U have bunch of abstract methods, then U should not use abstract class - at this point U should use INTERFACES.

The child class method must be defined with the same name and it redeclares the parent abstract method

The child class method must be defined with the same or a less restricted access modifier

The number of required arguments must be the same. However, the child class may have optional arguments in addition.

---

#### OOP Core Principles

### 1. Inheritance

> U can have a class, which inherits from a pharent. So, it will inherit pharent class properties & methods. But U will also be able declare child class own properties & methods. This means that child class extends the parent class.
> INHERITANCE solves 2 main issues: **Redundency** & **Dublication**.

**Transpering/clone Parent properties in child via constructor ????**

```
require_once "Book.php";

class PhysicalBook extends Book
{
    public $weight;

    public function __construct(string $title, string $author, int $price, int $weight)
    {
        parent::__construct($title, $author, $price);
        $this->weight = $weight;
    }
}
```

> During method overriding, Child Class Methods have major priority, then Parent Class methods.

### 2. Encapsulation

**Why do we have encapsulation?**

1. The functionality is defined in one place and not in multiple places.
2. It is defined in a logical place.ie. the same place as its data.
3. The data inside our objects can't be unexpectededly or unwantedly modified by external code in a completely different part of our program.

### 3. Abstraction

### 4. Polymorphism

---

#### Static Properties & Methods

Static properties belong to the class scope. So, U don't have to create a new counter object in order to be able to access static properties on it.

**Why use statics?**

-   Available anywhere in your program.
-   Easy to setup and access.
-   Same value is available to every object instance of that class.

```
class Counter
{
    public static string $name = 'Health';
}

print Counter::$name;
```
