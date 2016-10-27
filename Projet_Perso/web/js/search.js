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
        liste.innerHTML =  " ";
        if(data.user.length <= 0){
          liste.innerHTML =  " ";
        } else {
          for (var i = 0; i < data.user.length ;i++){
            $("#recherche ul").append("<li><hr/><a href='/profil/"+ data.user[i].id+"'>"+data.user[i].name + " " + data.user[i].username+"</a><hr/></li>");
          }
        }
      }
    });
    } else {
      liste.innerHTML =  " ";
      }
  })
});