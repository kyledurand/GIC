document.addEventListener("DOMContentLoaded", () => {
  const constants = {
    html: document.querySelector('html'),
    menu: document.querySelector('.menu--condensed'),
    menuTrigger: document.querySelector('[data=menu-trigger]'),
    menuDismiss: document.querySelector('[data=menu-dismiss]'),
    mediumBreakpoint: 720,
    menuIsOpen: 'menu-is-visible',
  };

  constants.menuTrigger.onclick = () => {
    menuOpen();
  }

  constants.menuDismiss.onclick = () => {
    menuClose();
  }

  let menuOpen = () => {
    classie.addClass(constants.html, constants.menuIsOpen);
    classie.addClass(constants.menu, constants.menuIsOpen);
  }

  let menuClose = () => {
    classie.removeClass(constants.html, constants.menuIsOpen);
    classie.removeClass(constants.menu, constants.menuIsOpen);
  }
});
