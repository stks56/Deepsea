// 文字入力チェック
function check1() {
  var text = document.form1.input1.value;
  if(text.length === 0) {
    alert('つぶやく内容を入力してください！');
  return false;
  } else if (text.length > 50) {
    alert('つぶやく内容は50文字までです！');
    return false;
  }
}

function check2() {
  var text = document.form2.input2.value;
  if(text.length === 0) {
    alert('名前を入力してください！');
    return false;
  } else if (text.length > 8) {
    alert('名前は8文字までです！');
    return false;
  }
}
