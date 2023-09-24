const sidebar = document.querySelector('.side-bar'),
mainContent = document.querySelector('.main-content'),
header = document.querySelector('.main-header'),
menuBar = document.querySelector('.menu-bar'),
linkText = document.querySelectorAll('.side-bar ul li a span'),
logoTitle = document.querySelector('.side-bar-title'),
switchText = document.querySelector('.switch p'),
switchModeToggle = document.querySelector('.switch .mode-toggle .switch-box');

let isSidebarHidden = false;

menuBar.onclick = () => {
  // sidebar.classList.toggle('show');

  if(isSidebarHidden === false){

    sidebar.style.width = '5rem';
    mainContent.style.width = 'calc(100% - 5rem)';
    header.style.width = 'calc(100% - 5rem)';
    header.style.left = '5rem';
    mainContent.style.marginLeft = '5rem';

    linkText.forEach((link) => {
      link.style.display = 'none';
    });

    logoTitle.textContent = "MT";
    isSidebarHidden = true;

  } else if(isSidebarHidden === true) {
    sidebar.style.width = '15rem';
    mainContent.style.width = 'calc(100% - 15rem)';
    header.style.width = 'calc(100% - 15rem)';
    header.style.left = '15rem';
    mainContent.style.marginLeft = '15rem';

    linkText.forEach((link) => {
      link.style.display = 'initial';
    });

    logoTitle.textContent = "moTech";
    isSidebarHidden = false;
  }

}

let mediumScreen = window.matchMedia("(max-width: 1200px)");
// let mediumScreenGreater = window.matchMedia("(min-width: 768px)");
function windowResize(){
  if(mediumScreen.matches){
    menuBar.click();
    isSidebarHidden = true;
  } else {
    menuBar.click();
    isSidebarHidden = false;
  }
}

mediumScreen.addEventListener('change', windowResize);
