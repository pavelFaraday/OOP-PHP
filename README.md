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

**Strict Mode in PHP 👇**
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

> void is a return-only type declaration indicating the **_function does not return a value_**, we don't expect return something from function/method.

---

#### OOP Core Principles

**Encapsulation**

> U can have a class, which inherits from a pharent. So, it will inherit pharent class properties & methods. But U will also be able declare child class own properties & methods. This means that child class extends the parent class.
> INHERITANCE solves 2 main issues: **Redundency** & **Dublication**.

**Transpering/clone Parent properties in child via constructor 👇**

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

**Abstraction**
**Inheritance**
**Polymorphism**
