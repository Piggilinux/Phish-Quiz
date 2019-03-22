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
  var get_test = `test${test_walker}.html`;
  var tests = document.getElementById("tests").innerHTML="<object type='text/html' data='test" + test_walker + ".html' width='100%' height='600' ></object>";
  tmp();
  test_walker += 1;
}

// checks if if any choice has been made and if so call getNextTest
function callTest() {

  if (document.querySelector('.choice:checked')) {
    getNextTest()
  }
}

function tmp () {
  // var para = document.createElement("P");
  // var t = document.createTextNode("This is a paragraph.");
  // para.appendChild(t);
  // document.getElementById("myDIV").appendChild(para);


  // jQuery.ajax({
  //     type: "POST",
  //     url: '../php/answer.php',
  //     dataType: 'json',
  //     data: {functionname: 'test', arguments: [1, 2]},
  //
  //     success: function (obj, textstatus) {
  //                   if( !('error' in obj) ) {
  //                       yourVariable = obj.result;
  //                   }
  //                   else {
  //                       console.log(obj.error);
  //                   }
  //             }
  // });

}
