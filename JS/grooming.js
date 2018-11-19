function selectType(){
  var select = document.getElementById("type").value;
  var breed = document.getElementById("breed")
  if(select == 'dog'){
    breed.classList.add("dis-dis")
  }else{
    breed.classList.remove("dis-dis")
  }
}
function selectOnlyThis(id) {
  for (var i = 1;i <= 2; i++)
  {
      document.getElementById("check" + i).checked = false;
  }
  document.getElementById(id).checked = true;
}
