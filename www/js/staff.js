


//this function allows user to select name from a list .

function select(i) {

 var ul = document.getElementById("myUL");
var li = ul.getElementsByTagName('li');
// setting input field value as the user clicks on the link's content
document.getElementById("myInput").value = li[i].textContent;
ul.style.display = "none";
   

}


//this function shows the possible matched names and if there is no match it displays none
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            a.style.display = "block";
        } else {
            li[i].style.display = "none";
			
        }
    }
}


