function add(value){
    document.getElementById("screen").value +=value;
}
function result(){
    let x = document.getElementById("screen").value;

    if(x == ""){
        alert("Please enter number");
        return 0;
    }

    try{
        document.getElementById("screen").value = eval(x);
    }catch(error){
        alert("Error in Calculation");
        document.getElementById("screen").value="";

    }

}

function clearScreen(){
    document.getElementById("screen").value="";
}