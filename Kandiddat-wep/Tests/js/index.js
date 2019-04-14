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



  console.log(test_walker)
  var get_test = `test${test_walker}.html`;
  var tests = document.getElementById("tests").innerHTML="<object type='text/html' data='test" + test_walker + ".html' width='100%' height='600' ></object>";
  test_walker += 1;


  if (test_walker == 4) {
    // console.log("JAVAIFIFIF" + test_walker);
     // document.body.innerHTML = '';
     // document.getElementById('testButtons').innerHTML = "";
  }
}



// checks if if any choice has been made and if so call getNextTest
function callTest() {

  if (document.querySelector('.choice:checked')) {
    getNextTest();
    // uncheckAll();
  }
  // document.getElementById("checkboxOne").checked = false;
  // document.getElementById("checkboxTwo").checked = false;
}

function uncheckAll(){
   $('input[type="checkbox"]:checked').prop('checked',false);
}
