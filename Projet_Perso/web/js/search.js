$("document").ready(function() {
  $("#search").keyup(function() {
    if ($(this).val().length > 0) {
      liste.innerHTML =  " ";
      new_val = document.getElementById("search").value;
      $.ajax({
        type: 'get',
        url: 'http://127.0.0.1:8000/search/' + new_val,
      beforeSend: function() {
        console.log('sa charge');
      },
      success: function(data){
        console.log(data.user);
        liste.innerHTML =  " ";
        if(data.user.length <= 0){
          liste.innerHTML =  " ";
        } else {
          for (var i = 0; i < data.user.length ;i++){
            console.log(data.user[i].name);
          // $("#recherche ul").append("<li><a href=''>"data.user[i].name + " " + data.user[i].username"\"</a></li>");
            $("#recherche ul").append("<li><a href='/friends/"+ data.user[i].id+"'>"+data.user[i].name + " " + data.user[i].username+"</a></li>");
            // console.log($("#recherche ul").append("<li><a href=\"/friends/"+ data.user[i].id +"\">"data.user[i].name + " " + data.user[i].username"</a></li>"));
          /*  var li = document.createElement('li');
            var text = document.createTextNode(data.user[i].name + " " + data.user[i].username );
            li.appendChild(text);
            liste.appendChild(li);*/
          }
        }

      }

    });
    } else {
      liste.innerHTML =  " ";
      }
  })
});