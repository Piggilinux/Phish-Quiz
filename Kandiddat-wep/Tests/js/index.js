var can_walk = true;
var test_walker = 1;


console.log("start of index script");

function callTest() {
  // var para = document.createElement("P");
  // var t = document.createTextNode("This is a paragraph.");
  // para.appendChild(t);
  // document.getElementById("myDIV").appendChild(para);

  var get_test = `test${test_walker}.html`;
  console.log("before if: " + can_walk);

  // if (can_walk == true) {
    // gets the element (the php file) and displays it in "tests" div.
    var tests = document.getElementById("tests").innerHTML="<object type='text/html' data='test" + test_walker + ".html' width='100%' height='600' ></object>";
    test_walker += 1;
    can_walk = false;
    console.log("innanför: " + can_walk);
  // }
}

function checkedBox() {


  $(document).ready(function(){
      $('input:checkbox').click(function() {
          $('input:checkbox').not(this).prop('checked', false);
      });
  });
//
//   if (document.getElementById("checkboxOne").checked == true || document.getElementById("checkboxTwo").checked == true) {
//     // document.getElementById("next").disabled = false;
//     can_walk = true;
//
//     console.log("button clicked: " + can_walk);
//   }
//   else if (document.getElementById("checkboxOne").checked == false && document.getElementById("checkboxTwo").checked == false){
//     can_walk = false;
//     console.log("none is clicked: " + can_walk);
//   }
//
// console.log("checkbox last: " + can_walk);
//
// }
//
// function myFunction() {
//   return Math.PI;
// }
//
// function set_true() {
// return can_walk;
}
