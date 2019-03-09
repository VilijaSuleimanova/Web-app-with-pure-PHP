const username = document.getElementById('username');
const password = document.getElementById('password');

// Username field
username.addEventListener('focus', function(){
    showMessage('un', 3);
});

username.addEventListener('blur', function(){
  document.getElementById('un').innerHTML = '';
})

username.addEventListener('keyup', function(){
  if(username.value.length > 2) {
    document.getElementById('un').innerHTML = '';
  } else {
    showMessage('un', 3);
  }
})

// Password field
password.addEventListener('focus', function(){
  showMessage('ps', 7)

});

password.addEventListener('blur', function(){
  document.getElementById('ps').innerHTML = '';

})

password.addEventListener('keyup', function(){
  if(password.value.length > 6) {
    document.getElementById('ps').innerHTML = '';
  } else {
    showMessage('ps', 7)
  }
})

function showMessage(id, count) {
  document.getElementById(id).className = 'form-text text-muted';
  document.getElementById(id).innerText = `Choose username using at least ${count} of alphanumeric characters (letters and numbers)`;
}