//Select drop-downs for forms


function getAgeGroups() { //holds array for age groups
    var retVal = ["Under 18", "18-29", "30-44", "45-59", "60-74", "75-89", "90-104"]; //created a property data type as an array
    return retVal; //returns the array values
}

function getGenderId() {
    var retVal = ["female", "male", "non-binary"];
    return retVal;
}

function getRaceType() {
    var retVal = ["long course", "olympic", "10K", "half marathon", "sprint", "try-a-tri", "spash-n-dash(ages 15 and under)"];
    return retVal;
}

function getRoleType() {
    var retVal = ["athlete", "volunteer"];
    return retVal;
}


function initPage() { //create function for the event handler
    var mySelect = document.getElementById("getAge"); //selects the id element "getAge"
    var myAgeGroups = "getAgeGroups()"; //calls function that returns the array of age groups

    for (i = 0; i < myAgeGroups.options.length;
    i++) { //goes though each array item
    var newOpt = document.createElement("option"); //creates new element <option> for the select tag
    newOpt.value = myAgeGroups[i]; //set properties for options
    newOpt.innerHTML = myAgeGroups[i];//displays the options
    mySelect.appendChild(newOpt); //adds new options to the array members (<option> is a child of the <select>)
    }
}
