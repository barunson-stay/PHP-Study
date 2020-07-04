# include와 namespace

코드의 재활용성을 높이고, 유지보수를 쉽게 할 수 있는 다양한 기법들이 사용된다.  
그 기법중 하나가 코드를 여러개의 파일로 분리하는 것이다.  

## 0. 코드 분리의 장점

* 자주 사용되는 코드를 별도의 파일로 만들어서 필요할 때마다 재활용할 수 있다.  
* 코드를 개선하면 이를 사용하고 있는 모든 애플리케이션의 동작이 개선된다.  
* 코드 수정 시에 필요한 로직을 빠르게 찾을 수 있다.  
* 필요한 로직만을 로드해서 메모리의 낭비를 줄일 수 있다.  

## 1. include

`include`는 외부의 php 파일을 로드할 때 사용하는 명령이다.  
필요에 따라서 다른 php 파일을 코드 안으로 불러와서 사용할 수 있다.  

PHP는 외부의 php 파일을 로드하는 방법으로 4가지 형식을 제공한다.  
형식의 종류는 아래와 같다.

* include
* include_once
* require
* require_once

_once라는 접미사는 파일을 로드할 때 단 한번만 로드하면 된다는 의미다.  

    - include와 require의 차이점
    
    include와 require의 차이점은 존재하지 않는 파일의 로드를 시도했을 때 
    include가 warning를 일으킨다면 require는 fatal error를 일으킨다는 점이다.  
    fatal error는 warning 보다 심각한 에러이기 때문에 require가 include 보다 엄격한 로드 방법이라고 할 수 있다. 


### 1-1. 예제

welcome함수를 greeting.php라는 파일로 분리하면,  
새로운 파일에서 include를 통해 welcome함수를 호출해서 사용할 수 있다.  

* greeting.php
```php
<?php
function welcome(){
    return 'Hello world';
}
?>
```

* example.php
```php
<?php
include 'greeting.php';
echo welcome();
?>
```

## 2. namespace

한 파일 안에서 동일한 함수를 중복 선언할 수 없다.  
`namespace`는 동일한 이름의 함수를 하나의 php 에플리케이션 안에서 사용할 수 있게 한다.
로드되는 파일의 초입에 키워드 namespace를 이용해서 네임스페이스를 만든다.  
그리고 네임스페이스를 사용할 때는 함수 앞에 네임스페이스의 이름을 붙여서 사용하면 된다.  

### 2-1. 예제

* greeting_en_ns.php
 ```php
<?php
namespace language\en;
function welcome(){
    return 'Hello world';
}
```
* greeting_ko_ns.php
```php
<?php
namespace language\ko;
function welcome(){
    return '안녕하세요';
}
```

* example.php
```php
<?php
require_once 'greeting_ko_ns.php';
require_once 'greeting_en_ns.php';
echo language\ko\welcome();
echo language\en\welcome();
?>
```
  
