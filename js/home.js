document.addEventListener("DOMContentLoaded", function (event) {
    var selectedWorkPicker = 0;
    var pickerBtn0 = document.getElementById("wp-0");
    var pickerBtn1 = document.getElementById("wp-1");
    var pickerBtn2 = document.getElementById("wp-2");
    var pickerBtn3 = document.getElementById("wp-3");
    
    var content0 = document.getElementById("content-seo");
    var content1 = document.getElementById("content-seo-1");
    var content2 = document.getElementById("content-seo-2");
    var content3 = document.getElementById("content-seo-3");

    function toggleTo(n) {
        content0.style.display = "none";
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "none";

        pickerBtn0.classList.remove("selected");
        pickerBtn1.classList.remove("selected");
        pickerBtn2.classList.remove("selected");
        pickerBtn3.classList.remove("selected");

        n = n >= 0 && n<=3 ? n : 0;
        switch(n)
        {
            case 3:
                pickerBtn3.classList.add("selected");
                content3.style.display = "block";
                break;
            case 2:
                pickerBtn2.classList.add("selected");
                content2.style.display = "block";
                break;
            case 1:
                pickerBtn1.classList.add("selected");
                content1.style.display = "block";
                break;
            case 0:
            default:
                pickerBtn0.classList.add("selected");
                content0.style.display = "block";
                break;
        }
    }

    pickerBtn0.onclick = function(evt) {
        evt.preventDefault(); 
        selectedWorkPicker = 0;
        toggleTo(selectedWorkPicker);
        return false;
    }

    pickerBtn1.onclick = function(evt) {
        evt.preventDefault(); 
        selectedWorkPicker = 1;
        toggleTo(selectedWorkPicker);
        return false;
    }

    pickerBtn2.onclick = function(evt) {
        evt.preventDefault(); 
        selectedWorkPicker = 2;
        toggleTo(selectedWorkPicker);
        return false;
    }

    pickerBtn3.onclick = function(evt) {
        evt.preventDefault(); 
        selectedWorkPicker = 3;
        toggleTo(selectedWorkPicker);
        return false;
    }

    toggleTo(selectedWorkPicker);
});