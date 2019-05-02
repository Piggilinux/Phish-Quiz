var can_walk = true;
var test_walker = 1;


function checkedBox() {

  $(document).ready(function(){
      $('input:checkbox').click(function() {
          $('input:checkbox').not(this).prop('checked', false);
      });
  });
}

// will display the next test and incease test_walker variable
function getNextTest() {

  //console.log(test_walker)
  var get_test = `test${test_walker}.html`;
  var tests = document.getElementById("tests").innerHTML="<object type='text/html' data='test" + test_walker + ".html' width='100%' height='900' ></object>";
  test_walker += 1;
  // console.log("This is type: " + type);

  if (test_walker == 8) {
    if (type == 1) {
      window.location.href = "../testn/good-to-know.php";
    }
    else if (type == 0) {
      window.location.href = "../testn/good-to-know2.php";
    }
  }

}

// checks if if any choice has been made and if so call getNextTest
function callTest() {

  if (document.querySelector('.choice:checked')) {
    getNextTest()
  }
}
