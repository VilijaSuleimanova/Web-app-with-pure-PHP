const username = document.getElementById('username');


username.addEventListener('focus', function(){
  document.getElementById('un').className = 'form-text text-muted';
  document.getElementById('un').innerText = 'Choose username using at least 3 of alphanumeric characters (letters and numbers)';

});

username.addEventListener('blur', function(){
  document.getElementById('un').innerHTML = '';

})

username.addEventListener('keyup', function(){
  if(username.value.length > 2) {
    document.getElementById('un').innerHTML = '';
  } else {
    document.getElementById('un').className = 'form-text text-muted';
    document.getElementById('un').innerText = 'Choose username using at least 3 of alphanumeric characters (letters and numbers)';
  }
})

