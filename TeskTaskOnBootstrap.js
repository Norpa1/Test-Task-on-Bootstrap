setTimeout( () => {
const MyNav = document.getElementsByClassName("MyNavigation")[0]
const menuBtn = document.getElementsByClassName("btn-wrapper")[0]
let menuOpen = false;
menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    MyNav.setAttribute("class","nav navbar-nav MyNavigation")
   // document.getElementsByClassName("CityInfo")[0].style.display = "none";
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    MyNav.setAttribute("class","nav navbar-nav ml-5 MyNavigation")
   // document.getElementsByClassName("CityInfo")[0].style.display = "block";
    menuOpen = false;
  }
})

  let DefaultNewsQuantity = 3;
  let NewsArray = [];
  let DateArray = [];
  for (var i=0;i<document.getElementsByClassName("dboutput1").length;i++) {
    NewsArray.push(document.getElementsByClassName("dboutput1")[i].innerHTML);  
    DateArray.push(document.getElementsByClassName("dboutput2")[i].innerHTML);
  }
  for (var i=0;i<document.getElementsByClassName("dboutput1").length;i++) {
    document.getElementsByClassName("dboutput1")[i].remove();
    document.getElementsByClassName("dboutput2")[i].remove(); 
  }

  for (let i=0;i<DefaultNewsQuantity;i++) {
    window["ItemHTMLCode"+i] = "";
    var WrapperElem =  document.createElement("div");
    WrapperElem.className = "d-block w-100 d-flex justify-content-around";

    for (let k=0;k<DefaultNewsQuantity;k++) {
      var elem = document.createElement("div");
      elem.className = "col-3 bg-white";
      elem.style.padding = "35px";
      elem.style.border = "2px solid #D8D8D8";
      let elem2 = document.createElement("span");
      elem2.innerHTML = DateArray[k];
      let elem3 = document.createElement("div");
      elem3.className = "font-weight-bold mb-3 mt-3";
      elem3.innerHTML = NewsArray[k];
      let elem4 = document.createElement("button");
      elem4.className = "btn btn-outline-danger col-xs-btn-xs btn-lg";
      elem4.innerHTML = "Подробнее";

      elem.appendChild(elem2)
      elem.appendChild(elem3)
      elem.appendChild(elem4)
     WrapperElem.appendChild(elem)
    }
     
    NewsArray.push(NewsArray[0]); 
    DateArray.push(DateArray[0]);    
    NewsArray.splice(0,1); 
    DateArray.splice(0,1); 
    
    let Element = document.getElementsByClassName("MyInnerCarousel")[0].children[i];
    Element.appendChild(WrapperElem);

  }


},500)

 