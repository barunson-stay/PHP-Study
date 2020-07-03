# 조건문과 반복문

## 1. 조건문

조건문이란 주어진 조건에 따라서 에플리케이션을 다르게 동작하도록 하는 것이다.

다른 언어의 조건문과 동일하게 `if`, `else`, `else if`를 활용한다. 
조건에 대한 진위값에 따라 동작하게 된다.  
진위여부는 true, false, 0, 1로 판단 된다.

```php
<?php
    if (false){
        echo 1;
    } else if (false){
        echo 2;
    } else if (false){
        echo 3;
    } else {
        echo 4;
    }
?>
```

`else if`는 좀 더 다양한 케이스의 조건을 검사할 수 있는 기회를 제공한다.  
`else if`의 특징은 `if`나 `else`와는 다르게 여러개가 올 수 있다는 점이다.  
`elif`의 모든 조건이 false라면 else가 실행된다. `else`는 생략 가능하다.  

### 1-1. 비교 연산자와 조건문 중첩

비교 연산을 통해 반환되는 값을 조건으로 활용할 수 있다.  
또한 조건문을 중첩시킬 수 있다.

#### ex) 아이디와 비밀번호 검증 예시

```html
<html>
<body>
    <form method="post" action="example.php">
        id :  <input type="text" name="id" />
        password : <input type="text" name="password" />
        <input type="submit" />
    </form>
</body>
</html>
```

```php
<?php
if($_POST['id'] === 'hyemin'){
    if($_POST['password'] === '1234'){
        echo 'pass';
    } else {
        echo 'password wrong';
    }
} else {
    echo 'id wrong';
}
?>
```

### 1-2. 논리 연산자

논리 연산자는 조건문을 좀 더 간결하고 다양한 방법으로 구사할 수 있도록 도와준다.

* `and`: 좌항과 우항 모두 참일 때 참이 되는 연산자. `&&`을 사용해도 된다.
* `or`: 좌우항 중 하나라도 참일 때 참이 되는 연산자.
* `!`: 부정의 의미로 boolean 값을 역전시킨다.


## 2. 반복문

반복적인 작업을 수행하게 하는 구문이다. `while`, `for`를 사용한다.

### while문

조건이 참이면 중괄호 구간의 구문을 반복적으로 실행, 조건이 거짓이면 반복문이 실행되지 않는다.
조건에 대한 참, 거짓 여부가 종료 조건이 된다.

```php
<?php
    // i의 값으로 0을 할당한다. 
    $i = 0;
    // 종료조건으로 i의 값이 5보다 작다면 true, 같거나 크다면 false
    while($i < 5){
        echo 'coding everybody';
        // 반복문이 실행될 때마다 i의 값을 1씩 증가시킨다. 그 결과 i의 값이 5가 되면 종료조건이 false가 되면서 반복문이 종료된다.
        $i += 1;
    }
?>
```

### for문

```text
for(초기화; 반복 지속 여부; 반복 실행){
    코드;
}
```
반복 지속 여부의 조건에 대해 참일 경우에 중괄호 구간의 구문이 반복적으로 실행된다.

```html
<html>
<body>
<?php
for($i = 0; $i < 10; $i++){
    echo 'coding everybody'.$i."<br />";
}
?>
</body>
</html>
```

반복을 즉시 중단 시킬 때는 조건문 내부에 `break`제어자를 활용할 수 있다.  
또한 반복문은 중첩될 수 있다.