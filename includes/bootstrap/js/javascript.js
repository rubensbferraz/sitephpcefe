//var campo_qualquer = document.querySelector("input[name='nomeCampo']");
var idtipoObra = document.querySelector("#idtipoobra");
var mostraNaoMed = document.querySelector("#mostraNaoMed");//div Pai
var mostrarMediunica = document.querySelector("#mostrarMediunica");
var naoMed = document.querySelector("#naoMed"); //div filhas
var mediunica =document.querySelector(".mediunica");

var palesta = document.querySelector("#palestra");
//objetos

//funcões
function MostrarNaoMed(){
        var mostrar = this.value;
    if(mostrar == 1){
        $('#mostraNaoMed').children(naoMed).show(); 

    }else{
        $('#mostraNaoMed').children(naoMed).hide();
    };
};

function MostrarMed(){
    var mostrarMed = this.value;
    if(mostrarMed == 2){
        $('#mostrarMediunica').children(mediunica).show();
    }else{
        $('#mostrarMediunica').children(mediunica).hide();
    };
}

idtipoObra.addEventListener('change', MostrarNaoMed);
idtipoObra.addEventListener('change', MostrarMed);


