function check_pass() {
    let message = document.getElementById('message');
    let pass = document.getElementById('npwd');
    let cpass = document.getElementById('cnpwd');
    let btnChange = document.getElementById('Change');
    if (pass.value == cpass.value) {
        message.style.color = 'green';
        message.innerHTML = '';
        btnChange.disabled = false;

    } else {
        message.style.color = 'red';
        message.innerHTML = 'Mật khẩu không trùng khớp';
        btnChange.disabled = true;
    }
} 
