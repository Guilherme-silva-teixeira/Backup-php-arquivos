function cauculateData()
{
    try
    {
        let box3 = document.getElementById("box03");
        let initialDate = document.getElementById("initialDate");
        let finalDate = document.getElementById("finalDate");
        let numberForinitialDate = initialDate.value;
        let numberForFinalDate = finalDate.value;
        var selectedFirstData = new Date(numberForinitialDate);
        var selectedSecondData = new Date(numberForFinalDate);
        var diference = selectedFirstData - selectedSecondData;
        var quantidade = Math.ceil(diference/(1000 * 60 * 60 * 24));
        box3.innerHTML = "<h3>A quantidade de dias é de "+quantidade+' dias</h3>'
    }
    catch (error)
    {

    }
}
