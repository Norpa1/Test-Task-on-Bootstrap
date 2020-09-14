document.addEventListener('DOMContentLoaded', function() { 
  const MyNav = document.getElementsByClassName("MyNavigation")[0]
  const menuBtn = document.getElementsByClassName("btn-wrapper")[0]
  let menuOpen = false;
  menuBtn.addEventListener('click', () => {
    if(!menuOpen) {
      menuBtn.classList.add('open');
      MyNav.setAttribute("class","nav navbar-nav MyNavigation")
      document.getElementsByClassName("my-nav-wrapper")[0].className = "d-flex d-md-none my-nav-wrapper-active bg-white container col-10 position-absolute"; 
      document.getElementsByClassName("CityInfo")[0].className = "CityInfo d-none"
      menuOpen = true;
    } else {
      menuBtn.classList.remove('open');
      MyNav.setAttribute("class","nav navbar-nav ml-5 MyNavigation")
      document.getElementsByClassName("my-nav-wrapper-active")[0].className = "my-nav-wrapper d-flex d-md-none bg-white container col-10 position-absolute"; 
      setTimeout(() => {
        if (document.getElementsByClassName("my-nav-wrapper").length > 0) {
          document.getElementsByClassName("my-nav-wrapper")[0].className = "my-nav-wrapper bg-white container col-10 position-absolute d-none"; 
        }
      },1000)
      document.getElementsByClassName("CityInfo")[0].className = "nav navbar-nav CityInfo d-flex"
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
        elem.className = "col-3 bg-white My-news-wrapper";
        let elem2 = document.createElement("span");
        elem2.innerHTML = DateArray[k];
        let elem3 = document.createElement("div");
        elem3.className = "font-weight-bold mb-5 mt-3";
        elem3.innerHTML = NewsArray[k];
        let elem4 = document.createElement("button");
        elem4.className = "btn btn-outline-danger col-xs-btn-xs btn-lg My-btn-more-custom";
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
});
 