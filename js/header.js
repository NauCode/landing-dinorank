var isMobileMenuOpen = true;

document.addEventListener("DOMContentLoaded", function (event) {
    var headerDiv = document.getElementsByClassName("drl-header")[0];
    var sticky = headerDiv.offsetTop;
    var mobileMenuBtn = document.getElementsByClassName("drl-mobile-menu-btn")[0];
    var mobileMenuContainer = document.getElementsByClassName("mobile-menu")[0];
    var submenu1 = document.getElementById("submm-1");
    var submenu2 = document.getElementById("submm-2");
    var submenu3 = document.getElementById("submm-3");
    var submenu4 = document.getElementById("submm-4");

    var submenu1Btn = document.getElementById("btnSubmm1");
    var submenu2Btn = document.getElementById("btnSubmm2");
    var submenu3Btn = document.getElementById("btnSubmm3");
    var submenu4Btn = document.getElementById("btnSubmm4");

    var submenusStatus = {
        "submenu1": false,
        "submenu2": false,
        "submenu3": false,
        "submenu4": false
    };

    function scrollerFunction() {
        if(window.pageYOffset > sticky) {
            headerDiv.classList.add("fixed");
        }else{
            headerDiv.classList.remove("fixed");
        }
    }
    
    window.onscroll = function() {scrollerFunction();}

    function toggleMobileMenuStatus()
    {
        if(isMobileMenuOpen)
        {
            mobileMenuContainer.classList.remove("show");
            isMobileMenuOpen = false;
        }else{
            mobileMenuContainer.classList.add("show");
            isMobileMenuOpen = true;
        }
    }

    function disableAllSubmenus()
    {
        submenu1.classList.remove("open");
        submenu2.classList.remove("open");
        submenu3.classList.remove("open");
        submenu4.classList.remove("open");
        submenusStatus = {
            "submenu1": false,
            "submenu2": false,
            "submenu3": false,
            "submenu4": false
        };
    }

    function toggleSubmenu(mm)
    {
        disableAllSubmenus();
        switch(mm)
        {
            case "submenu1":
                submenu1.classList.add("open");
                submenusStatus["submenu1"] = true;
                break;
            case "submenu2":
                submenu2.classList.add("open");
                submenusStatus["submenu2"] = true;
                break;
            case "submenu3":
                submenu3.classList.add("open");
                submenusStatus["submenu3"] = true;
                break;
            case "submenu4":
                submenu4.classList.add("open");
                submenusStatus["submenu4"] = true;
                break;
            default:
                break;
        }
    }

    mobileMenuBtn.onclick = function(){
        toggleMobileMenuStatus();
    }

    submenu1Btn.onclick = function() {
        toggleSubmenu("submenu1");
    }

    submenu2Btn.onclick = function() {
        toggleSubmenu("submenu2");
    }

    submenu3Btn.onclick = function() {
        toggleSubmenu("submenu3");
    }

    submenu4Btn.onclick = function() {
        toggleSubmenu("submenu4");
    }

    toggleMobileMenuStatus();
});