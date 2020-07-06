# Form 입력 형식 검증

### filter_val()

`filter_val()`함수는 해당 변수가 전달받은 검증 필터에 맞는 유효한 값인지를 검사하는 함수이다.  
이메일과 URL 주소에 대한 입력 형식 검증에 사용할 수 있다.  


| 플래그 | 설명 |
|---|:---:|
| FILTER_VALIDATE_BOOLEAN | 해당 변수가 "1", "true", "on", "yes"인 경우에만 true를 반환하고, 나머지는 전부 false를 반환함. |
| FILTER_VALIDATE_EMAIL | 해당 변수가 유효한 이메일 주소인지를 검증함. |
| FILTER_VALIDATE_FLOAT | 해당 변수가 float 타입인지를 검증함. |
| FILTER_VALIDATE_INT | 해당 변수가 int 타입인지를 검증함. |
| FILTER_VALIDATE_IP | 해당 변수가 유효한 IP 주소인지를 검증함. |
| FILTER_VALIDATE_MAC | 해당 변수가 유효한 MAC 주소인지를 검증함. |
| FILTER_VALIDATE_REGEXP | 해당 변수를 펄 호환 정규 표현식(Perl-Compatible Regular Expression, PCRE)으로 검증함. |
| FILTER_VALIDATE_URL | 해당 변수가 유효한 URL 주소인지를 검증함. |

### 예제

```php
<?php
 if (empty($_POST["email"])) {
        $emailMsg = "";
    } else {
        $email = $_POST["email"];
        // 이메일의 입력 형식 검증
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailMsg = "이메일을 정확히 입력해 주세요!";
        }
    }
    if (empty($_POST["website"])) {
        $websiteMsg = "";
    } else {
        $website = $_POST["website"];
        // 홈페이지 URL 주소의 입력 형식 검증
       if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteMsg = "홈페이지의 주소를 정확히 입력해 주세요!";
        }
    }
?>
```