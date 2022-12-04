# CONTACT FORM 7  

## 1. form에 id와 class 넣기
```html
[contact-form-7 id="01" title="title" html_id="id" html_class="class"]
```  
- html_id, html_class를 추가하여 form를 컨트롤 할 수 있는 네임속성을 부여한다.  

## 2. label의 for와 input의 id 연결하기  
```html
<label for="userName">name</label>
[text* name id:userName class="form-control" placeholder "Enter your name"]
```  

## 4. Random selected  
```js
function randomSelected() {
	let select = $('select[name=dropdown]');
	let option = select.find('option');
	let index = Math.floor(Math.random() * option.length);

	option.eq(index).prop('selected', true); // 초기 선택을 랜덤으로 선택한다.
	return false;
}
randomSelected();
```

## 4. Random option
```js
// Random option
jQuery(document).ready(function() {

	let select = $('select[name=o_dropdown-1]');
	let option = select.find('option');

	// option항목에서 "first_as_label인 선택해주세요" 삭제
	let newOption = option.slice(1);

	function selectOptionShuffle(elem) {
		let index = elem.sort(() => Math.random() - 0.5); // 랜덤 배치

		// 랜덤 배치된 항목들 순서대로 입력
		for ( var i = 0; i < index.length; i++ ) {
			select.append(index[i]);
		}

	}
	selectOptionShuffle(newOption);

});
```  

