(function() {
  var navCon = document.querySelector(".header--menu");
  var hamburger = {};
  var menu = {};
  var sticky = 75;

  function setupSticky() {
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {
      if (!hamburger.nav.classList.contains("expanded")) {
        myFunction();
      }
    };

    // Get the header
    var toggleWrap = document.querySelector(".nav-toggle-wrap");

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
      if (window.pageYOffset > sticky) {
        navCon.classList.add("sticky");
      } else {
        navCon.classList.remove("sticky");
      }
    }

    addMenuListeners();
  }

  function prepNavItems() {
    menu.menuItemsWithChildren = document.querySelectorAll(
      ".menu-item-has-children"
    );
    menu.menuLinks = document.querySelectorAll(".menu-item > a");

    for (var i = 0; i < menu.menuLinks.length; ++i) {
      var wrapper = document.createElement("span");
      wrapper.setAttribute("class", "text");
      menu.menuLinks[i].parentNode.insertBefore(wrapper, menu.menuLinks[i]);
      wrapper.appendChild(menu.menuLinks[i]);
    }

    for (var i = 0; i < menu.menuItemsWithChildren.length; ++i) {
      var wrapper = document.createElement("span");
      wrapper.setAttribute("class", "arrow");
      menu.menuItemsWithChildren[i].appendChild(
        wrapper,
        menu.menuItemsWithChildren[i]
      );
    }

    menu.arrows = document.querySelectorAll("span.arrow");

    setupSticky();
  }

  function addElement() {
    // create a new div element
    var toggleWrap = document.createElement("div");
    toggleWrap.setAttribute("class", "nav-toggle-wrap");

    var toggle = document.createElement("div");
    toggle.setAttribute("class", "nav-toggle");

    // and give it internal content
    var line = document.createElement("div");
    line.setAttribute("class", "line");
    var line2 = document.createElement("div");
    line2.setAttribute("class", "line");
    var line3 = document.createElement("div");
    line3.setAttribute("class", "line");
    var labelSpan = document.createElement("span");
    labelSpan.setAttribute("class", "sr-only");
    var label = document.createTextNode("Menu");

    // add the lines to the newly created div
    toggle.appendChild(line);
    toggle.appendChild(line2);
    toggle.appendChild(line3);
    labelSpan.appendChild(label);
    toggle.appendChild(labelSpan);
    toggleWrap.appendChild(toggle);

    // add the newly created element and its content into the DOM
    navCon.insertBefore(
      toggleWrap,
      document.querySelector(".header--menu > .menu-top-nav-container")
    );

    // lookup these elements and add to hamburger
    hamburger.navToggle = document.querySelector(".nav-toggle");
    hamburger.nav = document.querySelector(
      ".header--menu > .menu-top-nav-container"
    );

    hamburger.doToggle = function(e) {
      e.preventDefault();
      this.navToggle.classList.toggle("expanded");
      this.nav.classList.toggle("expanded");
      if (window.pageYOffset > sticky) {
        navCon.classList.toggle("sticky");
      }
    };

    prepNavItems();
  }

  function addMenuListeners() {
    hamburger.navToggle.addEventListener("click", function(e) {
      hamburger.doToggle(e);
    });

    for (var x = 0; x < menu.arrows.length; x++) {
      menu.arrows[x].addEventListener("click", function(e) {
        e.preventDefault();
        this.parentNode.classList.toggle("expanded");
      });
    }
  }

  document.body.onload = addElement;
})();
