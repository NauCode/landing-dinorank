var planDisplayMode = "block";
document.addEventListener("DOMContentLoaded", function (event) {
    var planPickerSelected = 0;
    var planPickerBtn0 = document.getElementsByClassName("picker-btn")[0];
    var planPickerBtn1 = document.getElementsByClassName("picker-btn")[1];
    
    var planPickerMonthly = document.getElementById("monthly");
    var planPickerYearly = document.getElementById("yearly");

    function toggleTo(n) {
        planPickerMonthly.style.display = "none";
        planPickerYearly.style.display = "none";

        planPickerBtn0.classList.remove("selected");
        planPickerBtn1.classList.remove("selected");

        n = n >= 0 && n<=1 ? n : 0;
        switch(n)
        {
            case 1:
                planPickerBtn1.classList.add("selected");
                planPickerYearly.style.display = planDisplayMode;
                break;
            case 0:
            default:
                planPickerBtn0.classList.add("selected");
                planPickerMonthly.style.display = planDisplayMode;
                break;
        }
    }

    planPickerBtn0.onclick = function(evt) {
        evt.preventDefault(); 
        planPickerSelected = 0;
        toggleTo(planPickerSelected);
        return false;
    }

    planPickerBtn1.onclick = function(evt) {
        evt.preventDefault(); 
        planPickerSelected = 1;
        toggleTo(planPickerSelected);
        return false;
    }

    toggleTo(planPickerSelected);
});