function modifyText() {
    var pass = document.getElementById("pass").value;
    var re_pass = document.getElementById("re-pass").value;
    var login = document.getElementById("log").getAttribute("value");
    if (pass.length == 0 || re_pass.length == 0){
        alert("Пустое поле!");
        return false;
    }
    if (pass != re_pass){
        alert("Пароли не совпадают!");
        return false;
    }
    if (pass.length < 8){
        alert("Пароль меньше 8 символов");
        return false;
    }

    $.ajax({
        type:'POST',
        url:'/'+login+'/changePass',
        data:'pass='+pass,
        success:function(msg){
            alert(msg);

        //   if(msg == 'valid'){
        //     $('#message').html('<font color="green">Этот Email можно использовать.</font>');
        //     email = value;
        //   }else{
        //     $('#message').html('<font color="red">Этот Email уже занят.</font>');
        //   }
        }
    });

 }
  
  // Добавляет слушателя событий для таблицы
  var el = document.getElementById("pass-button");
  el.addEventListener("click", modifyText, false);