# 클래스와 객체

* `객체`: 실생활에서 인식할 수 있는 사물
* `프로퍼티`: `객체`의 상태
* `메소드`: `객체`의 행동
* `클래스`: `객체`를 만들어 내기 위한 틀, 설계도
* `인스턴스`: 메모리에 생성된 `객체`

## 1. 클래스

```text
class 클래스이름
{
    클래스의 프로퍼티과 메소드의 정의;
}
```

클래스는 class 키워드를 사용하여 위와 같은 구조로 선언한다.

### 1-1. 클래스 이름 규칙

1. 클래스의 이름은 숫자로 시작할 수 없습니다.

2. 클래스의 이름은 영문자(대소문자), 숫자, 언더스코어(_)로만 구성됩니다.

3. 클래스의 이름 사이에는 공백이 포함될 수 없습니다.

4. 클래스의 이름은 대소문자를 구분합니다.

5. PHP에서 미리 정의한 예약어(reserved word)는 클래스의 이름으로 사용할 수 없습니다.

### 1-2. 생성자

클래스는 새로운 객체를 생성할 때마다 생성자라는 메서드를 호출한다.  

생성자는 객체가 생성될 때마다 호출되어 해당 객체의 프로퍼티를 초기화하거나, 필요한 다른 객체를 생성하는 등의 초기화 작업을 수행한다.  
생성자는 객체가 생성될 때마다 자동으로 호출되므로, 사용자가 직접 호출할 필요가 없다.  

### 1-3. 클래스의 사용

#### 인스턴스 선언

클래스가 선언되고 나면, 선언된 클래스로부터 인스턴스를 생성할 수 있다.
`new`키워드를 사용하여 아래와 같이 인스턴스를 생성한다.

```php
$객체이름 = new 클래스이름(인수, ...);
```

#### 클래스 멤버에 접근

클래스의 프로퍼티에 접근하거나 메소드를 호출할 때는 `->`를 사용한다.  
프로퍼티와 메소드의 접근 범위를 제한할 수 있으므로, 클래스 외부에서는 접근 제어자에 따라 접근이 가능할 수도 있고 또는 불가능할 수도 있다.
또한 객체 내부에서 해당 인스턴스의 프로퍼티에 접근하고 싶을 때는 특별한 변수인 $this를 사용할 수 있다.

```php
$객체이름->프로퍼티이름;
$객체이름->메소드이름;

$this->프로퍼티이름;
```

#### 접근제어

클래스 멤버에 `public`, `private`, `protected` 키워드를 사용하여 각각의 멤버에 대한 접근 제어를 명시할 수 있다.

* `public`: 외부로 공개되며, 해당 클래스의 멤버에서만 접근 가능
* `private`: 외부로 공개되지 않으며, 해당 클래스의 멤버에서만 접근 가능
* `protected`: 상위 클래스에 대해서는 `public`멤버처럼 취급되며, 외부에서는 `private`멤버처럼 취급

var 키워드를 사용하여 클래스의 프로퍼티를 정의하면, 해당 프로퍼티의 접근 제어는 public으로 자동 정의

```php
<?php
class ClassName
{
    public $publicVar;
    private $privateVar;

    protected $protectedVar;

 

    public function __constructor()
    {
        $this->publicVar = "public property<br>";

        $this->privateVar = "private property<br>";

        $this->protectedVar = "protected property<br>";

    }

 

    public function publicMethod()
    {
        echo "public method<br>";

    }
    protected function protectedMethod()
    {
        echo "protected method<br>";
    }
    private function privateMethod()
    {
        echo "private method<br>";
    }
}


$object = new ClassName();


echo $object->publicVar;      // 접근 가능
//echo $object->protectedVar; // 접근 불가능
//echo $object->privatev;     // 접근 불가능


$object->publicMethod();      // 호출 가능
//$object->protectedMethod(); // 호출 불가능
//$object->privateMethod();   // 호출 불가능
?>
```