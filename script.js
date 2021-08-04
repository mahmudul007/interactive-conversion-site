function Validate() {
    var e = document.getElementById("View");
    var optionSelIndex = e.options[e.selectedIndex].value;
    var optionSelectedText = e.options[e.selectedIndex].text;
    if (optionSelIndex == 0) {
        alert("Please select a Conversion Option");
    }

}