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
//  console.log("TestWalker = " + test_walker);
  var get_test = `p2test${test_walker}.html`;
  var tests = document.getElementById("tests").innerHTML="<object type='text/html' data='p2test" + test_walker + ".html' width='100%' height='900' ></object>";
  test_walker += 1;

  if (test_walker == 8) {
  //  console.log("Inne i IF");
    window.location.href = "../done/tmp.php";
  }

}



// checks if if any choice has been made and if so call getNextTest
function callTest() {

  if (document.querySelector('.choice:checked')) {
    getNextTest()
  }
}
