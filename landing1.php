<?php
define('SDK_DIR', __DIR__ . '/..'); // Path to the SDK directory
$loader = include SDK_DIR . '/vendor/autoload.php';

use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\ServerSide\Content;
use FacebookAds\Object\ServerSide\CustomData;
use FacebookAds\Object\ServerSide\DeliveryCategory;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\EventRequest;
use FacebookAds\Object\ServerSide\Gender;
use FacebookAds\Object\ServerSide\UserData;

// Configuration.
// Should fill in value before running this script
$access_token = null;
$pixel_id = null;

if (is_null($access_token) || is_null($pixel_id)) {
  throw new Exception(
    'You must set your access token and pixel id before executing'
  );
}

// Initialize
Api::init(null, null, $access_token);
$api = Api::instance();
$api->setLogger(new CurlLogger());

$events = array();

$user_data_0 = (new UserData())
  ->setEmails(array("7b17fb0bd173f625b58636fb796407c22b3d16fc78302d79f0fd30c2fc2fc068"))
  ->setPhones(array());

$custom_data_0 = (new CustomData())
  ->setValue(142.52)
  ->setCurrency("USD");

$event_0 = (new Event())
  ->setEventName("Purchase")
  ->setEventTime(1712864912)
  ->setUserData($user_data_0)
  ->setCustomData($custom_data_0)
  ->setActionSource("website");
array_push($events, $event_0);

$request = (new EventRequest($pixel_id))
  ->setEvents($events);

$request->execute();
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
  <style>
     .grid-container {
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: auto auto;
      gap: 1rem;
     }

    .grid-container img {
     max-width: 100%;
     height: auto;
    }
	 /* 개인정보 수집 내용을 위한 CSS */
        .info-container {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
        }
 </style>
 </head>
 <body>
<div class="grid-container">
  <img src="https://lh6.googleusercontent.com/wgn86z6L9_qT3l-1vfpa72hZ-2xx0WPpdEfQZvKGkIEnQ5AElaaR-p1FQyDJIDhhLIe6Az5BoCNHGeaeKZjvOGxm8zCOmtk2YQ50gq5vLusvnEDy6fvcXXgZEKyz5VxY-g=w650" alt="Your Image" width="650">       
    <form id="customerForm" action="https://hook.eu2.make.com/oj0hj1otian86xpljljsruhocijtv4kw" method="post">
        <label for="name">성 &nbsp;&nbsp;&nbsp;함:</label>
        <input type="text" id="name" name="name" oninput="validateName()" required>
        <span id="nameError" style="color: red;"></span><br><br>

        <label for="email">이메일:</label>
        <input type="email" id="email" name="email" oninput="validateEmail()" required>
        <span id="emailError" style="color: red;"></span><br><br>

        <label for="phone">전화번호:</label>
        <input type="tel" id="phone" name="phone" oninput="validatePhoneNumber()" required>
        <span id="phoneError" style="color: red;"></span><br><br>
		<input type="hidden" name="funnel_state" value="scr0">
	        <input type="hidden" name="email_Y_N" value="n">
	        <input type="radio" id="agree" name="agreement" value="예, 동의합니다." required>
        <label for="agree">개인정보 수집 동의</label>
        <button type="button" onclick="toggleAgreementDetails()">개인정보 수집 동의 내용보기</button><br><br>
        <input type="submit" value="제출">
    </form>
     <div id="agreementDetails" style="display: none;">
        <!-- 여기에 개인정보 수집 동의 내용을 작성하세요 -->
       <div class="info-container">
        <h2>개인정보 수집</h2>
        <p><strong>'홍인수'</strong>은(는) 회원가입, 상담, 서비스 신청 등을 위해 아래와 같은 개인정보를 수집하고 있습니다.</p>
        <ul>
            <li>필수항목: 이름, 휴대전화, 이메일, 주소</li>
        </ul>
        <p><strong>'힘비즈'</strong>은(는) 수집한 개인정보를 다음의 목적을 위해 활용합니다:</p>
        <ol>
            <li>서비스 이용에 따른 본인식별, 실명확인, 가입의사 확인</li>
            <li>고지사항 전달, 의사소통 경로 확보, 이벤트 당첨 물품 배송 시 정확한 배송지 정보 확보</li>
            <li>신규 서비스 등 최신정보 개인 맞춤 서비스 제공을 위한 자료</li>
            <li>불량회원 부정 이용 방지 및 비인가 사용 방지</li>
        </ol>
        <p>원칙적으로 개인정보의 수집 또는 제공받은 목적 달성 시 지체 없이 파기합니다.</p>
        <!-- 이하 생략 -->
      </div>
    </div>
   <!-- 카카오톡 공유 시작 -->
    <div class="grid-container">
	   <script src="https://t1.kakaocdn.net/kakao_js_sdk/2.7.1/kakao.min.js"
  integrity="sha384-kDljxUXHaJ9xAb2AzRd59KxjrFjzHa5TAoFQ6GbYTCAG0bjM55XohjjDT7tDDC01" crossorigin="anonymous"></script>
<script>
  Kakao.init('1926ad4b3d88685f5261147edfeb2afa'); // 사용하려는 앱의 JavaScript 키 입력
</script>

<a id="kakaotalk-sharing-btn" href="javascript:;">
  <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi8GtNj6N8XbSzG7tAOSCIbXaMhAGeOOMzwGG3qN4qPcp3L0KmLcsZHDyQZy9PjeluWZ1S4bFkrQ_CZyphroB0ry95KA5iQsgYGt6Mbc9vMVR2X5eHzqRi8N9jxqvTjOTkdMVI_76AP1O2y7p7Okuz9bsM6t2sbNxwfXr7fp80IPn8RlslHTJoxpBJqe2Y/w591-h214/dvdgvg.png"
    alt="카카오톡 공유 보내기 버튼" />
</a>

<script>
  Kakao.Share.createDefaultButton({
    container: '#kakaotalk-sharing-btn',
    objectType: 'feed',
    content: {
      title: '잠재의식 에너지 체험 최면 스크립트.PDF',
      description: '#운세 #사주 #타로 #잠재의식 #연애운 #금전운 #직업운 #재회',
      imageUrl:
        'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEianQkPonYhbTvPcYUIaTZHImxotiWofedfybpfozE03ZbhlqRl6uluMSVUeI8f8b7i46RmhAnKpyzfjMtM99ZfxESG70X5wJXkR9ReHUzy7U_1fdUhbhln049Nbw2wp4wH8iaptAZKag9hxTeal0hTvpJointYAcCSUIMUWZg0buXumNpquDZrCuJai-A/w502-h502/036.jpg',
      link: {
        // [내 애플리케이션] > [플랫폼] 에서 등록한 사이트 도메인과 일치해야 함
        mobileWebUrl: 'https://lifehyp.github.io/github.io/landing1.html',
        webUrl: 'https://lifehyp.github.io/github.io/landing1.html',
      },
    },
    social: {
      likeCount: 286,
      commentCount: 45,
      sharedCount: 845,
    },
    buttons: [
      {
        title: '웹으로 보기',
        link: {
          mobileWebUrl: 'https://lifehyp.github.io/github.io/landing1.html',
          webUrl: 'https://lifehyp.github.io/github.io/landing1.html',
        },
      },
      {
        title: '앱으로 보기',
        link: {
          mobileWebUrl: 'https://lifehyp.github.io/github.io/landing1.html',
          webUrl: 'https://lifehyp.github.io/github.io/landing1.html',
        },
      },
    ],
  });
</script>
	</div>
<p>&nbsp;</p>
     <!-- 카카오톡 공유 여기까지 -->
	<script>
    function validateName() {
        const nameInput = document.getElementById("name");
        const nameError = document.getElementById("nameError");
        const regex = /^[가-힣]+$/;

        if (!regex.test(nameInput.value)) {
            nameError.textContent = "한글 이름만 입력 가능합니다.";
            return false;
        } else {
            nameError.textContent = "";
            return true;
        }
    }

    function validateEmail() {
        const emailInput = document.getElementById("email");
        const emailError = document.getElementById("emailError");
        const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (!regex.test(emailInput.value)) {
            emailError.textContent = "올바른 이메일 주소를 입력해 주세요.";
            return false;
        } else {
            emailError.textContent = "";
            return true;
        }
    }

    function validatePhoneNumber() {
        const phoneInput = document.getElementById("phone");
        const phoneError = document.getElementById("phoneError");
        const regex = /^010-\d{4}-\d{4}$/;

        if (!regex.test(phoneInput.value)) {
            phoneError.textContent = "올바른 전화번호 형식을 입력하세요 (010-1234-5678).";
            return false;
        } else {
            phoneError.textContent = "";
            return true;
        }
    }

     function toggleAgreementDetails() {
          const agreementDetails = document.getElementById("agreementDetails");
          agreementDetails.style.display = toggle(agreementDetails.style.display);
     }

     function toggle(display) {
     return display === "none" ? "block" : "none";
     }
	

    document.getElementById("customerForm").addEventListener("submit", function (event) {
        event.preventDefault(); // 폼의 기본 제출 동작을 중단

        // 유효성 검사
        const isNameValid = validateName();
        const isEmailValid = validateEmail();
        const isPhoneValid = validatePhoneNumber();
        const agreementInput = document.getElementById("agree");

        if (!isNameValid || !isEmailValid || !isPhoneValid || !agreementInput.checked) {
            alert("모든 필드를 올바르게 입력하고 개인정보 수집에 동의해 주세요.");
            return;
        }

        // FormData 객체를 사용하여 폼 데이터를 준비
        const formData = new FormData(document.getElementById("customerForm"));

        // fetch API를 사용하여 데이터를 웹훅 URL로 비동기적으로 전송
        fetch("https://hook.eu2.make.com/oj0hj1otian86xpljljsruhocijtv4kw", {
            method: "POST",
            body: formData,
        })
        .then(response => {
            if (response.ok) {
                // notice.html을 새 창으로 열기
                window.open('https://lifehyp.github.io/github.io/notice.html', '_blank');
            } else {
                alert("데이터를 전송하는 데 실패했습니다.");
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("오류가 발생했습니다.");
        });
    });
</script>

</div>
<br><br><br><br><br><br><br>
 </body>
</html>
