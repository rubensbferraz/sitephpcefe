//var campo_qualquer = document.querySelector("input[name='nomeCampo']");
var idtipoObra = document.querySelector("#idtipoObra");
var mostraNaoMed = document.querySelector("#mostraNaoMed");//div Pai
var naoMed = document.querySelector("#naoMed"); //div filhas
var mediunica = document.querySelector("#mediunica");
var um = 1;
var dois = 2;

//objetos

//funcões


function Mostrar(event){
    event.preventDefault();
    var mostrando = this.value;
    if(mostrando == dois){
        //alert(mostrando);
        $('#mostraNaoMed').children(mediunica).hide();
        $('#mostraNaoMed').children(mediunica).show();
    } else {
        //alert('Não entrei aqui');
        $('#mostraNaoMed').children(naoMed).hide();
        $('#mostraNaoMed').children(naoMed).show();
    };
};

idtipoObra.addEventListener('change', Mostrar);

