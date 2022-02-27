function myFunction() {
    var z = document.getElementById("show-button");
    var x = document.getElementById("dashboard-div");
    var y = document.getElementsByName("divat");
    
    if (x.style.display === "none") {
      x.style.display = "block";
      for(let i = 0; i<y.length; i++){
      y[i].style.marginLeft = '1%';
      y[i].style.width = '100%';
    }
      z.style.transform = "rotate(0deg)"
    } else {
    
    x.style.display = "none";
    for(let i = 0; i<y.length; i++){
        y[i].style.margin = '0px';
        y[i].style.width = '120%';
    }

    z.style.transform = "rotate(90deg)";

    }
    
  }
  function showDashboard(){
    var x = document.getElementsByName("divat");
      x[0].classList.add("show-content1");
      x[1].classList.remove("show-content");
      x[2].classList.remove("show-content1");
      x[3].classList.remove("show-content");
      x[4].classList.remove("show-content");
  }
        
  function editProducts(){
    var x = document.getElementsByName("divat");
    x[1].classList.add("show-content");
    x[0].classList.remove("show-content1");
    x[2].classList.remove("show-content1");
    x[3].classList.remove("show-content");
    x[4].classList.remove("show-content");
  }
  function addProducts(){
    var x = document.getElementsByName("divat");
    x[2].classList.add("show-content1");
    x[1].classList.remove("show-content");
    x[0].classList.remove("show-content1");
    x[3].classList.remove("show-content");
    x[4].classList.remove("show-content");
  }
function deleteProducts(){
  var x = document.getElementsByName("divat");
  x[3].classList.add("show-content");
  x[2].classList.remove("show-content1");
  x[1].classList.remove("show-content");
  x[0].classList.remove("show-content1");
  x[4].classList.remove("show-content");
}

function listOfUsers(){
  var x = document.getElementsByName("divat");
  x[4].classList.add("show-content");
  x[3].classList.remove("show-content");
  x[2].classList.remove("show-content1");
  x[1].classList.remove("show-content");
  x[0].classList.remove("show-content1");
}