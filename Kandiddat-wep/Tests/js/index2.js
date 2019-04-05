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
  var get_test = `p2test${test_walker}.html`;
  var tests = document.getElementById("tests").innerHTML="<object type='text/html' data='p2test" + test_walker + ".html' width='100%' height='600' ></object>";
  test_walker += 1;

}



// checks if if any choice has been made and if so call getNextTest
function callTest() {

  if (document.querySelector('.choice:checked')) {
    getNextTest()
  }
}
