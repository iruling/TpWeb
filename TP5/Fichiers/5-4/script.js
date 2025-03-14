



function Confirmation(){

    const response = confirm("Voulez-vous vraiment changer de");
    if (response) {
        console.log("L'utilisateur a confirmé.");
        return true;
    } else {
        console.log("L'utilisateur a annulé.");
        return false;

    }
};




document.addEventListener("keydown", (event) => {
    switch(event.key){
        
        case "r":
        case "o":
            if (Confirmation() == false) break;
                console.log("touche r");
                box.style.backgroundColor = "red";
                break; 
        case "o": 
            if (Confirmation() == false) break;
            console.log("touche o");
            box.style.backgroundColor = "orange";
            break; 
        case "v": 
            if (Confirmation() == false) break;
            console.log("touche v");
            box.style.backgroundColor = "green";
            break; 
        case "a": 
            if (Confirmation() == false) break;
            console.log("touche a");
            box.style.backgroundColor = "blanchedalmond";
            break; 
        case "z":
            if (Confirmation() == false) break;
            console.log("touche z");
            box.style.backgroundColor = "#3F4139";
            break; 
        default:
            break;
    };
});