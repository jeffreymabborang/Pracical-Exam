var test = document.getElementsByClassName('test')[0].innerText;
var load = document.getElementsByClassName('load');
var string = "";
var newString = "";
for (let index = 0; index < test.length; index++) {
    var character = test.charAt(index);
    if(character==character.toUpperCase())
    {
        newString += " " + string;
        if (index != 0)
            string = character.toLowerCase();
        else
            string = character.toUpperCase();
    }
    else
    {
        string += character;
    }
}
load[0].innerText = newString;