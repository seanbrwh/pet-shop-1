$('form#contact').on('submit', function(){
  var fName = document.getElementById("first_name").value;
  var lName = document.getElementById("last_name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  if(fName == '' || lName == '' || email == '' || message == '' ){
    var ul = document.getElementById("error");
    var li = document.createElement("li");
    li.appendChild(document.createTextNode("All fields required"));
    li.classList.add("error");
    ul.appendChild(li);
  }else if(fName || lName || email || message){
    var that = $(this),
        url = that.attr('action'),
        type = that.attr('method'),
        data = {};
    that.find('[name]').each(function(i,v){
      var that = $(this),
          name = that.attr('name'),
          value = that.val();
        data[name] = value
    })
    $.ajax({
        url:url,
        type:type,
        data:data,
        success:function(res){
          var ul = document.getElementById("error");
          var li = document.createElement("li");
          li.appendChild(document.createTextNode("Thank you!"));
          li.classList.add("success");
          ul.appendChild(li);
          console.log(res)
        }
      })
  }
  return false;
})
